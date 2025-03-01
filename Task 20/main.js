// Count down from the entered number to zero.
// Update the display every second. 

document.querySelector('#start').addEventListener("click", () => {
    let num = parseInt(document.querySelector('#num').value); // Convert to number
    let display = document.querySelector('#display');
    
    let interval = setInterval(() => {
        display.textContent = num;
        num--;
        if (num < 0) { // Stop at 0
            clearInterval(interval);
        }
    }, 1000);
});