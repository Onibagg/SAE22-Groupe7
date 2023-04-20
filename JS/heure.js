function actualiserHeure() {
    var date = new Date();
    var heures = String(date.getHours()).padStart(2, '0');
    var minutes = String(date.getMinutes()).padStart(2, '0');
    var secondes = String(date.getSeconds()).padStart(2, '0');

    document.getElementById("heure").innerText = heures + " : " + minutes + " : " + secondes;

    setTimeout(actualiserHeure, 1000);
}

window.onload = function() {
    actualiserHeure();
};