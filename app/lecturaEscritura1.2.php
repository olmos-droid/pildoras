<?php
$textes = $_POST["data[]"];
$dir_upload="./subidas/";
//si el directorio no existe lo crea i lo mueve
 if (!file_exists($dir_upload)) {
    mkdir($dir_upload, 0777, true);
 }
 $file=fopen($data[0],"w");

 for ($i=1; $i < 3; $i++) { 
     # code...
     fputs($file,$value,"\n");
 }
 fclose($file);

 echo'se ha escrito correctamente';
 ?>