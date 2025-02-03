<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$comentario = $_POST['comentarios'];

$formcontent="

 Nombre : $nombre \n
 Correo : $correo \n
 Comentario : $comentario

 ";

$to ="globalconecthn@gmail.com, portaltecnologyhn@gmail.com";

$subject ="Consulta de  pagina GlobalConect de $nombre";

$headers = "form: pruebas@global.com \r\n";
$headers .= "Conten-Type: text/plain; charset=UTF-8";
// mail($recipient,$subjet,$formcontent,$header) or die ("Error!");
// header("Location: index.html");

if(mail($to,$subject,$headers)){
    echo "mensaje enviado";

} else{
    echo"mensaje no enviado";
}


?>