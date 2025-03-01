// Count down from the entered number to zero.
// Update the display every second. 

document.querySelector('#start').addEventListener("click", () => {
    let num = document.querySelector('#num').value;
    let display = document.querySelector('#display');

    display.textContent = num;

    // setInterval(()=>{
    //     display.textContent = num;
    //     num--;
    //     if(num === 0){
    //         clearInterval();
    //     }
    // },1000)
})