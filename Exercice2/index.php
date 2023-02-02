<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Fonction pour calculer l' aire du rectangle 
    function Aire($L, $l) 
    { 
       $Aire = $L * $l; 
       // Return permet de retourner la valeur que contient la fonction comme parametre 
       return $Aire; 
    } 
    // Appel de la fonction ainsi que les valeurs en parametre 
    $Aire = Aire(5, 8); 
    echo "<br/> L'aire du rectangle est:".$Aire; 
    ?>
</body>
</html>