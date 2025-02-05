
document.querySelector("select").onchange = () => {
    document.getElementById("content").style.backgroundColor = this.value;
}