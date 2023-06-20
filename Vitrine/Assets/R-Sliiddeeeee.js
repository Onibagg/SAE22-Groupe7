const card = document.getElementById("card");
card.style.position = "relative";
card.style.right = "-100%";
card.style.opacity = 0;

function slideIn() {
    let pos = -100;
    const id = setInterval(frame, 8);

    function frame() {
        if (pos == 0) {
            clearInterval(id);
        } else {
            pos++;
            card.style.right = pos + "%";
            card.style.opacity = (100 + pos) / 100;
        }
    }
}

slideIn();