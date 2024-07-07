<?php

    $serveur = "localhost";
    $dbname = "base_de_Reserva";
    $username = "root";
    $password = "root";

    try {
        $bdd = new PDO("mysql:host=$serveur;dbname=base_de_reserva",$username,$password);
        $bdd -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        
        if (isset($_POST["suivant"]) ){

            if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["contact"])
            && !empty($_POST["lieu_depart"]) && !empty($_POST["lieu_arriver"]) && !empty($_POST["voyage"])  && !empty($_POST["date"])) {
        
            $requete = $bdd->prepare(
                "SELECT * FROM reservation WHERE nom like:nom"
            );
            $Nom = $requete->execute(array('nom'=>'%'.$nom.'%'));

            $requete = $bdd->prepare(
                "SELECT * FROM reservation WHERE prenom like:prenom"
            );
            $Prenom = $requete->execute(array('prenom'=>'%'.$prenom.'%'));
            
            $requete = $bdd->prepare(
                "SELECT * FROM reservation WHERE contact like:contact"
            );
            $Contact = $requete->execute(array('contact'=>'%'.$contact.'%'));

            $requete = $bdd->prepare(
                "SELECT * FROM reservation WHERE lieu_Depart like:lieu_Depart"
            );
            $Lieu_Depart = $requete->execute(array('lieu_Depart'=>'%'.$lieu_Depart.'%'));

            $requete = $bdd->prepare(
                "SELECT * FROM reservation WHERE lieu_Arriver like:lieu_Arriver"
            );
            $Lieu_Arriver = $requete->execute(array('lieu_Arriver'=>'%'.$lieu_Arriver.'%'));
            
            $requete = $bdd->prepare(
                "SELECT * FROM reservation WHERE date like:date"
            );
            $Date = $requete->execute(array('date'=>'%'.$date.'%'));
           
            $price = '';
                
                $requete->bindParam(':nom',$Nom);
                $requete->bindParam(':prenom',$Prenom);
                $requete->bindParam(':contact',$Contact);
                $requete->bindParam(':lieu_depart',$Lieu_Depart);
                $requete->bindParam(':lieu_arriver',$Lieu_Arriver);
                $requete->bindParam(':voyage',$Horaire_de_voyage);
                $requete->bindParam(':date',$Date);
                
                $requete -> execute();
                
                // ------------------------------------------------Destination National -----------------------------------------------------
                                if ($Lieu_Depart === "BAMAKO" && $Lieu_Arriver === "KAYES" || $Lieu_Depart === "KAYES" && $Lieu_Arriver === "BAMAKO") {
                                $price = "3600 FCFA";
                                }
                                else if ($Lieu_Depart === "BAMAKO" && $Lieu_Arriver === "KOULIKORO" || $Lieu_Depart === "KOULIKORO" && $Lieu_Arriver === "BAMAKO") {
                                $price = "4100 FCFA";
                                }
                                else if ($Lieu_Depart === "BAMAKO" && $Lieu_Arriver === "SIKASSO" || $Lieu_Depart === "SIKASSO" && $Lieu_Arriver === "BAMAKO") {
                                $price = "3100 FCFA";
                                }
                                else if ($Lieu_Depart === "BAMAKO" && $Lieu_Arriver === "SEGOU" || $Lieu_Depart === "SEGOU" && $Lieu_Arriver === "BAMAKO") {
                                $price = "4100 FCFA";
                                }
                                else if ($Lieu_Depart === "BAMAKO" && $Lieu_Arriver === "MOPTI" || $Lieu_Depart === "MOPTI" && $Lieu_Arriver === "BAMAKO") {
                                $price = "4600 FCFA";
                                }
                                else if ($Lieu_Depart === "BAMAKO" && $Lieu_Arriver === "GAO" || $Lieu_Depart === "GAO" && $Lieu_Arriver === "BAMAKO") {
                                $price = "5100 FCFA";
                                }
                                else if ($Lieu_Depart === "BAMAKO" && $Lieu_Arriver === "TOMBOUCTOU" || $Lieu_Depart === "TOMBOUCTOU" && $Lieu_Arriver === "BAMAKO") {
                                $price = "5100 FCFA";
                                }
                // --------------------------------------------Destination International----------------------------------------------------------
                                if ($Lieu_Depart === "BAMAKO" && $Lieu_Arriver === "BURKINA FASO" || $Lieu_Depart === "BURKINA FASO" && $Lieu_Arriver === "BAMAKO") {
                                $price = "3600 FCFA";
                                }
                                else if ($Lieu_Depart === "BAMAKO" && $Lieu_Arriver === "COTE D'IVOIRE" || $Lieu_Depart === "COTE D'IVOIRE" && $Lieu_Arriver === "BAMAKO") {
                                $price = "4100 FCFA";
                                }
                                else if ($Lieu_Depart === "BAMAKO" && $Lieu_Arriver === "BENIN" || $Lieu_Depart === "BENIN" && $Lieu_Arriver === "BAMAKO") {
                                $price = "3100 FCFA";
                                }
                                else if ($Lieu_Depart === "BAMAKO" && $Lieu_Arriver === "TOGO" || $Lieu_Depart === "TOGO" && $Lieu_Arriver === "BAMAKO") {
                                $price = "4100 FCFA";
                                }
                                else if ($Lieu_Depart === "BAMAKO" && $Lieu_Arriver === "SENEGAL" || $Lieu_Depart === "SENEGAL" && $Lieu_Arriver === "BAMAKO") {
                                $price = "4600 FCFA";
                                }
                                else if ($Lieu_Depart === "BAMAKO" && $Lieu_Arriver === "MAURITANIE" || $Lieu_Depart === "MAURITANIE" && $Lieu_Arriver === "BAMAKO") {
                                $price = "5100 FCFA";
                                }
                                else if ($Lieu_Depart === "BAMAKO" && $Lieu_Arriver === "GHANA" || $Lieu_Depart === "GHANA" && $Lieu_Arriver === "BAMAKO") {
                                $price = "5100 FCFA";
                                }
                                else if ($Lieu_Depart === "BAMAKO" && $Lieu_Arriver === "NIGER" || $Lieu_Depart === "NIGER" && $Lieu_Arriver === "BAMAKO") {
                                $price = "5100 FCFA";
                                }
                            }
                        }
                    }
                    catch (PDOException $e) {
                        echo"Echec : " .$e->getMessage();
                    }
                
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="recap_de_commande">
            <fieldset>
                <legend
                style="text-align: center;font-weight: bolder;">RECAPITULATIF DE LA COMMANDE</legend>
            <span class='nom'> Nom :</span> <span class='name'> $Nom </span> <br>
                            <span class='prenom'>Prenom :</span> <span class='firstname'> $Prenom </span> <br>
                            <span class='contact'> Contact :</span> <span class='cont'> $Contact </span> <br>
                            <span class='LD'> Lieu de Depart : </span> <span class='ld'>$Lieu_Depart </span> <br>
                            <span class='LA'> Lieu d'Arriver : </span> <span class='la'> $Lieu_Arriver </span> <br>
                            <span class='HDV'> Horaire : </span> <span class='hdv'> $Horaire_de_voyage </span>
                            <span class='PRIX'> Prix : </span> <span class='price'> $price </span>
            </fieldset><br>
            <div
            style="position: relative; left: 45%;">
            <a href="paiement.php">
                <input type="button" name="valider" value="PAYER">
            </a>
            </div>
        </div>
</body>
</html>
        