//Switch between light mode (white background, black text) 
// and dark mode (black background, white text).

document.querySelector("button").addEventListener("click", function(){
    const body = document.body
    (body.color == "black") ? body.color = "black" : body.color = "black";
    (body.backgroundColor == "white") ? body.backgroundColor = "black" : body.backgroundColor = "white";
})