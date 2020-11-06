<?php		
    $bus=(int)"$_REQUEST[id]";
    $leer=fopen("registros.txt","r");
    $escribir=fopen("temp.txt","a+");
    while(!feof($leer)){					
        $id=fgets($leer);
        $nombre=fgets($leer);
        $apellidos=fgets($leer);
        $edad=fgets($leer);
        $puesto=fgets($leer);
        if($bus!=$id){						
            fputs($escribir,$id);
            fputs($escribir,$nombre);
            fputs($escribir,$apellidos);
            fputs($escribir,$edad);
            fputs($escribir,$puesto);
        }
    }
    fclose($leer);
    fclose($escribir);
    if(rename("temp.txt","registros.txt")){
        
        echo "Registro eliminado correctamente!!!!!<br>";
    }
?>
<a href="insertar.html"><input type="button" class="btn btn-primary" value="volver"></a>
