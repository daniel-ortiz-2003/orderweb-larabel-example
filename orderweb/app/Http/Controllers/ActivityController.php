<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Technician;
use App\Models\TypeActivity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all();
        return view('activity.index', compact('activities'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $technicians = Technician::all();
        $types = TypeActivity::all();
        return view('activity.create', compact('tecnicians', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $activity = Activity::create($request->all());
        session()->flash('message', 'registro creado exitosamente');
        return redirect()->route('activity.index');
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
        $Activity = Activity::find($id);
        if($Activity) // la causal existe
        {
            return view('activity.edit', compact('activity', 'technician','type_activity'));
        }
        else
        {
           session()->flash('warning', ' no se encuentra la actividad solicitado'); 
        }
        return redirect()->route('activity.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $activity = Activity::find($id);
        if($activity) // la causal existe
        {
            $$activity->update($request->all());
            session()->flash('message', 'Actividad actualizada correctamente');
            return redirect()->route('activity.index');
        }
        else
        {
           session()->flash('warning', ' no se encuentra la actividad solicitado');    
                 
        }
        return redirect()->route('activity.index');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::find($id);
        if($activity) // la causal existe
        {
            $$activity->delete();
            session()->flash('message', 'Actividad actualizada correctamente');
            return redirect()->route('activity.index');
        }
        else
        {
           session()->flash('warning', ' no se encuentra la actividad solicitado');    
                 
        }
        return redirect()->route('activity.index');  
    }
}
