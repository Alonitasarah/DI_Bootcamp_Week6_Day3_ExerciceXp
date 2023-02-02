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
function verification ($voter)
{
if ($voter <= 18) {
    echo "L'âge minimum requis pour voter est de 18 ans";
} else {
    echo "Vous avez l'age requis pour voter";
}
}
verification(50);
?>
</body>
</html>