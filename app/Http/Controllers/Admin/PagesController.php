<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminLoginFromRequest;
use App\Resume;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function dashboard(){
        return view('admin.dashboard');
    }
    
    public function logout(){
        \Auth::logout();
        return redirect()->route('admin-get-login');
    }
    
    public function getUploadResume(){
        return view('admin.upload-resume');
    }
    
    public function postUploadResume(Request $request){
       $file = $request->resume;
       \Storage::disk('local')->put($file->getClientOriginalName(),\File::get($file));
       
       $resume = new Resume();
       $resume->mime = $file->getClientMimeType();
       $resume->original_file_name =  $file->getClientOriginalName();
       
       $resume->save();
       
       return redirect()->route('admin-get-upload-resume')->with('status','Your Resume is uploaded ! It is already to download.');
    }
    
    public function getLogin(){
        return view('admin.login-admin');
    }
    public function postLogin(AdminLoginFromRequest $request){
        if(\Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('admin-dashboard');
        } else {
            return redirect()->route('admin-get-login');
        }
        
    }
}
