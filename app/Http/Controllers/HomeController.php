<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\greenhouse;
use App\section;
use App\plant;
use Auth;
use App\User;
use  ConsoleTVs\Charts\Facades\Charts;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
          */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
         $greenhouses = user::find(Auth::user()->id)->greenhouse()->paginate(3);
        
        return view('home',compact('greenhouses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_GH');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $greenhouse = new greenhouse;
        $greenhouse->name = $request->name;
        $greenhouse->user_id = Auth::user()->id;
        $greenhouse->address = $request->address;
        $greenhouse->sections = $request->sections;
        $greenhouse->plants = $request->plants;
        $greenhouse->save();

       return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function section(Request $request)
    {

         $section = new section;
         $section->greenhouse_id = $request->greenhouse_id;
         $section->save();

          
          return redirect('home/'.$request->greenhouse_id.'/visit');
         
    }

    public function visit($id)
    {
                $greenhouses = user::find(Auth::user()->id)->greenhouse;
               if( $greenhouse = $greenhouses->find($id)){
                          $sections  = $greenhouse->section()->paginate(9); 
                         return view('visit',compact('greenhouse','sections'));
            
                 }else{
                          return redirect('home');      
                      }


     }


     public function visitPlant($id1, $id2)
    {
          $greenhouses = user::find(Auth::user()->id)->greenhouse;
          $greenhouse = $greenhouses->find($id1);
          $section = $greenhouse->section->find($id2);
          $plants = $section->plant()->paginate(4);


         return view('treat',compact('section','plants','id1'));

     }

     public function treatPlant($id1, $id2, $id3)
    {
          $greenhouses = user::find(Auth::user()->id)->greenhouse;
          $greenhouse = $greenhouses->find($id1);
          $section = $greenhouse->section->find($id2);
          $plant = $section->plant->find($id3);

          $chart1 = Charts::create('line','highcharts')
                ->title('Water Level')
                ->labels(['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'])
                ->elementlabel('Water Level')
                ->values(unserialize($plant->water_level))
                ->dimensions(21,21)
                ->width(10)
                ->responsive(true);
  
           $chart2 = Charts::create('line','highcharts')
                ->title('Fertilizer Level')
                ->labels(['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'])
                ->elementlabel('Fertilizer Level')
                ->values(unserialize($plant->fertilizer_level))
                ->dimensions(21,21)
                ->responsive(true);               

           $chart3 = Charts::create('line','highcharts')
                ->title('Temperature Level')
                ->labels(['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'])
                ->elementlabel('Temperature Level')
                ->values(unserialize($plant->temperature_level))
                ->dimensions(21,21)
                ->responsive(true); 

         return view('treat_Plant',compact('chart1','chart2','chart3'));

     }


    public function createPlant($id1,$id2)
    {       
          $greenhouses = user::find(Auth::user()->id)->greenhouse;
          $greenhouse = $greenhouses->find($id1);
          $section = $greenhouse->section->find($id2);
          $plants = $section->plant;
          $count = count($plants);
          if($count < 10){
            return view('create_Plant',compact('id1','id2'));
            }else{
                Session::flash('message', 'You cant add more plants to this section!'); 
                Session::flash('alert-class', 'alert-danger');
               return redirect('home/'.$id1.'/visit/'.$id2); 
            }
     }


    public function storePlant(Request $request,$id1,$id2)
    {
          
         $plant = new plant;
         $plant->name = $request->name;
         $plant->type = $request->type;
         $plant->security_key = $request->sec_key;
         $plant->section_id = $id2;
         $array = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
         $serialized_array = serialize($array); 
         $plant->water_level = $serialized_array;
         $plant->fertilizer_level = $serialized_array;
         $plant->temperature_level = $serialized_array;
         $plant->save();
          
          return redirect('home/'.$id1.'/visit/'.$id2);
         
    }

    public function api($id1,$id2,$id3,$id4)
    {
            $plant = plant::find($id1);

            $serialized_array1 = $plant->water_level;
            $serialized_array2 = $plant->fertilizer_level;
            $serialized_array3 = $plant->temperature_level;
            $unserialized_array1 = unserialize($serialized_array1);
            $unserialized_array2 = unserialize($serialized_array2);
            $unserialized_array3 = unserialize($serialized_array3);           
            $inserted1 = $id2; 
            $inserted2 = $id3; 
            $inserted3 = $id4;

            array_shift($unserialized_array1);
            array_shift($unserialized_array2);
            array_shift($unserialized_array3);
            array_splice( $unserialized_array1, 14, 0, $inserted1 );
            array_splice( $unserialized_array2, 14, 0, $inserted2 );
            array_splice( $unserialized_array3, 14, 0, $inserted3 );

            $plant->water_level = serialize($unserialized_array1); 
            $plant->fertilizer_level = serialize($unserialized_array2);
            $plant->temperature_level = serialize($unserialized_array3);
            $plant->save();

            return "ok";
      
    }
}
