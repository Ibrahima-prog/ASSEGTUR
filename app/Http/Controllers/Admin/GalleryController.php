<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\admin\gallery;


use DB;
use Redirect;
use Storage;
use Image;
use File;


class GalleryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$images = gallery::all();

    	return view('admin/gallery/yonet',compact('images'));
    }

    public function ekle()
    {
    	return view('admin/gallery/ekle');
    }

    public function save(Request $request)
    {


    	$result = 0;

		if ($request->images) {

		   foreach($request->file('images') as $image){
	                $imagename = $image->getClientOriginalName();
	                $location = public_path('galleryFotograflari/' . $imagename);

	                Image::make($image)->resize(800, 600)->save($location);

	                $newimage = new gallery;

                  $newimage->entitle = $request->entitle;
	                $newimage->trtitle = $request->trtitle;
	                $newimage->image = $imagename;

	               $result = $newimage->save();
	            }  
			}
	              
			if ( $result) {
				return redirect('admin/gallery/yonet')->with('success','Fotoğraf(lar)ı başarıyla eklendi');
             }else{
                  return redirect('admin/gallery/yonet')->with('error', "Oups, Fotoğraf(lar)ı eklenemedi");
        }

    }

  public function deleteapicture($id)
    {
       $image = gallery::where('id', $id)->first();  
       $imagename = $image->image;
       $location = public_path('galleryFotograflari/' . $imagename);

       File::delete($location);

       gallery::where('id',$id)->delete();
       return redirect('admin/gallery/yonet')->with('success','Fotoğraf(lar)ı başarıyla silindi');
    }

   public function deleteallpicture()
   {

   			$images = gallery::all();
  
   			 foreach($images as $image){
	           $imagename = $image->image;
			       $location = public_path('galleryFotograflari/' . $imagename);

			       File::delete($location);

			       gallery::where('id',$image->id)->delete();
	            }  

       return redirect('admin/gallery/yonet')->with('success','Fotoğraf(lar)ı başarıyla silindi');

			
   }
}
