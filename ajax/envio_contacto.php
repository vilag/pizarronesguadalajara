<?php

			require 'conexion.php';

			$nombre = $_POST['nombre_completo'];
			$email = $_POST['email'];
			$telefono = $_POST['telefono'];
			$mensaje = $_POST['mensaje'];
			$plataforma = "formulario_lp";
			$check_noti = "1";
			//$fecha_hora = $_POST['fecha_hora'];

			/*echo $nombre;
			echo $email;
			echo $telefono;
			echo $mensaje;*/



				$sql="INSERT INTO contactos(nombre,email,telefono,mensaje,plataforma,noticias,fecha_hora,estatus,venta) VALUES ('$nombre','$email','$telefono','$mensaje','$plataforma','$check_noti','0000-00-00 00:00:00','0','0')";

								if ($mysqli->query($sql)):
									echo json_encode(array('error' => false));
								else:
									echo json_encode(array('error' => true));
								endif;

			/*$destinatario = "orel.vilchis@gmail.com";
			$asunto = "Contacto desde nuestra web: ".$nombre;

			$carta = "De: $nombre \n";
			$carta .= "Correo: $email \n";
			$carta .= "Telefono: $telefono \n";
			$carta .= "Mensaje: $mensaje";

			mail($destinatario, $asunto, $carta);*/		
					
				

			$mysqli->close();
		


?>