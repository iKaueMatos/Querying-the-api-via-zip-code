<?php

namespace App\webService;

/**
 * Classe 
 */
class ViaCep
{
   /**
    * Metodo responsavel por consultar um cep no VIA CEP 
    * @param string $cep
    * @return array
    */
   public static function consultZipCode($cep) {
    //Inicia o CURL
    $curl = curl_init();
    
    //Configurações do Curl
    curl_setopt_array($curl,[
        CURLOPT_URL => 'https://viacep.com.br/ws/'.$cep.'/json/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);


    //Response 
    $response = curl_exec($curl);

    //Fecha a conexão
    curl_close($curl);
    $array = json_decode($response,true);
   

    return isset($array['cep']) ? $array : 'erro';

   }
}