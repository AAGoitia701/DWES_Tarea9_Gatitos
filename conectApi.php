<?php
/**
 * Función que pide a la API datos de gatos
 * @return object Devuelve un objeto 
 */
function catFacts(){
    $url = 'https://catfact.ninja/fact';
    $data = file_get_contents($url);
    
    if($data == false){
        exit("No se ha podido procesar solicitud");
    }else{
        if (JSON_ERROR_NONE !== json_last_error()) {
            exit("No se ha podido analizar los datos " . json_last_error_msg());
           }else{
                $data = json_decode($data);
                //var_dump($data);
                return$data->fact;
           }
    
    }
}
/**
 * Función que pide a la API una imagen de gatos
 * @return object Devuelve un objeto, el cual es una url
 */
function catImg(){
    $url ='https://api.thecatapi.com/v1/images/search?limit=1';
    $data = file_get_contents($url);
    if($data==false){
        exit("No se ha podido procesar solicitud");
    }else{
        if (JSON_ERROR_NONE !== json_last_error()) {
            exit("No se ha podido analizar los datos " . json_last_error_msg());
           }else{
                $data = json_decode($data);
                
                return $data[0]->url;
           }
    }
}

//print_r(catFacts());
//print_r(catImg());

//Creamos las posibles url para nuestro sitio
$url = array("datos_gatos", "img_cat");
$valor = "Hubo un error";

if(isset($_GET["action"]) && in_array($_GET["action"], $url)){
    switch($_GET["action"]){
        case "datos_gatos":
            $valor= catFacts();
            break;
        
        case "img_cat":
            $valor= catImg();
            break;
    }
}

exit($valor);


?>