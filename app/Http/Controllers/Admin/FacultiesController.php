<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Model\admin\faculties;
use Illuminate\Http\Request;

use Auth;
use DB;
use Hash;
class FacultiesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = DB::table('faculties')->get();
        
  
         
        return view('admin.faculties.show',compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.faculties.faculties');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'frname'=>'required',
            'trname'=>'required',
            'enname'=>'required',

            'slug'=>'required',
           


        ]);
       // 
     
            
            
        $faculties= new faculties(); //app/model/galleries
        
        $faculties->frname=$request->frname;
        $faculties->trname=$request->trname;
        $faculties->enname=$request->enname;
$faculties->slug=$request->slug;
$faculties->save();
return redirect(route('faculties.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculties=DB::table('faculties')->where('id',$id)->first();
        return view('admin.faculties.edit',compact('faculties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'frname'=>'required',
            'trname'=>'required',
            'enname'=>'required',

            'slug'=>'required'


        ]);
        $faculties= faculties::find($id); //app/model/galleries
$faculties->frname=$request->frname;
$faculties->trname=$request->trname;
$faculties->enname=$request->enname;
$faculties->slug=$request->slug;
$faculties->save();
return redirect(route('faculties.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        faculties::where('id',$id)->delete()
        ;return redirect()->back();
    }
}
