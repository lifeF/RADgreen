<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\greenhouse;
use App\section;
use App\plant;
use Auth;
use App\User;

class Data_api extends Controller
{
    public function api(Request $request)
    {
            $name=$request->name;
            //  $plant = plant::find($id1);

            // $serialized_array1 = $plant->water_level;
            // $serialized_array2 = $plant->fertilizer_level;
            // $serialized_array3 = $plant->temperature_level;
            // $unserialized_array1 = unserialize($serialized_array1);
            // $unserialized_array2 = unserialize($serialized_array2);
            // $unserialized_array3 = unserialize($serialized_array3);           
            // $inserted1 = $id2; 
            // $inserted2 = $id3; 
            // $inserted3 = $id4;

            // array_shift($unserialized_array1);
            // array_shift($unserialized_array2);
            // array_shift($unserialized_array3);
            // array_splice( $unserialized_array1, 14, 0, $inserted1 );
            // array_splice( $unserialized_array2, 14, 0, $inserted2 );
            // array_splice( $unserialized_array3, 14, 0, $inserted3 );

            // $plant->water_level = serialize($unserialized_array1); 
            // $plant->fertilizer_level = serialize($unserialized_array2);
            // $plant->temperature_level = serialize($unserialized_array3);
            // $plant->save();
            $encrypted = Crypt::encryptString('Hello world.');
            $decrypted = Crypt::decryptString($encrypted);
            
            return $encrypted;
      
    }
}
