<?php
namespace App\Http\Controllers\Ervaring;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator,Redirect,Response,Session;
Use App\Models\Ervaring;
use App\Http\Requests\AdminDashboard\ErvaringRequest;


class ErvaringUsersController extends Controller
{

    /**
     * __construct 
     * @todo with this function only the index method page should be shown for normal user
     * @todo  isAdmin middleware lets only users with a //specific permission permission to access these resources
     * @return void
     */
    public function __construct() {
        $this->middleware(['auth', 'role:Admin|Editor'])->except('index','show'); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){

            $default_lang = get_default_lang();
            $experiences = Ervaring::where('translation_lang', $default_lang)->selection()->get();

            return view('pages.admin.Website_String.Ervaring.index', compact('experiences'));             
        }
           return Redirect::to("/auth/login")->withSuccess('Opps! You do not have access');


   
    }   
        
    /**
     * show 
     *@todo  to show one experince in the page
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)

    {   
        //get specific categories and its translations
        $experiences = Ervaring::with('Experiences')
        ->selection()
        ->find($id);

        if (!$experiences)
            return redirect()->route('admin.experience.index')->with(['error' => 'This section does not exist ']);

        return view('pages.admin.Website_String.Ervaring.ShowErvaring', compact('experiences', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.Website_String.Ervaring.add');
    }
    
    /**
     * store
     * @method Valedtion =>ErvaringRequest
     * @todo to insert new experience to datebase
     * @param  mixed $request
     * @return void
     */
    public function store(ErvaringRequest $request)
    {

        try {


            //  veranderen van object(array) naar collection with deze regel
            $experiences = collect($request->experience);
            // return $hobbies;

            /*
            1 - ik haal alle talen
            2- taal splitsen op de basis van de (defult language)
            3 - slaa eerste de (defult languag op)
            4 - slaa de rest van de talen op
            translation_lang (ar -en-nl-uk) enz..
            translation_of : de vertalen van de eeste toegoegd items
            
            Bijvoorbeeld : in de form voeg ik de foto daarna de name in bepalde taal 
            en de tweede naam is de vertaling van de eerste naam.
            */
            $filter = $experiences->filter(function ($value, $key) {
                return $value['abbr'] == get_default_lang();
            });

            // veranderen van object naar array
            $default_experience = array_values($filter->all()) [0];


            DB::beginTransaction(); 
            
            //Deze gemaakt omdat meer dan insert proces heb in hier
            ### try {
            ### DB::beginTransaction();
            ### code hier
            ### DB::commit();
            ### } catch (\Exception $ex) {
            ### DB::rollback();
            ### }


            $default_experience_id = Ervaring::insertGetId([
                'translation_lang' => $default_experience['abbr'],
                'translation_of' => 0,
                'company_name' => $default_experience['company_name'],
                'slug' => $default_experience['slug'],
                'place' => $default_experience['place'],
                'period' => $default_experience['period'],
                'description' => $default_experience['description'],
            ]);

            $all_experiences = $experiences->filter(function ($value, $key) {
                return $value['abbr'] != get_default_lang();
            });


            if (isset($all_experiences) && $all_experiences->count()) {

                $experiences_arr = [];
                foreach ($all_experiences as $experience) {
                    $experiences_arr[] = [
                        'translation_lang' => $experience['abbr'],
                        'translation_of' => $default_experience_id,
                        'company_name' => $experience['company_name'],
                        'slug' => $experience['slug'],
                        'place' => $experience['place'],
                        'period' => $experience['period'],
                        'description' => $experience['description'],
                    ];
                }

                Ervaring::insert($experiences_arr);
            }

            DB::commit();

            return redirect()->route('admin.experience.index')->with('success', 'Data Added');

        } catch (\Exception $ex) {
            return $ex;

            DB::rollback();
            return redirect()->route('admin.experience.index')->with('success', 'Something went wrong, please try again later');

        }

    }
       
    /**
     * edit 
     * @todo to show edit form
     *
     * @param  mixed $id
     * @return void
     */
    public function edit($id)
    {
       //get specific categories and its translations
       $experiences = Ervaring::with('Experiences')
       ->selection()
       ->find($id);

       if (!$experiences)
           return redirect()->route('admin.experience.index')->with(['error' => 'This section does not exist ']);

        return view('pages.admin.Website_String.Ervaring.EditErvaring', compact('experiences', 'id'));
    }
        
    /**
     * update
     * @todo to edit the experience
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(ErvaringRequest $request, $id)
    {
        try {
            $experiences = Ervaring::find($id);

            //  return $experiences;
            if (!$experiences)
                return redirect()->route('admin.experience.index')->with(['error' => 'This section does not exist ']);
            // update date

            $experience = array_values($request->experience) [0];

            if (!$request->has('experience.0.active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);

                Ervaring::where('id', $id)->update([
                'company_name' => $experience['company_name'],
                'slug' => $experience['slug'],
                'place' => $experience['place'],
                'period' => $experience['period'],
                'description' => $experience['description'],
                'active' => $request->active,
            ]);

            return redirect()->route('admin.experience.index')->with('success', 'Data Updated');

        }catch(\Exception $ex) {
            // return $ex;
            return redirect()->route('admin.experience.index')->with('success', 'Something went wrong, please try again later');

        }

    
    }
    
    /**
     * @method destroy
     * @todo to remove experience
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {

        try {

            $experience = Ervaring::find($id);

            if (!$experience)
            return redirect()->route('admin.experience.index')->with(['error' => 'This section does not exist ']);
            // update date
            
           #Delet all translation of the experience
           $experience -> Experiences() -> delete();
        
           #delet hobby
           $experience->delete();

           return redirect()->route('admin.experience.index')->with(['success' => 'Data Deletd']);

        }catch (\Exception $ex) {

            return redirect()->route('admin.experience.index')->with('success', 'Something went wrong, please try again later');

        }

    }

    public function changeStatus($id)
    {
        try {
            $experience = Ervaring::find($id);
            if (!$experience)
                return redirect()->route('admin.experience.index')->with(['error' => 'This section does not exist ']);

           $status =  $experience -> active  == 0 ? 1 : 0;

           $experience -> update(['active' =>$status ]);

            return redirect()->route('admin.experience.index')->with(['success' => 'Status changed successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.experience.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

}