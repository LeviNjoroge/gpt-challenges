// Count down from the entered number to zero.
// Update the display every second. 

document.querySelector('#start').addEventListener("click", () => {
    let num = document.querySelector('#num').value;
    let display = document.querySelector('#display');
    
    const countdown = () => {
        if (num === 0) {
            clearInterval(interval);
        }
        display.innerHTML = num;
        num--;
    }
    setInterval(countdown,1000)
})