<?php
 echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' integrity='sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS'
     crossorigin='anonymous'>";
 echo "<div class='row'>";
 echo "<div class='col-lg-12'>";
 echo "<div class='text-center'>";               
    echo "<h1>Selecciona el registro para Eliminar<h1>";
echo "</div>";
echo     "</div>";
     echo "<div class='col-lg-12'>";
         echo "<hr>";
     echo "</div>";
 echo "</div>";

    $mostrar=fopen('registros.txt','r');
        echo "<div class='form-group'>";
        echo  "<table class=table table-sm table-bordered text-center border=1>";
        echo "<thead class=thead-dark>";
        echo "<tr>";
        echo "<th scope='col'>ID";
        echo "</th><th scope='col'>Nombre";
        echo "</th><th scope='col'>Apellidos";
        echo "</th><th scope='col'>Edad";
        echo "</th> <th scope='col'>Puesto</th>";
        echo "</tr>";
        echo " </thead>";
   while(!feof($mostrar))
        {   
            $id=fgets($mostrar);
            $nombre=fgets($mostrar);
            $apellidos=fgets($mostrar);
            $edad=fgets($mostrar);
            $puesto=fgets($mostrar);
            if($id!=""){   
                //echo "Id: <a href=editarsel.php?id=".$id.">".$id."</a><br>";  
               // echo  "<tr><td><a href=eliminarsel.php?id=".$id.">".$id."</a>";
                echo  "<tr><td><a href=eliminarsel.php?id=".$id.">".$id."</a></td><td>$nombre</td><td>$apellidos</td><td>$edad</td><td>$puesto</td></tr>";
           
            }       
    }
    echo "</table>";
    echo "</div>";
?>

<a href="insertar.html"><input type="button" class="btn btn-primary" value="volver"></a>

