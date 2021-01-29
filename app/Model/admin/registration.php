<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    protected $fillable = ['firstname', 'email','gender','address','level','institution','department','phone','status'];
}
