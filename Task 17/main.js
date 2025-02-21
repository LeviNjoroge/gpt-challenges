//Switch between light mode (white background, black text) 
// and dark mode (black background, white text).

document.querySelector("button").addEventListener("click", function(){
    document.body.style.color == "black" ? document.body.style.color = "white" : document.body.style.color = "black";
    document.body.style.backgroundColor == "white" ? document.body.style.backgroundColor = "black" : document.body.style.backgroundColor = "white";
})