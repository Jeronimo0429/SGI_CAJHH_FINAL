<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobiliario;
use Illuminate\Support\Facades\Redirect;

class MobiliarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobiliario=Mobiliario::orderBy('id','DESC')->paginate(10);
        return view('mobiliario.index',compact('mobiliario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('mobiliario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mobiliarios=new Mobiliario;
        $mobiliarios->serial=$request->get('serial');
        $mobiliarios->nombre=$request->get('nombre');
        $mobiliarios->valor=$request->get('valor');
        $mobiliarios->estado=$request->get('estado');
        $mobiliarios->propietario=$request->get('propietario');
        $mobiliarios->fechaEntrada=$request->get('fechaEntrada');
        $mobiliarios->fechaSalida=$request->get('fechaSalida');
        $mobiliarios->comentario=$request->get('comentario');
        $mobiliarios->save();
        return Redirect::to('mobiliario');
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
        $mobiliario=Mobiliario::findOrFail($id);
        return view("mobiliario.edit",["mobiliario"=>$mobiliario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mobiliarios=Mobiliario::findOrFail($id);
        $mobiliarios->serial=$request->get('serial');
        $mobiliarios->nombre=$request->get('nombre');
        $mobiliarios->valor=$request->get('valor');
        $mobiliarios->estado=$request->get('estado');
        $mobiliarios->propietario=$request->get('propietario');
        $mobiliarios->fechaEntrada=$request->get('fechaEntrada');
        $mobiliarios->fechaSalida=$request->get('fechaSalida');
        $mobiliarios->comentario=$request->get('comentario');

        $mobiliarios->update();
        return Redirect::to('mobiliario');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mobiliarios=Mobiliario::findOrFail($id);
        $mobiliarios->delete();
        return Redirect::to('mobiliario');
    }
}