<?php

namespace App\Http\Controllers;

use App\Models\TypeActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeActivityController extends Controller
{
    private $rules= [
        'description'=> 'required|string|min:3|max:100'
    ];
    private $traductionAttributes = [
      'description' => 'Descripción'  
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = TypeActivity::all();
        return view('type_activity.index', compact('types'));
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
        $validator = Validator::make($request->all(), $this->rules);
        $validator->setAttributeNames($this->traductionAttributes);
        if($validator->fails())
        {
            $errors = $validator->errors();
            return redirect()->route('causal.create')->withInput()
            ->withErrors($errors);
        }
         $type = TypeActivity::create($request->all());
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
        $type = TypeActivity::find($id);
        if($type) // la causal existe
        {
            return view('type_activity.edit', compact('type'));
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
        $validator = Validator::make($request->all(), $this->rules);
        $validator->setAttributeNames($this->traductionAttributes);
        if($validator->fails())
        {
            $errors = $validator->errors();
            return redirect()->route('type_activity.edit', $id)->withInput()
            ->withErrors($errors);
        }
        
        $type = TypeActivity::find($id);
        if($type) // la causal existe
        {
            $type->update($request->all());
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
        $type = TypeActivity::find($id);
        if($type) // la causal existe
        {
            $type->delete();
            session()->flash('message', 'Tipo de actividad eliminado correctamente'); 
        }
        else
        {
           session()->flash('warning', 'no se encuentra el tipo de actividad solicitado'); 
        }
        return redirect()->route('type_activity.index');
    }
}
