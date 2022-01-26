<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\AnyoResource;
use App\Models\anyo_escolar;

class AnyoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AnyoResource::collection(anyo_escolar::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $Anyo = json_decode($request->getContent(), true);

        $Anyo = anyo_escolar::create($Anyo);

        return new AnyoResource($Anyo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(anyo_escolar $Anyo)
    {
        return new AnyoResource($Anyo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, anyo_escolar $Anyo)
    {
        $AnyoData = json_decode($request->getContent(), true);
        $Anyo->update($AnyoData);

        return new AnyoResource($Anyo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(anyo_escolar $Anyo)
    {
        $Anyo->delete();
    }
}
