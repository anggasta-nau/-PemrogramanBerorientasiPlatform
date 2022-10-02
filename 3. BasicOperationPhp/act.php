<?php

$nm = $_GET["brg"];
$hrg = $_GET["hrg"];
$jml = $_GET["jml"];

$harga_awal = $hrg * $jml;

if($harga_awal > "100000" && $harga_awal<"200000"){
    
    $diskon = $harga_awal*5/100;
}
else if($harga_awal> "200000" && $harga_awal < "300000")
{
    
    $diskon = $harga_awal*7/100;
}
else if($harga_awal> "300000")
{
    $diskon = $harga_awal*10/100;
}
else {
    $diskon = $harga_awal*0;
}

$harga_total = $harga_awal-$diskon;

echo "Nama Barang : " .$nm. "<br>"; 
echo "Harga Barang :" .$hrg. "<br>"; 
echo "Jumlah Barang :" .$jml. "<br>"; 
echo "Diskon Barang : ".$diskon."<br>";
echo "Harga Total : " .$harga_total;
?>