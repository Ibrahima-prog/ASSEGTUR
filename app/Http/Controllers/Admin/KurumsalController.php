<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\admin\detail;
use App\Model\admin\maindetail;
use App\Model\admin\mition;
use App\Model\admin\vition;
use App\Model\admin\regularquestion;
use App\Model\admin\service;
use App\Model\admin\whyus;
use App\Model\admin\aboutu;
use App\Model\admin\history;
use App\Model\admin\plan;
use DB;
use Validator;
use Redirect;
use Storage;

class KurumsalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {    

     
        return view('admin.kurumsal.kurumsal');
    }
    

    public function hakkimizda()
    {    
        $post = DB::table('aboutus')->first();
        return view('admin.kurumsal.hakkimizda', compact('post'));
    }
    




    public function hakkimizdasave(Request $request)
    {
           
        $this->validate($request,[
            'entitle'=>'required',
            'trtext' => 'required',
            'entitle'=>'required',
            'trtext' => 'required',
            'frtitle' => 'required',
                'frtext' => 'required'
            ]);

         

            $exists = DB::table('aboutus')->first();
            if ($exists) {
                   $result = DB::table('aboutus')->where('id', $exists->id)->update([
                   'entitle' => $request->entitle,
                   'trtitle' => $request->trtitle,
                   'entext' => $request->entext,
                   'trtext' => $request->trtext,
                   'frtitle' => $request->frtitle,
                   'frtext' => $request->frtext,
                    ]);
            } else {
                
                $post = new aboutu;
                $post->entitle = $request->entitle;
                $post->trtitle = $request->trtitle;
                $post->entext = $request->entext;
                $post->trtext = $request->trtext;
                $post->frtitle = $request->frtitle;
                $post->frtext = $request->frtext;
              
                $result = $post->save();
            }


          if ($result){
                    
                return redirect('admin/kurumsal')->with('success','Değişiklikleriniz başarıyla kaydedildi');
                 }else{
                 return redirect('admin/kurumsal/misyon')->with('error', "Oups, Değişiklikleriniz kaydedilemedi");
            }   
            

    }


    public function tarigi()
    {    
        $post = DB::table('histories')->first();
        return view('admin.kurumsal.tarigi' , compact('post'));
    }

     public function tarigisave(Request $request)
    {
         

             $this->validate($request,[
                'entitle'=>'required',
                'trtitle'=>'required',
                'entext' => 'required',
                'trtext' => 'required',
                'frtitle' => 'required',
                'frtext' => 'required'
            ]);

         

            $exists = DB::table('histories')->first();
            if ($exists) {
                   $result = DB::table('histories')->where('id', $exists->id)->update([
                   'entitle' => $request->entitle,
                   'trtitle' => $request->trtitle,
                   'entext' => $request->entext,
                   'trtext' => $request->trtext,
                   'frtitle' => $request->frtitle,
                   'frtext' => $request->frtext,
                    ]);
            } else {
                
                $post = new history;
                $post->entitle = $request->entitle;
                $post->trtitle = $request->trtitle;
                $post->entext = $request->entext;
                $post->trtext = $request->trtext;
                $post->frtitle = $request->frtitle;
                $post->frtext = $request->frtext;
              
                $result = $post->save();
            }


          if ($result){
                    
                return redirect('admin/kurumsal')->with('success','Değişiklikleriniz başarıyla kaydedildi');
                 }else{
                 return redirect('admin/kurumsal/tarigi')->with('error', "Oups, Değişiklikleriniz kaydedilemedi");
            }    

    }

    public function misyon()
    {    
        $post = DB::table('mitions')->first();
        return view('admin.kurumsal.misyon' , compact('post'));
    }

     public function misyonsava(Request $request)
    {
           
             $this->validate($request,[
                'entitle'=>'required',
                'trtext' => 'required',
                'entitle'=>'required',
                'trtext' => 'required',
                'frtitle' => 'required',
                'frtext' => 'required'
            ]);

         

            $exists = DB::table('mitions')->first();
            if ($exists) {
                   $result = DB::table('mitions')->where('id', $exists->id)->update([
                   'entitle' => $request->entitle,
                   'trtitle' => $request->trtitle,
                   'entext' => $request->entext,
                   'trtext' => $request->trtext,
                   'frtitle' => $request->frtitle,
                   'frtext' => $request->frtext,
                    ]);
            } else {
                
                $post = new mition;
                $post->entitle = $request->entitle;
                $post->trtitle = $request->trtitle;
                $post->entext = $request->entext;
                $post->trtext = $request->trtext;
                $post->frtitle = $request->frtitle;
                $post->frtext = $request->frtext;
              
                $result = $post->save();
            }


          if ($result){
                    
                return redirect('admin/kurumsal')->with('success','Değişiklikleriniz başarıyla kaydedildi');
                 }else{
                 return redirect('admin/kurumsal/misyon')->with('error', "Oups, Değişiklikleriniz kaydedilemedi");
            }    

    }

    public function plan()
    {    
        $post = DB::table('plan')->first();
        return view('admin.kurumsal.plan' , compact('post'));
    }

     public function plansava(Request $request)
    {
           
             $this->validate($request,[
                'entitle'=>'required',
                'trtext' => 'required',
                'entitle'=>'required',
                'trtext' => 'required',
                'frtitle' => 'required',
                'frtext' => 'required'
            ]);

         

            $exists = DB::table('plan')->first();
            if ($exists) {
                   $result = DB::table('plan')->where('id', $exists->id)->update([
                   'entitle' => $request->entitle,
                   'trtitle' => $request->trtitle,
                   'entext' => $request->entext,
                   'trtext' => $request->trtext,
                   'frtitle' => $request->frtitle,
                   'frtext' => $request->frtext,
                    ]);
            } else {
                
                $post = new plan;
                $post->entitle = $request->entitle;
                $post->trtitle = $request->trtitle;
                $post->entext = $request->entext;
                $post->trtext = $request->trtext;
                $post->frtitle = $request->frtitle;
                $post->frtext = $request->frtext;
              
                $result = $post->save();
            }


          if ($result){
                    
                return redirect('admin/kurumsal')->with('success','Değişiklikleriniz başarıyla kaydedildi');
                 }else{
                 return redirect('admin/kurumsal/plan')->with('error', "Oups, Değişiklikleriniz kaydedilemedi");
            }    

    }

    public function visyon()
    {    
        $post = DB::table('vitions')->first();
        return view('admin.kurumsal.visyon', compact('post'));
    }


     public function visyonsave(Request $request)
    {
           
             $this->validate($request,[
                'entitle'=>'required',
                'trtext' => 'required',
                'entitle'=>'required',
                'trtext' => 'required',
                'frtitle' => 'required',
                'frtext' => 'required'
            ]);

            $exists = DB::table('vitions')->first();
            if ($exists) {
                   $result = DB::table('vitions')->where('id', $exists->id)->update([
                       'entitle' => $request->entitle,
                       'trtitle' => $request->trtitle,
                       'entext' => $request->entext,
                       'trtext' => $request->trtext,
                       'frtitle' => $request->frtitle,
                   'frtext' => $request->frtext,
                    ]);
            } else {
                
                $post = new vition;
                $post->entitle = $request->entitle;
                $post->trtitle = $request->trtitle;
                $post->entext = $request->entext;
                $post->trtext = $request->trtext;
                $post->frtitle = $request->frtitle;
                $post->frtext = $request->frtext;
              
                $result = $post->save();
            }


          if ($result){
                    
                      return redirect('admin/kurumsal')->with('success','Değişiklikleriniz başarıyla kaydedildi');
                 }else{
                 return redirect('admin/kurumsal/misyon')->with('error', "Oups, Değişiklikleriniz kaydedilemedi");
            } 

    }


    public function sikcasorulansorular()
    {
        $sikcasorulansorular = DB::table('regularquestions')->get();
        return view('admin.kurumsal.sikcasorulansorular.sikcasorulansorular', compact('sikcasorulansorular'));
    }

     public function sikcasorulansorularekle()
    {
        return view('admin.kurumsal.sikcasorulansorular.sikcasorulansorularekle');
       
    }

     public function sikcasorulansorularsave(Request $request)
    {
        $this->validate($request,[
            'category' => 'required',
            'enquestion' => 'required',
            'trquestion' => 'required',
            'enanswer' => 'required',
            'transwer' => 'required',
            ]);

          
           $questionanswer = new regularquestion;
           
           $questionanswer->category = $request->category;
           $questionanswer->enquestion = $request->enquestion;
           $questionanswer->trquestion = $request->trquestion;
           $questionanswer->enanswer = $request->enanswer;
           $questionanswer->transwer = $request->transwer;
           
           $result = $questionanswer->save();

             if ($result){
                    
                      return redirect('admin/kurumsal')->with('success','Şartı başarıyla kaydedildi');
                 }else{
                 return redirect('admin/kurumsal/sikcasorulansorular/ekle')->with('error', "Oups, Şartı kaydedilemedi");
            }
    }

     public function deletesikcaksorulansorular($id)
    {
        regularquestion::where('id',$id)->delete();
       return  redirect('admin/kurumsal/sikcasorulansorular')->with('success','başarıyla silinmiştir');
    }



    public function servisimiz()
    {    
        $service = DB::table('services')->first();
        return view('admin/kurumsal/servisimiz' , compact('service'));
    }


      public function servisimizsave(Request $request)
    {
           
             $this->validate($request,[
            'entext' => 'required',
            'trtext' => 'required',
            ]);

            $exists = DB::table('services')->first();
            if ($exists) {
                   $result = DB::table('services')->where('id', $exists->id)->update([
                   'entext' => $request->entext,
                   'trtext' => $request->trtext,
                    ]);
            } else {
                
                $post = new service;
                $post->entext = $request->entext;
                $post->trtext = $request->trtext;
              
                $result = $post->save();
            }


          if ($result){
                    
                      return redirect('admin/kurumsal')->with('success','Değişiklikleriniz başarıyla kaydedildi');
                 }else{
                 return redirect('admin/kurumsal/servisimiz')->with('error', "Oups, Değişiklikleriniz kaydedilemedi");
            } 

    }



    public function nedenbiz()
    {    
        $whyus = DB::table('whyuses')->first();
        return view('admin/kurumsal/nedenbiz' , compact('whyus'));
    }


      public function nedenbizsave(Request $request)
    {
           
             $this->validate($request,[
            'entext' => 'required',
            'trtext' => 'required',
            ]);

            $exists = DB::table('whyuses')->first();
            if ($exists) {
                   $result = DB::table('whyuses')->where('id', $exists->id)->update([
                   'entext' => $request->entext,
                   'trtext' => $request->trtext,
                    ]);
            } else {
                
                $post = new whyus;
                $post->entext = $request->entext;
                $post->trtext = $request->trtext;
              
                $result = $post->save();
            }


          if ($result){
                    
                      return redirect('admin/kurumsal')->with('success','Değişiklikleriniz başarıyla kaydedildi');
                 }else{
                 return redirect('admin/kurumsal/nedenbiz')->with('error', "Oups, Değişiklikleriniz kaydedilemedi");
            } 

    }

}
