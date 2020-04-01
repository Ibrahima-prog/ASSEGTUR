<?php
namespace App\Model\user;
use Illuminate\Database\Eloquent\Model;

class articles_department extends Model{

    public function getRouteKeyName()
    {
        return 'slug';
       
    } 
}



?>