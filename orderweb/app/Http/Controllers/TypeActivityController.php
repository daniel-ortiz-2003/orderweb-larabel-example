<?php

namespace App\Http\Controllers;

use App\Models\TypeActivity;
use Illuminate\Http\Request;

class TypeActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_activitys = TypeActivity::all();
        return view('type_activity.index', compact('type_activitys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type_activity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $type_activity = TypeActivity::created($request->all());
        session()->flash('message', 'Tipo de actividad creada exitosamente');
        return redirect()->route('type_activity.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $type_activity = TypeActivity::find($id);
        if($type_activity) // la causal existe
        {
            return view('type_activity.edit', compact('type_activity'));
        }
        else
        {
           session()->flash('warning', ' no se encuentra el tipo de actividad solicitado'); 
        }
        return redirect()->route('type_activity.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $type_activity = TypeActivity::find($id);
        if($type_activity) // la causal existe
        {
            $type_activity->update($request->all());
            session()->flash('message', 'Tipo de actividad actualizada correctamente');
            return redirect()->route('type_activity.index');
        }
        else
        {
           session()->flash('warning', ' no se encuentra el tipo de actividad solicitado');    
           return redirect()->route('type_activity.index');        
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $type_activity = TypeActivity::find($id);
        if($type_activity) // la causal existe
        {
            $type_activity->delete();
            session()->flash('message', 'Tipo de actividad eliminado correctamente'); 
        }
        else
        {
           session()->flash('warning', 'no se encuentra el tipo de actividad solicitado'); 
        }
        return redirect()->route('type_activity.index');
    }
}
