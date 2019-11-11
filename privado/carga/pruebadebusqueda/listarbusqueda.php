<?php

    










































	/*$servername = "localhost";
    $username = "php_parque";
  	$password = "AutoParque.1920";
  	$dbname = "php_parque";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM encargadodeviaje WHERE dni NOT LIKE ''";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM encargadodeviaje WHERE dni LIKE '%$q%' ";
    }

    $resultado = $conn->query($query);



    //-----------------------------------------------------------------------------------------------










    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>ID</td>
    					<td>JUGADOR</td>
    					<td>CLUB NAME</td>
    					<td>RATING NACIONAL</td>
    					<td>TITULO</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['Id_no']."</td>
    					<td>".$fila['Name']."</td>
    					<td>".$fila['ClubName']."</td>
    					<td>".$fila['Rtg_Nat']."</td>
    					<td>".$fila['Title']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $conn->close();


*/
?>