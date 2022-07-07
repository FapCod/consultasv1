<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dolarController extends Controller
{
    public function consultadolar(){
        $datos=[];
        return view('dolar',compact('datos'));
    }
    public function obtenerdatosdolar($dolar)
    {
        $curl = curl_init();
        $data = [
            "fecha" => $dolar
        ];
        $post_data = http_build_query($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apiperu.dev/api/tipo_de_cambio?api_token=b5d10f19b85b59f8649595651c96a0a566d3fdeb8f3d7743a17da285f1b6c802',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $post_data,
            CURLOPT_SSL_VERIFYPEER => false
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        // Datos listos para usar
        $datos = json_decode($response);
        $datos = get_object_vars($datos);
        // return  var_dump($datos['success']);
        return view('resultados.resultDolar', compact('datos'));
    }
}
