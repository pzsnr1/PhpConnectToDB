<?php
/**
 * Tworzę połączenie za pomocą kostruktora klasy Mysqli()
 */

 //konfiguracja ------------------------------------------------------------------
 $user = "root";//nazwa użytkownika z uprawnieniami do bazy danych
 $password = ""; //hasło dostępowe dla użytkownika w/w
 $host = "localhost"; //adres serwera ip lub lokalnie nazwa lub nazwa domenowa
 $dbname = "szkola"; // wybór bazy danych
 $port = 3306; //port nasłuchiwania, tutaj domyślnie dla mysql
 //--------------------------------------------------------------------------------

 $polaczenie = @new Mysqli($host,$user,$password,$dbname,$port);
 //znak at czyli @ ukrywa wygenerowane błędy związane z połączeniem

 if(mysqli_connect_errno()!=0){
    echo("<p>Wystąpił błąd połączenia do bazy danych".mysqli_connect_error()."</p>");
    //mysqli_connect_error() odpowiedzialna za wyświetlenie błędów
 }else{
    echo("Połączono do bazy danych");
 }


?>