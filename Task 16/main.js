// Perform the calculation and display the result when a button is clicked.

document.addEventListener("DOMContentLoaded", function() {

    let num1 = document.querySelector("#num1").value;
    let num2 = document.querySelector("#num2").value;
    let result = document.querySelector("#result");
    let add = document.querySelector("#add");
    let subtract = document.querySelector("#subtract");
    let multiply = document.querySelector("#multiply");
    let divide = document.querySelector("#divide");

    document.querySelector("button").addEventListener("click", function(){

        let num1 = document.querySelector("#num1").value.parseInt();
        let num2 = document.querySelector("#num2").value.parseInt();
        console.log(num1, num2);

        add.onclick = function(){
            let answer = num1 + num2;
            result.textContent = answer;
        }
        subtract.onclick = function(){
            let answer = num1 - num2;
        }
        multiply.onclick = function(){
            let answer = num1 * num2;
        }
        divide.onclick = function(){
            let answer = num1 / num2;
        }
        result.textContent = answer;
    });
});