<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function index2()
    {
        return view('layout.index2');
    }
    public function adminhome()
    {
        $user=Auth::user();
        return view('admin.adminhome',compact('user'));

    }
    public function staff_reg()
    {
        return view('admin.staff_reg');
    }
    public function register(Request $request)
    {
      $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'username'=>'required',
            'password'=>'required',
            'image'=>'mimes:jpeg,jpg,png,gif|max:2048',
            'type'=>'required'
        ]);
        $data = $request->all();
        $path='asset/storage/images/'.$data['image'];
            $fileName=time().$request->file('image')->getClientoriginalName();
            $PATH=$request->file('image')->storeAs('images',$fileName,'public');
            $datas["image"]='/storage/'.$path;
            $data['image']=$fileName;
            $data["password"]=bcrypt($data["password"]);
            User::create($data); 
            
            return redirect()->route('staff_reg');
    }
    public function doctor_reg()
    {
        return view('admin.doctor_reg');
    }
    public function doc_reg(Request $request)
    {
        $request->validate([
            'doctor_name'=>'required',
            'email'=>'required|email',
            'contact'=>'required|max:10',
            'time'=>'required',
            'specialization'=>'required',
            'image'=>'mimes:jpeg,jpg,png,gif|max:2048',
        ]);
        $data = $request->all();
        $path='asset/storage/images/'.$data['image'];
            $fileName=time().$request->file('image')->getClientoriginalName();
            $PATH=$request->file('image')->storeAs('images',$fileName,'public');
            $datas["image"]='/storage/'.$path;
            $data['image']=$fileName;
            Doctor::create($data);
            return redirect()->route('doctor_reg')->with('success','registered');
        

    }
    public function view()
{
    $view=Doctor::all();
        return view('admin.view',compact('view'));
    }
    public function staffhome()
    {
        $user=Auth::user();
        return view('staff.staffhome',compact('user'));

    }
    public function staffview()
{
    $view = User::where('type', 'staff')->get();
    return view('admin.staffview', compact('view'));
}

       }
