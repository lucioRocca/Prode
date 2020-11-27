<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Apuesta;
use Illuminate\Http\Request;

class ApuestaController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apuesta.create')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
    //policy apuesta->partido_id != $data[partido_id]
    // grupo->partido[] = $data[partido_id]
    // apuesta->grupo->fecha->fecha > carbon::now()

        $data = $request->validate([
            'partido_id' => 'required',
            'grupo_id' => 'required',
            'user_id' => 'required',
            'equipoL' => 'required',
            'equipoV' =>'required|numeric'
        ]);

        Apuesta::insert([
            'partido_id' => $data['partido_id'],
            'grupo_id' => $data['grupo_id'],
            'user_id' => $data['user_id'],
            'equipoL' => $data['equipoL'],
            'equipoV' => $data['equipoL'],
            'created_at' => Carbon::Now()
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apuesta  $apuesta
     * @return \Illuminate\Http\Response
     */
    public function show(Apuesta $apuesta)
    {
        //
    }
}
