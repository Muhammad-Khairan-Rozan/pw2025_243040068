<<<<<<< HEAD
<?php
function urutanAngka($angka) {
    $angkaberurutan = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($Abaris = 1; $Abaris <= $i; $Abaris++) {
            echo $angkaberurutan . " ";
            $angkaberurutan++;
        }
        echo "<br>";
    }
}
urutanAngka(5);
=======
<?php
function urutanAngka($angka) {
    $angkaberurutan = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($Abaris = 1; $Abaris <= $i; $Abaris++) {
            echo $angkaberurutan . " ";
            $angkaberurutan++;
        }
        echo "<br>";
    }
}
urutanAngka(5);
>>>>>>> 88a0052899cc9e9146a11c5c451d346e5dc5fc12
?>