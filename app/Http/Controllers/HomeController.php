<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emp;

class HomeController extends Controller
{
    function getAllEmp()
    {
        $data = Emp::paginate();
        return view('home',['datas' => $data]);
    }    

    function addEmp(Request $req)
    {
        $errors = $req->validate(['emp'=>'required|max:5','salary'=>'required']);
        $emp = new Emp;
        $emp->e_name = $req->input('emp');
        $emp->salary = $req->input('salary');
        $emp->save();
        //return redirect('home',['errors'=>$errors]);    
        return redirect('home');    
    } 

    function delEmp(Request $req)
    {
        $id = $req->input('id');
        $data = Emp::where('e_id',$id)->delete();
        return redirect('home');      
    } 

    function fetchSingleRecord(Request $req)
    {
        $id = $req->input('id');
        $data = Emp::where('e_id',$id)->get();
        return view('add-emp',['data'=>$data,'status'=>'upd']);    
    } 

    function updateRecord(Request $req)
    {
        $id = $req->input('id');
        $emp_name = $req->input('emp');
        $salary = $req->input('salary');
        Emp::where('e_id','=',$id)->update(['e_name'=>$emp_name,'salary'=>$salary]);
        return redirect('home');    
    }
}
