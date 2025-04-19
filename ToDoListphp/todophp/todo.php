<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>ToDoList</h1>
    <form method = "post">
        <label>
            <p>Dodaj nowe zadanie: </p>
            <input type="text" name="addTask">
        </label>
        <label>
            <p>do kiedy? </p>
            <input type="date" name = "datazad">
        </label>
        <input type="submit" value="Potwierdz">
        <?php
    
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "tododatabase";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if($conn -> connect_error){
                die("Connection error". $conn -> connect_error);
            }

             if(isset($_POST["addTask"]) && !empty($_POST["addTask"])){
                $taskName = $_POST["addTask"];
                $datazad = $_POST["datazad"];
                $sql = "insert into zadania (nazwa, datazad) values ('$taskName', '$datazad');";
                $result = $conn -> query($sql);
            }

            $sql1 = "select nazwa, datazad from zadania;";
            $result = $conn -> query($sql1);

            if($result -> num_rows > 0){
                echo "<ul>";
                while($row = $result -> fetch_assoc()){
                    $isOverdue = (strtotime($row['datazad']) < time()) ? "overdue" : "";
                    echo "<li class = '$isOverdue'>".htmlspecialchars($row['nazwa'])." : ".htmlspecialchars($row['datazad'])."</li>";
                }
                echo "</ul>";
            }
            
            

            $sql2 = "delete from zadania where datazad < date(now());";
            $result = $conn -> query($sql2);
            $conn -> close();

        ?>
    </form>
    <?php
    


    ?>
</body>
</html>