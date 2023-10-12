<?php
require "header.php";
?>

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        

        
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last" style="background-color: rgba(255, 255, 255, 0);">
                            <img class="img-fluid" src="https://res.cloudinary.com/ddcszcshl/image/upload/v1638472502/Pizarrones%20Guadalajara/Pagina_web/Index/pizarrones_jqhv7i.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center" style="margin-left: 20px;">
                                <h1 class="h1 tam_h1" style="color: #686968 !important; " id="h1_piz"><b>Pizarrones</b> blancos y para anuncios</h1>
                                <h3 class="h2 tam_h2">Magneticos y no magneticos</h3>
                                <div style="background-color: rgba(255, 255, 255, 0); border-radius: 10px;">
                                    <p style="color: #2A3F54 !important;">
                                        Borrado en seco y marco de aluminio. <br><br>
                                        <div class="form-group col-md-12 col-lg-12">
                                            <p class="text-left" style="float: left;">
                                                <a class="btn btn-success" style="" href="productos.php">Ver productos</a>
                                                
                                            </p>
                                            <p class="text-left" style="float: left;">
                                                <a class="btn btn-success btn_asesoria" href="#" onclick="mostrar_formulario();" style="background-color: #2A3F54 !important; margin-left: 10px;">Asesoria gratuita</a>
                                                
                                            </p>
                                        </div>
                                             
                                        
                                        
                                        
                                    </p>
                                </div>
                                    
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last" style="background-color: rgba(255, 255, 255, 0);">
                            <img class="img-fluid" src="https://res.cloudinary.com/ddcszcshl/image/upload/v1638472506/Pizarrones%20Guadalajara/Pagina_web/Index/sillas_sf_sm1nap.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left" style="margin-left: 20px;">
                                <h1 class="h1 tam_h1" style="color: #686968 !important; " id="h1_silla"><b>Sillas</b> para Preescolar, Primaria y Secundaria</h1>
                                <h3 class="h2 tam_h2">Con paleta y sin paleta</h3>
                                <p>
                                    Con parrilla portalibros o solera de soporte, asiento y respaldo en una o dos piezas de polipropileno. <br><br>
                                        <div class="form-group col-md-12 col-lg-12">
                                            <p class="text-left" style="float: left;">
                                                <a class="btn btn-success" style="" href="productos.php">Ver productos</a>
                                                
                                            </p>
                                            <p class="text-left" style="float: left;">
                                                <a class="btn btn-success btn_asesoria" href="#" onclick="mostrar_formulario();" style="background-color: #2A3F54 !important; margin-left: 10px;">Asesoria gratuita</a>
                                                
                                            </p>
                                        </div>
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last" style="background-color: rgba(255, 255, 255, 0);">
                            <img class="img-fluid" src="https://res.cloudinary.com/ddcszcshl/image/upload/v1638472510/Pizarrones%20Guadalajara/Pagina_web/Index/mesas_sf_ducwjv.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left" style="margin-left: 20px;">
                                <h1 class="h1 tam_h1" style="color: #686968 !important; " id="h1_mesa"><b>Mesas</b> para Preescolar, Primaria y Secundaria</h1>
                                <h3 class="h2 tam_h2">Rectangular y Trapecio </h3>
                                <p>
                                    Cubierta de polipropileno o triplay formaica.<br><br>
                                        <div class="form-group col-md-12 col-lg-12">
                                            <p class="text-left" style="float: left;">
                                                <a class="btn btn-success" style="" href="productos.php">Ver productos</a>
                                                
                                            </p>
                                            <p class="text-left" style="float: left;">
                                                <a class="btn btn-success btn_asesoria" href="#" onclick="mostrar_formulario();" style="background-color: #2A3F54 !important; margin-left: 10px;">Asesoria gratuita</a>
                                                
                                            </p>
                                        </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Nuestras categorias</h1>
                <p>
                    Estás a un paso de equipar tu espacio con productos de calidad y durabilidad. Te invitamos a conocer nuestra amplia variedad de productos, no te arrepentirás.</p>
            </div>
        </div>
        <div class="row">

            
                

                <div class="col-md-6 col-lg-4 pb-5" onclick="abrir_prod_1();">
                    <div class="h-100 py-5 services-icon-wap shadow" onmouseover="piz_hover();" onmouseout="piz();" style="cursor: pointer;">
                        <div class="h1 text-success text-center">
                            <img id="piz_1" src="images/iconos/pizarron_v.png" style="width: 70px;">
                            <img id="piz_2" src="images/iconos/pizarron_blanco.png" style="width: 70px;">
                            <!--<i class="fa fa-truck fa-lg"></i>-->
                        </div>
                        <h2 class="h5 mt-4 text-center">Pizarrones</h2>
                    </div>
                </div>
                                      
           

                
                
                

                <div class="col-md-6 col-lg-4 pb-5" onclick="abrir_prod_2();">
                    <div class="h-100 py-5 services-icon-wap shadow" onmouseover="sillas_hover();" onmouseout="sillas();" style="cursor: pointer;">
                        <div class="h1 text-success text-center">
                            <img id="silla_1" src="images/iconos/silla.png" style="width: 70px;">
                            <img id="silla_2" src="images/iconos/silla_blanco.png" style="width: 70px;">
                        </div>
                        <h2 class="h5 mt-4 text-center">Sillas</h2>
                    </div>
                </div>

            

            
                <div class="col-md-6 col-lg-4 pb-5" onclick="abrir_prod_3();">
                    <div class="h-100 py-5 services-icon-wap shadow" onmouseover="mesas_hover();" onmouseout="mesas();" style="cursor: pointer;">
                        <div class="h1 text-success text-center">
                            <img id="mesa_1" src="images/iconos/mesa.png" style="width: 70px;">
                            <img id="mesa_2" src="images/iconos/mesa_blanco.png" style="width: 70px;">
                        </div>
                        <h2 class="h5 mt-4 text-center">Mesas</h2>
                    </div>
                </div>
            

            <!--<div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow" onmouseover="acces_hover();" onmouseout="acces();" style="cursor: pointer;">
                    <div class="h1 text-success text-center">
                        <img id="acces_1" src="images/iconos/marcador.png" style="width: 70px;">
                        <img id="acces_2" src="images/iconos/marcador_blanco.png" style="width: 70px;" >
                    </div>
                    <h2 class="h5 mt-4 text-center">Accesorios</h2>
                </div>
            </div>-->
        </div>
    </section>

    <script type="text/javascript">
        
    </script>

    <!-- Start Categories of The Month -->
    <!--<section class="container py-5" style="" id="equipa">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categorias de productos</h1>
                <p>
                    Estás a un paso de equipar tu espacio con productos de calidad y durabilidad. Te invitamos a conocer nuestra amplia variedad de productos, no te arrepentirás.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-2 p-5 mt-3" style="padding: 15px !important;">
                <a href="#"><img src="images/categorias/pizarrones2.png" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Pizarrones</h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-2 p-5 mt-3" style="padding: 15px !important;">
                <a href="#"><img src="images/categorias/sillas2.png" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Sillas</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-2 p-5 mt-3" style="padding: 15px !important;">
                <a href="#"><img src="images/categorias/mesas2.png" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Mesas</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-2 p-5 mt-3" style="padding: 15px !important;">
                <a href="#"><img src="images/categorias/rotafolio2.png" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Rotafolios</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-2 p-5 mt-3" style="padding: 15px !important;">
                <a href="#"><img src="images/categorias/bancos2.png" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Bancos</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-2 p-5 mt-3" style="padding: 15px !important;">
                <a href="#"><img src="images/categorias/vitrinas2.png" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Vitrinas</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            
        </div>
    </section>-->
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Destacados</h1>
                    <p>
                        
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4" style="background-color: rgba(0, 0, 0, 0);">
                    <div class="card h-100">
                        <a href="#">
                            <img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1638478247/Pizarrones%20Guadalajara/Pagina_web/Index/Pizarron_melamina_ckbfnj.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <div class="col-12 col-md-12 mb-12" style="margin-bottom: 30px !important;">
                                <a href="#" class="h2 text-decoration-none text-dark" style="font-size: 20px !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important;">Pizarrón Blanco 60x90 cm</a>
                                <p class="card-text" style="margin-left: 20px !important; margin-right: 10px !important;">
                                    Marco de aluminio, borrado en seco.
                                </p>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between">
                                <!--<li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>-->
                                <!--<li style="margin-left: 20px !important; "><p class="text-center" style=""><a class="btn btn-success" style="background-color: #2A3F54 !important;">Más medidas</a></p></li>-->
                                <li class="text-muted text-right" style="color: #212934 !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important; font-size: 25px !important;">$394.00</li>
                            </ul>
                            
                            
                            
                            <!---->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="#">
                            <img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1671693556/Pizarrones%20Guadalajara/Pagina_web/Index/PIZA_90X300_qqyz9v.png" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body">
                            <div class="col-12 col-md-12 mb-12" style="margin-bottom: 30px !important; margin-top: 50px;">
                                <a href="#" class="h2 text-decoration-none text-dark" style="font-size: 20px !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important;">Pizarrón Blanco 90x300 cm</a>
                                <p class="card-text" style="margin-left: 20px !important; margin-right: 10px !important;">
                                    Fabricado sobre un tablero de MDF de 9 mm, con una hoja de lámina de acero al carbono Cal . 24 porcelanizada con esmalte refractario horneado a 800 C
                                </p>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between">
                                <!--<li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>-->
                                <!--<li style="margin-left: 20px !important; "><p class="text-center" style=""><a class="btn btn-success" style="background-color: #2A3F54 !important;">Más medidas</a></p></li>-->
                                <li class="text-muted text-right" style="color: #212934 !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important; font-size: 25px !important;"></li>
                            </ul>
                            
                            
                            
                            <!---->
                        </div>

                        
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="#">
                            <img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1638478244/Pizarrones%20Guadalajara/Pagina_web/Index/pizarron_corcho_ijb8b9.png" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body">
                            <div class="col-12 col-md-12 mb-12" style="margin-bottom: 30px !important;">
                                <a href="#" class="h2 text-decoration-none text-dark" style="font-size: 20px !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important;">Pizarron de Corcho 60x90 cm</a>
                                <p class="card-text" style="margin-left: 20px !important; margin-right: 10px !important;">
                                    Para anuncios con marco de aluminio
                                </p>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between">
                                <!--<li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>-->
                                <!--<li style="margin-left: 20px !important; "><p class="text-center" style=""><a class="btn btn-success" style="background-color: #2A3F54 !important;">Más medidas</a></p></li>-->
                                <li class="text-muted text-right" style="color: #212934 !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important; font-size: 25px !important;">$336.00</li>
                            </ul>
                            
                            
                            
                            <!---->
                        </div>


                        
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="#">
                            <img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1638478243/Pizarrones%20Guadalajara/Pagina_web/Index/individual_j5nj8s.png" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body">
                            <div class="col-12 col-md-12 mb-12" style="margin-bottom: 30px !important;">
                                <a href="#" class="h2 text-decoration-none text-dark" style="font-size: 20px !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important;">Pizarrón individual 30x40 cm</a>
                                <p class="card-text" style="margin-left: 20px !important; margin-right: 10px !important;">
                                    Con marco de plastico
                                </p>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between">
                                <!--<li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>-->
                                <!--<li style="margin-left: 20px !important; "><p class="text-center" style=""><a class="btn btn-success" style="background-color: #2A3F54 !important;">Más medidas</a></p></li>-->
                                <li class="text-muted text-right" style="color: #212934 !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important; font-size: 25px !important;">$55.00</li>
                            </ul>
                            
                            
                            
                            <!---->
                        </div>

                        
                    </div>
                </div>
                
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="#">
                            <img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1638478245/Pizarrones%20Guadalajara/Pagina_web/Index/silla_tapizada_u0uncb.png" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body">
                            <div class="col-12 col-md-12 mb-12" style="margin-bottom: 30px !important;">
                                <a href="#" class="h2 text-decoration-none text-dark" style="font-size: 20px !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important;">Silla Tapizada</a>
                                <p class="card-text" style="margin-left: 20px !important; margin-right: 10px !important;">
                                    Poliester acojinado
                                </p>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between">
                                
                                <!--<li style="margin-left: 20px !important; "><p class="text-center" style=""><a class="btn btn-success" style="background-color: #2A3F54 !important;">Más medidas</a></p></li>-->
                                <li class="text-muted text-right" style="color: #212934 !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important; font-size: 25px !important;">$666.00</li>
                            </ul>
                            
                            
                            
                            <!---->
                        </div>

                        
                    </div>
                </div>
                
                
                
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="#">
                            <img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1694119678/Pizarrones%20Guadalajara/Pagina_web/Index/Silla_concha_reforzada_con_Paleta_btvl4s.jpg" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body">
                            <div class="col-12 col-md-12 mb-12" style="margin-bottom: 30px !important;">
                                <a href="#" class="h2 text-decoration-none text-dark" style="font-size: 20px !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important;">Silla concha reforzada con Paleta</a>
                                <p class="card-text" style="margin-left: 20px !important; margin-right: 10px !important;">
                                    Asiento y respaldo en una pieza de polipropileno <br> Altura total: 74cm, <br> Altura Asiento: 45cm, <br> Espesor: 5 mm.
                                </p>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between">
                                
                                <!--<li style="margin-left: 20px !important; "><p class="text-center" style=""><a class="btn btn-success" style="background-color: #2A3F54 !important;">Más medidas</a></p></li>-->
                                <li class="text-muted text-right" style="color: #212934 !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important; font-size: 25px !important;"></li>
                            </ul>
                            
                            
                            
                            <!---->
                        </div>


                        
                    </div>
                </div>
                
                
                
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="#">
                            <img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1638478248/Pizarrones%20Guadalajara/Pagina_web/Index/silla_concha_kinder_uxs6ez.png" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body">
                            <div class="col-12 col-md-12 mb-12" style="margin-bottom: 30px !important;">
                                <a href="#" class="h2 text-decoration-none text-dark" style="font-size: 20px !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important;">Silla de concha kinder</a>
                                <p class="card-text" style="margin-left: 20px !important; margin-right: 10px !important;">
                                    Asiento y respaldo en una pieza de polipropileno
                                </p>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between">
                                
                                <!--<li style="margin-left: 20px !important; "><p class="text-center" style=""><a class="btn btn-success" style="background-color: #2A3F54 !important;">Más medidas</a></p></li>-->
                                <li class="text-muted text-right" style="color: #212934 !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important; font-size: 25px !important;">$350.00</li>
                            </ul>
                            
                            
                            
                            <!---->
                        </div>


                        
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="#">
                            <img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1638478246/Pizarrones%20Guadalajara/Pagina_web/Index/silla_pg_sec_rfmymg.png" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body">
                            <div class="col-12 col-md-12 mb-12" style="margin-bottom: 30px !important;">
                                <a href="#" class="h2 text-decoration-none text-dark" style="font-size: 20px !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important;">Silla PG Secundaria con paleta rectangular</a>
                                <p class="card-text" style="margin-left: 20px !important; margin-right: 10px !important;">
                                    Asiento y respaldo de polipropileno, parrilla portalibros.
                                </p>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between">
                                
                                <!--<li style="margin-left: 20px !important; "><p class="text-center" style=""><a class="btn btn-success" style="background-color: #2A3F54 !important;">Más medidas</a></p></li>-->
                                <li class="text-muted text-right" style="color: #212934 !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important; font-size: 25px !important;">$787.93</li>
                            </ul>
                            
                            
                            
                            <!---->
                        </div>


                        
                    </div>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="#">
                            <img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1671691438/Pizarrones%20Guadalajara/Pagina_web/Index/stack2020_ry7ndt.jpg" class="card-img-top" alt="..." style="width: 80%;">
                        </a>

                        <div class="card-body">
                            <div class="col-12 col-md-12 mb-12" style="margin-bottom: 30px !important;">
                                <a href="#" class="h2 text-decoration-none text-dark" style="font-size: 20px !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important;">Silla Stack</a>
                                <p class="card-text" style="margin-left: 20px !important; margin-right: 10px !important;">
                                     Asiento y Respaldo en Polipropileno de Alto impacto, Asiento: 470 x 460 mm Respaldo: 470 x 300mm Espesor: 4 mm, Estructura con redondo macizo de Acero al carbono 1/2" acabado con Pintura Electrostática.
                                </p>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between">
                                
                                <!--<li style="margin-left: 20px !important; "><p class="text-center" style=""><a class="btn btn-success" style="background-color: #2A3F54 !important;">Más medidas</a></p></li>-->
                                <li class="text-muted text-right" style="color: #212934 !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important; font-size: 25px !important;"></li>
                            </ul>
                            
                            
                            
                            <!---->
                        </div>


                        
                    </div>
                </div>


                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="#">
                            <img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1638478245/Pizarrones%20Guadalajara/Pagina_web/Index/trapecio_voi4vc.png" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body">
                            <div class="col-12 col-md-12 mb-12" style="margin-bottom: 30px !important;">
                                <a href="#" class="h2 text-decoration-none text-dark" style="font-size: 20px !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important;">Mesa Trapecio Grande Kinder</a>
                                <p class="card-text" style="margin-left: 20px !important; margin-right: 10px !important;">
                                    Cubierta de polipropileno, Medidas: 122x70x56 cm, Altura 55 cm.
                                </p>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between">
                                
                                <!--<li style="margin-left: 20px !important; "><p class="text-center" style=""><a class="btn btn-success" style="background-color: #2A3F54 !important;">Más medidas</a></p></li>-->
                                <li class="text-muted text-right" style="color: #212934 !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important; font-size: 25px !important;">$845.69</li>
                            </ul>
                            
                            
                            
                            <!---->
                        </div>

                        
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="#">
                            <img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1638478244/Pizarrones%20Guadalajara/Pagina_web/Index/maestro_yttkpu.png" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body">
                            <div class="col-12 col-md-12 mb-12" style="margin-bottom: 30px !important;">
                                <a href="#" class="h2 text-decoration-none text-dark" style="font-size: 20px !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important;">Mesa Maestro</a>
                                <p class="card-text" style="margin-left: 20px !important; margin-right: 10px !important;">
                                    Cubierta de polipropileno, Medidas: 60x120 cm, Altura 75 cm.
                                </p>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between">
                                
                                <!--<li style="margin-left: 20px !important; "><p class="text-center" style=""><a class="btn btn-success" style="background-color: #2A3F54 !important;">Más medidas</a></p></li>-->
                                <li class="text-muted text-right" style="color: #212934 !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important; font-size: 25px !important;">$1072.41</li>
                            </ul>
                            
                            
                            
                            <!---->
                        </div>

                        
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="#">
                            <img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1638478244/Pizarrones%20Guadalajara/Pagina_web/Index/kinder_pxe4pz.png" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body">
                            <div class="col-12 col-md-12 mb-12" style="margin-bottom: 30px !important;">
                                <a href="#" class="h2 text-decoration-none text-dark" style="font-size: 20px !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important;">Mesa Kinder</a>
                                <p class="card-text" style="margin-left: 20px !important; margin-right: 10px !important;">
                                    Cubierta de polipropileno, Medidas: 60x120 cm, Altura 55 cm.
                                </p>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-between">
                                
                                <!--<li style="margin-left: 20px !important; "><p class="text-center" style=""><a class="btn btn-success" style="background-color: #2A3F54 !important;">Más medidas</a></p></li>-->
                                <li class="text-muted text-right" style="color: #212934 !important; font-weight: 500 !important; margin-left: 20px !important; margin-right: 10px !important; font-size: 25px !important;">$995.69</li>
                            </ul>
                            
                            
                            
                            <!---->
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>¿Quiénes somos?</h1>
                    <p>
                        Con más de 50 años de experiencia, en PIZARRONES GUADALAJARA S.A. DE C.V. nos dedicamos a la fabricación y venta de pizarrones y muebles escolares.
                    </p>
                    <p>Somos vendedores directos con los precios más competitivos.</p>
                    <p>Manufacturamos con estándares internacionales que superan las expectativas del mercado.</p>
                    <h1>Política de Calidad</h1>
                    <p>Nuestra meta es la satisfacción de nuestros clientes, mejorando continuamente la eficacia de nuestro sistema de Calidad y el cumplimiento de sus objetivos.</p>
                
                </div>
                <div class="col-md-4">
                    <img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1638478017/Pizarrones%20Guadalajara/Pagina_web/Index/personal_uirwhj.png" width="100%">
                </div>
            </div>
        </div>
    </section>
    
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">¿Que opinan nuestros clientes?</h1>
                    <!--<p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        Lorem ipsum dolor sit amet.
                    </p>-->
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="templatemo-slide-brand" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-12 p-md-5">
                                                <!--<a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>-->
                                                
                                            </div>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <!--<div class="carousel-item">
                                        <div class="row">
                                            <div class="col-6 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fxochitl.esquivelmariscal%2Fposts%2F10224427379813428&show_text=true&width=500" width="500" height="107" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                            </div>
                                            
                                        </div>
                                    </div>-->
                                    <!--End Second slide-->

                                    <!--Third slide-->
                                    <!--<div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>-->
                                    <!--End Third slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>

   <?php
    require "footer.php";
    ?>

        <script src="assets/js/jquery-1.11.0.min.js"></script>
        <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/templatemo.js"></script>
        <script src="assets/js/custom.js"></script>

    <script type="text/javascript" src="scripts/index.js?v=<?php echo(rand()); ?>"></script>
 