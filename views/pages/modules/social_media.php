<div class="d-block d-md-none redes redesMovil p-0 bg-white w-100 pt-2">
    <ul class="d-flex justify-content-center p-0">
        <?php 
        foreach( json_decode($blog["social_media"], true) as $key => $value ) {
            echo '
            <li>
                <a href="'.$value["url"].'" target="_blank">
                <i class="fab '.$value["icon"].' lead rounded-circle text-white mr-3 mr-sm-4"></i>
                </a>
            </li>';
        }
        ?>
    </ul>
</div>

