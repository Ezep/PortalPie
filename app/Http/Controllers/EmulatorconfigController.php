<?php

namespace App\Http\Controllers;


use App\Emulatorconfig;

use Illuminate\Http\Request;

class EmulatorconfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
    public function show($emulator)
    {
        $emulatorsconfig = Emulatorconfig::get($emulator);

        return json_encode($emulatorsconfig);
    
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
