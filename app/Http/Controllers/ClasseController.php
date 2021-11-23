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
    //  $classes= Classe::all();
     $classes= Classe::paginate(4);
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

           Classe::create($request->validated());
       session()->flash('message',"la classe   à été bien créer ");
        // event(new ClasseEvent($classes));
        // Classe::create(['libelle'=>$request->libelle,'place'=>$request->place,'etage'=>$request->etage]);
        return  redirect()->route('index')  ;
    }

    public function deletes($id){
       Classe::destroy($id);
    //    $classes=Classe::findOrfail($id);
    //    $classes->delete();
       return back();
    }
   //retourner le  formulaire de modification
    public function edit($id){
     $classes=Classe::findOrfail($id);

     return view('classes.edit',compact('classes'));
    }

    public function updates(ClasseRequest $request ,$id){
       $classes=Classe::findOrfail($id);

        $classes->update($request->validated());

        return  redirect()->route('index')  ;
    }
}