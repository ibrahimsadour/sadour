<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Redirect,Response,Session;
Use App\Models\Projects;
use App\Traits\OfferTrait;

// valdatie van de form input wordt in een aparte bestaand toegoeogd
use App\Http\Requests\AdminDashboard\ProjectsRequest;

class ProjectController extends Controller

{
    // Sadour.nl Controller --->
    // ************************

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllProject()
    {
        $Projects = Projects::select('id',
        'photo',
        'name',
        'description',
        'created_at',
        'updated_at'
    )->get(); // return collection

    return view('Projects.projects', compact('Projects'));
    }

    public function getOneProject(Request $request)
    {
        $Projects = Projects::find($request ->project_id);  // search in given table id only

        if (!$Projects)
            return response()->json([
                'status' => false,
                'msg' => 'Projects has not found',
            ]);

        $Projects = Projects::select('id', 'name',  'photo', 'description','created_at')->find($request -> project_id);

        // view all information of the project 
        return view('Projects.OneProject', compact('Projects'));

    }
    // **************************
    // End sadodour.nl Controller 


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Projects = Projects::select('id',
        'photo',
        'name',
        'description',
    )->get(); // return collection

    return view('pages.admin.Website_String.Projects.All', compact('Projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // view form to add new project
        return view('pages.admin.Website_String.Projects.Add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    use OfferTrait;
    public function store(ProjectsRequest $request)
    {
        //save Projects into DB using AJAX

        $file_name =  $this->saveImage($request->photo, 'images/Projects');
        //insert  table Projectss in database
        $Projects = Projects::create([
            'photo' => $file_name,
            'name' => $request->name,
            'description' => $request->description


        ]);

        if ($Projects)
        return response()->json([
            'status' => true,
            'msg' => 'Projects has created'
      
            
        ]);

        else
        return response()->json([
            'status' => false,
            'msg' => 'Projects has not created',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $Projects = Projects::find($request ->project_id);  // search in given table id only

        if (!$Projects)
            return response()->json([
                'status' => false,
                'msg' => 'Projects has not found',
            ]);

        $Projects = Projects::select('id', 'name',  'photo', 'description')->find($request -> project_id);

        // view all information of the project 
        return view('pages.admin.Website_String.Projects.Show', compact('Projects'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $Projects = Projects::find($request ->project_id);  // search in given table id only

        if (!$Projects)
            return response()->json([
                'status' => false,
                'msg' => 'Projects has not found',
            ]);

        $Projects = Projects::select('id', 'name',  'photo', 'description')->find($request -> project_id);

        return view('pages.admin.Website_String.Projects.Edit', compact('Projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Projects = Projects::find($request ->project_id);
        if (!$Projects)
            return response()->json([
                'status' => false,
                'msg' => 'Projects has not updated',
            ]);

        //update data
        $Projects->update($request->all());

        return response()->json([
            'status' => true,
            'msg' => 'Projects has updated',
        ]);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request)
    {
        $Projects = Projects::find($request ->id);   // Offer::where('id','$Projects_id') -> first();

        if (!$Projects)
        return response()->json([

            'status' => false,
            'msg' => 'Projects has not deleted',
            
      
            
        ]);

        $Projects->delete();

        return response()->json([
            'status' => true,
            'msg' => 'Projects has deleted',
            'id'=>$request ->id
        ]);

    }
}
