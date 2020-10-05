<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Category;
Use App\Models\Projects;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AdminDashboard\CategoryRequest;

class CategoryController extends Controller
{


    // Sadour.nl Controller --->

    // ************************
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllProjects()
    {
        #####################################################################
        ############## Projects with categorys ##############################
        #####################################################################
        // hier wordt een relatie gemaakt tussen de table projects en category
        // met de formaat van de code kan ik de data van de twee teble halen

        $Projects = Projects::with(['category'=> function($q){

            $q -> select('id','name','description','weergeven');
        }])->where('weergeven','1')->paginate(10);
        return view('Projects.Pages.categorys_index',compact('Projects'));
    }
    
    
    public function getOneCategory(Request $request)
    {


        $categorys = Category::with('Projects')->find($request ->id);
        
        $OneCategoryWithHerProjects  = $categorys ->Projects->where('weergeven','1');
        // foreach($AllProjects as $OneProject){
          
        // }
        // dd($categorys);

        return view('Projects.Pages.OneCategory',compact('OneCategoryWithHerProjects'));
    }

    // **************************

    // End sadodour.nl Controller 

    // this to show all category on the admin page 
    public function index()
    {
        $categorys =  DB::table('category')->get();

    return view('pages.admin.Website_String.Category.All', compact('categorys'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $categorys = Category::find($request ->category_id);  // search in given table id only

        if (!$categorys)
            return response()->json([
                'status' => false,
                'msg' => 'categorys has not found',
            ]);

        $categorys = Category::select('id', 'name','name_url','weergeven','description','title','keywords','description_back')->find($request -> category_id);

        // view all information of the project 
        return view('pages.admin.Website_String.Category.Show', compact('categorys'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // view form to add new Category
        return view('pages.admin.Website_String.Category.Add');

    }

    // this to add new category via admin pages
    public function store(CategoryRequest $request)
    {
        //save Projects into DB using AJAX
        $categorys = Category::create([
            'name' => $request->name,
            'name_url' => $request->name_url,
            'weergeven' => $request->weergeven,
            'description'=> $request->description,
            'title'=> $request->title,
            'keywords'=> $request->keywords,
            'description_back'=> $request->description_back



        ]);

        if ($categorys)
        return response()->json([
            'status' => true,
            'msg' => 'Category has created'
      
            
        ]);

        else
        return response()->json([
            'status' => false,
            'msg' => 'Category has not created',
        ]);  
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $categorys = Category::find($request ->category_id);  // search in given table id only

        if (!$categorys)
            return response()->json([
                'status' => false,
                'msg' => 'categorys has not found',
            ]);

        $categorys = Category::select('id', 'name','name_url',  'weergeven','description','title','keywords','description_back')->find($request -> category_id);

        return view('pages.admin.Website_String.Category.Edit', compact('categorys'));
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
        $categorys = Category::find($request ->category_id);
        if (!$categorys)
            return response()->json([
                'status' => false,
                'msg' => 'categorys has not updated',
            ]);

        //update data
        $categorys->update($request->all());

        return response()->json([
            'status' => true,
            'msg' => 'categorys has updated',
        ]);
    
    }

    public function destroy( Request $request)
    {
        $categorys = Category::find($request ->id);   // Offer::where('id','$categorys_id') -> first();
        if (!$categorys)
        return response()->json([

            'status' => false,
            'msg' => 'categorys has not deleted',
            
      
            
        ]);

        $categorys->delete();

        return response()->json([
            'status' => true,
            'msg' => 'categorys has deleted',
            'id'=>$request ->id
        ]);

    }

    public function destroyCategoryWithAllProjects( Request $request)
    {
        $categorys = Category::find($request ->id);   // Offer::where('id','$categorys_id') -> first();
        if (!$categorys)
        return response()->json([

            'status' => false,
            'msg' => 'categorys has not deleted',
            
      
            
        ]);

            // $image_path = public_path().'\images\Projects/'.$categorys->Projects->photo;
            // if(file_exists($image_path)) // check if the image indeed exists
            // unlink($image_path);
        // delete all Projects in this category 
        $categorys ->Projects()->delete();

        // than delete the category
        $categorys->delete();

        return response()->json([
            'status' => true,
            'msg' => 'categorys has deleted with all her     projects',
            'id'=>$request ->id
        ]);

    }
}
