<?php
namespace App\Model\user;
use Illuminate\Database\Eloquent\Model;

class activities_and_gallery extends Model{

    public function getRouteKeyName()
    {
        return 'slug';
       
    } protected $table = 'activities_and_gallery';
}



?>