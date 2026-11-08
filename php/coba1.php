<?php
$nim = "I.2610185";
$nama = 'Fardhan Al Farisi';
$umur = 20;
$nilai = 4.0;
$status = TRUE;

echo  "NIM   : " . $nim . "<br>";
echo  "Nama  : $nama<br>";
print "Umur  : " . $umur;
print "<br>";
printf("Nilai : %.3f<br>", $nilai);
if ($status)
    echo "Status : Aktif";
else
    echo "Status : Tidak Aktif";
?>
