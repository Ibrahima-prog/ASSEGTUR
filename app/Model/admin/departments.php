<?php
namespace App\Model\admin;
use Illuminate\Database\Eloquent\Model;

class departments extends Model
{

    public function articles()
    {
        return $this->belongsToMany('App\Model\admin\articles','articles_departments')->paginate(5);
    }

    public function faculties()
    {
        return $this->belongsToMany('App\Model\admin\faculties','departments_faculties');
    }

    public function getRouteKeyName()
    {
        return 'slug';
       
    } 
  
}




?>