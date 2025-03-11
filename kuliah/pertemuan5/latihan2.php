<?php
// Menghitung volume 2 kubus
// dik sisi kubus a & kubus b
$sisi_a = 9;
$sisi_b = 4;
// hitung vome kubus a
$volume_a = $sisi_a * $sisi_a * $sisi_a;
// hitung vome kubus b
$volume_b = $sisi_b * $sisi_b * $sisi_b;
// jumlahkan keduanya
$total_volume_ab = $volume_a + $volume_b;
// cetak hasil
echo $total_volume_ab;

function hitung_volume_dua_kubus($a, $b)
{
    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;
    $total_volume_ab = $volume_a + $volume_b;
    return $total_volume_ab;
}
echo "Total volume kubus 9 & 4:";
echo hitung_volume_dua_kubus(9, 4);