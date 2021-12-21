<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\news;

use DB;
use Validator;
use Redirect;
use Storage;
use Image;
use File;

class NewsController extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {   

        return view('admin.haber.haber');
    }
    
    public function yonet()
    {   
        $posts = DB::table('news')->orderBy('created_at','DESC')->get();
        return view('admin.haber.yonet', compact('posts'));
    }
    
    public function ekle()
    {    
        return view('admin.haber.ekle');
    }

    public function save(Request $request)
    {
       //dd($request);
        $this->validate($request,[
          
            'entitle'=>'required',       
            'trtitle'=>'required',  
            'frtitle'=>'required',     
            
            'slug' => 'required',
            'frbody'=>'required',
            'enbody' => 'required',
            'trbody' => 'required',

            ]);

        $post = new news;

        if ($request->hasFile('image')) {
        
            $image = $request->file('image');
            $imagename = time() .'.' . $image->getClientOriginalExtension();
            $location = public_path('haberFotograflari/' . $imagename);
       
            Image::make($image)->resize(800,600)->save($location);

            $post->image = $imagename;
        }

            $post->entitle = $request->entitle;
            $post->frtitle = $request->frtitle;
            $post->trtitle = $request->trtitle;
            
            $post->slug = $request->slug;
            $post->sDay = $request->sDay;
            $post->sMonth = $request->sMonth;
            $post->sYear = $request->sYear;
            $post->frbody = $request->frbody;
            $post->enbody = $request->enbody;
            $post->trbody = $request->trbody;
            
           $result = $post->save();

             if ($result){
                    
                      return redirect('admin/haber/yonet')->with('success','haberi başarıyla kaydedildi');
                 }else{
                 return redirect('admin/haber/ekle')->with('error', "Oups, haberi kaydedilemedi");
            }



            
    }

    public function delete($id)
    {  

       $post = news::where('id', $id)->first();  
       $imagename = $post->image;
       $location = public_path('haberFotograflari/' . $imagename);

       File::delete($location);

       news::where('id',$id)->delete();
       return redirect()->back();
    }

    public function duzenle($id)
    {   
          $update = news::where('id', $id)->first();
          return view('admin.haber.edit', compact('id', 'update'));
        
    }

    public function duzenleYap(Request $request, $id)
    {
       // dd($request);
          $this->validate($request,[
             'entitle'=>'required',
             'frtitle'=>'required',       
            'trtitle'=>'required',       
            'slug' => 'required',
            
            'enbody' => 'required',
            'frbody' => 'required',
            'trbody' => 'required',

            ]);


         $update = news::where('id', $id)->first();  
        

        if ($request->hasFile('image') && $update) {
        
            $image = $request->file('image');

            if ($update->image == null) {
               $imagename = time() .'.' . $image->getClientOriginalExtension();
            }else{
                 $imagename = $update->image;
            }
           
            

            $location = public_path('haberFotograflari/' . $imagename);
            
            File::delete($location);

           

            Image::make($image)->resize(800,600)->save($location);

            DB::table('news')->where('id', $update->id)->update([ 
                     'entitle' => $request->entitle,
                     'frtitle' => $request->frtitle,
                     'trtitle' => $request->trtitle,
                     'slug' => $request->slug,
                     'sDay' => $request->sDay,
                     'sMonth' => $request->sMonth,
                     'sYear' => $request->sYear,
                     
                     
                     'enbody' => $request->enbody, 
                     'frbody' => $request->frbody,
                     'trbody' => $request->trbody, 
                     'image' => $imagename,
                  ]);

             return redirect('admin/haber/yonet')->with('success','Değişiklikleriniz başarıyla kaydedildi');
        }elseif ($update) {
           $result = DB::table('news')->where('id', $update->id)->update([
                     'entitle' => $request->entitle,
                     'frtitle' => $request->frtitle,
                     'trtitle' => $request->trtitle,
                     'slug' => $request->slug,
                     'sDay' => $request->sDay,
                     'sMonth' => $request->sMonth,
                     'sYear' => $request->sYear,
                     
                     'enbody' => $request->enbody, 
                     'frbody' => $request->frbody,
                     'trbody' => $request->trbody,     
                  ]);

            return redirect('admin/haber/yonet')->with('success','Değişiklikleriniz başarıyla kaydedildi');
        }else{
            return redirect('admin/haber/yonet')->with('error','Değişiklikleriniz kaydedilemedi');
           
        }
        
       
     
       


    }

}
