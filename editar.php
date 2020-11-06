<?php
    echo "Selecciona el registro para editar<br><br><br>";
    $mostrar=fopen('registros.txt','r');
    while(!feof($mostrar))
    {
        $id=fgets($mostrar);
        $nombre=fgets($mostrar);
        $apellidos=fgets($mostrar);
        $edad=fgets($mostrar);
        $puesto=fgets($mostrar);
        if($id!=""){
        echo "Id: <a href=editarsel.php?id=".$id.">".$id."</a><br>";
        echo "Nombre: ".$nombre."<br>";
        echo "Apellids: ".$apellidos."<br>";
        echo "Edad: ".$edad."<br>";
        echo "Puesto: ".$puesto."<br><br>";
        }
    }
?>



