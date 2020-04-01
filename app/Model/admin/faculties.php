<?php
namespace App\Model\admin;
use Illuminate\Database\Eloquent\Model;

class faculties extends Model
{

    public function departments()
    {
        return $this->belongsToMany('App\Model\admin\departments','departments_faculties')->paginate(5);
    }

    public function getRouteKeyName()
    {
        return 'slug';
       
    } 
  
}




?>