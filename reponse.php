    <?php
        

                     $serveur = "localhost";
                     $username = "root";
                     $password = "root";

                    try {
                        $bdd = new PDO("mysql:host=$serveur;dbname=base_de_recherche",$username,$password);
                        $bdd ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 

                        // $id = $_POST['id'];
                        $lieu_depart = $_POST['lieu_depart'];
                        $lieu_arriver = $_POST['lieu_arriver'];
                        $voyage = $_POST['voyage'];
                        $date = $_POST['date'];
                        if(isset($_POST['rechercher'])){
                             if (!empty($_POST['lieu_arriver'])&&!empty($_POST['lieu_depart'])&&!empty($_POST['jd'])) {
                                 if (isset($_POST["voyage"])) {
                                 $Horaire_de_voyage = $_POST[('voyage')];

                        $requete = $bdd->prepare('SELECT * FROM transoft WHERE lieu_depart LIKE :lieu_depart');

                        // $requete->bindParam(':lieu_depart',$lieu_depart);
                       
                        
                        $requete->execute(array('lieu_depart'=>'%'.$lieu_depart.'%'));

                        

                        if ($rep = $requete->fetch(PDO::FETCH_ASSOC)) {
                            echo"<script src='index.js'></script>";
                            
                            
                        }else{
                            echo"L'information saisie n'est pas trouver ! ";
                        }
      
                        $requete->closeCursor();
                    }
                }
            }
        }            
        // echo "<script>
        //     </script>";
        catch (PDOException $e) {
            echo" Echec de la connexion :".$e->getMessage();
                    
        }
                        
                    

?>