<?php 

class Blog_Controller {
    public static function show_blog() {
        $table = "blog";
        $response = Blog_Model::get_blog($table);
        return $response;
    }

    public static function get_categories() {
        $table = "category";
        $response = Blog_Model::get_categories($table);
        return $response;
    }

    public static function get_articles($from, $amount, $item, $value) {
        $table_articles = "article";
        $table_categories = "category";
        $response = Blog_Model::get_articles($table_articles, $table_categories, $amount, $from, $item, $value);
        return $response;
    }

    public static function get_all_articles() {
        $table = "article";
        $response = Blog_Model::get_all_articles($table);
        return $response;
    }
}

?>