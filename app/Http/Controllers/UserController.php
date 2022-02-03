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
            
         $request->validate([
            'name'=>'required',
            'date'=>'required',
         ]);

        //  dd($request->all());
         User::create([
            'name'=>$request->name,
            'date'=>$request->date,
            'image'=>$filename,

        ]);
        return redirect()->route('user.list')->with('success','User Add successfully..');
    } 
    public function edit($id)
    {
         // dd($id);
        $user = User::find($id);
        //dd(user)
        if($user){
            return view('admin.pages.edit',compact('user'));
        }
    }

    public function update(Request $request,$id)
        {
            $filename="";
            if ($request->hasFile('image'))
            {
                $file=$request->file('image');
                $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
                $file->storeAs('/uploads',$filename);
            }
            // dd($request->all());
            // dd($id);
            $user = User::find($id);
            // dd($user);
            if ($user) {
                $user->update([
                'name'=>$request->name,
                'date'=>$request->date,
                'image'=>$filename,
            ]); 
            return redirect()->route('user.list')->with('success','User updated successfully!');
   }
}
        public function delete($id)
        {
            User::find($id)->delete();
            return redirect()->route('user.list')->with('msg','User deleted successfully!');

        }

        public function view($id)
  {
    $user=User::find($id);
    return view ('admin.pages.view',compact('user'));
  }

}