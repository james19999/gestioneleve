<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClasseController extends Controller
{
    public function index(){
     $classes= Classe::all();
        return view('classes.index',compact('classes'));
    }

    public function form(){
        return view('classes.form');
    }

    public function store(Request $request){
        Validator::make($request->all(),[
            'libelle'=>'required',
            'place'=>'required',
            'etage'=>'required',
        ]);
        Classe::create(['libelle'=>$request->libelle,'place'=>$request->place,'etage'=>$request->etage]);
        return  redirect()->route('index')  ;
    }
}