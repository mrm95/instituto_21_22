<?php

namespace App\Http\Controllers\API;
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Centro;
use Illuminate\Http\Request;
use App\Http\Resources\CentroResource;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Gate;

class CentroController extends Controller
{
    /**
    * Create the controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->authorizeResource(Centro::class, 'centro');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CentroResource::collection(Centro::paginate(10));
    }

    public function indexOD()
    {
        $this->authorize('viewAny', Centro::class);
        $response = Http::get('https://datosabiertos.regiondemurcia.es/catalogo/api/action//datastore_search?resource_id=52dd8435-46aa-495e-bd2b-703263e576e7&limit=5');
        return response()->json(json_decode($response));
    }

      /**
     * Crea un centro.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        if ($request->user()->cannot('create', Centro::class)) {
            abort(403);
        }
=======
//        $this->authorize('create', Centro::class);

        $centro = json_decode($request->getContent(), true);

        $centro = Centro::create($centro);
>>>>>>> dd4f6ffaea26659a4dbccb8c93733a1cefe849ec

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
        // $response = Http::get('https://datosabiertos.regiondemurcia.es/catalogo/api/action//datastore_search?resource_id=52dd8435-46aa-495e-bd2b-703263e576e7&filters={"CODIGOCENTRO": "'. $centro->codigo .'"}');
        // return response()->json(json_decode($response)->result->records);

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
<<<<<<< HEAD
        $this->authorize('update', $centro);
=======
//        $this->authorize('update', $centro);

        $centroData = json_decode($request->getContent(), true);
        $centro->update($centroData);
>>>>>>> dd4f6ffaea26659a4dbccb8c93733a1cefe849ec

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
//        $this->authorize('delete', $centro);
        $centro->delete();
    }
}
