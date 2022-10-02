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
$x = $_POST['var_x'];
$y = $_POST['var_y'];



while($x<=$y){
    if($x%2!=0){
        echo '<span style="color:blue"><strong>' . $x.  '</span></strong><br>';
    }
    else{
        echo $x ,'<br>';
    }
    $x++;
}

?>
    
</body>
</html>