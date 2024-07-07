const message = document.getElementById("message_B");
const disponibiliter_B = document.getElementById("disponibiliter_B");
const btn = document.getElementById("rechercher");


btn.addEventListener("click",Message());
function Message(){
    message.innerHTML = "Aucun Voyage diqponible pour le moment";
    disponibiliter_B.style.visibility = "visible";
    disponibiliter_B.style.transition = "2s ease-in-out";
    message.style.color="white";
    message.style.fontWeight="bold";
    message.style.textAlign="center";
    message.style.fontSize="1.5em";
    message.style.position="relative";
    message.style.top="25px ";
}
disponibiliter_B.addEventListener("click",()=>{
    disponibiliter_B.style.visibility = "hidden";

});

