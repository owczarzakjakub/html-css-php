<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MojeUmiejetnosci</title>
</head>
<body>

    <header id="headerSection">
        <h1>Jakub Owczarzak</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#headerSection">Naglowek strony</a></li>
            <li><a href="#mainSection">Moje umiejetnosci</a></li>
            <li><a href="#footerSection">Footer</a></li>
        </ul>
    </nav>
    <main id="mainSection">
        <section id="firstAbility">
            <p>Umiem...</p>
            <form method = "post">
                <input type="submit" name = "ability1" value="Pokaz umiejetnosc">
            </form>
            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbName = "mojeunikatoweumiejetnosci";

            $conn = new mysqli($servername, $username, $password, $dbName);

            if($conn -> connect_error){
                echo "Nie udalo sie polaczyc z baza danych".$conn -> connet_error;
                }

                if(isset($_POST["ability1"])){
                $sql1 = "select name, description from umijetnosci where id = 1";

                $result = $conn -> query($sql1);
                
                if($result -> num_rows > 0){
                    $row = $result -> fetch_assoc();
                    echo "<h1>" .$row["name"]. "</h1><br><p>".$row["description"]."</p>";
                }
            }


$conn -> close();
?>
        </section>
        <section id="secondAbility">
            <p>Umiem...</p>
            <button type="submit">pokaz umiejetnosc</button>
        </section>
        <section id="thirdAbility">
            <p>Umiem...</p>
            <button type="submit">pokaz umiejetnosc</button>
        </section>
    </main>
    <footer id="footerSection">
        <h2>To tyle lol</h2>
    </footer>
</body>
</html>