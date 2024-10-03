<?php
    include'connect.php';

    $db = new mysqli($server,$user,$pass,$database);

    $result = $db->query($zapytanie1);

    while ($row = $result -> fetch_assoc()) 
    {
        echo "<img src='".$row['nazwaPliku']."'alt='".$row['podpis']."'title='".$row['podpis']."'>";
    }
    $db->close();
?>