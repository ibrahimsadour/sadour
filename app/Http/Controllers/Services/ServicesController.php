<?php
namespace App\Http\Controllers\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\Models\Services;
use App\Http\Requests\AdminDashboard\ServiceRequest;


class ServicesController extends Controller
{


    /**
     * @method __construct 
     * @todo with this function only the index method page should be shown for normal user
     * @todo isAdmin middleware lets only users with a //specific permission permission to access these resources
     * @return void
     */

    public function __construct()
    {
        $this->middleware(['role:Admin|Editor'])->except('index','show');;
    }

    /**
     * @todo Display a listing of the resource.
     * @param Services get all array waht i doe
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $default_lang = get_default_lang();
        $services = Services::where('translation_lang', $default_lang)
            ->selection()
            ->get();
            // return $services;
        return view('pages.admin.Website_String.Services.index', compact('services'));
    }   
        
    /**
     * @method show
     *
     * @param  mixed $website_watikdoe return one itmes
     * @return void
     */
    public function show($id)
    {
        //get specific categories and its translations
        $services = Services::with('Services')
        ->selection()
        ->find($id);
            // return $services;
            if (!$services)
                return redirect()->route('admin.services.index')->with(['error' => 'This section does not exist ']);

        return view('pages.admin.Website_String.Services.show', compact('services', 'id'));
    }

    /**
     * @todo Show the form for creating a new resource.
     *  @todo to inser the new info to database
     * @return \Illuminate\Http\redirect
     */
    public function create()
    {
        return view('pages.admin.Website_String.Services.Add');
    }
    
    /**
     * store
     *@todo to inser data
     * @param  mixed $request
     * @return void
     */
    public function store(ServiceRequest $request)
    {

        try {


            //  veranderen van object(array) naar collection with deze regel
            $services = collect($request->service);
            
            // return $services;

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
            $filter = $services->filter(function ($value, $key) {
                return $value['abbr'] == get_default_lang();
            });

            // veranderen van object naar array
            $default_service = array_values($filter->all()) [0];


            DB::beginTransaction(); 
            
            //Deze gemaakt omdat meer dan insert proces heb in hier
            ### try {
            ### DB::beginTransaction();
            ### code hier
            ### DB::commit();
            ### } catch (\Exception $ex) {
            ### DB::rollback();
            ### }


            $default_service_id = Services::insertGetId([
                'translation_lang' => $default_service['abbr'],
                'translation_of' => 0,
                'titel' => $default_service['titel'],
                'slug' => $default_service['slug'],
                'description' => $default_service['description'],

            ]);

            $all_services = $services->filter(function ($value, $key) {
                return $value['abbr'] != get_default_lang();
            });


            if (isset($all_services) && $all_services->count()) {

                $services_arr = [];
                foreach ($all_services as $service) {
                    $services_arr[] = [
                        'translation_lang' => $service['abbr'],
                        'translation_of' => $default_service_id,
                        'titel' => $service['titel'],
                        'slug' => $service['slug'],
                        'description' => $service['description'],
                    ];
                }

                Services::insert($services_arr);
            }

            DB::commit();

            return redirect()->route('admin.services.index')->with('success', 'Data Added');

        } catch (\Exception $ex) {
            return $ex;

            DB::rollback();
            return redirect()->route('admin.services.index')->with('success', 'Something went wrong, please try again later');

        }
    }
       
    /**
     * @method edit
     * @todo  show edit form
     * @param  mixed $id
     * @return void
     */
    public function edit($id)
    {
    
        //get specific categories and its translations
        $services = Services::with('Services')
        ->selection()
        ->find($id);
            // return $services;
            if (!$services)
                return redirect()->route('admin.services.index')->with(['error' => 'This section does not exist ']);

        return view('pages.admin.Website_String.Services.edit', compact('services', 'id'));
}    
    /**
     * update
     * @todo to edit the info
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(ServiceRequest $request, $id)
    {
        try {
            $services = Services::find($id);

            if (!$services)
                return redirect()->route('admin.services.index')->with(['error' => 'This section does not exist ']);
            // update date

            $service = array_values($request->service) [0];

            if (!$request->has('service.0.active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);

            Services::where('id', $id)->update([
                'titel' => $service['titel'],
                'slug' => $service['slug'],
                'description' => $service['description'],
                'active' => $request->active,
            ]);

            return redirect()->route('admin.services.index')->with('success', 'Data Updated');

        }catch(\Exception $ex) {
            return $ex;
            return redirect()->route('admin.services.index')->with('success', 'Something went wrong, please try again later');

        }

    }
    
    /**
     * destroy
     * @todo to delet the info
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        
        try {

            $services = Services::find($id);

            if (!$services)
            return redirect()->route('admin.services.index')->with(['error' => 'This section does not exist ']);
            // update date
            
           #Delet all translation of the services
           $services -> Services() -> delete();
        
           #delet hobby
           $services->delete();

           return redirect()->route('admin.services.index')->with(['success' => 'Data Deletd']);

        }catch (\Exception $ex) {

            return redirect()->route('admin.services.index')->with('success', 'Something went wrong, please try again later');

        }
    }

    public function changeStatus($id)
    {
        try {
            $services = Services::find($id);
            if (!$services)
                return redirect()->route('admin.services.index')->with(['error' => 'This section does not exist ']);

           $status =  $services -> active  == '0' ? '1' :'0';
        //    return $status;

           $services->update(['active' =>$status ]);

            return redirect()->route('admin.services.index')->with(['success' => 'Status changed successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.services.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

}