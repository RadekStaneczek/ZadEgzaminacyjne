<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Poznaj Europę" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl9.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div id="header">
            <h1>Biuro Podróży</h1>
        </div>
        <div class="blok">
            <h2>Promocje</h2>
            <table>
                <tr>
                    <td>Warszawa</td>
                    <td>od 600zł</td>
                </tr>
                <tr>
                    <td>Wenecja</td>
                    <td>od 1200zł</td>
                </tr>
                <tr>
                    <td>Paryż</td>
                    <td>od 1200zł</td>
                </tr>
            </table>
        </div>
        <div class="blok"id="srodkowy">
            <h2>W tym roku jedziemy do...</h2>
            <?php
            include"skrypt1.php";
            ?>
        </div>
        <div class="blok">
            <h2>Kontakt</h2>
            <a>napisz do nas</a>
            <p>telefon: 444555666</p>
        </div>
        <div id="dane">
            <h3>W poprzednich latach byliśmy...</h3>
            <ol>
                <?php
                    include"skrypt2.php";
                ?>
            </ol>
        </div>
        <div id="stopka">
            <p>Strone wykonał Radek Staneczek</p>
        </div>
    </div>
</body>
</html>