<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookDetail extends Model
{
    use HasFactory;
    protected $table = 't_detailbuku';
    protected $primaryKey = "f_id";
    protected $guarded = ['f_id'];
    public $timestamps = false;
}
