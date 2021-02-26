<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "szkola";
    $port = 3306;

    $polaczenie = @new Mysqli($host,$username,$password,$dbname,$port);

    if (mysqli_connect_errno()!=0) {
        echo("Błąd połączenia do bazy danych");
    } else {
        echo("Połączono do bazy danych");
    }

?>