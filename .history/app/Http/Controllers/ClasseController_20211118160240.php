<?php

namespace App\Http\Controllers;

use App\Events\ClasseEvent;
use App\Models\Classe;
use Illuminate\Http\Request;
use App\Http\Requests\ClasseRequest;
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

    public function store(ClasseRequest $request){
        // Validator::make($request->all(),[
        //     'libelle'=>'required',
        //     'place'=>'required',
        //     'etage'=>'required',
        // ]);

     $classes= Classe::create($request->validated());

        event(new ClasseEvent($classes));
        // Classe::create(['libelle'=>$request->libelle,'place'=>$request->place,'etage'=>$request->etage]);
        return  redirect()->route('index')  ;
    }
}