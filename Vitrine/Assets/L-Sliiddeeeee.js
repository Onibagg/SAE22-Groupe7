const logo = document.getElementById("logo");
const text = document.getElementById("text");
const accueil = document.getElementById("accueil");

logo.style.position = "relative";
logo.style.left = "-100%";
logo.style.opacity = 0;
text.style.position = "relative";
text.style.left = "-100%";
text.style.opacity = 0;
accueil.style.position = "relative";
accueil.style.left = "-100%";
accueil.style.opacity = 0;

function slideIn() {
    let pos = -100;
    const id = setInterval(frame, 8);

    function frame() {
        if (pos == 0) {
            clearInterval(id);
        } else {
            pos++;
            logo.style.left = pos + "%";
            logo.style.opacity = (100 + pos) / 100;
            text.style.left = pos + "%";
            text.style.opacity = (100 + pos) / 100;
            accueil.style.left = pos + "%";
            accueil.style.opacity = (100 + pos) / 100;
        }
    }
}

slideIn();