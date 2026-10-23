<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cirkel bereken opdracht</title>
</head>
<body>
    <h1> Cirkel bereken </h1>
    <form method="post"> 
    <input type=number name= "diameter" method="post"> 
    <button type=submit> Bereken </button>
</form>
</body>
</html>

 <?php

if (isset($_POST["diameter"])) {
    $diameter = $_POST["diameter"]; 

    $straal = $diameter / 2;
    $omtrek = pi() * $diameter;
    $oppervlakte = pi() * $straal * $straal;
 
    echo "<h1>Antwoord</h1>";
    echo "Straal: " . $straal . " cm <br>";
    echo "Diameter: " . $diameter . " cm <br>";
    echo "Omtrek: " . $omtrek . " cm <br>";
    echo "Oppervlakte: " . $oppervlakte . " cm <br>";
}

?> 







