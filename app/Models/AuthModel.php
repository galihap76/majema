<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'tbl_auth';
    protected $primaryKey = 'id_auth';
    protected $fillable = [
        'username',
        'password'
    ];
    public $timestamps = false;
}
