<?php
require_once "./communicatoinentitis/Request.php";
require_once "./communicatoinentitis/Response.php";
public class ApiWorker
{
    private static ApiWorker _instance;
    private _apiKey="FSB-9c2ee4c6-b7df-49bf-bf2d-3381df692a3c";
     public static fuction ApiWorker GetInstanse
     {
        if (_instance == null)
                _instance = new ApiWorker();
            return _instance; 
     }
     public funcion Response GetUserByLoginPassword( $login, $password)
    {
       $array = array
       (
         "login"=>login,
         "password"=>password,
       );
 

    Request $request = new Request
    {
        Parameters =json_encode (userParameters),
        ApiKey = _apiKey  
    };

    $data = json_encode(request);

    $opts = array('http' =>
array(
'method' => 'POST',
'header' => 'Content-Type: application/x-www-form-urlencoded',
'content' => $data
)
);

$context = stream_context_create($opts);

$result = file_get_contents('https://localhost:44396/Users/GetUserByLoginPassword', false, $context);

    }

}
>