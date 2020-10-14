<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Redirect,Response,Session;
Use App\Models\Projects;
Use App\Models\Category;
use App\Traits\OfferTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AdminDashboard\ProjectsRequest;

class ProjectController extends Controller

{

    /**
     * Display a listing of the resource.
     * Sadour.nl Controller
     * search in given table id only
     * view all information of the project 
     * @return \Illuminate\Http\Response
     */
    public function getOneProject(Request $request)
    {
        $Projects = Projects::find($request ->project_id);  

        if (!$Projects)
            return response()->json([
                'status' => false,
                'msg' => 'Projects has not found',
            ]);

        $Projects = Projects::select('id', 'name',  'photo', 'description','created_at')->find($request -> project_id);

        
        return view('Projects.Pages.OneProject', compact('Projects'));

    }



    /**
     * Display a listing of the resource.
     * hier wordt een relatie gemaakt tussen de table projects en category
     * met de formaat van de code kan ik de data van de twee teble halen
     *   #####################################################################
     *   ############## Projects with categorys ##############################
     *   #####################################################################
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   

        $Projects = Projects::with(['category'=> function($q){

            $q -> select('id','name','name_url','description','weergeven');
        }])->get();
        return view('pages.admin.Website_String.Projects.All', compact('Projects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $Categorys = Category::select('id',
            'id',
            'name',
            'weergeven',
        )->get(); // return collecti
        // view form to add new project
        return view('pages.admin.Website_String.Projects.Add', compact('Categorys'));

    }

    /**
     * Store a newly created resource in storage.
     * save Projects into DB using AJAX
     * insert  table Projectss in database
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    use OfferTrait;
    public function store(ProjectsRequest $request)
    {
 
        $file_name =  $this->saveImage($request->photo, 'images/Projects');

        $Projects = Projects::create([
            'photo' => $file_name,
            'name' => $request->name,
            'name_url' => $request->name_url,
            'description' => $request->description,
            'weergeven' => $request->weergeven,
            'category_id' => $request->category_id

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
     * search in given table id only
     * view all information of the project 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $Projects = Projects::find($request ->project_id);  

        if (!$Projects)
            return response()->json([
                'status' => false,
                'msg' => 'Projects has not found',
            ]);

        $Projects = Projects::select('id', 'name','name_url','photo', 'description','weergeven')->find($request -> project_id);

        return view('pages.admin.Website_String.Projects.Show', compact('Projects'));

    }

    /**
     * Show the form for editing the specified resource.
     * search in given table id only
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $Projects = Projects::find($request ->project_id);  

        if (!$Projects)
            return response()->json([
                'status' => false,
                'msg' => 'Projects has not found',
            ]);

            $Projects = Projects::with(['category'=> function($q){

                $q -> select('id','name','description','weergeven');
            }])->find($request -> project_id);
            $allCategorys = Category::select('id','name')->get();

        return view('pages.admin.Website_String.Projects.Edit', compact('Projects','allCategorys'));
    }

    /**
     * Update the specified resource in storage.
     * //update data
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

        
        $Projects->update($request->all());

        return response()->json([
            'status' => true,
            'msg' => 'Projects has updated',
        ]);
    
    }

    /**
     * Remove the specified resource from storage.
     * @file_exists check if the image indeed exists
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request)
    {
        $Projects = Projects::find($request ->id);   
        $image_path = public_path().'\images\Projects/'.$Projects->photo;
        if(file_exists($image_path)) 
        unlink($image_path);
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
