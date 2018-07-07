<?php
/**
 * Created by PhpStorm.
 * User: Win 10
 * Date: 6/21/2018
 * Time: 1:31 PM
 */

namespace App\Http\Controllers;
use App\Students;
use Illuminate\Http\request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Relations;
class StudentsController extends Controller{


    public function index(){
        $listStudent = Students::all();
        return view ('Students.index', array('model' =>$listStudent));
    }
    public function create(){
        return view ('Students.create');
    }
    public function store(Request $request){



            //new object
       $Students = new Students();
       $Students->masv= $request->masv;
       $Students->name= $request->name;
        $Students ->class = $request->class;
       $Students->dob = $request->dob;
//
        $photo = $request->file('photo')->getClientOriginalName();

        $filename = time().$photo;
        if($request->hasFile('photo')){

            $file = $request->file('photo');
           $file->move('upload', $filename);

   }
       $Students->photo = $filename;
        $Students->save();
        return redirect()->route('index');

    }
    public function delete(Request $request){

        $listStudents = Students::find($request->id);
        $listStudents->delete();
        return redirect()->route('index');
    }

    public function edit($id){
        $listStudents = Students::find($id);
        return view('Students.edit', array('model'=>$listStudents));
    }
    public function update(Request $request){
        $id = $request->id;

        $listStudents = Students::find($id);
        $listStudents ->id = $id;
        $listStudents->masv= $request->masv;
        $listStudents->name= $request->name;
        $listStudents ->class = $request->class;
        $listStudents->dob = $request->dob;


        $photo = $request->file('photo')->getClientOriginalName();

        $filename = time().$photo;
        if($request->hasFile('photo')){

            $file = $request->file('photo');
            $file->move('upload', $filename);

        }
        $listStudents->photo = $filename;
        $listStudents->save();
        return redirect()->route('index');
    }


    public function details($id){
        $Students = Students::find($id);
        return view('Students.details', array('model'=>$Students));
    }

} 