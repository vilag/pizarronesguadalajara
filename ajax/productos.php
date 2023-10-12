<?php
require_once "../modelos/Productos.php";

$productos=new Productos();

switch ($_GET["op"])
	{



		case 'listar_todos_productos':
			
			$rspta = $productos->listar_todos_productos();

						

			//$total=0;
			while ($reg = $rspta->fetch_object())
					{

						echo '

							
							<div class="col-12 col-md-4 mb-4">
			                    <div class="card h-100">
			                        <a href="#">
			                            <img src="'.$reg->enlace_imagen_pagina.'" class="card-img-top" alt="...">
			                        </a>
			                        <div class="card-body">
			                            
			                            <a href="#" class="h2 text-decoration-none text-dark" style="font-size: 18px !important;"><b>'.$reg->nombre_group.'</b></a>
			                            
			                            
			                        </div>
			                    </div>
			                </div>


							

						';
	
					}			
			
		break;

		case 'listar_tipo':
			
			$tipo = $_GET['tipo'];

			$rspta = $productos->listar_tipo($tipo);

						

			//$total=0;
			while ($reg = $rspta->fetch_object())
					{

						echo '

							
							<div class="col-12 col-md-4 mb-4">
			                    <div class="card h-100">
			                        <a href="#">
			                            <img src="'.$reg->enlace_imagen_pagina.'" class="card-img-top" alt="...">
			                        </a>
			                        <div class="card-body">
			                            
			                            <a href="#" class="h2 text-decoration-none text-dark" style="font-size: 18px !important;"><b>'.$reg->nombre_group.'</b></a><br><br>
			                            <p class="card-text" style="margin-left: 20px !important; margin-right: 10px !important;">
										'.$reg->detalle.'
										</p>
			                            
			                        </div>
			                    </div>
			                </div>


							

						';
	
					}			
			
		break;


	}


?>