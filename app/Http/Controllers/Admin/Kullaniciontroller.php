<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use DB;
use Hash;

class Kullaniciontroller extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {    
        return view('admin.kullanici.kullanici');
    }
    
    public function yonet()
    {    
        $users = DB::table('users')->get();
        return view('admin.kullanici.yonet', compact('users'));
    }
    
    public function ekle()
    {    
        return view('admin.kullanici.ekle');
    }


    public function delete($id)
    {  
         $users = DB::table('users')->get();
        
        if ($id == 1) {

            return redirect('admin/kullanici/yonet')->with('error','Bu admin kullanici silemezsiniz. Afrokonya süper admin hesabıdır.');
           
          

        }else{
             DB::table('users')->where('id',$id)->delete();
        }
        
       return  redirect('admin/kullanici/yonet')->with('success','bu kullanıcı başarıyla silinmiştir');
    }


    public function sifreDegistir()
    {
        return view('admin.kullanici.sifredegistir');
    }

    public function changePassword(Request $request)
    {
       
       $validattion = $this->validate($request,[
           'curPassword' => 'required',
           'newPassword' => 'required|string|min:6',
        ]);

        
      
        
        if ($validattion) {
            
            $user = Auth::user();

            $curPassword = $request->curPassword;
            $newPassword = $request->newPassword;

            if (Hash::check($curPassword, $user->password)) {
                $user_id = $user->id;

                $obj_user = DB::table('users')->where('id',$user_id)->first();
                $obj_user->password = Hash::make($newPassword);

                DB::table('users')->where('id', $user_id)->update(['password' => $obj_user->password ]);
                
                return redirect('admin/kullanici/yonet')->with('success','Şifreniz başarıyla değiştirildi');
            }
            else
            {
                return redirect('admin/kullanici/yonet')->with('error','Şifreniz değiştirilemedi, mevcut şifrenizi kontrol edin ve yeni şifrenizin en az 6 karakterden olduğundan emin olun.');
            }
        }
  
    }

}
