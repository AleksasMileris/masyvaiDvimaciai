<?php
$skelbimai = array(
    array('id' => '17976','text' => 'Viešbutis Šventojoje ,, Pajūrio sodyba\'\' nuolatiniam darbui ieško administratorių ir virėjos vasaros sezonui. Skambinti 869333133 ','cost' => '542','onPay' => '1493195731'),
    array('id' => '17885','text' => 'Ieskoma Valytoja nedideliam viesbutukui Palangoje, vasaros sezonui. Patirtis dirbant viesbutyje privalumas.','cost' => '214','onPay' => '0'),
    array('id' => '17533','text' => 'TINKAVIMAS KALKINIU SKIEDINIU KOKYBIŠKAI IR NEBRANGIAI.TURIME 20 METŲ PATIRTĮ IR LABAI GERĄ REPUTACIJĄ. 868408837','cost' => '884','onPay' => '1490043275'),
    array('id' => '17532','text' => 'Parduodamas tvarkingas didelis mūrinis garažas su rūsiu,45kvadratai bendro ploto,bangu g. prie Medvalakio 860584184','cost' => '512','onPay' => '1489947320'),
    array('id' => '17485','text' => 'Ieskoma Valytoja nedideliam viesbutukui Palangoje, vasaros sezonui. Patirtis dirbant viesbutyje privalumas.','cost' => '214','onPay' => '0'),
    array('id' => '17303','text' => 'Perkame įvairius automobilius, mikroautobusus. Tvarkingus, su defektais, daužtus. 864691263','cost' => '800','onPay' => '1488368780'),
    array('id' => '17302','text' => 'Pirkčiau katerį-valtį su varikliu. Gali būti su defektu, apleistas. 864691263','cost' => '400','onPay' => '1488368133'),
    array('id' => '17102','text' => 'Parduodu geros būklės jūrinį konteinerį. Galima naudoti kaip sandėlį. Tel. 865988820','cost' => '400','onPay' => '1485962389'),
    array('id' => '16992','text' => 'Parduodu dideli mūrini garažą  Bangų g. prie Medvalakio,garažas sausas, tvarkingas su rūsiu,yra elektra .Garažas 22m²  rūsys taip pat 22m²','cost' => '382','onPay' => '0'),
    array('id' => '16989','text' => 'Ieškau apleisto 6 arų sklypo soduose: sodinimui, mašinos nusiplovimui. Gal kas turi nereikalingą ir neparduoda. Galėčiau prižiūrėti. Tel. 8 609 76193.','cost' => '168','onPay' => '1484996260'),
    array('id' => '16694','text' => 'Sportiškas ir išsilavinęs vyriškis, skaitantis ir informaciją suvokiantis daugeliu Europos kalbų, ieško bet kokio darbo (3 dienas per savaitę) su oriu atlyginimu. Darbo pasiūlymus siųsti el. paštu jamamsitadarba@gmail.com','cost' => '466','onPay' => '1481212052'),
    array('id' => '16626','text' => 'Parduodu avieną (gimę š. m. kovą – balandį ), mėsa puikaus skonio, neturi būdingo specifinio kvapo, galima pirkti ir po pusę avinuko ar užsisakyti artėjančioms šventėms, atvežu. Kaina 5 €/ kg., tel.nr. 8 678 35 932.','cost' => '1864','onPay' => '1480663237'),
    array('id' => '16554','text' => 'Kokybiškai klijuoju plyteles. Turiu ilgametę patirtį.','cost' => '200','onPay' => '0'),
    array('id' => '16515','text' => 'Dazymo,glaistymo darbai su amerikietiska įranga.Didele darbo patirtis.+37062700070','cost' => '400','onPay' => '0'),
    array('id' => '16311','text' => 'Pirkčiau 2 kambarių butą iki 30000 eurų.','cost' => '200','onPay' => '0'),
    array('id' => '16172','text' => 'Parduodamas naujos statybos 122 kv. m. namas Vydmantuose. Kaina - 78000 Eur. Tel. 8 659 88820','cost' => '214','onPay' => '0'),
    array('id' => '16171','text' => 'Parduodamas naujos statybos 122 kv. m. namas Vydmantuose. Kaina - 78000 Eur. Tel. 8 659 88820','cost' => '214','onPay' => '0'),
    array('id' => '16169','text' => '5 mergaitiškas (150-170 cm) žiemines striukes. 846053024','cost' => '100','onPay' => '0'),
    array('id' => '16168','text' => 'Eko BRIKETAI Gamintoju kainomis','cost' => '500','onPay' => '0')
);


/**
 * šitas ifas keičia lygiavima elementų naudojant rodykles
 */
    if(isset($_GET['lygiuoti'])&& isset($_GET['direction'])){

        $lygiuoti=$_GET['lygiuoti'];
        $direction=$_GET['direction'];

            if ($lygiuoti == $lygiuoti){
                if ($direction == 'dsc') {
                    usort($skelbimai, fn($a, $b) => $a[$lygiuoti] <=> $b[$lygiuoti]);
                }elseif(($direction == 'asc')){
                    usort($skelbimai, fn($a, $b) => $b[$lygiuoti] <=> $a[$lygiuoti]);
                }
            }

    };



    $skelbimuSk=0;
    $apmoketi = 0;
    $sumaApmoketu=0;
    $sumaNeapmoketu=0;
        foreach ($skelbimai as $key=>$value){
            if($skelbimai[$key]['onPay'] != 0){
                $apmoketi++;
                $sumaApmoketu+=(int)$skelbimai[$key]['cost'];
            }else{

                $sumaNeapmoketu+=(int)$skelbimai[$key]['cost'];
            }

            $skelbimuSk++;
        };



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




<table class="table table-success table-striped table-hover rounded table-bordered border-primary table-sm mt-5">
   <thead>
   <tr>
       <th><a class="text-decoration-none text-dark bold" href="?lygiuoti=id&direction=dsc">↓</a>ID#<a class="text-decoration-none text-dark bold" href="?lygiuoti=id&direction=asc">↑</a></th>
       <th><a class="text-decoration-none text-dark bold" href="?lygiuoti=text&direction=dsc">↓</a>Tekstas<a class="text-decoration-none text-dark bold" href="?lygiuoti=text&direction=asc">↑</a></th>
       <th><a class="text-decoration-none text-dark bold" href="?lygiuoti=cost&direction=dsc">↓</a>Kaina<a class="text-decoration-none text-dark bold" href="?lygiuoti=cost&direction=asc">↑</a></th>
       <th><a class="text-decoration-none text-dark bold" href="?lygiuoti=onPay&direction=dsc">↓</a>Apmokėjimo data <a class="text-decoration-none text-dark bold" href="?lygiuoti=onPay&direction=asc">↑</a></th>
   </tr>
   </thead>
    <tbody>
    <?php  foreach($skelbimai as $key=> $value){?>
        <tr>
            <td class="fw-bold" ><?=$skelbimai[$key]['id'] ?></td>
            <td><?= $skelbimai[$key]['text'] ?></td>
            <td><?= $skelbimai[$key]['cost'] ?></td>
            <td><?= ($skelbimai[$key]['onPay'] ==0)? 'Neapmokėta':date('Y-m-d', $skelbimai[$key]['onPay']) ?></td>
        </tr>
    <?php } ?>
    </tbody>

</table>


    <table class="table table-warning table-striped table-hover rounded table-bordered border-primary table-sm mt-5 mb-5">
        <thead>
        <tr class="text-center">
            <th>Skelbimų Skaičius</th>
            <th>Apmokėtu Skelbimų</th>
            <th>Sumokėta už skelbimus</th>
            <th>Nesumokėta už skelbimus</th>
        </tr>
        </thead>
        <tbody >
            <tr class="text-center">
                <td><?= $skelbimuSk ?></td>
                <td><?=  $apmoketi ?></td>
                <td><?= $sumaApmoketu ?></td>
                <td><?= $sumaNeapmoketu ?></td>
            </tr>
        </tbody>



</table>




</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
