<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class lol extends Model
{
    protected $table = 'lol';
        protected $fillable = ['firstname', 'email', 'password'];
}
