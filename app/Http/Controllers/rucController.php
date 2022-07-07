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
            CURLOPT_URL => 'https://apiperu.dev/api/ruc/'.$ruc.'?api_token=b5d10f19b85b59f8649595651c96a0a566d3fdeb8f3d7743a17da285f1b6c802',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_SSL_VERIFYPEER => false
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        // Datos listos para usar
        $datos = json_decode($response);
        $datos=   get_object_vars($datos);
        // return $datos;
        return view('resultados.resultRUC', compact('datos'));
    }
}
