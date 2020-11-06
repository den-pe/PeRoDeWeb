<?php
echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' integrity='sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS'
crossorigin='anonymous'>";

  echo  $idn=(int)"$_REQUEST[id]";
  echo $nombren="$_REQUEST[nombre]";
  echo $apellidosn="$_REQUEST[apellidos]";
  echo  $edadn="$_REQUEST[edad]";
  echo  $pueston="$_REQUEST[puesto]";
    $leer=fopen("registros.txt","r");
    $escribir=fopen("temp.txt","a+");
    while(!feof($leer)){					
        $id=fgets($leer);
        $nombre=fgets($leer);
        $apellidos=fgets($leer);
        $edad=fgets($leer);
        $puesto=fgets($leer);
        if($idn!=$id){						
            fputs($escribir,$id);
            fputs($escribir,$nombre);
            fputs($escribir,$apellidos);
            fputs($escribir,$edad);
            fputs($escribir,$puesto);
        }
        else{
            fputs($escribir,$idn."\n");
            fputs($escribir,$nombren."\n");
            fputs($escribir,$apellidosn."\n");
            fputs($escribir,$edadn."\n");
            fputs($escribir,$pueston."\n");
        }
    }
    fclose($leer);
    fclose($escribir);
    if(rename("temp.txt","registros.txt")){
        
        echo "Registro editado correctamente!!!!!<br>";
    }
?>

<a href="insertar.html"><input type="button" class="btn btn-primary" value="volver"></a>