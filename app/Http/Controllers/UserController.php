<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Menghitung jumlah user dengan level_id = 2
        $jumlahUser = UserModel::where('level_id', 2)->count();
        
        // Mengirimkan variabel ke view dengan nama 'data'
        return view('user', ['data' => $jumlahUser]);
    }
}