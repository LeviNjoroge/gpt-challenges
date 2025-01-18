document.addEventListener("DOMContentLoaded", function() {
    let counter = 0;
    let display = document.querySelector('h1');

    document.querySelector("#incrementButton").onclick = function (){
        counter +=1;
        display.innerHTML = counter;
    }
    document.querySelector("#decrementButton").onclick = function (){
        counter -=1
        display.innerHTML = counter;
    }

})