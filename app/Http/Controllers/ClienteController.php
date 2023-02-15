<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['clientes'] = Cliente::paginate(2);
        return view('cliente.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'name'=>'required|string|max: 100',
            'address'=>'required|string|max: 200',
            'dui'=>'required|min:10',
            'gender'=>'required|string|max: 50',
            'age'=>'required|max:3',
            'telephone'=>'required|min:8|max:15',
            'email'=>'required|email',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido'
        ];
        $this->validate($request,$campos,$mensaje);

      $datosCliente = request()->except('_token');
      Cliente::insert($datosCliente);
      return redirect('cliente')->with('mensaje','Cliente agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'name'=>'required|string|max: 100',
            'address'=>'required|string|max: 200',
            'dui'=>'required|min:10',
            'gender'=>'required|string|max: 50',
            'age'=>'required|max:3',
            'telephone'=>'required|min:8|max:15',
            'email'=>'required|email',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido'
        ];
        $this->validate($request,$campos,$mensaje);

        $datosCliente = request()->except(['_token','_method']);
        Cliente::where('id','=',$id)->update($datosCliente);
        return redirect('cliente')->with('mensaje','Cliente modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::destroy($id);
        return redirect('cliente')->with('mensaje','Cliente eliminado');
    }
}
