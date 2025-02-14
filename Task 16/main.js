// Perform the calculation and display the result when a button is clicked.

document.addEventListener("DOMContentLoaded", function() {

    let num1 = document.querySelector("#num1").value;
    let num2 = document.querySelector("#num2").value;
    let result = document.querySelector("#result");
    let add = document.querySelector("#add");
    let subtract = document.querySelector("#subtract");
    let multiply = document.querySelector("#multiply");
    let divide = document.querySelector("#divide");

    add.onclick = function(){
        result.textContent = num1 + num2;
    }
    subtract.onclick = function(){
        result.textContent = num1 - num2;
    }
    multiply.onclick = function(){
        result.textContent = num1 * num2;
    }
    divide.onclick = function(){
        result.textContent = num1 / num2;
    }

});