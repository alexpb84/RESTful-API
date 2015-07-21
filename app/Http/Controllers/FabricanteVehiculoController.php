<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Fabricante;
use App\Vehiculo;

class FabricanteVehiculoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.basic', ['only' => ['store', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id)
    {
        $fabricante = Fabricante::find($id);

        if(!$fabricante)
        {
            return response()->json(['mensaje' => 'No se encuentra este fabricante', 'codigo' => 404], 404);
        }

        return response()->json(['datos' => $fabricante->vehiculos], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id)
    {
        return 'Mostrando formulario para agregar vehiculo al fabricante ' . $id;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // fabricante_id
        // serie (autoincrement) no se necestia
        // color
        // cilindraje
        // potencia
        // peso
        if( !$request->input('color') || !$request->input('cilindraje') || !$request->input('potencia') || !$request->input('peso') || !$request->input('fabricante_id') )
        {
            return response()->json(['mensaje' => 'No se pudieron procesar los valores', 'codigo' => 422], 422);
        }

        $fabricante = Fabricante::find($request->input('fabricante_id'));

        if( !$fabricante )
        {
            return response()->json(['mensaje' => 'No existe el fabricante asociado', 'codigo' => 404], 404);            
        }

        $fabricante->vehiculos()->create($request->all());

        return response()->json(['mensaje' => 'vehiculo insertado'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($idFabricante, $idVehiculo)
    {
        return 'Mostrando vehiculo ' . $idVehiculo . ' del fabricante ' . $idFabricante;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($idFabricante, $idVehiculo)
    {
        return 'Mostrando formulario para editar el vehiculo ' . $idVehiculo . ' del fabricante ' . $idFabricante;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $idFabricante, $idVehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($idFabricante, $idVehiculo)
    {
        //
    }
}
