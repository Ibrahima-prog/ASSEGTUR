<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\boardmember;

use DB;
use Redirect;
use Storage;
use Image;
use File;


class YonetimController  extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {    
        return view('admin.yonetim.yonetim');
    }
    
    public function yonet()
    {   
        $yonetim = boardmember::all();  
        return view('admin.yonetim.yonet', compact('yonetim'));
    }
    
    public function ekle()
    {    
        return view('admin.yonetim.ekle');
    }

    public function save(Request $request)
    {
         $this->validate($request,[
            'name'=> 'required',       
            'entitle' => 'required',
            'trtitle' => 'required',
            'frtitle' => 'required',
            'image' => 'required',
            ]);

                          

        $person = new boardmember;

        $image = $request->file('image');
        $imagename =  time() .'.' . $image->getClientOriginalExtension();
        $location = public_path('yonetimFotograflari/' . $imagename);
   
        Image::make($image)->resize(262,262)->save($location);

       
    

        $person->name = $request->name;
        $person->frtitle = $request->frtitle;
        $person->entitle = $request->entitle;
        $person->trtitle = $request->trtitle;
        $person->email = $request->email;
        $person->facebook = $request->facebook;
        $person->twitter = $request->twitter;
        $person->instagram = $request->instagram;
        $person->image = $imagename;

        $result = $person->save();

             if ($result){
                
                  return redirect('admin/yonetim/yonet')->with('success','kayıt başarıyla eklendi');
             }else{
             return redirect('admin/yonetim/ekle')->with('error', "Oups, kayıt eklenemedi");
        }
    }

    public function duzenle($id)
    {   

          $update = boardmember::where('id', $id)->first();
          return view('admin.yonetim.edit', compact('id', 'update'));
        
    }


        public function duzenleYap(Request $request, $id)
    {   
        
          
       $this->validate($request,[
            'name'=>'required',       
            'entitle' => 'required',
            'trtitle' => 'required',
            'frtitle' => 'required',
            ]);

         $update = boardmember::where('id', $id)->first();  
        

        if ($request->hasFile('image') && $update) {
        
            $oldimagename = $update->image;
            $oldlocation = public_path('yonetimFotograflari/' . $oldimagename);
            File::delete($oldlocation);

            $image =    $request->file('image');
            $imagename = time() .'.' . $image->getClientOriginalExtension();
            $location = public_path('yonetimFotograflari/' . $imagename);

            Image::make($image)->resize(262,262)->save($location);

            DB::table('boardmembers')->where('id', $update->id)->update([ 
                    'name' => $request->name,
                    'frtitle' => $request->frtitle,
                    'entitle' => $request->entitle,
                    'trtitle' => $request->trtitle,
                    'email' => $request->email,
                    'facebook' => $request->facebook,
                    'twitter' => $request->twitter,
                    'instagram' => $request->instagram,
                    'image' => $imagename,
                  ]);

             return redirect('admin/yonetim/yonet')->with('success','Değişiklikleriniz başarıyla kaydedildi');
             }else{
                   $result = DB::table('boardmembers')->where('id', $update->id)->update([
                    'name' => $request->name,
                    'frtitle' => $request->frtitle,
                    'entitle' => $request->entitle,
                    'trtitle' => $request->trtitle,
                    'email' => $request->email,
                    'facebook' => $request->facebook,
                    'twitter' => $request->twitter,
                    'instagram' => $request->instagram,
                  ]);

            return redirect('admin/yonetim/yonet')->with('success','Değişiklikleriniz başarıyla kaydedildi');
        }

    }

    public function delete($id)
    {  

       $person = boardmember::where('id', $id)->first();  
       $imagename = $person->image;
       $location = public_path('yonetimFotograflari/' . $imagename);

       File::delete($location);

       boardmember::where('id',$id)->delete();
       return  redirect('admin/yonetim/yonet')->with('success','başarıyla silinmiştir');
    }


}
