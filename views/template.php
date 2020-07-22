<?php 
$blog = Blog_Controller::show_blog();
$categories = Blog_Controller::get_categories();
$articles = Blog_Controller::get_articles(0, 5, null, null);

$total_articles = count(Blog_Controller::get_all_articles(null, null));
$total_pages = ceil(count(Blog_Controller::get_all_articles(null, null))/5);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php 

        if (isset($_GET["pages"])) {
            foreach ($categories as $key => $value) {
                if ($_GET["pages"] == $value["route"]) {
                    echo '
                    <title>'.$blog["title"].' | '.$value["description"].'</title>
                    <meta name="title" content="'.$blog["title"].' | '.$value["description"].'">
                    <meta name="description" content="'.$value["description"].'">
                    <meta name="keywords" content="'.$value["p_keys"].'">
                    ';
                } 
            }
        } else {
            echo '
            <title>'.$blog["title"].'</title>
            <meta name="title" content="'.$blog["title"].'">
            <meta name="description" content="'.$blog["description"].'">
            <meta name="keywords" content="'.$blog["key_words"].'">
            ';
        }

        ?>
        <link rel="icon" href="<?php echo $blog["domain"]?>views/img/icono.jpg">

        <!--=====================================
            PLUGINS DE CSS
            ======================================-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Chewy|Open+Sans:300,400" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
        <!-- JdSlider -->
        <!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
        <link rel="stylesheet" href="<?php echo $blog["domain"]?>views/css/plugins/jquery.jdSlider.css">
        <link rel="stylesheet" href="<?php echo $blog["domain"]?>views/css/style.css">

        <!--=====================================
            PLUGINS DE JS
        ======================================-->
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!-- JdSlider -->
        <!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
        <script src="<?php echo $blog["domain"]?>views/js/plugins/jquery.jdSlider-latest.js"></script>
        <!-- pagination -->
        <!-- http://josecebe.github.io/twbs-pagination/ -->
        <script src="<?php echo $blog["domain"]?>views/js/plugins/pagination.min.js"></script>
        <!-- scrollup -->
        <!-- https://markgoodyear.com/labs/scrollup/ -->
        <!-- https://easings.net/es# -->
        <script src="<?php echo $blog["domain"]?>views/js/plugins/scrollUP.js"></script>
        <script src="<?php echo $blog["domain"]?>views/js/plugins/jquery.easing.js"></script>
    </head>

    <body>

        <?php 

        include "pages/modules/header.php";
        include "pages/modules/social_media.php";
        include "pages/modules/mobile_searcher.php";
        include "pages/modules/menu.php";
        $validation = "";
        if (isset($_GET["pages"])) {
            $routes = explode("/", $_GET["pages"]);
            if (is_numeric($routes[0]) && $routes[0] <= $total_pages) {
                $from = ($routes[0] - 1) * 5;
                $articles = Blog_Controller::get_articles($from, 5, null, null);
                include "pages/init.php";
                include "pages/modules/footer.php";
            } else {
                foreach ($categories as $key => $value) {
                    if ($routes[0] == $value["route"]) {
                        $validation = $routes[0];
                    }
                }
                
            }
            if ($validation != "") {
                include "pages/categories.php";
                include "pages/modules/footer.php";
            } else {
                include "pages/404.php";
            }
        } else {
            include "pages/init.php";
            include "pages/modules/footer.php";
        }
        ?>

        <input type="hidden" id="actual_route" value="<?php echo $blog["domain"]?>">
        <script src="<?php echo $blog["domain"]?>views/js/script.js"></script>
    </body>

</html

