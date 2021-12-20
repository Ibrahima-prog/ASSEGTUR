<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\boardmember;
use App\Model\admin\departments;
use App\Model\admin\faculties;
use Carbon\Carbon;
use DB;
use Mail;
use Redirect;

use App\Model\admin\news;
use App\Model\admin\preregistration;
use App\Model\admin\registration;
use App\Model\user\activities;
use App\Model\user\activities_and_gallery;
use App\Model\user\articles_department;

class RoutesController extends Controller
{


    public function index()
    {
        $sliderimages = DB::table('sliderimages')->get();
        $slider1 = DB::table('slider1')->first();
        //dd($slider1->image);
        $faculties = DB::table('faculties')->get();
        $boardmembers = DB::table('boardmembers')->get();
        $history = $history = DB::table('histories')->first();
        $aboutus = DB::table('aboutus')->first();
        $mission = DB::table('mitions')->first();
        $plan = DB::table('plan')->first();
        $vision = DB::table('vitions')->first();
        $news = DB::table('news')->orderBy('created_at', 'DESC')->paginate(3);
        $pastactivities = DB::table('activities')->where('status', '1')->orderBy('created_at', 'DESC')->paginate(3);

        $activities = DB::table('activities')->where('status', '0')->orderBy('created_at', 'DESC')->paginate(3);
        $contacts = DB::table('settings')->first();
        return view('user.home2', compact(
            'faculties',
            'pastactivities',
            'contacts',
            'sliderimages',
            'aboutus',
            'mission',
            'vision',
            'news',
            'activities',
            'slider1',
            'plan',
            'history',
            'boardmembers'
        ));
    }

    public function conctact()
    {

        $contacts = DB::table('settings')->first();
        return view('user.conctact2', compact('contacts'));
    }

    public function ourhistory()
    {

        $history = DB::table('histories')->first();
        $contacts = DB::table('settings')->first();
        return view('user.ourhistory', compact('contacts', 'history'));
    }

    public function aboutus()
    {

        $aboutus = DB::table('aboutus')->first();
        $boardmembers = DB::table('boardmembers')->get();
        $contacts = DB::table('settings')->first();
        $yonetim = boardmember::all();
        $therest=boardmember::where('frtitle', '!=' , 'président')->get();
        return view('user.our-mission-vision2', compact('therest','yonetim','contacts', 'aboutus', 'boardmembers'));
    }

    public function ourmissionvision()
    {

        $contacts = DB::table('settings')->first();
        $mission = DB::table('mitions')->first();
        $plan = DB::table('plan')->first();
        $vision = DB::table('vitions')->first();
        $yonetim = boardmember::all();  

        return view('user.our-mission-vision2', compact('yonetim','contacts', 'mission', 'vision', 'plan'));
    }

    public function register()
    {

        //  $someconditions = DB::table('conditions')->paginate(3);
        //  $conditions = DB::table('conditions')->get();
        $contacts = DB::table('settings')->first();
        return view('user.register2', compact('contacts'));
    }

    public function login()
    {

        $someconditions = DB::table('conditions')->paginate(3);
        $conditions = DB::table('conditions')->get();
        $contacts = DB::table('settings')->first();
        return view('auth.logi', compact('contacts', 'conditions', 'someconditions'));
    }

    public function faq()
    {
        $genelfaqs = DB::table('regularquestions')->where('category', 'Genel')->get();
        $birlikfaqs = DB::table('regularquestions')->where('category', 'Birliğin')->get();
        $uyelikfaqs = DB::table('regularquestions')->where('category', 'Üyelik')->get();
        $digerfaqs = DB::table('regularquestions')->where('category', 'Diğer')->get();




        $contacts = DB::table('settings')->first();
        return view('user.faq', compact('contacts', 'genelfaqs', 'birlikfaqs', 'uyelikfaqs', 'digerfaqs'));
    }

    public function gallery()
    {

        $gallery = DB::table('galleries')->orderBy('created_at', 'DESC')->paginate(24);
        $contacts = DB::table('settings')->first();
        return view('user.gallery', compact('contacts', 'gallery'));
    }

    public function news()
    {
        $activities = DB::table('activities')->orderBy('created_at', 'DESC')->paginate(3);

        $news = DB::table('news')->orderBy('created_at', 'DESC')->paginate(10);
        $newsTitles = DB::table('news')->orderBy('created_at', 'DESC')->get();
        $contacts = DB::table('settings')->first();
        return view('user.news2', compact('activities','contacts', 'news', 'newsTitles'));
    }

    public function newsDetails(news $slug)
    {


        $newsitem  = news::where('slug', $slug->slug)->first();
        $newsTitles = DB::table('news')->orderBy('created_at', 'DESC')->get();
        $contacts = DB::table('settings')->first();

       // dd($newsitem);

        return view('user.new-details2', compact('newsitem', 'newsTitles', 'contacts'));
    }


    public function activities()
    {


        $contacts = DB::table('settings')->first();
        $commingactivities = DB::table('activities')->where('status', '0')->orderBy('created_at', 'DESC')->get();
        $pastactivities = DB::table('activities')->where('status', '1')->orderBy('created_at', 'DESC')->get();
        return view('user.activities2', compact('commingactivities', 'pastactivities', 'contacts'));
    }

    public function activities_and_gallery_summary(activities $slug)
    {
        //  return $slug;
        $contacts = DB::table('settings')->first();
        $commingactivities = DB::table('activities')->where('status', '0')->orderBy('created_at', 'DESC')->get();
        $pastactivities = DB::table('activities')->where('status', '1')->orderBy('created_at', 'DESC')->get();
        // $promotions=DB::table('events_galleries')->get();
        return view('user.grouped_gallery2', compact('commingactivities', 'pastactivities', 'contacts', 'slug'));
    }
    public function activities_and_gallery()
    {

        $contacts = DB::table('settings')->first();
        $commingactivities = DB::table('activities')->where('status', '0')->orderBy('created_at', 'DESC')->get();
        $pastactivities = DB::table('activities')->where('status', '1')->orderBy('created_at', 'DESC')->get();
        $activities = DB::table('activities')->orderBy('created_at', 'DESC')->paginate(10);
        // $promotions=DB::table('events_galleries')->get();
        return view('user.activities_and_gallery2', compact('activities', 'pastactivities', 'contacts'));
    }

    public function aktat()
    {

        $contacts = DB::table('settings')->first();
        $aktatboard = DB::table('aktatmembers')->get();
        $aboutaktat = DB::table('communities')->first();
        return view('user.aktat', compact('contacts', 'aktatboard', 'aboutaktat'));
    }

    public function article()
    {

        $departments = DB::table('departments')->get();
        $faculties = DB::table('faculties')->get();
        $articles = DB::table('articles')->orderBy('created_at', 'DESC')->paginate(10);
        $articlesTitles = DB::table('articles')->get();
        $contacts = DB::table('settings')->first();
        return view('user.article2', compact('contacts', 'articles', 'articlesTitles', 'departments', 'faculties'));
    }

    public function articles_department(departments $slug)
    {
        $articles = $slug->articles();

        $articlesTitles = DB::table('articles')->get();
        $contacts = DB::table('settings')->first();
        return view('user.articles_department', compact('contacts', 'articles', 'articlesTitles', 'departments'));
    }

    public function departments_by_faculty(faculties $slug)
    {
        $departments = $slug->departments();

        $departmentsTitles = DB::table('articles')->get();
        $contacts = DB::table('settings')->first();
        return view('user.departments_by_faculty', compact('contacts', 'departments', 'departmentsTitles', 'faculties'));
    }
    public function announce()
    {

        $announcements = DB::table('announcements')->orderBy('created_at', 'DESC')->paginate(9);
        $contacts = DB::table('settings')->first();
        return view('user.announce', compact('contacts', 'announcements'));
    }



    public function registermember(Request $request)
    {
        $this->validate($request, [

            'name' => 'required',
            'gender' => 'required',
            'institution' => 'required',
            'department' => 'required',
            'email' => 'required|email',
            'phone' => 'required'

        ]);


        $newregistration = new registration;

        $newregistration->firstname = $request->name;
        $newregistration->gender = $request->gender;
        $newregistration->address = $request->address;
        $newregistration->level = $request->level;
        $newregistration->institution = $request->institution;
        $newregistration->department = $request->department;
        $newregistration->phone = $request->phone;
        $newregistration->email = $request->email;

        $result = $newregistration->save();

        if ($result) {
            //  dd($result);
            return redirect('/association/register')->with('success', 'Informations enregistrées avec succès.');
        } else {
            return redirect('/association/register')->with('error', "Oups, un petit probleme est survenu");
        }
    }

    public function sendEmail(Request $request)
    {


        $this->validate($request, [
            'email' => 'required|email'
        ]);


        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phonenumber'  => $request->phone,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );


        Mail::send(
            'emails.contact',
            $data,
            function ($message) use ($data) {
                $message->from($data['email']);
                $message->to('mohamednjikam25@hotmail.com')
                    ->bcc(array('afrokonya@gmail.com'))
                    ->subject($data['subject']);
            }
        );


        if (count(Mail::failures()) > 0) {

            $request->session()->flush();
            return redirect('conctact-us')->with('error', 'Ooopppsss, E-postanız gönderilemedi. Lütfen daha sonra tekrar deneyiniz.');
        } else {

            $request->session()->flush();

            return redirect('conctact-us')->with('success', 'E-postanız başarıyla gönderildi. Bizimle iletişime geçtiğiniz için teşekkürler.');
        }
    }
}
