
    <?php
        // Connexion à la base de données
        $servername = "localhost"; // Adresse du serveur MySQL
        $username = "root"; // Nom d'utilisateur MySQL
        $password = "root"; // Mot de passe MySQL
        $dbname = "base_de_recherche"; // Nom de la base de données

        // Création de la connexion
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérification de la connexion
        if ($conn->connect_error) {
            // die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        // Récupération des données saisies par l'utilisateur
        $num_phone = $_POST['num_ou_add_email']; // Numéro de téléphone saisi par l'utilisateur
        $password = $_POST['motDePasse']; // Mot de passe saisi par l'utilisateur

        // Requête SQL pour vérifier les coordonnées de l'utilisateur dans la base de données
        $sql = "SELECT * FROM inscription WHERE num_ou_add_email = '$num_phone' AND motDePasse = '$password'";
        $result = $conn->query($sql);

        // Vérification si des résultats ont été retournés
        if ($result->num_rows > 0) {
            // Les coordonnées sont valides, l'utilisateur est authentifié
            echo "        
                            <body style='background-color: dodgerblue; '></body>
                            <div class='conteneur'>
                            <p id='message_A'>Vous avez été authentifié avec succès!</p>
                            <a href='Page_Accueil.html'>
                                <button id='continue'>continuer</button>
                            </a>
                             </div>";
        } else {
            // Les coordonnées sont incorrectes, affichage d'un message d'erreur
            echo "
            <body style='background-color: dodgerblue; '></body>
            <div class='conteneur_B'>
             <p id='message_B'> Désolé les informations que vous avez fournies sont incorrectes. Veuillez <a href='page_compte.html' id='try'>réessayer.</a></p>
            
            </div>
           
            ";
        }

        // Fermeture de la connexion à la base de données
        $conn->close();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="page_compte.css">
</head>
<body>
    
</body>
</html>


