<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\ultrasonico;

class UltrasonicoCont extends Controller
{
    public function InsertarDistancia(){ 
        
        $response = Http::withHeaders(['X-AIO-Key' => 'aio_YEeu18w8H5l8OOzTcuUxk6BBMbzH'])
        ->get('https://io.adafruit.com/api/v2/juliomena1806/feeds/ultrasonico1/data/last');
        $value = $response['value'];
        $created_at = $response['created_at'];
        $updated_at = $response['updated_at'];
        $feed_id = $response['feed_id'];
        $registro = Ultrasonico::create([     
             'created_at' =>$created_at,
             'updated_at'=>$updated_at,
             'value' =>$value,
             'feed_id' =>$feed_id,
         ]);{
         }
         return $registro;
    } 

    public function MostrarDistancia(){
        $ultrasonico = Ultrasonico::all();
        return $ultrasonico;
    }
}