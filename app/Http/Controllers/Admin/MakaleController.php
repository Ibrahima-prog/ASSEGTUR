<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\articles;
use App\Model\admin\departments;
use DB;
use Validator;
use Redirect;
use Storage;
use Image;
use File;

class MakaleController extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {   

        return view('admin.makale.makale');
    }
    
    public function yonet()
    {   
        $posts = DB::table('articles')->orderBy('created_at','DESC')->get();
        return view('admin.makale.yonet', compact('posts'));
    }
    
    public function ekle()
    {    
        $departments=departments::all();
        return view('admin.makale.ekle',compact('departments'));
        
    }

    public function save(Request $request)
    {
     //  dd($request);
        
    //   return $request->all();
        $this->validate($request,[
            'author'=>'required',
            'entitle'=>'required',     
            'frtitle'=>'required', 
            'frbody'=>'required',   
            'trtitle'=>'required',       
            'enbody' => 'required',
            'trbody' => 'required',
            'departments'=>'required',
            'file'=>'required',
            'language'=>'required',
            ]);

        $post = new articles;

          if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filename = $file->getClientOriginalName();
           
                $location = public_path('makaleBelgeler/');

                $file->move( $location, $filename);

                $post->file = $filename;
            }



      

            $post->author = $request->author;
            $post->entitle = $request->entitle;
            $post->frtitle = $request->frtitle;
            $post->frbody = $request->frbody;
            $post->trtitle = $request->trtitle;
            $post->enbody = $request->enbody;
            $post->trbody = $request->trbody;
            $post->language = $request->language;
            
            
            $result = $post->save();
           
            if ($result){
                $post->departments()->sync($request->departments) ;
                    
                      return redirect('admin/makale/yonet')->with('success','Makale başarıyla kaydedildi');
                 }else{
                 return redirect('admin/makale/ekle')->with('error', "Oups, Makale kaydedilemedi");
            }



            
    }

    public function delete($id)
    {  

       $post = articles::where('id', $id)->first();  
       $imagename = $post->image;
       $filename = $post->file;

       $imagelocation = public_path('makaleFotograflari/' . $imagename);
       $filelocation = public_path('makaleBelgeler/' . $filename);

       File::delete($imagelocation);
       File::delete($filelocation);

       articles::where('id',$id)->delete();
       return redirect()->back();
    }

    public function duzenle($id)
    {   
          $update = articles::with('departments')->where('id', $id)->first();

          $departments=departments::all();
          return view('admin.makale.edit', compact('id', 'update','departments'));
        
    }

    public function duzenleYap(Request $request, $id)
    {
        
          $this->validate($request,[
            'author'=>'required',
            'entitle'=>'required',    
            'frtitle'=>'required', 
            'frbody'=>'required',   
            'trtitle'=>'required',       
            'enbody' => 'required',
            'trbody' => 'required',
            'language'=>'required',
            
            
            ]);


         $update = articles::where('id', $id)->first();  
        
 

     if ($request->hasFile('file')) {

                $oldfilename = $update->file;
                $oldlocation = public_path('makaleBelgeler/' . $oldfilename);
                File::delete($oldlocation);


                $file = $request->file('file');
                $filename = $file->getClientOriginalName();
           
                $location = public_path('makaleBelgeler/');

                $file->move( $location, $filename);

            $result =   DB::table('articles')->where('id', $update->id)->update([ 
                     'file' => $filename,
                  ]);
            }

else{
    $result=null;
}
 

            $resultfinal =  DB::table('articles')->where('id', $update->id)->update([
                'author' => $request->author,
                     'entitle' => $request->entitle,
                     'frtitle' => $request->frtitle,
                     
                     'frbody' => $request->frbody,
                     'trtitle' => $request->trtitle,
                     'enbody' => $request->enbody,
                     'trbody' => $request->trbody,
                     'language' => $request->language,

                  ]);
                  $update->departments()->sync($request->departments) ;



        if ($resultfinal || $result) {
            return redirect('admin/makale/yonet')->with('success','Değişiklikleriniz başarıyla kaydedildi');
        }else{
            return redirect('admin/makale/yonet')->with('error','Değişiklikleriniz kaydedilemedi');
           
        }
        

    }

}
