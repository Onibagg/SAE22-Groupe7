<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 12.2</title>
        <script>
            var go = function () {
                var opac = function (delay) {
                    var img = document.createElement('img');
                    img.src =
                        'http://www.google.com/intl/en_com/images/logo_plain.png';
                    document.body.appendChild(img);
                    var level = 0;
                    var step = function () {
                        img.style.opacity = level;
                        if (level <= 1) {
                            level += 0.1;
                            setTimeout(step, delay);
                        }
                    };
                    step();
                };
                opac(100);
            };
        </script>

        <body>
            <input type="button" onclick="go();" value="Click me" />
        </body>
    </head>
</html>