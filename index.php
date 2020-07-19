<?php 

// CONTROLLERS 
require_once "controllers/Template.php";
require_once "controllers/Blog.php";

// MODELS
require_once "models/Blog.php";

$template = new Template_Controller();
$template -> get_template();

?>