<div class="container-fluid menu">
    <a href="#" class="btnClose">X</a>
    <ul class="nav flex-column text-center">
        <?php 
        foreach ($categories as $key => $value) {
            echo '
            <li class="nav-item">
                <a class="nav-link text-white" href="'.$value["route"].'">'.$value["description"].'</a>
            </li>';
        }
        ?>
    </ul>
</div>

