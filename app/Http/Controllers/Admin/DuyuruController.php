<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\announcement;

use DB;
use Validator;
use Redirect;
use Storage;
use Image;
use File;

class DuyuruController extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {   

        return view('admin.duyuru.duyuru');
    }
    
    public function yonet()
    {   
        $posts = DB::table('announcements')->orderBy('created_at','DESC')->get();
        return view('admin.duyuru.yonet', compact('posts'));
    }
    
    public function ekle()
    {    
        return view('admin.duyuru.ekle');
    }

    public function save(Request $request)
    {
       
        $this->validate($request,[
             'entitle'=>'required',       
             'trtitle'=>'required',       
             'enbody' => 'required',
             'trbody' => 'required',
            ]);

        $post = new announcement;

        if ($request->hasFile('image')) {
        
            $image = $request->file('image');
            $imagename = time() .'.' . $image->getClientOriginalExtension();
            $location = public_path('announcementFotograflari/' . $imagename);
       
            Image::make($image)->resize(800,600)->save($location);

            $post->image = $imagename;
        }

            $post->entitle = $request->entitle;
            $post->trtitle = $request->trtitle;
            $post->enbody = $request->enbody;
            $post->trbody = $request->trbody;
          
           $result = $post->save();

             if ($result){
                    
                      return redirect('admin/duyuru/yonet')->with('success','duyurui başarıyla kaydedildi');
                 }else{
                 return redirect('admin/duyuru/ekle')->with('error', "Oups, duyurui kaydedilemedi");
            }



            
    }

    public function delete($id)
    {  

       $post = announcement::where('id', $id)->first();  
       $imagename = $post->image;
       $location = public_path('announcementFotograflari/' . $imagename);

       File::delete($location);

       announcement::where('id',$id)->delete();
       return redirect()->back();
    }

    public function duzenle($id)
    {   
          $update = announcement::where('id', $id)->first();
          return view('admin.duyuru.edit', compact('id', 'update'));
        
    }

    public function duzenleYap(Request $request, $id)
    {   


        
          $this->validate($request,[
             'entitle'=>'required',       
             'trtitle'=>'required',       
             'enbody' => 'required',
             'trbody' => 'required',
            ]);


         $update = announcement::where('id', $id)->first();  
        

        if ($request->hasFile('image') && $update) {
        
            $image = $request->file('image');

            if ($update->image == null) {
               $imagename = time() .'.' . $image->getClientOriginalExtension();
            }else{

                $oldimagename = $update->image;
                $oldlocation = public_path('announcementFotograflari/' . $oldimagename);
                File::delete($oldlocation);

                $image =    $request->file('image');
                $imagename = time() .'.' . $image->getClientOriginalExtension();
                $location = public_path('announcementFotograflari/' . $imagename);

                Image::make($image)->resize(800,600)->save($location);

            }
           
          
            
            DB::table('announcements')->where('id', $update->id)->update([ 
                     'trtitle' => $request->trtitle,
                     'entitle' => $request->entitle,
                     'trbody' => $request->trbody, 
                     'enbody' => $request->enbody, 
                     'image' => $imagename,
                  ]);

             return redirect('admin/duyuru/yonet')->with('success','Değişiklikleriniz başarıyla kaydedildi');
        }elseif ($update) {
           $result = DB::table('announcements')->where('id', $update->id)->update([
                    'trtitle' => $request->trtitle,
                     'entitle' => $request->entitle,
                     'trbody' => $request->trbody, 
                     'enbody' => $request->enbody,  
                  ]);

            return redirect('admin/duyuru/yonet')->with('success','Değişiklikleriniz başarıyla kaydedildi');
        }else{
            return redirect('admin/duyuru/yonet')->with('error','Değişiklikleriniz kaydedilemedi');
           
        }
 

    }

}
