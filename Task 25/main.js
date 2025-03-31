// Create a Digital Clock
//     Display the current time and update it every second.

const h1 = document.querySelector('h1');

function updateClock() {
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');
    
    h1.textContent = `${hours}:${minutes}:${seconds}`;
}

document.addEventListener('DOMContentLoaded', function() {
    updateClock(); // Initial display
    setInterval(updateClock, 1000); // Update every second
});