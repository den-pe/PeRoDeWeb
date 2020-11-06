<?php
    $id=(int)"$_REQUEST[id]";
    $nombre="$_REQUEST[nombre]";
    $apellidos="$_REQUEST[apellidos]";
    $edad="$_REQUEST[edad]";
    $puesto="$_REQUEST[puesto]";
    $leer=fopen("registros.txt","r");
    $flag=true;
    /*echo $id;
    echo $nombre;
    echo $apellidos;
    echo $edad;
    echo $puesto;*/
while(!feof($leer)){
    $claveid=fgets($leer);
    $clavenom=fgets($leer);
    $claveape=fgets($leer);
    $claveeda=fgets($leer);
    $clavepues=fgets($leer);
        if($id==$claveid){
            echo "Error .... El registro ya existe";
            $flag=false;
        break;
        }
}  
  fclose($leer);
        if($flag){        
            $guardar=fopen('registros.txt','a+');
            fputs($guardar,$id."\n");
            fputs($guardar,$nombre."\n");
            fputs($guardar,$apellidos."\n");
            fputs($guardar,$edad."\n");
            fputs($guardar,$puesto."\n");  
            fclose($guardar);
            echo "Datos Guardados"; 
        }
?>
<br>
<a href="insertar.html"><input type="button" value="volver"></a>