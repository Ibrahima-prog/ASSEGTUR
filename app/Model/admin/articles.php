<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    public function departments()
    {
        return $this->belongsToMany('App\Model\admin\departments','articles_departments');
    }

}
?>