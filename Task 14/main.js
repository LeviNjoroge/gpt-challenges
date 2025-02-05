
document.querySelector("select").onchange = function () {
    document.getElementById("content").style.backgroundColor = this.value;
}