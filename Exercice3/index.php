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

function test($nbre){
    $result = $nbre > 30 ? 'Plus grand que 30' 
                        : ($nbre > 20 ? 'Plus grand que 20' 
                        : ($nbre > 10 ? 'Plus grand que 10' 
                        : 'Inferieur à 10'));
    return $result;
}

echo test(21);
?>
</body>
</html>