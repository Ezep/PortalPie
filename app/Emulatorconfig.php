<?php

namespace App;

use Illuminate\Support\Facades\Storage;

class Emulatorconfig
{
    
    static public function get($console = null) {

        $raw_configs = [];
        $configs = [];

        $console_files = [
            'psx' => 'psx/pcsx.cfg'
        ];

        if ($console) {  
    
            if (isset($console_files[$console])) {

                $raw_configs = Storage::disk('retropie')->get('configs/'. $console_files[$console]);

                $raw_configs = explode(PHP_EOL, $raw_configs);
                
                foreach ($raw_configs as $config) {
                    
                    $config = explode('=', $config);
                    
                    array_push($configs, $config);

                }

                return $configs;
             }
            
            
        }

        return false;

    }


}
