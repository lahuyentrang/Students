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
class StudentsController  extends Controller{
    public function index(){
        $listStudent = Students::all();
        return view ('Students.index', array('model' =>$listStudent));
    }
    public function create(){
return view ('Students.create');
}
    public function store(Request $request){
        //$masv = $request ->get('masv');
       // $name=$request->get('name');
        //$class =$request->get('class');
        // $gender = $request->get('gender');
       // $dob = $request->get('dob');


        //new object
        $Students = new Students();
       // $game->title = request('title');
        $Students->masv= $request->masv;
        $Students->name= $request->name;
        $Students ->class = $request->class;
      //  $Students->gender= $gender;
        $Students->dob = $request->dob;

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
    public function delete($id){
        $listStudents = Students::find($id);
        $listStudents->delete();
        return redirect()->route('index')->with('alert-danger', 'successfully deleted.');
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

} 