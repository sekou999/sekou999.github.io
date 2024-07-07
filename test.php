<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "base_de_recherche";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if (isset($_POST['lieu_arriver'])) {
        $lieu_arriver = $_POST['lieu_arriver'];
        $lieu_depart = $_POST['lieu_depart'];
        $voyage = $_POST['voyage'];
        $date = $_POST['date'];

        $sql = "SELECT * FROM transoft WHERE lieu_arriver = '$lieu_arriver' and lieu_depart = 
        '$lieu_depart' and voyage = '$voyage' and date = '$date'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<script src='rep_A.js'></script>";
        } else {
            echo "<script src='rep_B.js'></script>";
        }
    }


?>