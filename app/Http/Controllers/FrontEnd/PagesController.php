<?php

namespace App\Http\Controllers\FrontEnd;

use App\Resume;
use App\WorkExperience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $workLeft = DB::table('work_experiences')->where('position','0')->orderByDesc('id')->get();
        $workRight = DB::table('work_experiences')->where('position','1')->orderByDesc('id')->get();
        return view('frontend.index',compact('workLeft','workRight'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function page404()
    {
        return view('errors.404');
    }
    
    public function downloadResume()
    {
        //not yet, please create upload resume first
        $resume = Resume::all()->last();
        $pathToFile = base_path(). '/storage/app/'.$resume->original_file_name;
        $date = str_replace('-', '_',$resume->created_at->toDateString());
        $name = $date . '_' . $resume->original_file_name;
        return response()->download($pathToFile, $name);
    }
}
