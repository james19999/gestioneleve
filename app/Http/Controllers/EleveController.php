<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Classe;
use Illuminate\Http\Request;
use App\Http\Requests\EleveRequest;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Eleves=Eleve::with('classes')->get();

        return view('eleves.index',compact('Eleves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Classes=Classe::all();
        return view('eleves.create',compact('Classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EleveRequest $request)
    {
        Eleve::create($request->validated());

        return redirect()->route('eleves.index');
        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Eleves=Eleve::findOrfail($id);
        
        return view('eleves.show',compact('Eleves'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Eleves=Eleve::findOrfail($id);
        $Classes=Classe::all();

        return view('eleves.edit',compact('Eleves','Classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EleveRequest $request, $id)
    {
        $Eleves=Eleve::findOrfail($id);
        $Eleves->update($request->validated());
        return redirect()->route('eleves.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Eleve::destroy($id);
        return back();
    }
}