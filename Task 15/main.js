function getCurrentYear() {
    const currentDate = new Date();
    return currentDate.getFullYear();
}
document.querySelector('footer span').textContent = getCurrentYear();