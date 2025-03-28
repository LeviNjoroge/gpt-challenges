const button = document.querySelector("button");

document.addEventListener("DOMContentLoaded", () => {
    button.addEventListener("click", function() {
        document.body.style.backgroundColor = "blue";
    });
});
