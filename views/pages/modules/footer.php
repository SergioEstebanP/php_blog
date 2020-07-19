<footer class="container-fluid py-5 d-none d-md-block">
    <div class="container">
        <div class="row">
            <!-- GRID CATEGORÍAS FOOTER -->
            <div class="col-md-7 col-lg-6">
                <div class="p-1 bg-white gridFooter">
                    <div class="container p-0">
                        <div class="d-flex">
                            <div class="d-flex flex-column columna1">
                                <figure class="p-2 m-0 photo1" style="background:url(<?php echo $categories[0]['img'] ?>)" vinculo="<?php echo $categories[0]['route']?>">
                                    <p class="text-uppercase p-1 p-md-2 p-xl-1 small"><?php echo $categories[0]['title'] ?></p>
                                </figure>
                                <figure class="p-2 m-0 photo2" style="background:url(<?php echo $categories[1]['img'];?>)" vinculo="<? echo $categories[1]['route']?>">
                                    <p class="text-uppercase p-1 p-md-2 p-xl-1 small"><?php echo $categories[1]['title'] ?></p>
                                </figure>
                            </div>
                            <div class="d-flex flex-column flex-fill columna2">
                                <div class="d-block d-md-flex">
                                    <figure class="d-block m-0 d-md-none p-2 photo6" style="background:url(<?php echo $categories[2]['img'];?>)" vinculo="<? echo $categories[1]['route']?>">
                                        <p class="text-uppercase p-1 p-md-2 p-xl-1 small"><?php echo $categories[2]['title'] ?></p>
                                    </figure>
                                    <figure class="p-2 m-0 flex-fill photo3" style="background:url(<?php echo $categories[3]['img'] ?>)" vinculo="<? echo $categories[1]['route']?>">
                                        <p class="text-uppercase p-1 p-md-2 p-xl-1 small"><?php echo $categories[3]['title'] ?></p>
                                    </figure>
                                    <figure class="p-2 m-0 flex-fill photo3" style="background:url(<?php echo $categories[4]['img'] ?>)" vinculo="<? echo $categories[1]['route']?>">
                                        <p class="text-uppercase p-1 p-md-2 p-xl-1 small"><?php echo $categories[4]['title'] ?></p>
                                    </figure>
                                </div>
                                <figure class="p-2 m-0 photo5" style="background:url(<?php echo $categories[5]['img'];?>)" vinculo="<? echo $categories[1]['route']?>">
                                    <p class="text-uppercase p-1 p-md-2 p-xl-1 small"><?php echo $categories[5]['title'] ?></p>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-1 col-xl-2"></div>
            <!-- NEWLETTER -->
            <div class="col-md-5 col-lg-5 col-xl-4 pt-5">
                <h6 class="text-white">Inscríbete en nuestro newletter:</h6>
                <div class="input-group my-4">
                    <input type="text" class="form-control" placeholder="Ingresa tu Email">
                    <div class="input-group-append">
                        <span class="input-group-text bg-dark text-white">Inscribirse</span>
                    </div>
                </div>
                <div class="p-0 w-100 pt-2">
                    <ul class="d-flex justify-content-left p-0">
                        <li>
                            <a href="https://www.facebook.com" target="_blank">
                            <i class="fab fa-facebook-f lead text-white mr-3 mr-sm-4"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                            <i class="fab fa-instagram lead text-white mr-3 mr-sm-4"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                            <i class="fab fa-twitter lead text-white mr-3 mr-sm-4"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                            <i class="fab fa-youtube lead text-white mr-3 mr-sm-4"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                            <i class="fab fa-snapchat-ghost lead text-white mr-3 mr-sm-4"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

