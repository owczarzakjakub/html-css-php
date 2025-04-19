<?php

error_reporting(E_ALL); // Pokaż wszystkie błędy i ostrzeżenia
ini_set('display_errors', 1);


    if(isset($_POST["Name"]) && !empty($_POST["Name"]) && isset($_POST["LastName"]) && !empty($_POST["LastName"]) && isset($_POST["PhoneNumber"]) && !empty($_POST["PhoneNumber"]) && isset($_POST["EmailAdress"]) && !empty($_POST["EmailAdress"]) && isset($_POST["Date"]) && !empty($_POST["Date"])){

        $serverName = "localhost";
        $user = "root";
        $password = "";
        $dbName = "torrezerwacja";


        $name = $_POST["Name"];
        $lastname = $_POST["LastName"];
        $phonenumber = $_POST["PhoneNumber"];
        $emailadress = $_POST["EmailAdress"];
        $date = $_POST["Date"];


        $conn = new mysqli($serverName, $user, $password, $dbName);

        if($conn -> connect_error){
            die("Blad polaczenia z baza".$conn->connect_error);
        }

        
        $sql1 = "insert into zamowienia(imie, nazwisko, numerTelefonu, email, dataWynajecia) values ('$name', '$lastname', '$phonenumber', '$emailadress', '$date')";
        $conn -> query($sql1);
        echo "Zamowienie usługi zostało złożone! Odezwiemy się do ciebie kiedy wszystko będzie gotowe lub gdy wystpia jakies problemy.";

        $conn -> close();
        


    }

?>