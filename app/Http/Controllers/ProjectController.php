<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use DB;
use App\Models\Project;



class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('projects.index', 
    [
        'projects' => Project::latest('updated_at')->paginate()
    ]);
    }   


    public function show($id){

        return view('projects.show',[
            'projet' =>  Project::findOrFail($id)
        ]);
       
    }


}
