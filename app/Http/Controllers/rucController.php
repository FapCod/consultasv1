<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rucController extends Controller
{
    public function consultaruc(){
        $datos=[];
        return view('ruc',compact('datos'));
    }
    public function obtenerdatosruc($ruc)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apiperu.dev/api/ruc/'.$ruc.'?api_token=46a99569f82eb6060bf5bda2247e9cd7cb201d252fe6e8f91bcc85a5ec3fc95f',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_SSL_VERIFYPEER => false
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        // Datos listos para usar
        $datos = json_decode($response);
        $datos=   get_object_vars($datos);
        return view('resultados.resultRUC', compact('datos'));
    }
}
