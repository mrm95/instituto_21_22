<?php

namespace App\Http\Controllers\API;
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Centro;
use Illuminate\Http\Request;
use App\Http\Resources\CentroResource;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CentroResource::collection(Centro::paginate());
    }

      /**
     * Crea un centro.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->user()->cannot('create', Centro::class)) {
            abort(403);
        }

        // Create el centro...
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function show(Centro $centro)
    {
        return new CentroResource($centro);
    }

   /**
     * Actualiza el centro.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Request $request, Centro $centro)
    {
        $this->authorize('update', $centro);

        // El usuario autenticado puede actualizar el centro...
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Centro $centro)
    {
        $centro->delete();
    }
}
