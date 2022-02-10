<?php

namespace App\Http\Controllers\Website;

use Throwable;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signIn(){
        return view('frontend.pages.signin');
    }


    public function signInList(){
        $signInList = User:: orderBy('id','desc')->paginate(5);
        return view('backend.admin.pages.signedInUsersList',compact('signInList'));
    }




    public function signInStore(Request $request){
        //dd($request->all());
        $request->validate([
            'email'=>'required',
            'password'=>'required',
            'mobile'=>'required',


            ]);
            $imagename = '';

            // for image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // $cv = $request->file('cv');

            $imagename = date('Ymdhms').'.'.$image->getClientOriginalExtension();
            // $cvname = date('Ymdhms').'.'.$image->getClientOriginalExtension();
            // dd($cvname);
            $image->storeAs('/uploads/candidate/',$imagename);
            // $image->storeAs('/uploads/cv/',$cvname);

        }

        $cvname = '';
        // for cv
        if ($request->hasFile('cv')) {
            // $image = $request->file('image');
            $cv = $request->file('cv');

            // $imagename = date('Ymdhms').'.'.$image->getClientOriginalExtension();
            $cvname = date('Ymdhms').'.'.$cv->getClientOriginalExtension();
            // $image->storeAs('/uploads/candidate/',$imagename);
            $cv->storeAs('/uploads/cv/',$cvname);

        }

     try{
         User::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'mobile'=>$request->mobile,
            'address'=>$request->address,
            'image'=>$imagename,
            'cv'=>$cvname,
            'gender'=>$request->gender,


         ]);
        return redirect()->back()->with('message', 'Registration completed!');
      }
         catch(Throwable $throw){
          return redirect()->back()->with('error','Problem!');
         }
     }


//Login and logout

public function login(Request $request)
    {


        $userInfo=$request->except('_token');


        if(Auth::attempt($userInfo)){
            return redirect()->back()->with('message','Successfully Logged in...');
        }
        return redirect()->back()->with('error','Invalid user credentials');

    }


    public function logout()
    {
        Auth::logout();
     return redirect()->route('website')->with('message','Logging out.');
    }
}



