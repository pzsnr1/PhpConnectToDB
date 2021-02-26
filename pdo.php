<?php
    $host="localhost";
    $port=3306;
    $username="root";
    $password="";
    $dbname="szkola";

    try {
        $polaczenie = new PDO("mysql:host=$host;dbname=$dbname;port=$port;charset=utf8",$username,$password);
        echo("<h3>Połączono do bazy danych</h3>");
    } catch (PDOException $e) {
        echo("Error połączenia do bazy danych");
        die();//jeśli nie ma połączenia z bazą danych to natychmiast rozłącza mnie !!!
    }
?>