<?php

    date_default_timezone_set("Asia/Jakarta");

    function callWS($url, $method, $data, $error_status='') {
    	//https://stackoverflow.com/questions/13420952/php-curl-delete-request/17935536
        
        if ($method != "GET" && $method != "POST" && $method != "PUT" && $method != "DELETE") {
            return 'undefined method';
        } else {
            if ($method == "GET") $url = $url.'?'.http_build_query($data);

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method); 
            if ($method != "GET") {
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            }

            $response = curl_exec($ch);
        
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Check the HTTP Status code
            if ($httpCode >= 200 && $httpCode <= 299) {
                $error_status = $httpCode." : Success";
                curl_close($ch);

                //$data = $response; //kalau hasil dalam bentuk mentah
                $data = json_decode($response, true); //kalau hasil dalam bentuk JSON

                return $data;
            } else {
                $error_status = "Error " . $httpCode . " : " . curl_error($ch);
                curl_close($ch);

                return $error_status;
            }
        }
    }

    function readJSON($url) {
        if ($json_data = file_get_contents($url)) {
            $arr = json_decode($json_data, true);
            
            $err = json_last_error_msg();
            if ($err == 'No error') {
                return $arr;
            } else {
                return $err;
            }
        } else {
            return 'error readJSON';
        }
    }
