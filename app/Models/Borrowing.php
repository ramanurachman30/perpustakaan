<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;
    protected $table = 'borrowings';
    protected $fillable = ['nama_pinjaman','nama_buku','tgl_pinjaman','tgl_kembali','ket'];
}
