const slide = ["picture/Réservation_online_new.jpg" , "picture/falaise-au-mali.jpg" , "picture/falaise-au-mali.jpg" , "picture/village_au_Mali.jpg" , "picture/une-dune-au-crepuscule-au-mali.jpg"];
let numero = 0

// dans notre function nous avons ajouté un paramètre répresenter par la variable sens
// qui contient la valeur -1 pour "precedent" et 1 pour pour suivant
function ChangeSlide(sens){ 
// le numéro va contenir la valeur de la variable sens
    numero = numero + sens;
// Si la variable numero est sup à la dernière valeur dans le tableau
// slide alors numero sera égal à la premiere du tableau slide qui est zéro
if (numero > slide.length - 1) {
    numero = 0 
// Si la variable numéro est inf à la prémière valeur dans le tableau
// slide alors numéro sera égal à la dernière valeur du tableau slide qui est zéro
    }
    if(numero < 0){
        numero = slide.length - 1
    // Dans cette ligne de code nous avons associer l'image contenant l'id slide avec 
    // la source de l'image contenu dans notre tableau associatif nommé slide 
    document.getElementById("slide").src= slide[numero];
    }
        
    }

setInterval("ChangeSlide(1)", 4000);

// -------------------------------------------------------------------------------------------------------------------

const slide2 = ["picture/sonef_trans_N.jpg" , "picture/Africa tour trans.gif" , "picture/SAMA_Trans_new.jpg" , "picture/diarra_transport_new.jpg"];
let numero2 = 0

// dans notre function nous avons ajouté un paramètre répresenter par la variable sens
// qui contient la valeur -1 pour "precedent" et 1 pour pour suivant
function ChangeSlide(sens2){ 
// le numéro va contenir la valeur de la variable sens
    numero2 = numero2 + sens2;
// Si la variable numero est sup à la dernière valeur dans le tableau
// slide alors numero sera égal à la premiere du tableau slide qui est zéro
if (numero2 > slide2.length - 1) {
    numero2 = 0 
// Si la variable numéro est inf à la prémière valeur dans le tableau
// slide2 alors numéro sera égal à la dernière valeur du tableau slide2 qui est zéro
    }
    if(numero2 < 0)
        numero2 = slide2.length - 1
    // Dans cette ligne de code nous avons associer l'image contenant l'id slide avec 
    // la source de l'image contenu dans notre tableau associatif nommé slide 
    document.getElementById("slide2").src= slide2[numero2];
}

setInterval("ChangeSlide2(1)", 4000);