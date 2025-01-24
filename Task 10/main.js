
document.querySelector("#toggle-menu").onclick = function(){
    let nav = document.querySelector("nav");
    (nav.style.display == "none")? nav.style.display="block":nav.style.display="none";
}