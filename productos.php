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



    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categorias</h1>

                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#" onclick="listar_todos_productos();">
                            Todos 
                            <label id="tipo" style="visibility: hidden;"><?php $tipo=($_GET['tipo']);echo "$tipo";?></label>                         
                        </a>
                        
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#" onclick="listar_pizarrones();">
                            Pizarrones                          
                        </a>
                        
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#" onclick="listar_sillas();">
                            Sillas                          
                        </a>
                        
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#" onclick="listar_mesas();">
                            Mesas                          
                        </a>
                        
                    </li>


                    <!--<li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Pizarrones
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Magneticos</a></li>
                            <li><a class="text-decoration-none" href="#">No Magneticos</a></li>
                            <li><a class="text-decoration-none" href="#">Para anuncios</a></li>
                            <li><a class="text-decoration-none" href="#">Combinados</a></li>

                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Sillas
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Con paleta</a></li>
                            <li><a class="text-decoration-none" href="#">Sin paleta</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Mesas
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Rectangulares</a></li>
                            <li><a class="text-decoration-none" href="#">Triangulares</a></li>
                            
                        </ul>
                    </li>-->
                </ul>
            </div>

            <div class="col-lg-9">
               <!-- <div class="row">
                    <div class="col-md-9">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Todos |</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Preescolar |</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="#">Primaria |</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="#">Secundaria |</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="#">Maestros |</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 pb-4">
                        <div class="d-flex">
                            <select class="form-control">
                                <option>Ordenar por:</option>
                                <option>A to Z</option>
                                <option>Menor precio a Mayor precio</option>
                                <option>Mayor precio a Menor precio</option>
                            </select>
                        </div>
                    </div>
                </div>-->
                <div class="row" id="box_productos">
                    
                    
                    
                   
                    
                    
                </div>
                <!--<div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>-->
            </div>

        </div>
    </div>
    <!-- End Content -->

    


    <?php
    require "footer.php";
    ?>

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript" src="scripts/productos.js?v=<?php echo(rand()); ?>"></script>
    <!-- End Script -->
</body>

</html>