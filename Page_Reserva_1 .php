<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "blog";
// Connexion à la base de données
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

// Récupérer la valeur du champ hidden
$hiddenValue = $_POST['compagnie'];
$today = date("Y-m-d");
$Hours = time();

// Préparer la requête d'insertion
$stmt = $mysqli->prepare("INSERT INTO reservations (compagnie,dat,heure) VALUES (?,?,?)");
$stmt->bind_param("sss", $hiddenValue,$today,$Hours);

// Exécuter la requête
$stmt->execute();
header("location:Page_Reserva_2.html");
// echo"insertions réussis de $hiddenValue";
// Fermer la connexion
$stmt->close();
$mysqli->close();
?>

