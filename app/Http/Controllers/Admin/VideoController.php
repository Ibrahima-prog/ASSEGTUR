<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\admin\video;

class VideoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {	
    	$videos = video::all();
    	return view('admin/video/yonet', compact('videos'));
    }

    public function ekle()
    {
    	return view('admin/video/ekle');
    }

     public function save(Request $request)
    {

    	   $this->validate($request,[
            'entitle'=>'required',
            'trtitle'=>'required',
            'video' => 'required',
            ]);

         $result = 0;


        $video = new video;
        $video->entitle = $request->entitle;
        $video->trtitle = $request->trtitle;
        $video->video = $request->video;
      
        $result = $video->save();
            
     
		if ( $result){
			return redirect('admin/video/yonet')->with('success','Fotoğraf(lar)ı başarıyla eklendi');
         }else{
              return redirect('admin/video/yonet')->with('error', "Oups, Fotoğraf(lar)ı eklenemedi");
  		  }

    }

  public function deleteavideo($id)
    {

    	$video = video::where('id', $id)->first(); 
    	video::where('id',$id)->delete(); 

       return redirect('admin/video/yonet')->with('success','Fotoğraf(lar)ı başarıyla silindi');
    }

   public function deleteallvideo()
   {

   		$videos = video::all();

   		foreach($videos as $image){
			       $image->delete();
	            }  

       return redirect('admin/video/yonet')->with('success','Fotoğraf(lar)ı başarıyla silindi');
   }
}
