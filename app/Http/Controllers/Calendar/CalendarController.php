<?php
namespace App\Http\Controllers\Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\Models\Calendar;
use App\Http\Requests\AdminDashboard\CalendarRequest;
use Alert;
class CalendarController extends Controller
{
    //met deze functie mag alle de index method pagina getoond worden voor gewoon gebruiker 

    public function __construct() {
        $this->middleware(['auth', 'role:Admin|Editor'])->except('index','show','create'); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $event = Calendar::latest()->get();
   
        return response()->json($event, 200);
     
    }   

    public function show()
    {


    }   

    public function create ( $request)
    {



    }

    public function store (request $request)
    {
        $validator = Validator::make($request->all(),[

            'title'    =>  'required',
            'start'     =>  'required',
            'end'     =>  'required',
            'allDay'     =>  'required',
            'textColor' =>   'required'
        ]);



        if($validator->failed())
        {
            Alert::error('Error!',$validator->messages()->first());
            return redirect()->back();
        }
        else
        {
            if(empty($request->eventId)){
                
            Calendar::create($request->all());
            Alert::success('Success', 'Event created successfully');
            return redirect()->back();

            }else{
                Calendar::where('id',$request->eventId)->update([


                    'title'=>$request->title,
                    'start'=>$request->start,
                    'end'=>$request->end,
                    'allDay'=>$request->allDay,
                    'textColor'=>$request->textColor,
                ]);

                Alert::success('Success', 'Event Updated successfully');
                return redirect()->back();
            }

        }


    }
    
 


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {



        
    }


}