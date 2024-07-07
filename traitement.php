<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "base_de_reserva";
// Connexion à la base de données
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

// Récupérer la valeur du champ hidden
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$contact = $_POST['contact'];
$lieu_de_depart = $_POST['lieu_de_depart'];
$lieu_arriver = $_POST['lieu_arriver'];
$voyage = $_POST['voyage'];
$date = $_POST['date'];
$hiddenValue = $_POST['compagnie'];
$today = date("Y-m-d");

// Préparer la requête d'insertion
$stmt = $mysqli->prepare("INSERT INTO reservation (compagnie,nom,prenom,contact,lieu_de_depart,lieu_arriver,voyage,date) VALUES (?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssssb", $hiddenValue,$nom,$prenom,$contact,$lieu_de_depart,$lieu_arriver,$voyage,$today);

// Exécuter la requête
$stmt->execute();
echo"insertions réussis ";
// Fermer la connexion
$stmt->close();
$mysqli->close();
?>