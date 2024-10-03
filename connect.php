<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "egzamin";

    $zapytanie1 = "select nazwaPliku,podpis from zdjecia order by podpis asc";
    $zapytanie2 = "select cel,dataWyjazdu from wycieczki where dostepna like false";
?>