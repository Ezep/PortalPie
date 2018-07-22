<?php

namespace App;

use Illuminate\Support\Facades\Storage;

class Emulator
{
    
    static public function all(){

        $emulators = [];
        $raw_emulators = Storage::disk('retropie-data')->directories('roms');

        foreach ($raw_emulators as $emulator) {
            
            $emulator = str_replace('roms/', '', $emulator);

            array_push($emulators, $emulator);

        }

        return $emulators;
    }


}
