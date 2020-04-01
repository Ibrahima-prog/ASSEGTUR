<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Model\admin\departments;
use App\Model\admin\faculties;
use Illuminate\Http\Request;

use Auth;
use DB;
use Hash;
class DepartmentController extends Controller
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
        $departments = DB::table('departments')->get();
        
  
         
        return view('admin.departments.show',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculties=faculties::all();
        return view('admin.departments.departments',compact('faculties'));
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
            'faculty'=>'required',
           


        ]);
       // 
     
            
            
        $departments= new departments(); //app/model/galleries
        
        $departments->frname=$request->frname;
        $departments->trname=$request->trname;
        $departments->enname=$request->enname;
$departments->slug=$request->slug;

$departments->save();
$departments->faculties()->sync($request->faculty) ;
return redirect(route('departments.index'));
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
        $departments=departments::with('faculties')->where('id',$id)->first();
        $faculties=faculties::all();
        return view('admin.departments.edit',compact('departments','faculties'));
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

            'slug'=>'required',
            'faculty'=>'required'


        ]);
        $departments= departments::find($id); //app/model/galleries
$departments->frname=$request->frname;
$departments->trname=$request->trname;
$departments->enname=$request->enname;
$departments->slug=$request->slug;
$departments->save();
$departments->faculties()->sync($request->faculty) ;
return redirect(route('departments.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        departments::where('id',$id)->delete()
        ;return redirect()->back();
    }
}
