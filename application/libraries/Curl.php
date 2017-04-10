<?php if(!defined('BASEPATH')) exit(ACESSO_BLOQUEADO);

/**
*  Biblioteca para criar, acessar e receber dados do serviço web
*/
class Curl{
    
    function returnDataEncoded($token, $url, $data, $method){
        # Pega a instância do CI
        $CI = & get_instance();

        // Carrega CURL
        $curl = $this->createCurlJava($token, $url,$data,$method);
        
        // Executa o curl
        $response = curl_exec($curl);
        return $response;
    }

    function returnData($token, $url, $data, $method){
        # Pega a instância do CI
        $CI = & get_instance();

        // Carrega CURL
        $curl = $this->createCurlJava($token, $url,$data,$method);
        
        // Executa o curl
        $response = curl_exec($curl);
        return json_decode($response);
    }

    function insertData($token, $url, $data, $method){
        # Pega a instância do CI
        $CI = & get_instance();

        // Carerga o curl
        $curl = $this->createCurl($token, $url, $data, $method);

        // Executa o curl
        $response = curl_exec($curl);
        return json_decode($response);
    }

    function updateData($token, $url, $data, $method){
        # Pega a instância do CI
        $CI = & get_instance();

        // Carrega curl
        $curl = $this->createCurl($token, $url, $data, $method);

        // Executa o curl
        $response = curl_exec($curl);
        echo($response);
        return json_decode($response);
    }

    // Cria instância e opções
    function createCurl($token, $url, $data, $method){
        if($data!=null){
            if($method==='GET'){
                $curl = curl_init($url."/token/".$token."/".$data."/format/json");
            }else if($method==='POST'){
                $curl = curl_init($url."/token/".$token."/format/json");
                curl_setopt($curl, CURLOPT_POST , TRUE);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // FALTA O TOKEN
            }else{
                return false;
            }
        }else{
            $curl = curl_init($url."/token/".$token."/format/json");
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_TIMEOUT, 7);
        return $curl;
    }

    function createCurlJava($token, $url, $data, $method){
        if($data!=null){
            if($method === 'GET'){
                $curl = curl_init($url."?token=".$token."&".$data);
                //echo $url."?token=".$token."&".$data;
            }else if($method==='POST'){
                $tokenArray = array(
                    'token'=> $token
                );
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_POST, TRUE);
                curl_setopt($curl, CURLOPT_POSTFIELDS, array_merge($data, $tokenArray));
            }else{
                return false;
            }
        }else{
            if($method === 'POST'){
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_POST, TRUE);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $token);
            }else if($method==='GET'){
                $curl = curl_init($url."?token=".$token);
                //echo $url."?token=".$token;
            }else{
                return false;
            }
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($curl, CURLOPT_TIMEOUT, 7);
        return $curl;
    }
}