<?php
namespace App\Http\Controllers\Hobbys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\Models\Hobbys;
use App\Http\Requests\AdminDashboard\HobbysRequest;


class HobbysController extends Controller
{

    /**
     * @method __construct 
     * @todo with this function only the index method page should be shown for normal user
     * @todo isAdmin middleware lets only users with a //specific permission permission to access these resources
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
        $default_lang = get_default_lang();
        $hobbies = Hobbys::where('translation_lang', $default_lang)
            ->selection()
            ->get();
            // return$hobbies;
        return view('pages.admin.Website_String.Hobbys.index', compact('hobbies'));

   
    }   
        
    /**
     * @method show
     * @todo show to show on hobby
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {
        //get specific categories and its translations
        $hobbies = Hobbys::with('Hobbies')
        ->selection()
        ->find($id);
            // return $hobbies;
            if (!$hobbies)
                return redirect()->route('admin.hobbys.index')->with(['error' => 'This section does not exist ']);

        return view('pages.admin.Website_String.Hobbys.show', compact('hobbies', 'id'));
    }

    /**
     * @method create
     * @todo Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.Website_String.Hobbys.Add');
    }
    
    /**
     * @method store
     * @method validation => HobbysRequest
     * @todo to inser new hobby to datebase
     * @param  mixed $request
     * @return void
     */
    public function store(HobbysRequest $request)
    {

        try {


            //  veranderen van object(array) naar collection with deze regel
            $hobbies = collect($request->hobby);
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
            $filter = $hobbies->filter(function ($value, $key) {
                return $value['abbr'] == get_default_lang();
            });

            // veranderen van object naar array
            $default_hobby = array_values($filter->all()) [0];


            DB::beginTransaction(); 
            
            //Deze gemaakt omdat meer dan insert proces heb in hier
            ### try {
            ### DB::beginTransaction();
            ### code hier
            ### DB::commit();
            ### } catch (\Exception $ex) {
            ### DB::rollback();
            ### }


            $default_hobby_id = Hobbys::insertGetId([
                'translation_lang' => $default_hobby['abbr'],
                'translation_of' => 0,
                'name' => $default_hobby['name'],
                'slug' => $default_hobby['slug'],
            ]);

            $all_hobbies = $hobbies->filter(function ($value, $key) {
                return $value['abbr'] != get_default_lang();
            });


            if (isset($all_hobbies) && $all_hobbies->count()) {

                $hobbies_arr = [];
                foreach ($all_hobbies as $hobby) {
                    $hobbies_arr[] = [
                        'translation_lang' => $hobby['abbr'],
                        'translation_of' => $default_hobby_id,
                        'name' => $hobby['name'],
                        'slug' => $hobby['slug'],
                    ];
                }

                Hobbys::insert($hobbies_arr);
            }

            DB::commit();

            return redirect()->route('admin.hobbys.index')->with('success', 'Data Added');

        } catch (\Exception $ex) {
            return $ex;

            DB::rollback();
            return redirect()->route('admin.hobbys.index')->with('success', 'Something went wrong, please try again later');

        }
    }
       
    /**
     * @method edit
     * @todo to show edit form
     * @param  mixed $id
     * @return void
     */
    public function edit($id)
    {

        //get specific categories and its translations
        $hobbies = Hobbys::with('Hobbies')
        ->selection()
        ->find($id);
        // return $hobbies;
        if (!$hobbies)
        return redirect()->route('admin.hobbys.index')->with(['error' => 'This section does not exist ']);

        return view('pages.admin.Website_String.hobbys.edit', compact('hobbies'));
    

    }    
    /**
     * @method update
     * @todo to edit the hobby
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(HobbysRequest $request, $id)
    {
        try {
            $hobbies = Hobbys::find($id);

            if (!$hobbies)
                return redirect()->route('admin.hobbys.index')->with(['error' => 'This section does not exist ']);
            // update date

            $hobby = array_values($request->hobby) [0];

            if (!$request->has('hobby.0.active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);

            Hobbys::where('id', $id)->update([
                'name' => $hobby['name'],
                'slug' => $hobby['slug'],
                'active' => $request->active,
            ]);

            return redirect()->route('admin.hobbys.index')->with('success', 'Data Updated');

        }catch(\Exception $ex) {
            return $ex;
            return redirect()->route('admin.hobbys.index')->with('success', 'Something went wrong, please try again later');

        }
    }
    
    /**
     * @method destroy
     * @todo to remove the hobby
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        try {

            $hobbies = Hobbys::find($id);

            if (!$hobbies)
            return redirect()->route('admin.hobbys.index')->with(['error' => 'This section does not exist ']);
            // update date
            
           #Delet all translation of the hobbies
           $hobbies -> Hobbies() -> delete();
        
           #delet hobby
           $hobbies->delete();

           return redirect()->route('admin.hobbys.index')->with(['success' => 'Data Deletd']);

        }catch (\Exception $ex) {

            return redirect()->route('admin.hobbys.index')->with('success', 'Something went wrong, please try again later');

        }
    }

    public function changeStatus($id)
    {
        try {
            $maincategory = MainCategory::find($id);
            if (!$maincategory)
                return redirect()->route('admin.maincategories')->with(['error' => 'هذا القسم غير موجود ']);

           $status =  $maincategory -> active  == 0 ? 1 : 0;

           $maincategory -> update(['active' =>$status ]);

            return redirect()->route('admin.maincategories')->with(['success' => ' تم تغيير الحالة بنجاح ']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.maincategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
   


}