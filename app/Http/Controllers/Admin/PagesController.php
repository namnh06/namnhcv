<?php

namespace App\Http\Controllers\Admin;

use App\EducationExperience;
use App\Http\Requests\AdminLoginFromRequest;
use App\Http\Requests\EducationExperienceFormRequest;
use App\Http\Requests\WorkExperienceFormRequest;
use App\Resume;
use App\WorkExperience;
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
    
    public function getWorkExperience(){
        return view('admin.work-experience');
    }
    
    public function postWorkExperience(WorkExperienceFormRequest $request){
        $work = new WorkExperience();
        $work->start = $request->start;
        $work->end = $request->end;
        $work->company = $request->company;
        $work->job_title = $request->job_title;
        $work->description = $request->description;
        $work->reference = $request->reference;
        $work->phone = $request->phone;
        $work->position = $request->position;
        
        $work->save();
        
        return redirect()->route('admin-get-work-experience')->with('status','Add new successfully !');
    }
    
    public function getEducationExperience(){
        return view('admin.education-experience');
    }
    
    public function postEducationExperience(EducationExperienceFormRequest $request){
        $edu = new EducationExperience();
        $edu->start = $request->start;
        $edu->end = $request->end;
        $edu->certificate = $request->certificate;
        $edu->school = $request->school;
        $edu->position = $request->position;
        
        $edu->save();
        
        return redirect()->route('admin-get-education-experience')->with('status','Add new successfully !');
    }
    
}
