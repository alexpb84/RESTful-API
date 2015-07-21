<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FabricanteVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id)
    {
        return 'Mostrando los vehiculos del fabricante ocn ID ' . $id;
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
        //
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
