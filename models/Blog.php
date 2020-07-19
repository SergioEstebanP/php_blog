<?php 

require "Connection.php";

class Blog_Model {
    public static function get_blog ($table) {
        $stmt = Connection::connect() -> prepare("SELECT * FROM $table");
        $stmt -> execute();
        return $stmt -> fetch();
        $stmt -> close();
        $stmt = null;
    }

    public static function get_categories ($table) {
        $stmt = Connection::connect() -> prepare("SELECT * FROM $table");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
    }

    public static function get_articles ($articles, $categories, $amount, $from) {
        $stmt = Connection::connect() -> prepare("
            SELECT $categories.*, $articles.*
            FROM $categories INNER JOIN $articles 
            ON $categories.id = $articles.id_cat 
            ORDER BY $articles.id DESC
            LIMIT $from, $amount");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
    }

    public static function get_all_articles ($table) {
        $stmt = Connection::connect() -> prepare("SELECT * FROM $table");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
    }
}

?>