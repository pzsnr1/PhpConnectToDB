<?php
/**
 * połączenie do SZDB -> postgreSql
 * gdy pojawi się problem to w konsoli psql wpisujemy:
 * ALTER SYSTEM SET password_encryption = 'md5';
 * ALTER ROLE postgres PASSWORD 'root';
 * SELECT passwd FROM pg_shadow WHERE user = 'postgres';
 */
    $host = "localhost";
    $port = "5432";
    $user = "postgres";
    $haslo = "root";
    $baza = "szkola";

    $ustawienia = "host=$host port=$port dbname=$baza user=$user password=$haslo";
    $polaczenie = pg_connect($ustawienia);

    $zapytanie = pg_query($polaczenie,"SELECT idu, imie, nazwisko FROM uczniowie;");

    if(!$zapytanie){
        echo("Błąd zapytania \n");
        exit();
    }

    while ($row = pg_fetch_assoc($zapytanie)) {
        echo $row['idu']." ".$row['imie']." ".$row['nazwisko']."<br>";
    }
?>