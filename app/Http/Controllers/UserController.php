<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list(){
        $users =User:: all();
        return view('admin.pages.list',compact('users'));
    }

    public function create(){
        return view('admin.pages.create');
    }

    public function store(Request $request){

        $filename="";
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        //dd('ok');  
         //User validation
            
        //  $request->validate([
        //     'name'=>'required',
        //     'description'=>'required',
        //  ]);

         //dd($request->all());
         User::create([
            'name'=>$request->name,
            'date'=>$request->date,
            'image'=>$filename,

        ]);
        return redirect()->route('user.list')->with('success','User Add successfully..');
    } 

}