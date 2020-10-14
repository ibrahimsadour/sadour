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


    /** Sadour.nl Controller
     * Display a listing of the resource.
     * #####################################################################
     * ############## Projects with categorys ##############################
     * #####################################################################
     * here a relationship is made between the table projects and category
     *   with the format of the code I can get the data from the two teble
     * @return \Illuminate\Http\Response
     */
    public function getAllProjects()
    {
        $Projects = Projects::with(['category'=> function($q){

            $q -> select('id','name','description','weergeven');
        }])->where('weergeven','1')->paginate(PAGINATION_COUNT);
        return view('Projects.Pages.categorys_index',compact('Projects'));
    }
    
        
    /**
     * getOneCategory wish her projects
     *
     * @param  mixed $request
     * @return void
     */
    public function getOneCategory(Request $request)
    {


        $categorys = Category::with('Projects')->find($request ->id);
        
        $OneCategoryWithHerProjects  = $categorys ->Projects->where('weergeven',1);

        return view('Projects.Pages.OneCategory',compact('OneCategoryWithHerProjects'));
    }

 
    /**
     * index
     * this to show all category on the admin page
     * @return void
     */
    public function index()
    {
        $categorys = Category::select(
            'id',
            'name',
            'name_url',
            'description',
            'weergeven',
            'created_at',
            'updated_at',
            'title',
            'keywords',
            'description_back'
        )->get(); // return collection

    return view('pages.admin.Website_String.Category.All', compact('categorys'));
    }

    /**
     * Display the specified resource.
     * view all information of the project 
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

        
        return view('pages.admin.Website_String.Category.Show', compact('categorys'));

    }

    /**
     * Show the form for creating a new resource.
     * view form to add new Category
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.admin.Website_String.Category.Add');

    }
  
    /**
     * store
     * this to add new category via admin pages 
     * save Projects into DB using AJAX
     * @param  mixed $request
     * @return void
     */
    public function store(CategoryRequest $request)
    {

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
     * search in given table id only
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $categorys = Category::find($request ->category_id);  

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

        $categorys->update($request->all());

        return response()->json([
            'status' => true,
            'msg' => 'categorys has updated',
        ]);
    
    }
    
    /**
     * destroy to delte one category
     *
     * @param  mixed $request
     * @return void
     */
    public function destroy( Request $request)
    {
        $categorys = Category::find($request ->id);   
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
    
    /**
     * destroyCategoryWithAllProjects
     * this to delet oneCategory with her projects
     * delete all Projects in this category  than delete the category
     * @param  mixed $request
     * @return void
     */
    public function destroyCategoryWithAllProjects( Request $request)
    {
        $categorys = Category::find($request ->id);   
        if (!$categorys)
        return response()->json([

            'status' => false,
            'msg' => 'categorys has not deleted',
            
        ]);

        $categorys ->Projects()->delete();

        $categorys->delete();

        return response()->json([
            'status' => true,
            'msg' => 'categorys has deleted with all her     projects',
            'id'=>$request ->id
        ]);

    }
}
