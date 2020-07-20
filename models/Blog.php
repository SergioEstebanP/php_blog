<?php 

require "Connection.php";

class Blog_Model {
    public static function get_blog ($table) {
        $stmt = Connection::connect() -> prepare("SELECT * FROM $table");
        $stmt -> execute();
        return $stmt -> fetch();
    }

    public static function get_categories ($table) {
        $stmt = Connection::connect() -> prepare("SELECT * FROM $table");
        $stmt -> execute();
        return $stmt -> fetchAll();
    }

    public static function get_articles ($articles, $categories, $amount, $from, $item, $value) {
        if ($item == null && $value == null) {
            $query = "SELECT $categories.*, $articles.* FROM $categories INNER JOIN $articles ON $categories.id = $articles.id_cat ORDER BY $articles.id DESC LIMIT $from, $amount";
            $stmt = Connection::connect() -> prepare($query);
        } else {
            $query = "SELECT $categories.*, $articles.* FROM $categories INNER JOIN $articles ON $categories.id = $articles.id_cat WHERE $item = :$item ORDER BY $articles.id DESC LIMIT $from, $amount";
            $stmt = Connection::connect() -> prepare($query);
            $stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);
        }
        $stmt -> execute();
        return $stmt -> fetchAll();
    }

    public static function get_all_articles ($table) {
        $stmt = Connection::connect() -> prepare("SELECT * FROM $table");
        $stmt -> execute();
        return $stmt -> fetchAll();
    }
}
