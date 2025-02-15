// Perform the calculation and display the result when a button is clicked.

const result = document.querySelector("#result");

document.querySelector("#add").onclick = function () {
    let num1 = document.querySelector("#num1").value;
    let num2 = document.querySelector("#num2").value;

    result.textContent = parseInt(num1) + parseInt(num2);
}

document.querySelector("#subtract").onclick = function () {
    let num1 = document.querySelector("#num1").value;
    let num2 = document.querySelector("#num2").value;

    result.textContent = parseInt(num1) - parseInt(num2);
}

document.querySelector("#multiply").onclick = function () {
    let num1 = document.querySelector("#num1").value;
    let num2 = document.querySelector("#num2").value;

    result.textContent = parseInt(num1) * parseInt(num2);
}

document.querySelector("#add").onclick = function () {
    let num1 = document.querySelector("#num1").value;
    let num2 = document.querySelector("#num2").value;

    result.textContent = parseInt(num1) + parseInt(num2);
}