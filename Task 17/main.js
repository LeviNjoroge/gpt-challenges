//Switch between light mode (white background, black text) 
// and dark mode (black background, white text).

document.querySelector("button").addEventListener("click", function(){
    const bStyle = document.body.style;
    color == "black" ? bStyle.color = "white" : bStyle.color = "black";
    bStyle.backgroundColor == "white" ? bStyle.backgroundColor = "black" : bStyle.backgroundColor = "white";
})