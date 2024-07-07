<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Reservation 4</title>
    <link rel="stylesheet" href="page_reserva.css">
</head>
<body>
    <?PHP

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
                "INSERT INTO reservation(nom,prenom,contact,lieu_depart,lieu_arriver,voyage,date)
                VALUES(:nom,:prenom,:contact,:lieu_depart,:lieu_arriver,:voyage,:date)"
            );
            $Nom = $_POST[('nom')];
            $Prenom = $_POST[('prenom')];
            $Contact = $_POST[('contact')];
            $Lieu_Depart = $_POST[('lieu_depart')];
            $Lieu_Arriver = $_POST[('lieu_arriver')];
            $Date = $_POST[('date')];
            if (isset($_POST['voyage'])) {
                $Horaire_de_voyage = $_POST['voyage'];
            }      
            $Date = $_POST['date'];
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
            echo " 
                <header id='header'>
                <img src='picture/TRANSOFT_version_origi.PNG' class='LOGO' alt='MON_LOGO'><p class='slogan'>Do goodtravel</p>
                   
                    <img src='picture/menu_A.jpg' alt='MENU_CLOSE' class='MENU_OPEN'>
                    <img src='picture/menu_close.jpg' alt='MENU_CLOSE' class='MENU_CLOSE'>
                </header>
                <div class='fenetre'>
                    <ul>
                        <li id='li_acc'>
                            <a href='Page_Accueil.html' class='acc' id='ACC'>Accueil</a>
                        </li>
                        <li id='li_acc'>
                <a href='Horaires.html' class='horaire' id='horaire'>Horaires</a>
                        </li>
                        <li id='li_acc'>
                            <a href='place_disponible.php' class='place' id='place'>Place disponible</a>
                        </li>
                        <li id='li_acc'>
                            <a href='Page_a_propos.html' class='propos' id='propos'>A propos de nous</a>
                        </li>
                        <li id='li_acc'>
                            <a href='Page_Reserva_1.html' class='reser' id='reser'>Reservation</a>
                        </li>
                    </ul>
                </div>
                        <div class='reservation'>
                            <h2>CONFIRMER VOTRE RESERVATION</h2>
                        </div>
                            <span class='nom'> Nom :</span> <span class='name'> $Nom </span> <br>
                            <span class='prenom'>Prenom :</span> <span class='firstname'> $Prenom </span> <br>
                            <span class='contact'> Contact :</span> <span class='cont'> $Contact </span> <br>
                            <span class='LD'> Lieu de Depart : </span> <span class='ld'>$Lieu_Depart </span> <br>
                            <span class='LA'> Lieu d'Arriver : </span> <span class='la'> $Lieu_Arriver </span> <br>
                            <span class='HDV'> Horaire : </span> <span class='hdv'> $Horaire_de_voyage </span>
                            <span class='PRIX'> Prix : </span> <span class='price'> $price </span>
                            <a href='paiement.html'>
                            <input type='button' value='CONFIRMER' class='confirmer'/>
                            </a>

                    <script>
                        const menu_close = document.querySelector('.MENU_CLOSE');
                        const menu_open = document.querySelector('.MENU_OPEN');
                        const Window = document.querySelector('.fenetre');
                        menu_open.addEventListener('click', () => {
                        Window.style.transform = 'translateY(-0.5%)';
                        Window.style.transition = '0.5s ease-in-out';
                        menu_open.style.visibility = 'hidden';
                        menu_close.style.visibility = 'visible';
                        })
                        menu_close.addEventListener('click', () => {
                            Window.style.transform = 'translateY(-100%)';
                            Window.style.transition = '0.5s ease-in-out';
                            menu_open.style.visibility = 'visible';
                            menu_close.style.visibility = 'hidden';
                        })
                        
                    </script>
                            ";
                    } 
            
                        
            }
        
            else {
                    echo "
                        <script>
                           alert('Veuillez Remplir tout Le Formulaire de Reservation s\'il vous plaît !');
                        </script>
                        <a href='Page_Reserva_3.html'>
                            <button style='
                            position:relative;
                                padding:10px;
                                border-radius: 10px;
                            '>retour</button>
                        </a>
                    ";
                }  
        
        }
        catch (PDOException $e) {
        echo"Echec : " .$e->getMessage();
    }

    ?>
</body>
</html>


