
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Disponible</title>
    <link rel="stylesheet" href="place_disponible.css">
    <style>
    form {
       position: absolute;
       height: 300px;
       width: 750px;
       padding: 25px 25px;
       left: 22%;
       background: dodgerblue;
       color: white;
       border-radius: 15px;
       border: 2px solid #fff;
       top: 50%;
       
   }
   .VDJ {
       position: relative;
       border: 2px solid #fff;
       padding: 5px 12px;
       border-radius: 10px;
       bottom: 100px;
   }

   .VDJ:hover {
       position: relative;
       border: 2px solid #fff;
       padding: 5px 12px;
       border-radius: 10px;
       background-color: #0a5;

   }
   #v_jour {
       position: relative;
       left: 10px;
       width: 20px;
       height: 20px;
       padding: 5px;
       border-radius: 10px;
       bottom: 100px;
   }
   .date {
       position: relative;
       border: 2px solid #fff;
       padding: 5px 12px;
       border-radius: 10px;
       width: 170px;
        bottom: 125px;
   }


   #Date {
       position: relative;
       left: 20px;
       padding: 5px;
       border-radius: 10px;
       outline: 2px solid #0a5;
       width: 170px;
       bottom: 125px;
   }
   .date:hover {
       position: relative;
       border: 2px solid #fff;
       padding: 5px 12px;
       border-radius: 10px;
       background-color: #0a5;

   }

   #oui{
    position: absolute;
    top: 1px;
    left: 70%;
    height: 50px;
}
 .LOGO {
        position: absolute;
        top: 1px;
        width: 220px;
    }
                   .slogan{
                color: floralwhite;
                position: absolute;
                font-size: 14px;
                left:90px;
                top: 65px;
                font-weight: bold;
                font-style: italic;

               }
 @media (max-width:1080px) {
       * {
           margin: 0;
           padding: 0;
           box-sizing: border-box;
           overflow: hidden;
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

       }

       body {
           background-color: #2632df;

       }

       #header {
           position: relative;
           min-height: 120px;
           bottom: 5px;
        background-color: #06063d;
          

       }

       #ACC {
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           position: absolute;
           color: #fff;
           margin: 0;
           text-decoration: none;
           left: 1%;
           top: 30px;
           font-size: 20px;
           padding: 5px;
           transition: all 2s ease;
           width: 50vw;
           text-align: center;
       }

       #ACC:hover {
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           margin: 0;
           position: absolute;
           padding: 5px;
           color: #fff;
           text-decoration: none;
           left: 1%;
           top: 30px;
           font-size: 20px;
           transition: 0.5s ease-in-out;
           border: 2px solid #fff;
           border-radius: 10px;
           background-color:#0a5;
           width: 50vw;
           text-align: center;
       }

       #horaire {
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           margin: 0;
           position: absolute;
           color: #fff;
           text-decoration: none;
           left: 1%;
           top: 75px;
           font-size: 20px;
           text-align: center;
           width: 50vw;
           transition: all 2s ease;
       }

       #horaire:hover {
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           margin: 0;
           position: absolute;
           color: #fff;
           text-decoration: none;
           left: 1%;
           top: 75px;
           font-size: 20px;
           transition: 0.5s ease-in-out;
           border: 2px solid #fff;
           border-radius: 10px;
           background-color: #0a5;
           padding: 5px;
           width: 50vw;
       }

       #place {
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           margin: 0;
           position: absolute;
           color: #fff;
           text-decoration: none;
           left: 1%;
           top: 120px;
           font-size: 20px;
           text-align: center;
           width: 50vw;
           transition: all 2s ease;
       }

       #place:hover {
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           margin: 0;
           position: absolute;
           color: #fff;
           text-decoration: none;
           left: 1%;
           top: 120px;
           font-size: 20px;
           transition: 0.5s ease-in-out;
           border: 2px solid #fff;
           border-radius: 10px;
           background-color: #0a5;
           padding: 5px;
           text-align: center;
           width: 50vw;
       }

       #propos {
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           margin: 0;
           position: absolute;
           color: #fff;
           text-decoration: none;
           left: 1%;
           top: 165px;
           font-size: 20px;
           width: 50vw;
           text-align: center;
           transition: all 2s ease;
       }

       #propos:hover {
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           margin: 0;
           position: absolute;
           color: #fff;
           text-decoration: none;
           left: 1%;
           top: 165px;
           font-size: 20px;
           transition: 0.5s ease-in-out;
           border: 2px solid #fff;
           border-radius: 10px;
           background-color: #0a5;
           padding: 5px;
           text-align: center;
           width: 50vw;
       }

       #reser {
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           margin: 0;
           position: absolute;
           color: #fff;
           text-decoration: none;
           left: 1%;
           top: 210px;
           font-size: 20px;
           text-align: center;
           width: 50vw;
           transition: 0.5s ease-in-out;
       }

       #reser:hover {
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           margin: 0;
           position: absolute;
           color: #fff;
           text-decoration: none;
           left: 1%;
           top: 210px;
           font-size: 20px;
           transition: 0.5s ease-in-out;
           border: 2px solid #fff;
           border-radius: 10px;
           background-color: #0a5;
           padding: 5px;
           text-align: center;
           width: 50vw;
       }

       .fenetre {
            position: absolute;
           width: 300px;
           height: 100vh;
           background-color: #06063d;
           right: 1px;
           z-index: 5;
           visibility: visible;
           transform: translateY(-200%);
           border: 2px solid #fff;
           border-radius: 5px;
       }

       .MENU_CLOSE {
           width: 55px;
           height: 55px;
           position: absolute;
           right: 20px;
           border-radius: 100px;
           top: 25px;
           cursor: pointer;
           visibility: hidden;
           display: block;
       }

       .MENU_OPEN {
           width: 55px;
           height: 55px;
           position: absolute;
           right: 20px;
           border-radius: 120px;
           top: 25px;
           cursor: pointer;
           background-color: rgb(57, 58, 57);
           visibility: visible;
           display: block;
       }

       .reservation {
           position: relative;
           padding: 40px;
           background-color: dodgerblue;
           bottom: 5px;
           height: 5%;

       }

       h2 {
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           color: #fff;
           text-align: center;
           /* border: 2px solid #fff; */
           border-radius: 10px;
           position: relative;
           width: 400px;
           left: 1%;
           padding: 5px;
       }
           fieldset {
               position: absolute;
               height: 350px;
               width: 390px;
               top:45%;
               padding: 25px 25px;
               left: 10%;
               background: dodgerblue;
               color: white;
               border-radius: 15px;
               border: 2px solid #fff;
    
           }
    
           form {
               position: absolute;
               width: 700px;
               padding: 30px;
           }
                          /* -------------------------------input edit----------------*/
                          #v_jour {
                              position: relative;
                              left: 10px;
                              width: 20px;
                              height: 20px;
                              padding: 5px;
                              border-radius: 10px;
                              bottom: 20px;
                          }
            
                          #v_nuit {
                              position: relative;
                              left: 10px;
                              width: 20px;
                              height: 20px;
                              padding: 5px;
                              border-radius: 15px;
                              bottom: 20px;
                          }
            
                          #ld {
                              position: relative;
                              left: 10px;
                              padding: 5px;
                              border-radius: 10px;
                              outline: 2px solid #0a5;
                              width: 170px;
                              bottom: 20px;
                          }
            
                          #la {
                              position: relative;
                              left: 20px;
                              padding: 5px;
                              border-radius: 10px;
                              outline: 2px solid #0a5;
                              width: 170px;
                              bottom: 20px;
                          }
                          #comp {
                              position: relative;
                              left: 20px;
                              padding: 5px;
                              border-radius: 10px;
                              outline: 2px solid #0a5;
                              width: 170px;
                              bottom: 20px;
                          }
            
                          #Date {
                              position: relative;
                              left: 20px;
                              padding: 5px;
                              border-radius: 10px;
                              outline: 2px solid #0a5;
                              width: 170px;
                              bottom: 15px;
                          }
            
                          /* ------------------- Label_edit---------------------- */
                          .la {
                              position: relative;
                              padding: 5px 12px;
                              border: 2px solid #fff;
                              border-radius: 10px;
                              left: 1px;
                              bottom: 20px;
            
                          }
                          .comp {
                              position: relative;
                              padding: 5px 12px;
                              border: 2px solid #fff;
                              border-radius: 10px;
                              left: 1px;
                              bottom: 20px;
            
                          }
            
                          .ld {
                              position: relative;
                              padding: 5px 12px;
                              border: 2px solid #fff;
                              border-radius: 10px;
                              bottom: 20px;
                          }
            
                          .la:hover {
                              position: relative;
                              padding: 5px 12px;
                              background-color: #0a5;
                              border: 2px solid #fff;
            
                          }
            
                          .ld:hover {
                              position: relative;
                              background-color: #0a5;
                              border: 2px solid #fff;
            
                          }
            
                          .VDJ {
                              position: relative;
                              border: 2px solid #fff;
                              padding: 5px 12px;
                              border-radius: 10px;
                              bottom: 25px;
                          }
            
                          .VDJ:hover {
                              position: relative;
                              border: 2px solid #fff;
                              padding: 5px 12px;
                              border-radius: 10px;
                              background-color: #0a5;
            
                          }
            
                          .VDN {
                              position: relative;
                              border: 2px solid #fff;
                              padding: 5px 12px;
                              border-radius: 10px;
                              bottom: 20px;
                              left: 1px;
                          }
            
                          .VDN:hover {
                              position: relative;
                              border: 2px solid #fff;
                              padding: 5px 12px;
                              border-radius: 10px;
                              background-color: #0a5;
            
                          }
            
                          .date {
                              position: relative;
                              border: 2px solid #fff;
                              padding: 5px 12px;
                              border-radius: 10px;
                              width: 170px;
                              bottom: 15px;
                          }
            
                          .date:hover {
                              position: relative;
                              border: 2px solid #fff;
                              padding: 5px 12px;
                              border-radius: 10px;
                              background-color: red;
            
                          }

}
   .disponibiliter {
       position: relative;
       min-height: 10vh;
       min-width: 100vw;
       background-color: #0a6;
        bottom: 10px;
       border: 1px solid #fff;
       display: none;
     

    }
        #header {
           position: relative;
           min-height: 120px;
           bottom: 5px;
        background-color: #06063d;
          
        }
    #comp {
       position: relative;
       left: 360px;
       padding: 5px;
       border-radius: 10px;
       outline: 2px solid #0a5;
       width: 170px;
       top: 25px;
   }
   .comp{
       position: relative;
       padding: 5px 12px;
       border: 2px solid #fff;
       border-radius: 10px;
       left: 350px;
       top: 25px;

   }
   .comp:hover{
       position: relative;
       padding: 5px 12px;
       border: 2px solid #fff;
       border-radius: 10px;
       left: 350px;
       top: 25px;
       background-color: #0a5;
   }
   #rechercher {
       position: relative;
       right: 40px;
       border: 2px solid #FFF;
       border-radius: 10px;
       background-color: #0a6;
       width: 100px;
       padding: 5px;
       cursor: pointer;
       left: 40%;
       color: #fff;
       bottom: 35%;
   }
   .VDN {
       position: relative;
       border: 2px solid #fff;
       padding: 5px 12px;
       border-radius: 10px;
       bottom: 140px;
       left: 350px;
   }

   .VDN:hover {
       position: relative;
       border: 2px solid #fff;
       padding: 5px 12px;
       border-radius: 10px;
       background-color: #0a5;

   }
   #v_nuit {
       position: relative;
       left: 360px;
       width: 20px;
       height: 20px;
       padding: 5px;
       border-radius: 15px;
       bottom: 140px;
   }

   #rechercher:hover {
       position: relative;
       right: 20px;
       border: 2px solid #FFF;
       border-radius: 10px;
       background-color: #A01;
       width: 100px;
       padding: 5px;
       cursor: pointer;
       left: 40%;
       color: #fff;
       bottom: 35%;
   }

    </style>
</head>
<body>
    <header id="header">
        <img src="picture/TRANSOFT_version_origi.PNG" class="LOGO" alt="MON_LOGO"><p class="slogan">Do goodtravel</p>
        <img src="picture/menu_A.jpg" alt="MENU_CLOSE" class="MENU_OPEN">
        <img src="picture/menu_close.jpg" alt="MENU_CLOSE" class="MENU_CLOSE">
    </header>
            <div class="fenetre">
        <ul>
            <li id="li_acc">
                <a href="Page_Accueil.html" class="acc" id="ACC">Accueil</a>
            </li>
            <li id="li_acc">
                <a href="Horaires.html" class="horaire" id="horaire">Horaires</a>
            </li>
            <li id="li_acc">
                <a href="place_disponible.php" class="place" id="place">Place disponible</a>
            </li>
            <li id="li_acc">
                <a href="Page_a_propos.html" class="propos" id="propos">A propos de nous</a>
            </li>
            <li id="li_acc">
                <a href="Page_Reserva_1.html" class="reser" id="reser">Reservation</a>
            </li>
        </ul>
    </div>  
    <div class="reservation">
        <h2>Recherche de Place Disponible</h2>
    </div>
    <div class="disponibiliter">
        <p class="message">Ce Voyage Disponible</p><br>
        <a href="Page_Reserva_1.html">
            <button id="oui">réserver ici</button>
        </a>
    </div>


        <form action="place_disponible.php" method="post">
            <!-- <label for="ID" class="Id">Id : </label><input type="number" name="id" id="Id"><br><br> -->
            <label for="lieu_depart" class="ld">Lieu de Départ</label>
            <select name="lieu_depart" id="ld" required>
                <option value="BAMAKO">BAMAKO</option>
                <option value="KAYES">KAYES</option>
                <option value="KOULIKORO">KOULIKORO</option>
                <option value="SIKASSO">SIKASSO</option>
                <option value="SEGOU">SEGOU</option>
                <option value="MOPTI">MOPTI</option>
                <option value="GAO">GAO</option>
                <option value="TOMBOUCTOU">TOMBOUCTOU</option>
           
                <option value="OUAGADOUGOU">OUAGADOUGOU</option>
                <option value="ABIJAN">ABIJAN</option>
                <option value="COTONU">COTONU</option>
                <option value="LOME">LOME</option>
                <option value="DAKAR">DAKAR</option>
                <option value="NOUAKCHOUAT">NOUAKCHOUAT</option>
                <option value="ACCRA">ACCRA</option>
                <option value="NIAMEY">NIAMEY</option>
          
        </select><br><br>
            <label for="lieu_arriver" class="la">Lieu d'Arriver</label>
            <select name="lieu_arriver" id="la">
                <option value="KAYES">KAYES</option>
                <option value="KOULIKORO">KOULIKORO</option>
                <option value="SIKASSO">SIKASSO</option>
                <option value="SEGOU">SEGOU</option>
                <option value="MOPTI">MOPTI</option>
                <option value="GAO">GAO</option>
                <option value="TOMBOUCTOU">TOMBOUCTOU</option>
            
                <option value="BURKINA FASO">BURKINA FASO</option>
                <option value="COTE D'IVOIRE">KAYES</option>
                <option value="BENIN">BENIN</option>
                <option value="TOGO">TOGO</option>
                <option value="SENEGAL">SENEGAL</option>
                <option value="MAURITANIE">MAURITANIE</option>
                <option value="GHANA">GHANA</option>
                <option value="NIGER">NIGER</option>
            
        </select><br><br>
            <label for="comp" class="comp">Compagnies</label>
            <select name="compagnie" id="comp" required>
                <optgroup label="NATIONAL">
                    <option value="Sonef Trans">Sonef Trans</option>
                    <option value="Diarra Trans">Diarra Trans</option>
                    <option value="Nour Trans">Nour Trans</option>
                    <option value="Bittar Trans">Bittar Trans</option>
                    <option value="Afirca Tour Trans">Afirca Tour Trans</option>
                    <option value="Tilemsi Trans">Tilemsi Trans</option>
                    <option value="Sama Trans">Sama Trans</option>
                    <option value="Benso Trans">Benso Trans</option>
                    <option value="Folona Trans">Folona Trans</option>
                    <option value="Bani Trans">Bani Trans</option>
                </optgroup>
                
            </select><br><br>
            <label for="voyage_j" class="VDJ">Voyage De Jour</label>
            <input type="radio" name="voyage" id="v_jour" value="Voyage De Jour" required><br><br>
            <label for="voyage_n" class="VDN">Voyage De Nuit</label>
            <input type="radio" name="voyage" id="v_nuit" value="Voyage De Nuit" required><br><br>
            <label for="Date" class="date" >Date</label>
           <input type="date" name="dates" id="Date" required><br><br>
           <!-- <input type="submit" id="rechercher" name="rechercher" value="RECHERCHER"> -->
           <button id="rechercher" name="rechercher">RECHERCHER</button> 

            </form>
    <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "base_de_recherche";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['rechercher'])) {
    if (!empty($_POST['lieu_arriver']) && !empty($_POST['lieu_depart']) && !empty($_POST['voyage']) && !empty($_POST['dates'])) {
        
        $lieu_arriver = $_POST['lieu_arriver'];
        $lieu_depart = $_POST['lieu_depart'];
        $voyage = $_POST['voyage'];
        $date = $_POST['dates'];
        $compagnie= $_POST['compagnie'];

        // Utilisation de requêtes préparées pour éviter les attaques par injection SQL
        $sql = "SELECT * FROM transoft WHERE lieu_arriver = ? AND lieu_depart = ? AND voyage = ? AND dates = ? AND compagnie = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $lieu_arriver, $lieu_depart, $voyage, $date,$compagnie);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Afficher les résultats de la recherche
            while ($row = $result->fetch_assoc()) {
                // Afficher les données du résultat
                echo"<script src='rep_A.js'></script>";
            }
        } else {
            echo "<script>alert('Aucun Voyage disponible pour ce requete');</script>";
        }

        $stmt->close(); // Fermeture de la requête préparée
    } else {
        echo "<script>alert('Veuillez remplir tous les champs');</script>";
    }
}
?>
 
    <script>
        const menu_close = document.querySelector('.MENU_CLOSE');
        const menu_open = document.querySelector('.MENU_OPEN');
        const Window = document.querySelector('.fenetre');
        menu_open.addEventListener('click', () => {
            Window.style.transform = "translateY(-1%)";
            Window.style.transition = "1s ease-in-out";
            menu_open.style.visibility = "hidden";
            menu_close.style.visibility = "visible";
        })
        menu_close.addEventListener('click', () => {
            Window.style.transform = "translateY(-200%)";
            Window.style.transition = "1s ease-in-out";
            menu_open.style.visibility = "visible";
            menu_close.style.visibility = "hidden";
        })
    </script>
</body>
</html>