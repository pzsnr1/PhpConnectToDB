<?php
/**
 * Połączenie do bazy danych za pomocą biblioteki PDO
 * w pliku php.ini sprawdzam czy jest odkomentowana linia: extension=pdo_mysql
 */
include_once("pdo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Połączenie do bazy danych za pomocą biblioteki PDO</title>
    <style>
        table,tr,td{
            border:1px solid red;
            padding:10px;
        }
    </style>
</head>
<body>
    <table style='border-collapse:collapse;border:2px solid black'>
    <tr>
        <td>id</td>
        <td>imie</td>
        <td>nazwisko</td>
    </tr>
    <?php
    //pobieram dane z bazy szkola
        $zapytanie = "SELECT id, imie, nazwisko FROM uczniowie;";
        foreach ($polaczenie->query($zapytanie) as $wiersz) {
            //echo $wiersz['id']." ".$wiersz['imie']." ".$wiersz['nazwisko']."<br>";
            echo("
            <tr>
                <td>".$wiersz['id']."</td>
                <td>".$wiersz['imie']."</td>
                <td>".$wiersz['nazwisko']."</td>
            </tr>
            ");
        }
    ?>
    </table>
</body>
</html>
<?php $polaczenie = null; ?>