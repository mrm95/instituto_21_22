<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tutorizado;
use App\Http\Resources\TutorizadoResource;
use Illuminate\Http\Request;

class TutorizadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TutorizadoResource::collection(Tutorizado::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tutorizado = json_decode($request->getContent(), true);

        $tutorizado = Tutorizado::create($tutorizado);

        return new TutorizadoResource($tutorizado);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tutorizado  $tutorizado
     * @return \Illuminate\Http\Response
     */
    public function show(Tutorizado $tutorizado)
    {
        return new TutorizadoResource($tutorizado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tutorizado  $tutorizado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tutorizado $tutorizado)
    {
        $tutorizadoData = json_decode($request->getContent(), true);
        $tutorizado->update($tutorizadoData);

        return new TutorizadoResource($tutorizado);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutorizado  $tutorizado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutorizado $tutorizado)
    {
        $tutorizado->delete();
    }
}
