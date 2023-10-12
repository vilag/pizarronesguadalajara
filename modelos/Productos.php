<?php 

require "../config/Conexion.php";

Class Productos
{

	public function __construct()
	{

	}

	

	public function listar_todos_productos()
	{

		//$sql="SELECT * FROM prod_tipo ORDER BY nombre ASC";
		$sql="SELECT * FROM tbl_prod WHERE enlace_imagen_pagina<>'' GROUP BY codigo_group ORDER BY idtbl_prod ASC";
		return ejecutarConsulta($sql);
	}

	public function listar_tipo($tipo)
	{

		//$sql="SELECT * FROM prod_tipo ORDER BY nombre ASC";
		$sql="SELECT * FROM tbl_prod WHERE enlace_imagen_pagina<>'' AND id_tipo = '$tipo' GROUP BY codigo_group ORDER BY idtbl_prod ASC";
		return ejecutarConsulta($sql);
	}

	

}

?>