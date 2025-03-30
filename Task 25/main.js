// Create a Digital Clock
//     Display the current time and update it every second.

const h1 = document.querySelector('h1');
document.addEventListener('DOMContentLoaded', function() {
    let curr_time = new Date().getTime();
    h1.textContent = curr_time;
});