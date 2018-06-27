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
        $Students->photo = "ddfdff";
            // $Students->photo = $request()->file('photo')->store('public/images');
       // $Product->created_at=date('Y-m-d H:i:s');

       // $Product->updated_at= date('Y-m-d H:i:s');
        $Students->save();
        return redirect()->route('index');

    }
    public function delete($id){
        $listStudents = Students::find($id);
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
        //  $Students->gender= $gender;
        $listStudents->dob = $request->dob;
        $listStudents->photo = "ddfdff";
        $listStudents->save();
        return redirect()->route('index');
    }

} 