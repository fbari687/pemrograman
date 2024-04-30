<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowBook extends Model
{
    use HasFactory;

    protected $table = 't_peminjaman';
    protected $primaryKey = "f_id";
    protected $guarded = ['f_id'];
    public $timestamps = false;

    public function detailPeminjaman()
    {
        return $this->hasOne(BorrowBookDetail::class, 'f_idpeminjaman', 'f_id');
    }
}
