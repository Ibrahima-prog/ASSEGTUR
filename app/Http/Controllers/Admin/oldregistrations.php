<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\admin\registration;
use App\Model\admin\condition;

use DB;
use Mail;
use Redirect;

class Registrations extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

       public function index()
    {    
        return view('admin.preregistrations.onkayi');
    }
    

    public function yonet()
    {   
        $registrations = DB::table('registrations')->orderBy('created_at','DESC')->get();
        return view('admin.preregistrations.yonet', compact('registrations'));
    }

        public function detaylari($id)
    {   
          $details = registration::where('id', $id)->first();
          return view('admin.preregistrations.details', compact('details'));
        
    }

    public function saatlarvekosullari()
    {
    	 $saatlarvekosullari = DB::table('conditions')->get();
        return view('admin.preregistrations.saatlarvekosullari', compact('saatlarvekosullari'));
    }

    public function saatlarvekosullariekle()
    {
        return view('admin.preregistrations.saatlarvekosullariekle');
    	
    }
    public function saatlarvekosullarisave(Request $request)
    {
    	   $this->validate($request,[
            'encondition' => 'required',
            'trcondition' => 'required',
            ]);

          
           $saatvekosul = new condition;

           $saatvekosul->encondition = $request->encondition;
           $saatvekosul->trcondition = $request->trcondition;
           
           $result = $saatvekosul->save();

             if ($result){
                    
                      return redirect('admin/onkayi/saatlarvekosullari')->with('success','Şartı başarıyla kaydedildi');
                 }else{
                 return redirect('admin/onkayi/saatlarvekosullari/ekle')->with('error', "Oups, Şartı kaydedilemedi");
            }


    }

    public function deletesaatvekosul($id)
    {
       condition::where('id',$id)->delete();
       return  redirect('admin/onkayi/saatlarvekosullari')->with('success','başarıyla silinmiştir');
    }

    public function onkayitsil($id)
    {
    	registration::where('id',$id)->delete();
    	return  redirect('admin/onkayi/yonet')->with('success','başarıyla silinmiştir');
    }

   /* public function onayla($id)
    {
      
       $update = registration::where('id', $id)->first();  
        
      $result = DB::table('registrations')->where('id', $update->id)->update([ 
                     'status' => 1,
                  ]);


        if ($result){


                $data = array(
            'firstname' => $update->firstname,       
            'email' => 'afrokonya@gmail.com',
            'subject' => 'Afrokonya Üyeliğinizi Onaylandı',
            'bodyMessage' => 'Konya’daki Afrikalı Öğrenciler Birliğine kaydınız başarılı bir şekilde gerçekleşmiştir. AFROKONYA ailesine hoş geldiniz. Sizlere yardımcı olmaktan mutluluk duyar ve okul hayatınızda başarılar dileriz.', 
            'toemail' => $update->email 
        );

                Mail::send(
                    'emails.contactregistrant',
                    $data, 
                    function($message) use ($data) {
                        $message->from( $data['email'] );
                        $message->to($data['toemail'])
                        ->subject( $data['subject'] );
                    }
                );

                    
                      return redirect('admin/onkayi/yonet')->with('success','Üyeliği Onaylandı');
                 }else{
                      return redirect('admin/onkayi/yonet')->with('error', "Oups, başvuruyu onaylanamadı");
            }

    }*/


    public function emailgonder(Request $request)
    {
    	 
    	$data = array(
            'firstname' => $request->firstname,       
            'email' => 'info@afrokonyaweb.com',
            'subject' => 'Konya’daki Afrikalı Öğrenciler Birliği',
            'bodyMessage' => $request->message, 
        	'toemail' => $request->email 
        );

    	 Mail::send(
                    'emails.contactregistrant',
                    $data, 
                    function($message) use ($data) {
                        $message->from( $data['email'] );
                        $message->to($data['toemail'])
                        ->subject( $data['subject'] );
                    }
                );

   

            if(count(Mail::failures()) > 0 ){
                return redirect('admin/onkayi/yonet')->with('error','Ooopppsss, E-postanız gönderilemedi');
            }else{
                
               
                return redirect('admin/onkayi/yonet')->with('success','E-postanız başarıyla gönderildi.');
            }
    }
}