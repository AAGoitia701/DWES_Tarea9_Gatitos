/**
 * Creamos la conexión con el sevidor y mandamos la petición
 * 
 */
var xmlhttpCat;
function ajaxCat(){
    xmlhttpCat = new XMLHttpRequest();
    xmlhttpCat.addEventListener('readystatechange', respuesta_cat);
    xmlhttpCat.open('GET','conectApi.php?action=datos_gatos', true);
    xmlhttpCat.send();

}
/**
 * Manejamos la respuesta del servidor y pintamos la respuesta en el cliente
 */
function respuesta_cat(){
    if(xmlhttpCat.readyState == 4 && xmlhttpCat.status==200){
        finalFact= '';
        var catFact = xmlhttpCat.responseText;
        respuesta = document.getElementsByTagName('p')[0]; //Traemos el p
        respuesta.innerHTML = catFact; //Escribimos los datos

    }
}
/**
 * Creamos la conexión con el sevidor y mandamos la petición
 */
var xmlhttCatimg;
function ajaxCatImg(){
    xmlhttCatimg = new XMLHttpRequest();
    xmlhttCatimg.open('GET','conectApi.php?action=img_cat' , true);
    xmlhttCatimg.addEventListener('readystatechange', respuesta_catimg);
    xmlhttCatimg.send();
}

/**
 * Manejamos la respuesta del servidor y pintamos la respuesta en el cliente
 */
function respuesta_catimg(){
    if(xmlhttCatimg.readyState==4 && xmlhttCatimg.status==200){
        var catimg = xmlhttCatimg.responseText;
        console.log(catimg);
        img = document.getElementsByTagName('img')[0]; //Traemos la etiqueta de img
        img.src = catimg; //Establecemos el link de la imagen con el atributo 'src'

    }
}