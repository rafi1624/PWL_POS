<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'm_user'; // Pastikan nama tabel sesuai
    protected $primaryKey = 'user_id'; // Sesuai dengan primary key di tabel Anda

    // Tambahkan field-field ini agar bisa diisi secara otomatis (Mass Assignment)
    protected $fillable = [
        'username',
        'nama',
        'password',
        'level_id',
    ];
}