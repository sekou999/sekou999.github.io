const message = document.querySelector(".message");
const disponibiliter = document.querySelector(".disponibiliter");
const btn = document.getElementById("rechercher");


btn.addEventListener("click", ()=>{
    message.innerHTML = "Voyage Disponible";
    message.style.color= "white";
    message.style.left= "40%";
    message.style.top= "20%";
    message.style.fontWeight= "bold";
    message.style.fontSize= "2em";
    message.style.position= "relative";
    disponibiliter.style.display = "block";
    disponibiliter.style.transition = "0.5s ease-in-out";

    
    
});
disponibiliter.addEventListener("click",()=>{
    disponibiliter.style.display = "none";
    // disponibiliter.style.visibility = "hidden";
    disponibiliter.style.transition = "0.5s ease-in-out";

});