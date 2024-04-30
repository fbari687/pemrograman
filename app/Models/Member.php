<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use HasFactory;

    protected $table = 't_anggota';
    protected $primaryKey = "f_id";
    protected $guarded = ['f_id'];
    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'f_id';
    }
}
