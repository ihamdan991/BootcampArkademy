<?php
// fungsi fibonacci
function fibonacci($kolom, $baris){
    $bil1 = 0; // angka pertama
    $bil2 = 1; // angka kedua
    $fibonacci = ""; // untuk menyimpan hasil
    for ($i=0; $i < $baris; $i++) { // menentukan jumlah baris
        for($j = 0;$j < $kolom;$j++){ // menentukan jumlah kolom
            if($j == 0 & $i == 0)
                $fibonacci .= $bil1.", ";
            else if($j == 1 && $i == 0)
                $fibonacci .= $bil2.", ";
            else{
                $fibonacci .= ($bil1 + $bil2).", ";
                $temporary = $bil1;
                $bil1 = $bil2;
                $bil2 = $temporary + $bil2;
            }
        }
        $fibonacci .="<br>"; // membuat baris baru
    }
    return $fibonacci; // mengambalikan data fibonacci
}

echo fibonacci(4, 3);
?>
