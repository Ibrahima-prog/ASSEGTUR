<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\community;
use App\Model\admin\aktatmember;

use DB;
use Redirect;
use Storage;
use Image;
use File;

class CommunitiesController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {    
        return view('admin.topluluk.topluluk');
    }
    
    public function yonet()
    {   
        $yonetim = aktatmember::all();  
        return view('admin.topluluk.yonet', compact('yonetim'));
    }
    
    public function ekle()
    {    
        return view('admin.topluluk.ekle');
    }

   public function save(Request $request)
    {
         $this->validate($request,[
            'name'=> 'required',       
            'entitle' => 'required',
            'trtitle' => 'required',
            'image' => 'required',
            ]);

                          

        $person = new aktatmember;

        $image = $request->file('image');
        $imagename =  time() .'.' . $image->getClientOriginalExtension();
        $location = public_path('toplulukFotograflari/' . $imagename);
   
        Image::make($image)->resize(262,262)->save($location);

       
    

        $person->name = $request->name;
        $person->entitle = $request->entitle;
        $person->trtitle = $request->trtitle;
        $person->email = $request->email;
        $person->facebook = $request->facebook;
        $person->twitter = $request->twitter;
        $person->instagram = $request->instagram;
        $person->image = $imagename;

        $result = $person->save();

             if ($result){
                
                  return redirect('admin/topluluk/yonet')->with('success','kayıt başarıyla eklendi');
             }else{
             return redirect('admin/topluluk/ekle')->with('error', "Oups, kayıt eklenemedi");
        }
    }

    public function duzenle($id)
    {   

          $update = aktatmember::where('id', $id)->first();
          return view('admin.topluluk.edit', compact('id', 'update'));
        
    }


        public function duzenleYap(Request $request, $id)
    {   
        
          
       $this->validate($request,[
            'name'=> 'required',       
            'entitle' => 'required',
            'trtitle' => 'required',
            ]);

         $update = aktatmember::where('id', $id)->first();  
        

        if ($request->hasFile('image') && $update) {
        
            $oldimagename = $update->image;
            $oldlocation = public_path('toplulukFotograflari/' . $oldimagename);
            File::delete($oldlocation);

            $image =    $request->file('image');
            $imagename = time() .'.' . $image->getClientOriginalExtension();
            $location = public_path('toplulukFotograflari/' . $imagename);

            Image::make($image)->save($location);

            DB::table('aktatmembers')->where('id', $update->id)->update([ 
                    'name' => $request->name,
                    'entitle' => $request->entitle,
                    'trtitle' => $request->trtitle,
                    'email' => $request->email,
                    'facebook' => $request->facebook,
                    'twitter' => $request->twitter,
                    'instagram' => $request->instagram,
                    'image' => $imagename,
                  ]);

             return redirect('admin/topluluk/yonet')->with('success','Değişiklikleriniz başarıyla kaydedildi');
             }else{
                   $result = DB::table('aktatmembers')->where('id', $update->id)->update([
                    'enname' => $request->name,
                    'entitle' => $request->entitle,
                    'trtitle' => $request->trtitle,
                    'email' => $request->email,
                    'facebook' => $request->facebook,
                    'twitter' => $request->twitter,
                    'instagram' => $request->instagram,
                  ]);

            return redirect('admin/topluluk/yonet')->with('success','Değişiklikleriniz başarıyla kaydedildi');
        }

    }

    public function delete($id)
    {  

       $person = aktatmember::where('id', $id)->first();  
       $imagename = $person->image;
       $location = public_path('toplulukFotograflari/' . $imagename);

       File::delete($location);

       aktatmember::where('id',$id)->delete();
       return  redirect('admin/topluluk/yonet')->with('success','başarıyla silinmiştir');
    }


    public function aktathakkinda()
    {    
        $post = DB::table('communities')->first();
        return view('admin.topluluk.aktatkakkinda', compact('post'));
    }
    




    public function aktathakkindasave(Request $request)
    {
           
        $this->validate($request,[
            'entitle'=>'required',
            'trtitle'=>'required',
            'enabout' => 'required',
            'trabout' => 'required',
            ]);

         

            $exists = DB::table('communities')->first();
            if ($exists) {
                   $result = DB::table('communities')->where('id', $exists->id)->update([
                   'entitle' => $request->entitle,
                   'trtitle' => $request->trtitle,
                   'enabout' => $request->enabout,
                   'trabout' => $request->trabout,
                    ]);
            } else {
                
                $post = new community;
                $post->entitle = $request->entitle;
                $post->trtitle = $request->trtitle;
                $post->enabout = $request->enabout;
                $post->trabout = $request->trabout;
              
                $result = $post->save();
            }


          if ($result){
                    
                return redirect('admin/topluluk')->with('success','Değişiklikleriniz başarıyla kaydedildi');
                 }else{
                 return redirect('admin/topluluk/hakkimizda')->with('error', "Oups, Değişiklikleriniz kaydedilemedi");
            }   
            

    }



}
