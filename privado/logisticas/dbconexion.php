<?php
		$link = mysqli_connect("localhost","php_parque","AutoParque.1920","php_parque");
		/* comprobar conexion*/
		if (mysqli_connect_errno()) {
			printf("Error de conexion: %s\n", mysqli_connect_error());
			exit();
			$link->set_charset(utf8_general_ci);
		}?> xcv