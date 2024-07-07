<?php
$depart=$_POST['depart'];
$arrivee = $_POST['arrivee'];
$type_voyage = $_POST['type_voyage'];
$date_voyage = $_POST['date_voyage'];
// Récupération des données du formulaire

// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=base_de_recherche', 'root', 'root');
    $bdd -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    
if (isset($_POST['rechercher'])) {
   if (!empty($_POST['depart']) && !empty($_POST['arrivee']) && !empty($_POST['type_voyage']) && !empty($_POST['date_voyage']) ) {
    // Requête SQL pour vérifier si le trajet existe dans la BDD
        $req = $bdd->prepare('SELECT * FROM trajets WHERE depart = :depart AND arrivee = :arrivee AND type_voyage = :type_voyage AND date_voyage = :date_voyage');
        $req->execute(array(
            'depart' => $depart,
            'arrivee' => $arrivee,
            'type_voyage' => $type_voyage,
            'date_voyage' => $date_voyage
        ));

        // Vérification si le trajet existe
        if ($req->rowCount() > 0) {
            echo'
            Bonne réponse!

                ';
                // $resultat = 'Disponible';
            } else {
                echo'
                Mauvaise réponse

                    ';
                // $resultat = 'Non disponible';

        }
    } 
  }
} catch (PDOException $e) {
    echo"Echec:".$e->getMessage();
}

// echo'
//         <script >
//         function checkAnswer() {
//                 // Simulate a correct answer
//                 var correct = true;

//                 if (correct) {
//                 } else {
//                     document.getElementById("resultat").innerHTML = "Mauvaise réponse.";
//                 }
//             }
//     </script>
// ';

// Envoi du résultat à JavaScript
// echo '<script type="text/javascript">document.getElementById("resultat").innerHTML = "'.$resultat.'";</script>';



?>