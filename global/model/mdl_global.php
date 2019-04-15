<?php

class mdl_global{

    public function __construct(){}

    function autenticar($user_name, $password){
        
        return 0;
    }

    public function servicio($url_postpago_api, $headers, $params, $http){
        $ch = curl_init();
        $agent = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : "localhost";

        curl_setopt($ch, CURLOPT_URL, $url_postpago_api);

        if ($http == "POST") {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, $agent);

        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout in seconds

        $result = curl_exec($ch);

        if (curl_error($ch)) {
            $result = array("status" => "ERROR", "msg" => curl_error($ch));
            return json_decode($result, true);
            die;
        }
        curl_close($ch);

        return json_decode($result, true);
    }



}