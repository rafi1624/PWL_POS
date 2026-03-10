<?php
namespace App\Http\Controllers;

use App\Models\SupplierModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SupplierController extends Controller
{
    public function index() {
        $breadcrumb = (object) ['title' => 'Daftar Supplier', 'list' => ['Home', 'Supplier']];
        $page = (object) ['title' => 'Daftar supplier dalam sistem'];
        $activeMenu = 'supplier';
        return view('supplier.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    public function list(Request $request) {
        $suppliers = SupplierModel::select('supplier_id', 'supplier_kode', 'supplier_nama', 'supplier_alamat');
        return DataTables::of($suppliers)
            ->addIndexColumn()
            ->addColumn('aksi', function ($supplier) {
                return '<a href="'.url('/supplier/' . $supplier->supplier_id).'" class="btn btn-info btn-sm">Detail</a> ' .
                       '<a href="'.url('/supplier/' . $supplier->supplier_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> ' .
                       '<form class="d-inline-block" method="POST" action="'.url('/supplier/'.$supplier->supplier_id).'">'.
                       csrf_field() . method_field('DELETE') . 
                       '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Hapus?\');">Hapus</button></form>';
            })
            ->rawColumns(['aksi'])->make(true);
    }
}