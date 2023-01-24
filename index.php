<?php

$masyvas = [[2,9,4],[7,5,3],[6,1,8]];


$horizon = 0;
$vertical = 0;
$x = 0;
$y = 0;
$z = sizeof($masyvas)-1;
foreach ($masyvas as $key => $value){

    foreach ($value as $key1 => $value1){
        echo $value1.', ';
        if($key == 0){
        $horizon += (int)$value1;
        }

        if($key1 ==0){
            $vertical += $value1;
        }



    }
    echo "<br>";

}

for ($i= 0 ;$i <sizeof($masyvas);$i++){
    $x+=$masyvas[$i][$i];
    $y+=$masyvas[$i][$z--];
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masyvai Dvimačiai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
<div class="container text-center mt-5">
    <nav >
        <ul class="row list-group-horizontal">
        <li class="list-group-item col-md-6 border border-primary rounded pt-3 pb-3 bg-success">
            <a class="text-decoration-none text-warning pt-3 pb-3" href="index.php">Magiškasis Kvadratas</a>
        </li>
        <li class="list-group-item col-md-6 border border-primary rounded pt-3 pb-3 bg-success">
            <a class="text-decoration-none text-warning pt-3 pb-3" href="skelbimai.php">Skelbimai</a>
        </li>
        </ul>
    </nav>
<h1 class="mt-5 text-success">
<?= (($horizon == $vertical)&&($x == $y))?'<h1 class="mt-5 text-success">'.'Iš šio masyvo gaunasi magiškasis kvadratas'."</h1>":'<h1 class="mt-5 text-danger">'.'Iš šio masyvo neigauna magiškasis kvadratas'."</h1>"?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>


