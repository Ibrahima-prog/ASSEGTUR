<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\setting;
use App\Model\admin\slider1;
use App\Model\admin\sliderimage;

use DB;
use Redirect;
use Storage;
use Image;
use File;

class AyarlariController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {   
        $ayarlar = DB::table('settings')->first();
        return view('admin.ayarlari.genelayarlari', compact('ayarlar'));
    }

    public function save(Request $request)
    {
    	
            $exists = DB::table('settings')->first();

            if ($exists) {
                   $result = DB::table('settings')->where('id', $exists->id)->update([

							'description' => $request->description,
							'keywords' => $request->keywords,
							'facebook' => $request->facebook,
							'instagram' => $request->instagram,
							'twitter' => $request->twitter,
							'youtube' => $request->youtube,
							'googleplus' => $request->googleplus,
							'phoneone' => $request->phoneone,
							'phonetwo' => $request->phonetwo,
							'emailone' => $request->emailone,
							'emailtwo' => $request->emailtwo,
							'address' => $request->address,
                    ]);
            } else {
                
                $settingsave = new setting;

				$settingsave->description = $request->description;
				$settingsave->keywords = $request->keywords;
				$settingsave->facebook = $request->facebook;
				$settingsave->instagram = $request->instagram;
				$settingsave->twitter = $request->twitter;
				$settingsave->youtube = $request->youtube;
				$settingsave->googleplus = $request->googleplus;
				$settingsave->phoneone = $request->phoneone;
				$settingsave->phonetwo = $request->phonetwo;
				$settingsave->emailone = $request->emailone;
				$settingsave->emailtwo = $request->emailtwo;
				$settingsave->address = $request->address;

                $result = $settingsave->save();
            }


          if ($result){
                    
                return redirect('/admin/ayarlari/genelayarlari')->with('success','Değişiklikleriniz başarıyla kaydedildi');
                 }else{
                 return redirect('/admin/ayarlari/genelayarlari')->with('error', "Oups, Değişiklikleriniz kaydedilemedi");
            }   
            
    }

    public function slider()
    {
        $slider = DB::table('sliderimages')->get();
        $slider1 = DB::table('slider1')->get();
        return view('admin.ayarlari.slider', compact('slider','slider1'));
    }

    public function saveslider(Request $request)
    {
            $result = 0;

        if ($request->images) {

           foreach($request->file('images') as $image){
                    $imagename = $image->getClientOriginalName();
                    $location = public_path('sliderFotograflari/' . $imagename);

                    Image::make($image)->resize(1700, 850)->save($location);

                    $newimage = new sliderimage;
                    $newimage->frtitle = $request->frtitle;

                    $newimage->entitle = $request->entitle;
                    $newimage->trtitle = $request->trtitle;
                    $newimage->image = $imagename;

                   $result = $newimage->save();
                }  
            }
                  
            if ( $result) {
                return redirect('admin/slider')->with('success','Fotoğraf(lar)ı başarıyla eklendi');
             }else{
                  return redirect('admin/slider')->with('error', "Oups, Fotoğraf(lar)ı eklenemedi");
        }
    }

    public function deletslider($id)
    {
        $image = sliderimage::where('id', $id)->first();  
       $imagename = $image->image;
       $location = public_path('sliderFotograflari/' . $imagename);

       File::delete($location);

       sliderimage::where('id',$id)->delete();
       return redirect('admin/slider')->with('success','Fotoğraf(lar)ı başarıyla silindi');
    }

    public function saveslider1(Request $request)
    {
            $result = 0;

        if ($request->image) {

          $image= $request->file('image') ;
                    $imagename = $image->getClientOriginalName();
                    $location = public_path('slider1/' . $imagename);

                    Image::make($image)->resize(1700, 850)->save($location);
                    $delimage = slider1::where('id', 0)->first();  
                    $delimagename = $delimage->image;
                    $dellocation = public_path('slider1/' . $delimagename);
                    File::delete($dellocation);
                    $newimage =  slider1::find(0);
                    $newimage->frtitle = $request->frtitle;

                    $newimage->entitle = $request->entitle;
                    $newimage->trtitle = $request->trtitle;
                    $newimage->image = $imagename;
         
                   $result = $newimage->save();
               // dd($request);
            }
                  
            if ( $result) {
                return redirect('admin/slider')->with('success','Fotoğraf(lar)ı başarıyla eklendi');
             }else{
                  return redirect('admin/slider')->with('error', "Oups, Fotoğraf(lar)ı eklenemedi");
        }
    }

    public function deletslider1($id)
    {
        $image = slider1::where('id', $id)->first();  
       $imagename = $image->image;
       $location = public_path('slider1/' . $imagename);

       File::delete($location);

       slider1::where('id',$id)->delete();
       return redirect('admin/slider')->with('success','Fotoğraf(lar)ı başarıyla silindi');
    }
}
