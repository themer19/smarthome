<?php

namespace App\Http\Controllers;

use App\Models\Eq;
use Illuminate\Http\Request;

class EquipementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Eq=eq::all();
        return view ('admin.equipement',compact('Eq'));
    } 

  
        
    
/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // insert donnes dans le modele 
    {
        
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048', 
        ]);
        
        if ($request->hasFile('img')){
            
            $file=$request->file('img');
            $ext=$file->getClientOriginalExtension();
            $filename = uniqid() . '.' . $ext ;
            $file->storeAs('public\eqph',$filename);
            
        }
        else{
            $filename="noimage.png";
        }
        $now=date("Y/m/d");
        $fo=new Eq();
        $fo->name=$request->nom;
        $fo->description=$request->des;
        $fo->prix=$request->prix;

        $fo->image=$filename;
        $fo->datecr=$now;
        $fo->save();
        return back();
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
        $fo=Eq::find($id);
        $fo->name=$request->nom;
        $fo->description=$request->des;
        $fo->prix=$request->prix;


        $fo->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //supp
    {
        $fo=Eq::find($id);
        $fo->delete();
        return back();
    }
}
