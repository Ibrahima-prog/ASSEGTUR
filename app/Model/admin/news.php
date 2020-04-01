<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
