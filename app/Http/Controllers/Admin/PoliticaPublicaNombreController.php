<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PoliticaPublicaNombre;
use Illuminate\Http\Request;

class PoliticaPublicaNombreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $constraint = function ($query) use ($request) {
            $query->where('politica_publica_id', $request->query('piliticaPublica'));
        };

        return response(PoliticaPublicaNombre::treeOf($constraint)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\PoliticaPublicaNombre  $politicaPublicaNombre
     * @return \Illuminate\Http\Response
     */
    public function show(PoliticaPublicaNombre $politicaPublicaNombre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PoliticaPublicaNombre  $politicaPublicaNombre
     * @return \Illuminate\Http\Response
     */
    public function edit(PoliticaPublicaNombre $politicaPublicaNombre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PoliticaPublicaNombre  $politicaPublicaNombre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PoliticaPublicaNombre $politicaPublicaNombre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PoliticaPublicaNombre  $politicaPublicaNombre
     * @return \Illuminate\Http\Response
     */
    public function destroy(PoliticaPublicaNombre $politicaPublicaNombre)
    {
        //
    }
}
