<?php 

    // if (isset($_POST['envoyer'])) {
    //     if (!empty($_POST['lieu_depart']) &&!empty($_POST['lieu_arriver']) &&!empty($POST['voyage']) &&!empty($POST['jd'])) {
           
            try {
                $serveur = "localhost";
                $username= "root";
                $password = "root";
        
                
                $bdd = new PDO("mysql:host=$serveur;dbname=base_de_recherche",$username,$password);
                $bdd ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
                $requete = $bdd->prepare(
                    "INSERT INTO transoft(lieu_depart,lieu_arriver,voyage,dates,compagnie)
                    VALUES(:lieu_depart,:lieu_arriver,:voyage,:dates,:compagnie)"
                );
                
                $requete->bindParam(':lieu_depart',$Lieu_Depart);
                $requete->bindParam(':lieu_arriver',$Lieu_Arriver);
                $requete->bindParam(':voyage',$voyage);
                $requete->bindParam(':dates',$dates);
                $requete->bindParam(':compagnie',$compagnie);
        
                $Lieu_Arriver = $_POST['lieu_arriver'];
                $Lieu_Depart =  $_POST['lieu_depart'];
                if (isset($_POST['voyage'])) {
                    $voyage = $_POST['voyage'];
                }      
                $dates = $_POST['dates'];
                $compagnie = $_POST['compagnie'];
                $requete->execute();
                echo"Insertion réussis !!!";
        
            } catch (PDOException $e) {
                echo"Echec de la connexion :".$e->getMessage();
            }
        
   
?>