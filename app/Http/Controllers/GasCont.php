<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\gas;

class GasCont extends Controller
{
    public function InsertarGas(){ 
        
        $response = Http::withHeaders(['X-AIO-Key' => 'aio_YEeu18w8H5l8OOzTcuUxk6BBMbzH'])
        ->get('https://io.adafruit.com/api/v2/juliomena1806/feeds/humendad/data/last');
        $value = $response['value'];
        $created_at = $response['created_at'];
        $updated_at = $response['updated_at'];
        $feed_id = $response['feed_id'];
        $registro = Gas::create([     
             'created_at' =>$created_at,
             'updated_at'=>$updated_at,
             'value' =>$value,
             'feed_id' =>$feed_id,
         ]);{
         }
         return $registro;
    } 

    public function MostrarGas(){
        $gas = Gas::all();
        return $gas;
    }
}
