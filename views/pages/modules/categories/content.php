<?php

// get all the articles from the specific category
if (isset($routes[0])) {
    $articles = Blog_Controller::get_articles(0, 5, "route", $routes[0]);
    $total_articles = count(Blog_Controller::get_all_articles("id_cat", $articles[0]["id_cat"]));
    $total_pages = ceil(count(Blog_Controller::get_all_articles("id_cat", $articles[0]["id_cat"]))/5);
}

// check if we have some pagination in the enpoint string
if (isset($routes[1]) && is_numeric($routes[1])) {
    $actual_page = $routes[1];
    $from = ($routes[1] - 1) * 5;
    $articles = Blog_Controller::get_articles($from, 5, "route", $routes[0]);
} else {
    $actual_page = 1;
}


?>
<div class="container-fluid bg-white contenidoInicio py-2 py-md-4">
    <div class="container">
        <!-- BREADCRUMB -->
        <ul class="breadcrumb bg-white p-0 mb-2 mb-md-4">
            <li class="breadcrumb-item inicio"><a href="index.html">Inicio</a></li>
            <li class="breadcrumb-item active">Mi viaje por Suramérica</li>
        </ul>
        <div class="row">
            <!-- COLUMNA IZQUIERDA -->
            <div class="col-12 col-md-8 col-lg-9 p-0 pr-lg-5">

                <!-- FOREACH to show all the articles recovered from the DB -->
                <?php 
                foreach($articles as $key => $value) {
                    echo '
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <a href="'.$value["route"].'">
                                <h5 class="d-block d-lg-none py-3">'.$value["route"].'</h5>
                            </a>
                            <a href="'.$value["route"].'"><img src="'.$blog["domain"].''.$value["portrait"].'" alt="'.$value["title"].'" class="img-fluid" width="100%"></a>
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
                    <ul class="pagination justify-content-center" total_pages="<?php echo $total_pages; ?>" actual_page="<?php echo $actual_page; ?>" route_page="<?php echo $routes[0]; ?>"></ul>
                </div>
            </div>
            <!-- COLUMNA DERECHA -->
            <div class="d-none d-md-block pt-md-4 pt-lg-0 col-md-4 col-lg-3">
                <!-- ETIQUETAS -->	
                <div>
                    <h4>Etiquetas</h4>
                    <a href="#suramerica" class="btn btn-secondary btn-sm m-1">suramerica</a> 				
                    <a href="#colombia" class="btn btn-secondary btn-sm m-1">colombia</a> 					
                    <a href="#peru" class="btn btn-secondary btn-sm m-1">peru</a> 					
                    <a href="#argentina" class="btn btn-secondary btn-sm m-1">argentina</a> 					
                    <a href="#chile" class="btn btn-secondary btn-sm m-1">chile</a> 					
                    <a href="#brasil" class="btn btn-secondary btn-sm m-1">brasil</a> 					
                    <a href="#ecuador" class="btn btn-secondary btn-sm m-1">ecuador</a> 						
                    <a href="#venezuela" class="btn btn-secondary btn-sm m-1">venezuela</a> 
                    <a href="#paraguay" class="btn btn-secondary btn-sm m-1">paraguay</a> 						
                    <a href="#uruguay" class="btn btn-secondary btn-sm m-1">uruguay</a> 						
                    <a href="#bolivia" class="btn btn-secondary btn-sm m-1">bolivia</a> 					
                </div>
                <!-- Artículos Destacados -->
                <div class="my-4">
                    <h4>Artículos Destacados</h4>
                    <div class="d-flex my-3">
                        <div class="w-100 w-xl-50 pr-3 pt-2">
                            <a href="articulos.html">
                            <img src="<?php echo $blog["domain"]?>views/img/articulo01.png" alt="Lorem ipsum dolor sit amet" class="img-fluid">
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
                            <img src="<?php echo $blog["domain"]?>views/img/articulo02.png" alt="Lorem ipsum dolor sit amet" class="img-fluid">
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
                            <img src="<?php echo $blog["domain"]?>views/img/articulo03.png" alt="Lorem ipsum dolor sit amet" class="img-fluid">
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
                <div class="mb-4">
                    <img src="<?php echo $blog["domain"]?>views/img/ad03.png" class="img-fluid">
                </div>
                <div class="my-4">
                    <img src="<?php echo $blog["domain"]?>views/img/ad02.jpg" class="img-fluid">
                </div>
                <div class="my-4">
                    <img src="<?php echo $blog["domain"]?>views/img/ad05.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

