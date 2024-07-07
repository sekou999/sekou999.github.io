<?php
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe= "root";

    
    try {
        $connexion = new PDO("mysql:host=$serveur;dbname=base_de_recherche",$utilisateur,$mot_de_passe);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $requete = $connexion->prepare(
            "INSERT INTO inscription(num_ou_add_email,lastname_firstname,username,motDePasse)
             VALUES(:num_ou_add_email,:lastname_firstname,:username,:motDePasse)
            "
        );
        $phone = $_POST['num_ou_add_email'];
        $last_firstname = $_POST['lastname_firstname'];
        $login = $_POST['username'];
        $pass = $_POST['motDePasse'];

        $requete->bindParam(':num_ou_add_email',$phone);
        $requete->bindParam(':lastname_firstname',$last_firstname);
        $requete->bindParam(':username',$login);
        $requete->bindParam(':motDePasse',$pass);

        $requete->execute();
        echo"
            <!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Test</title>
    <style>
            body{
        background-color: #53fa93;
        font-family: cursive;
        overflow: hidden;
    }
    span {
        position: absolute;
        top: 40%;
        right: 50%;
        font-size: 5em;
        color: dodgerblue;
        font-family: serif;

    }
    /* span:nth-child(2){
        position: absolute;
        right: 20%;
        color: #000;
    } */
        .tran {
            animation: Tran 3s ease 0s alternate-reverse;

        }

        @keyframes Tran {
            100% {
                color: #000;
            }

        }

        .soft {
            position: absolute;
            right: 29%;
            color: #53fa93;
            animation: soft 3s ease 0s alternate-reverse;
        }

        @keyframes soft {
            100% {
                color: #000;
            }
        }
        
        .line1 {
            position: absolute;
            width: 150px;
            height: 5px;
            background-color: transparent;
            animation: ligneA 2s ease-in 0.1s alternate-reverse;
        }

        @keyframes ligneA {
            100% {
                transform: translateY(100px);
            }
        }

        .line2 {
            position: absolute;
            width: 150px;
            height: 5px;
            background-color: transparent;
            top: 45%;
            left: 50%;
            animation: ligneB 2s ease-in 0.1s alternate-reverse;

        }

        @keyframes ligneB {
            100% {
                transform: translateY(-100px);
            }
        }
        #TranSoft{
            padding: 0;
            margin: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: 50vw;
            height: 100%;
            background-color: #000000;
        }
        button{
            position: absolute;
            top: 65%;
            left: 40%;
            padding: 5px 35px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            background-color: #53fa93;
        }
        button:hover{
            position: absolute;
            top: 65%;
            left: 40%;
            padding: 5px 35px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            background-color: #53fa93;
            color: #fff;
        }
        h3{
            position: absolute;
            color: #fff;
            top: 20px;
            font-size: 2em;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            left: 25%;
        }
        h2{
            position: absolute;
            color: #fff;
            text-align: center;
           font-size: 2em;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            left: 25%;
        }
        h2:nth-child(2){
            position: absolute;
            top: 15%;
        }
        h2:nth-child(3){
            position: absolute;
            top: 25%;
        }
        img{
            padding: 0 auto;
            margin: 0 auto;
            top: 0;
            left: 0;
            position: absolute;
            width: 50%;
            height: 100%;
        }
        #online{
            animation: oneline 3s ease-in-out 0s infinite ;

        }
         
        @keyframes oneline {
            100%{
                width: 55%;
                height: 105%;
                transition: 1s ease-in-out;
            }
        }
        p{
            position: absolute;
            top: 53%;
            left: 38%;
             font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
    </style>
</head>
<body>
   
    <img id='online' src='picture/Réservation_online_new.jpg' alt='image_de_reservation_en_ligne'>

    <div id='TranSoft'>
            <h3>Inscription Reussi !!!</h3>
            <h2>Bienvenue</h2>
            <h2>chez</h2>
    <span class='tran'>Tran </span><span class='soft'> Soft</span><br>
    <span class='line1'></span>
    <span class='line2'></span><br>
    <p style='color: #fff;'>Rapide - Simple - Fiable</p>
    <a href='Page_Accueil.html'>
        <button>Démarrer</button>
    </a>
    <img src='picture/icone_validation.jpg' alt='Inscription_confirmer' 
    style='
        width: 100px;
        height: 100px;
        border-radius: 100px;
        border: 5px solid #53fa93;
        left: 450px;
        top: 130px;
    '>
    </div>

</body>
</html>
        ";
        
    } catch (PDOException $e) {
       echo 'Echec :' .$e->getMessage();
    }
?>