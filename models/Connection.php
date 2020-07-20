<?php 

class Connection {
    static function connect () {
        $db_connect = new PDO('mysql:host=localhost;dbname=blog_php', 'root', '');
        $db_connect->exec("set names utf8");
        return $db_connect;
    }
}

?>