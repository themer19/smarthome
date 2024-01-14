<?php

namespace App\Http\Controllers;

use App\Models\Eq;
use App\Models\Tech;
use App\Models\Rec;
use DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB as FacadesDB;

class IndexController extends Controller
{
    public function index(){
        $teches=Tech::all();
        $eq=Eq::all();
        $rec=Rec::all();

        return view ('welcome',compact('teches','eq','rec'));

    }
    public function about(){
       
        $teches=Tech::all();

        return view ('about',compact('teches'));

    }
    public function Equip(){
       
        $eq=Eq::all();


        return view ('Equip',compact('eq'));

    }
    public function contact(){
       
        return view ('contact');

    }
    public function reclamation(){
       
        return view ('client/reclamation',);

    }
  
   
    
}
