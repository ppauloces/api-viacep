<?php

namespace App\WebService;

class ViaCEP{

    /** 
    * METODO RESPONSAVEL POR CONSULTAR O CEP DO VIACEP
    * @param string $cep
    * @return array
    */
    public static function consultarCEP($cep){
        //INICIANDO O CURL
        $curl = curl_init();

        //CONFIGURACOES DO CURL
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://viacep.com.br/ws/'.$cep.'/json/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ]);

        //RESPONSE: EXECUÇÃO DA REQUISIÇÃO API
        $response = curl_exec($curl);

        //FECHANDO A CONEXAO
        curl_close($curl);

        //CONVERTENDO JSON PARA ARRAY
        $array = json_decode($response,true);

        //RETORNAR CONTEUDO EM ARRAY
        return isset($array['cep']) ? $array : null;
    }

}