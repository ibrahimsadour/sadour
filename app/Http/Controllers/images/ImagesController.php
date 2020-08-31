<?php
namespace App\Http\Controllers\images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\image;


class ImagesController extends Controller
{



  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['images'] = image::orderBy('id','desc')->paginate(10);
   
        return view('images.list',$data);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('images.create');
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $img_users = new image ();

        $this->validate($request, [
            'title' => 'required',
            'image_code' => 'required',
            'image' => 'required|max:2048',
            'description' => 'required',
        ]);
        
        $img_users = new image([
        'title'  => $request->get('title'),
        'image_code'  => $request->get('image_code'),
        'description'  => $request->get('description'),
        ]);

 

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //get image extension
            $filename = time() . '.' . $extension;
            $file->move('public/images/', $filename);  // upload path
            $img_users->image = $filename;
            

        }
            // $img_users-save();

            image::insert($request->all());
    
            return redirect()->route('image.create')->with('success','Great! image added successfully');


    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
         
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $where = array('id' => $id);
        $data['image_info'] = image::where($where)->first();
 
        return view('images.edit', $data);
    }
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image_code' => 'required',
            'description' => 'required',
        ]);
         
        $update = [
            
            'title' => $request->title,
            'description' => $request->description
        ];
 
        if ($files = $request->file('image')) {
           $destinationPath = 'public/image/'; // upload path
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $update['image'] = "$profileImage";
        }
         
        $update['title'] = $request->get('title');
        $update['image_code'] = $request->get('image_code');
        $update['description'] = $request->get('description');
 
        image::where('id',$id)->update($update);
   
        return Redirect::to('image')->with('success','Great! image updated successfully');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        image::where('id',$id)->delete();
   
        return Redirect::to('image')->with('success','image deleted successfully');
    }
    

}