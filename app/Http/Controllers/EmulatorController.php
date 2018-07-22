<?php

namespace App\Http\Controllers;


use App\Emulator;

use Illuminate\Http\Request;

class EmulatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //dd(get_object_vars(Storage::disk('retropie-data')));
        $emulators = Emulator::all();

        return json_encode($emulators);
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
     * @param  \App\Emulator  $emulator
     * @return \Illuminate\Http\Response
     */
    public function show(Emulator $emulator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Emulator  $emulator
     * @return \Illuminate\Http\Response
     */
    public function edit(Emulator $emulator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Emulator  $emulator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emulator $emulator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Emulator  $emulator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emulator $emulator)
    {
        //
    }
}
