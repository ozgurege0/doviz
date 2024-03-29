<?php
$xml = simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml");

foreach ($xml -> Currency as $kurcek) {

    if($kurcek["Kod"]=="USD"){
    $usdalis = $kurcek -> ForexBuying;
    $usdsatis = $kurcek -> ForexSelling;
    }

    if($kurcek["Kod"]=="EUR"){
    $euralis = $kurcek -> ForexBuying;
    $eursatis = $kurcek -> ForexSelling;
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><b>Dolar Alış:</b> <?php echo $usdalis; ?></p>
    <p><b>Dolar Satış:</b> <?php echo $usdsatis; ?></p> 

    <p><b>Euro Alış:</b> <?php echo $euralis; ?></p> <br>
    <p><b>Euro Satış:</b><?php echo $eursatis; ?></p> <br>
</body>
</html>