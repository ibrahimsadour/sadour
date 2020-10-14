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
Use App\User;
use Illuminate\Support\Facades\Auth;
class CalendarController extends Controller
{
    
    /**
     * __construct 
     *@todo with this function only the index method page should be shown for normal user
     *@todo isAdmin middleware lets only users with a //specific permission permission to access these resources
     * @return void
     */
    public function __construct() {
        $this->middleware(['auth', 'role:Admin|Editor'])->except('index','show'); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $user_id = $user->id;
        $event = DB::table('calendars')->where('user_id', '=', $user_id )->get();
        return response()->json($event, 200);
     
    }   
    
    /**
     * show
     * @todo to show user events in the page (Allevents)
     * @return void
     */
    public function show()
    {
        if(Auth::check()){
            $user = auth()->user();
            $user_id = $user->id;
            $calendar_event= Calendar::all()->whereIn('user_id',$user_id )->toArray();

            return view('pages.admin.Website_String.Calendar.AlleEevent', compact('calendar_event'));          
        }
           return Redirect::to("/auth/login")->withSuccess('Opps! You do not have access');

    }   

    
    /**
     * store
     * @todo to insert new event to datebase
     * @param  mixed $request
     * @return void
     */
    public function store (request $request)
    {
        $validator = Validator::make($request->all(),[

            'title'    =>  'required',
            'start'     =>  'required',
            'end'     =>  'required',
            'allDay'     =>  'required',
            'textColor' =>   'required',
        ]);


        if($validator->failed())
        {
            Alert::error('Error!',$validator->messages()->first());
            return redirect()->back();
        }
        else
        {
            if(empty($request->eventId)){
                
            $user = auth()->user();
            $user_id = $user->id;
            $event = $user->calender()->create([

                'user_id' =>  $user_id,
                'title'    =>  $request->get('title'),
                'start'     =>  $request->get('start'),
                'end'     =>  $request->get('end'),
                'allDay'     =>  $request->get('allDay'),
                'textColor'     =>  $request->get('textColor'),
                'backgroundColor' =>$request->get('backgroundColor')
                ]);
            
            Alert::success('Good Job!', 'Event created successfully');
            return redirect()->back();

            }else{
                Calendar::where('id',$request->eventId)->update([


                    'title'=>$request->title,
                    'start'=>$request->start,
                    'end'=>$request->end,
                    'allDay'=>$request->allDay,
                    'textColor'=>$request->textColor,
                    'backgroundColor'=>$request->backgroundColor,
                ]);

                Alert::info('Event Updated successfully');
                return redirect()->back();
            }

        }


    }
    

    /**
     * @todo Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Calendar::findOrFail($id);
        $event->delete();

        Alert::error('Event Deleted Successfully');
        return redirect()->back();
    
    }


}