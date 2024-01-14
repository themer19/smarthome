<?php
namespace App\Http\Controllers;
use App\Models\Eq;
use App\Models\Tech;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  $teches=Tech::all();
        $eqp=Eq::all();
 
        $techs=DB::select('select count(*) as tot,datecr from teches group by datecr');
        $dates=array();
        foreach($techs as $te){
            array_push($dates,$te->datecr);
        }
        $y=array();
        foreach($techs as $te){
            array_push($y,$te->tot);
        }
 
        $eq=DB::select('select count(*) as tot,created_at from eqs group by created_at');
        $eqp=array();
        foreach($eq as $e)
        {
            array_push($eqp,$e->tot);
        }
 
        $nbrtech=count($teches);
        $nbeq=count($eqp);
 
        return view('home',compact('nbrtech','nbeq','teches','dates','y','eqp'));
 
 
     }

    public function adminHome()
    {
        
       $teches=Tech::all();
       $eqp=Eq::all();
       
       

       $techs=DB::select('select count(*) as tot,datecr from teches group by datecr');
       $dates=array();
       foreach($techs as $te){
           array_push($dates,$te->datecr);
       }

       $foo=array();
       foreach($techs as $te){
           array_push($foo,$te->tot);
       }

       $e=DB::select('select count(*) as tot,created_at from eqs group by created_at');
       $eqp=array();
       foreach($e as $c){
           array_push($eqp,$c->tot);
       }
       
       $nbrtech=count($teches);
       $nbeq=count($eqp);
       return view('adminhome',compact('nbrtech','nbeq','dates','foo','eqp'));


       
    }

}

