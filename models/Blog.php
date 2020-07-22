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
            $stmt = Connection::connect() -> prepare("
                SELECT $categories.*, $articles.* 
                FROM $categories 
                INNER JOIN $articles ON $categories.id = $articles.id_cat 
                ORDER BY $articles.id DESC 
                LIMIT $from, $amount");
            $stmt -> execute();
            return $stmt -> fetchAll();
        } else {
            $stmt = Connection::connect() -> prepare("
                SELECT $categories.*, $articles.* 
                FROM $categories 
                INNER JOIN $articles ON $categories.id = $articles.id_cat 
                WHERE $categories.$item = :$item
                ORDER BY $articles.id DESC 
                LIMIT $from, $amount");
            $stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }
    }

    public static function get_all_articles ($table, $item, $value) {
        if ($item == null && $value == null) {
            $stmt = Connection::connect() -> prepare("SELECT * FROM $table");
            $stmt -> execute();
            return $stmt -> fetchAll();
        } else {
            $stmt = Connection::connect() -> prepare("SELECT * FROM $table WHERE $item = :$item");
            $stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }
    }
}
