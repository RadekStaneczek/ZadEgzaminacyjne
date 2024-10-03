<?php
    include"connect.php";

    $db = new mysqli($server,$user,$pass,$database);

    $result = $db->query($zapytanie2);

    while ($row = $result -> fetch_assoc()) 
    {
        echo "<li>Dnia ".$row['dataWyjazdu']." pojechaliśmy do ".$row['cel']."</li>";
    }
    $db->close();
?>
