<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Interseguro extends Controller
{
    public function testdev(Request $request)
    {        
        $input = $request->all();
        $N = count($input);
        $format = true;

        foreach ($input as $array) {
            if ($N != count($array)) {
                $format = false;
                break;
            }
        }
        
        if(!$format) {
            return response()->json(['Invalid format'], 404);
        } else {
            for ($index = 0; $index < $N; $index++) {
                for ($j = 0; $j < $N; $j++) {
                    $output[$j][$index] = $input[$index][$N-$j-1];
                }
            }
            return response()->json($output);
        }
        
    }
}
