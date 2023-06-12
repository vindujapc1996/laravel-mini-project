<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Support\Facades\File;
class DbController extends Controller
{
    public function delete($id)
    {
        Doctor::find($id)->delete();
        return redirect()->route('view')->with('success','deleted');
    }
    public function edit($id)
    {
        $doctor=Doctor::find($id);
        return view('admin.edit',compact('doctor'));

    }
    public function update($id,Request $request)
    {
        $request->validate([
            'doctor_name'=>'required',
            'specialization'=>'required',
            'email'=>'required',
            'contact'=>'max:10',
            'image'=>'mimes:jpeg,jpg,png,gif|max:2048',
        ]);
        $data=Doctor::find($id);
        $data->doctor_name=$request->input('doctor_name');
        $data->specialization=$request->input('specialization');
        $data->contact=$request->input('contact');
        $data->email=$request->input('email');
        if($request->hasFile('image')){
            $path='asset/storage/images/'.$data->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $fileName=time().$request->file('image')->getClientoriginalName();
            $path=$request->file('image')->storeAS('images',$fileName,'public');
            $datas["image"]='/storage/'.$path;
            $data->image=$fileName;
            $data->update();
        }
           $data->update();     
        return redirect()->route('view')->with('success','updated');
    }
    public function staffedit($id)
    {
        $user=User::find($id);
        return view('admin.staffedit',compact('user'));

    }
    public function staffupdate($id,Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'username'=>'required',
          'image'=>'mimes:jpeg,jpg,png,gif|max:2048',
        ]);
        $data=User::find($id);
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->username=$request->input('username');
        if($request->hasFile('image')){
            $path='asset/storage/images/'.$data->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $fileName=time().$request->file('image')->getClientoriginalName();
            $path=$request->file('image')->storeAS('images',$fileName,'public');
            $datas["image"]='/storage/'.$path;
            $data->image=$fileName;
            $data->update();
        }
           $data->update();     
        return redirect()->route('staffview')->with('success','updated');
    }
    public function staffdelete($id)
    {
        User::find($id)->delete();
        return redirect()->route('staffview')->with('success','deleted');
    }
}



