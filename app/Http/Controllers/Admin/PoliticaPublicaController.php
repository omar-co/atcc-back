<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Core\ControllerAbstract;
use App\Http\Resources\PoliticaPublicaResource;
use App\Models\PoliticaPublica;
use App\Services\UserService;
use Illuminate\Http\Request;

class PoliticaPublicaController extends ControllerAbstract
{
    public function __construct(UserService $userService) {
        $this->modelService = $userService;
        $this->modelClass = PoliticaPublica::class;
        $this->modelResource = PoliticaPublicaResource::class;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PoliticaPublica  $politicaPublica
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PoliticaPublica $politicaPublica)
    {
        //
    }

}
