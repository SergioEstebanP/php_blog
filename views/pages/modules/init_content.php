<?php 

if (isset($_GET["pages"]) && is_numeric($_GET["pages"]))  {
    $actual_page =  $_GET["pages"];
} else {
    $actual_page = 1;
}

?>

<div class="container-fluid bg-white contenidoInicio pb-4">
    <div class="container">
        <div class="row">
            <!-- COLUMNA IZQUIERDA -->
            <div class="col-12 col-md-8 col-lg-9 p-0 pr-lg-5">
                <?php 
                foreach($articles as $key => $value) {
                    echo '
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <a href="'.$value["route"].'">
                                <h5 class="d-block d-lg-none py-3">'.$value["route"].'</h5>
                            </a>
                            <a href="'.$value["route"].'"><img src="'.$value["portrait"].'" alt="'.$value["title"].'" class="img-fluid" width="100%"></a>
                        </div>
                        <div class="col-12 col-lg-7 introArticulo">
                            <a href="'.$value["route"].'">
                                <h4 class="d-none d-lg-block">'.$value["title"].'</h4>
                            </a>
                            <p class="my-2 my-lg-5">'.$value["description"].'</p>
                            <a href="'.$value["route"].'" class="float-right">Leer Más</a>
                            <div class="fecha">'.$value["date"].'</div>
                        </div>
                    </div>
                    <hr class="mb-4 mb-lg-5" style="border: 1px solid #79FF39">';
                }
                ?>
                <div class="container d-none d-md-block">
                    <ul class="pagination justify-content-center" total_pages="<?php echo $total_pages; ?>" actual_page="<?php echo $actual_page; ?>"></ul>
                </div>
            </div>
            <!-- COLUMNA DERECHA -->
            <div class="d-none d-md-block pt-md-4 pt-lg-0 col-md-4 col-lg-3">

                <!-- SOBRE MI -->
                <?php echo $blog["about_me"]; ?>
                <!-- Artículos destacados -->
                <div class="my-4">
                    <h4>Artículos Destacados</h4>
                    <div class="d-flex my-3">
                        <div class="w-100 w-xl-50 pr-3 pt-2">
                            <a href="articulos.html">
                            <img src="views/img/articulo10.png" alt="Lorem ipsum dolor sit amet" class="img-fluid">
                            </a>
                        </div>
                        <div>
                            <a href="articulos.html" class="text-secondary">
                                <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex my-3">
                        <div class="w-100 w-xl-50 pr-3 pt-2">
                            <a href="articulos.html">
                            <img src="views/img/articulo09.png" alt="Lorem ipsum dolor sit amet" class="img-fluid">
                            </a>
                        </div>
                        <div>
                            <a href="articulos.html" class="text-secondary">
                                <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex my-3">
                        <div class="w-100 w-xl-50 pr-3 pt-2">
                            <a href="articulos.html">
                            <img src="views/img/articulo08.png" alt="Lorem ipsum dolor sit amet" class="img-fluid">
                            </a>
                        </div>
                        <div>
                            <a href="articulos.html" class="text-secondary">
                                <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- PUBLICIDAD -->
                <div class="my-4">
                    <img src="views/img/ad01.jpg" class="img-fluid">
                </div>
                <div class="my-4">
                    <img src="views/img/ad02.jpg" class="img-fluid">
                </div>
                <div class="my-4">
                    <img src="views/img/ad05.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

