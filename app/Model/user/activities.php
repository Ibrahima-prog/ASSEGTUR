<?php
namespace App\Model\user;
use Illuminate\Database\Eloquent\Model;

class activities extends Model{

    public function getRouteKeyName()
    {
        return 'slug';
       
    } 
}



?>