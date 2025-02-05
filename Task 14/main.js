
document.querySelector("select").onchange = () => {
    document.getElementById("content").style.backgroundColor = document.querySelector("option").value;
}