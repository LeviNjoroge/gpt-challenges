
document.querySelector("#add").onclick = function(){
    let item = document.querySelector("#item").value;
    document.getElementById("list").innerHTML += `<li>${item}</li>`;
}