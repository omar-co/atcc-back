<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Core\ControllerAbstract;
use App\Http\Requests\Admin\PoliticaPublicaRequest;
use App\Http\Resources\PoliticaPublicaResource;
use App\Models\PoliticaPublica;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PoliticaPublicaController extends ControllerAbstract
{
    public function __construct() {
        $this->modelService = null;
        $this->modelClass = PoliticaPublica::class;
        $this->modelResource = PoliticaPublicaResource::class;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param PoliticaPublicaRequest $request
     * @return Response
     * @throws AuthorizationException
     */
    public function store(PoliticaPublicaRequest $request): Response {
        return $this->create($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PoliticaPublica  $politicaPublica
     * @return Response
     */
    public function show(PoliticaPublica $politicaPublica)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PoliticaPublica  $politicaPublica
     * @return Response
     */
    public function update(Request $request, PoliticaPublica $politicaPublica)
    {
        //
    }

}
