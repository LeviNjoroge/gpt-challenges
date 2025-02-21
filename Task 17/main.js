//Switch between light mode (white background, black text) 
// and dark mode (black background, white text).

document.querySelector("button").addEventListener("click", function(){
    alert("You clicked the button!");
    document.body.color == "black" ? document.body.color = "white" : document.body.color = "black";
    document.body.backgroundColor == "white" ? document.body.backgroundColor = "black" : document.body.backgroundColor = "white";
})