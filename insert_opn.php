<?php
    $opinion=$_POST['op'];
    $file = "//192.168.22.120/samba-share/opiniones.txt";
    $contenido="
    $opinion \n";
    $archivo=fopen($file,"a+");
    


    if(fwrite($archivo,$contenido)){
        fclose($archivo);
        Header("Location: index.html");
    };
?>