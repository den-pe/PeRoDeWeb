			
<?php	
    echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' integrity='sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS'
crossorigin='anonymous'>";

echo "<form action=editarreg.php method=get>";
            $bus=(int)"$_REQUEST[id]";
            $leer=fopen("registros.txt","r");
            echo "<table>";
            while(!feof($leer)){					
                $id=fgets($leer);
                $nombre=fgets($leer);
                $apellidos=fgets($leer);
                $edad=fgets($leer);
                $puesto=fgets($leer);
                if($bus==$id){		                    
                echo " Id: <input type='text' name='id' id='id' required value=$id><br>";
                echo "<tr><td>Nombre</td><td><input type=text name=nombre value=$nombre></td></tr>";
                echo "<tr><td>Apellidos</td><td><input type=text name=apellidos value=$apellidos></td></tr>";
                echo "<tr><td>Edad</td><td><input type=text name=edad value=$edad></td></tr>";
                echo "<tr><td>Puesto</td><td><input type=text name=puesto value=$puesto></td></tr>";
                
                }
            }
            fclose($leer);
            echo "</table>";
            echo "<input type=submit  name=Editar></form>";
?>


<a href="insertar.html"><input type="button" class="btn btn-primary" value="volver"></a>
      