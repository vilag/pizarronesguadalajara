<?php 
require_once "../modelos/Index.php";

$index=new Index();

switch ($_GET["op"]){
	
	case 'save_contact_form':
	
			$nombre = $_POST['nombre_completo'];
			$email = $_POST['email'];
			$telefono = $_POST['telefono'];
			$mensaje = $_POST['mensaje'];
			$plataforma = "formulario_lp";
			$check_noti = "1";
			$fecha_hora = $_POST['fecha_hora'];
		

			$rspta=$index->save_contact_form($nombre,$email,$telefono,$mensaje,$plataforma,$check_noti,$fecha_hora);
	 		echo json_encode($rspta);

	 		// Datos para el correo
			$destinatario = "vventaspg@outlook.com, mjozafat@gmail.com, vilag2407@gmail.com";
			$asunto = "Contacto desde nuestra web: ".$nombre;

			$carta = "De: $nombre \n";
			$carta .= "Correo: $email \n";
			$carta .= "Telefono: $telefono \n";
			$carta .= "Mensaje: $mensaje";

			mail($destinatario, $asunto, $carta);

	break;


	
}
?>