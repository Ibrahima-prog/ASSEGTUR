<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\activity;

use DB;
use Validator;
use Redirect;
use Storage;
use Image;
use File;

class EtkinlikController extends Controller
{ 
  public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {   

        return view('admin.etkinlik.etkinlik');
    }
    
    public function yonet()
    {   
        $posts = DB::table('activities')->orderBy('created_at','DESC')->get();
        return view('admin.etkinlik.yonet', compact('posts'));
    }
    
    public function ekle()
    {    
        return view('admin.etkinlik.ekle');
    }

    public function save(Request $request)
    {
       
        $this->validate($request,[
            'entitle'=>'required',       
            'trtitle'=>'required',       
            'enbody' => 'required',
            'trbody' => 'required',
            'slug' =>'required',
            'images' =>'required',
            'frsummary' =>'required',
            'trsummary' =>'required',
            'ensummary' =>'required',
            'trsummary' =>'required',
            'ensummary' =>'required',
            'frbody' => 'required',
            'frtitle' => 'required'
            ]);
            $post = new activity;

            if ($request->hasFile('image')) {
        
                $image = $request->file('image');
                $imagename = time() .'.' . $image->getClientOriginalExtension();
                $location = public_path('etkinlikFotograflari/' . $imagename);
           
                Image::make($image)->resize(800,600)->save($location);
    //dd($imagename);
                $post->image = $imagename;
            }

        if ($request->has('images'))
        {   
            //Handle File Upload
    //dd($request->images);
            $promotion = [];
            foreach ($request->file('images') as $key => $file)
            {
                // Get FileName
                $filenameWithExt = $file->getClientOriginalName();
                //Get just filename
                $filename = pathinfo( $filenameWithExt, PATHINFO_FILENAME);
                //Get just extension
                $extension = $file->getClientOriginalExtension();
                //Filename to Store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                //Upload Image
              //  dd($file->getClientOriginalName());
              $image1=$request->file('images');
            //  dd($image1[$key]);
               $imagename1=$file->getClientOriginalName();
              
                $location1 = public_path('today/' . $filename.'_'.time().'.'.$extension);
// dd($location);
               Image::make($image1[$key])->resize(800,600)->save($location1);

             //   $path = $file->storeAs('public/today',$fileNameToStore);
                
                
                array_push($promotion, $fileNameToStore);
            }
    
            $fileNameToStore = serialize($promotion);
        }
        else
        {
            $fileNameToStore='noimage.jpg';
        }
    
    
    if (count($promotion)) {
       
            $implodedPromotion = implode(' , ', $promotion);
           
            $post->images= $implodedPromotion;
            
         


            $post->entitle = $request->entitle;
            $post->frtitle = $request->frtitle;
            $post->trtitle = $request->trtitle;
            $post->enbody = $request->enbody;
            $post->frbody = $request->frbody;
            $post->trbody = $request->trbody;
            $post->frsummary = $request->frsummary;
            $post->trsummary = $request->trsummary;
            $post->ensummary = $request->ensummary;
            $post->trsummary = $request->trsummary;
            $post->ensummary = $request->ensummary;
            $post->slug = $request->slug;
         

          
          $post->save();

            
    
            return redirect('admin/etkinlik/yonet')->with('success', 'Image Inserted');
        }
    
        return redirect('admin/etkinlik/yonet')->with('error', 'Something went wrong.');

       
        
          

           
       

          



            
    }

    public function delete($id)
    {  

       $post = activity::where('id', $id)->first();  
       $imagename = $post->image;
       $location = public_path('etkinlikFotograflari/' . $imagename);

       File::delete($location);

       activity::where('id',$id)->delete();
       return redirect()->back();
    }

    public function duzenle($id)
    {   
          $update = activity::where('id', $id)->first();
          return view('admin.etkinlik.edit', compact('id', 'update'));
        
    }

    public function gecti($id)
    {
         $update = activity::where('id', $id)->first();  
       
         DB::table('activities')->where('id', $update->id)->update([ 
                     'status' => 1,
                  ]);

             return redirect('admin/etkinlik/yonet')->with('success','Değişiklikleriniz başarıyla kaydedildi');


    }


    public function duzenleYap(Request $request, $id)
    {
        
          $this->validate($request,[
            'entitle'=>'required',       
            'trtitle'=>'required',       
            'enbody' => 'required',
            'trbody' => 'required',
            'slug' =>'required',
            
            'frsummary' =>'required',
            'ensummary' =>'required',
            'trsummary' =>'required',
            'frbody' => 'required',
            'frtitle' => 'required'
            ]);


         $update = activity::where('id', $id)->first();  
        
       //   dd($request->images);
        if ($request->hasFile('image') && $update) {
        
            $image =    $request->file('image');

            if ($update->image == null) {
               $imagename = time() .'.' . $image->getClientOriginalExtension();
            }else{
                $oldimagename = $update->image;
                $oldlocation = public_path('etkinlikFotograflari/' . $oldimagename);
                
                File::delete($oldlocation);

                $image =    $request->file('image');
                $imagename = time() .'.' . $image->getClientOriginalExtension();
                $location = public_path('etkinlikFotograflari/' . $imagename);

                Image::make($image)->save($location);
            }
           
          
            if ($request->has('images')&& $update)
            
            {  // dd(explode(' , ',$update->images) );
                foreach (explode(' , ',$update->images) as  $oldfile)
                {
                    
                    // Get FileName
                 //   $oldfilenameWithExt = $oldfile->getClientOriginalName();
                    //Get just filename
                   // $oldfilename = pathinfo( $oldfilenameWithExt, PATHINFO_FILENAME);
                    //Get just extension
                    //$oldextension = $oldfile->getClientOriginalExtension();
                    //Filename to Store
                   // $oldfile = $oldfilename.'_'.time().'.'.$oldextension;
                    //Upload Image
                  //  dd($file->getClientOriginalName());
                 // $oldimage1=$oldfile;
                //  dd($image1[$key]);
                   $oldimagename1=$oldfile;
                   
                  
                    $oldlocation1 = public_path('today/' . $oldimagename1);
   
                    // dd($location);
                         
                      File::delete($oldlocation1);
                 //   $path = $file->storeAs('public/today',$fileNameToStore);
                    
                   
                }
     
                /////////////////////////////////////////////////////////////////////////////////////////
                //Handle File Upload
       
                //dd($request->images);
                $promotion = [];
                foreach ($request->file('images') as $key => $file)
                {
                    // Get FileName
                    $filenameWithExt = $file->getClientOriginalName();
                    //Get just filename
                    $filename = pathinfo( $filenameWithExt, PATHINFO_FILENAME);
                    //Get just extension
                    $extension = $file->getClientOriginalExtension();
                    //Filename to Store
                    $fileNameToStore = $filename.'_'.time().'.'.$extension;
                    //Upload Image
                  //  dd($file->getClientOriginalName());
                  $image1=$request->file('images');
                //  dd($image1[$key]);
                   $imagename1=$file->getClientOriginalName();
                  
                    $location1 = public_path('today/' . $filename.'_'.time().'.'.$extension);
    
                    // dd($location);
                   Image::make($image1[$key])->resize(800,600)->save($location1);
    
                 //   $path = $file->storeAs('public/today',$fileNameToStore);
                    
                    
                    array_push($promotion, $fileNameToStore);
                }
        
                $fileNameToStore = serialize($promotion);
                /////////////////////////////////////////////////////////////////////////////////////////////////////
                if (count($promotion)) {
       
                    $implodedPromotion = implode(' , ', $promotion);
                   
                    $request->images=$implodedPromotion;
                    //dd($request->images);
                   
                  DB::table('activities')->where('id', $update->id)->update([ 
                    'entitle' => $request->entitle,
                    
                    'trtitle' => $request->trtitle,
                    'enbody' => $request->enbody,
                     
                    'trbody' => $request->trbody, 
                    'image' => $imagename,
                    'slug' =>$request->slug,
                    'images' =>$request->images,
                    'frsummary' =>$request->frsummary,
                    'trsummary' =>$request->trsummary,
                    'ensummary' =>$request->ensummary,
                    'frtitle' => $request->frtitle,
                    'frbody' => $request->frbody
                 ]);
    
            return redirect('admin/etkinlik/yonet')->with('success','Değişiklikleriniz başarıyla kaydedildi');
                }
            }
            else
            {
                 
                DB::table('activities')->where('id', $update->id)->update([ 
                    'entitle' => $request->entitle,
                    
                    'trtitle' => $request->trtitle,
                    'enbody' => $request->enbody,
                     
                    'trbody' => $request->trbody, 
                    'image' => $imagename,
                    'slug' =>$request->slug,
                   
                    'frsummary' =>$request->frsummary,
                    'ensummary' =>$request->ensummary,
                    'trsummary' =>$request->trsummary,
                    'frtitle' => $request->frtitle,
                    'frbody' => $request->frbody
                 ]);
                 return redirect('admin/etkinlik/yonet')->with('success','Değişiklikleriniz başarıyla kaydedildi');
            }







 
        
        
            //return redirect('admin/etkinlik/yonet')->with('error', 'Something went wrong.');
    













            
          
        }elseif ($update) {
           if ($request->has('images')&& $update)
            
            {  // dd(explode(' , ',$update->images) );
                foreach (explode(' , ',$update->images) as  $oldfile)
                {
                    
                    // Get FileName
                 //   $oldfilenameWithExt = $oldfile->getClientOriginalName();
                    //Get just filename
                   // $oldfilename = pathinfo( $oldfilenameWithExt, PATHINFO_FILENAME);
                    //Get just extension
                    //$oldextension = $oldfile->getClientOriginalExtension();
                    //Filename to Store
                   // $oldfile = $oldfilename.'_'.time().'.'.$oldextension;
                    //Upload Image
                  //  dd($file->getClientOriginalName());
                 // $oldimage1=$oldfile;
                //  dd($image1[$key]);
                   $oldimagename1=$oldfile;
                   
                  
                    $oldlocation1 = public_path('today/' . $oldimagename1);
   
                    // dd($location);
                         
                      File::delete($oldlocation1);
                 //   $path = $file->storeAs('public/today',$fileNameToStore);
                    
                   
                }
     
                /////////////////////////////////////////////////////////////////////////////////////////
                //Handle File Upload
       
                //dd($request->images);
                $promotion = [];
                foreach ($request->file('images') as $key => $file)
                {
                    // Get FileName
                    $filenameWithExt = $file->getClientOriginalName();
                    //Get just filename
                    $filename = pathinfo( $filenameWithExt, PATHINFO_FILENAME);
                    //Get just extension
                    $extension = $file->getClientOriginalExtension();
                    //Filename to Store
                    $fileNameToStore = $filename.'_'.time().'.'.$extension;
                    //Upload Image
                  //  dd($file->getClientOriginalName());
                  $image1=$request->file('images');
                //  dd($image1[$key]);
                   $imagename1=$file->getClientOriginalName();
                  
                    $location1 = public_path('today/' . $filename.'_'.time().'.'.$extension);
    
                    // dd($location);
                   Image::make($image1[$key])->resize(800,600)->save($location1);
    
                 //   $path = $file->storeAs('public/today',$fileNameToStore);
                    
                    
                    array_push($promotion, $fileNameToStore);
                }
        
                $fileNameToStore = serialize($promotion);
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                if (count($promotion)) {
       
                    $implodedPromotion = implode(' , ', $promotion);
                   
                    $request->images=$implodedPromotion;
                    //dd($request->images);
                   
                  DB::table('activities')->where('id', $update->id)->update([ 
                    'entitle' => $request->entitle,
                    
                    'trtitle' => $request->trtitle,
                    'enbody' => $request->enbody,
                     
                    'trbody' => $request->trbody, 
                    
                    'slug' =>$request->slug,
                    'images' =>$request->images,
                    'frsummary' =>$request->frsummary,
                    'trsummary' =>$request->trsummary,
                    'ensummary' =>$request->ensummary,
                    'frtitle' => $request->frtitle,
                    'frbody' => $request->frbody
                 ]);
                  }
    
                return redirect('admin/etkinlik/yonet')->with('success','Değişiklikleriniz başarıyla kaydedildi');
            }
            else
            {
                
                $fileNameToStore='noimage.jpg';
                DB::table('activities')->where('id', $update->id)->update([ 
                    'entitle' => $request->entitle,
                    
                    'trtitle' => $request->trtitle,
                    'enbody' => $request->enbody,
                     
                    'trbody' => $request->trbody, 
                    
                    'slug' =>$request->slug,
                    
                    'frsummary' =>$request->frsummary,
                    'trsummary' =>$request->trsummary,
                    'ensummary' =>$request->ensummary,
                    'frtitle' => $request->frtitle,
                    'frbody' => $request->frbody
                 ]);
                 return redirect('admin/etkinlik/yonet')->with('success','Değişiklikleriniz başarıyla kaydedildi');
            }







 
           
        }else{
            return redirect('admin/etkinlik/yonet')->with('error','Değişiklikleriniz kaydedilemedi');
           
        }

    }

}
