// Count down from the entered number to zero.
// Update the display every second. 

<input type="number" name="num" id="num" placeholder="Enter number of seconds to countdown from">
<button id="start">Start Timer</button>
</form>
<h1 id="display"></h1>

document.querySelector('#start').addEventListener("click", () => {
    let num = document.querySelector('#num').value;
    
})