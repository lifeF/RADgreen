<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\greenhouse;
use App\section;
use App\plant;
use Auth;
use App\User;

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
          $plants = $section->plant()->paginate(3);

         return view('treat',compact('section','plants','id1'));

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
         $plant->section_id = $id2;
         $plant->name = $request->name;
         $plant->water_level = $request->water_level;
         $plant->fertilizer_level = $request->fertilizer_level;
         $plant->save();
          
          return redirect('home/'.$id1.'/visit/'.$id2);
         
    }


}
