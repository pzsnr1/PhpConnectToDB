<?php include_once("polaczenie.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie do bazy danych z formularza</title>
</head>
<body>
    <fieldset>
        <legend>Dodawanie do bazy danych</legend>
        <form action='Zadanie1.php' method='POST'>
            Imie: <input type='text' name='imie' required /><br>
            Nazwisko: <input type='text' name='nazwisko' required /><br>
            <input type='submit' value='DODAJ DO BAZY' />
        </form>
    </fieldset>
    <?php
        /**
         * odbieram zmienne imie i nazwisko metodą post
         */
     
        if(isset($_POST['imie']) && isset($_POST['nazwisko'])){
            if(!empty($_POST['imie']) && !empty($_POST['nazwisko'])){
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                //echo("Imie: $imie, Nazwisko: $nazwisko");
                $zapytanie_dodaj_do_bazy = $polaczenie->query("INSERT INTO uczniowie(imie,nazwisko) values('$imie','$nazwisko')");
                if (mysqli_affected_rows($polaczenie)) {
                    echo("<br> Dodano nowy rekord do bazy danych <br>");
                }
            }
            
        }

        //Pobieram dane z bazy danych---------------------------------------
        $zapytanie_pobierz_z_bazy = $polaczenie->query("SELECT id,imie,nazwisko from uczniowie");
        while(list($idusera,$mojeimie,$mojenazwisko)=mysqli_fetch_array($zapytanie_pobierz_z_bazy)){
            echo("
                idu: $idusera, Imie: $mojeimie, Nazwisko: $mojenazwisko <a href='http://localhost/26022021-2CTG/Zadanie1.php?usun=$idusera'>USUŃ CHOPIE</a><br>
            ");
        }
        //-------------------------------------------------------------------

        if(isset($_GET['usun']) && $_GET['usun'] != ""){
            $id = $_GET['usun'];
            //DELETE FROM uczniowie WHERE id=$id
            $zapytanie_usun = $polaczenie->query("DELETE FROM uczniowie WHERE id=$id");
            header("location: Zadanie1.php");
        }

    ?>
</body>
</html>
<?php $polaczenie->close(); ?>