<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Tentukan nama tabel (optional, jika tidak sesuai dengan penamaan default)
    protected $table = 'employees';

    // Tentukan kolom yang dapat diisi secara massal (mass assignment)
    protected $fillable = [
        'name',       // Nama karyawan
        'job',        // Pekerjaan karyawan
        'division',   // Divisi karyawan
        'status',     // Status karyawan (Active/Inactive)
    ];

    // Tentukan kolom yang tidak dapat diubah (optional)
    // protected $guarded = ['id'];

    // Jika Anda ingin menggunakan timestamps (created_at, updated_at)
    public $timestamps = true;
}
