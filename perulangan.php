<?php

// perulangan for
// semuanya ke dalam for
// $angka = 1;
// $angkaMaks = 30; 

// for($angka; $angka <=$angkaMaks; $angka++){
//     echo "perulangan for ke-" .$angka;
//     echo "<br>";
// } 

// perulangan while
// memeriksa dulu baru ngelakuin perulangan
// $angka = 0;

// while($angka <= 40){
//     $angka = $angka +4;
//     echo "prulangan while ke-" . $angka;
//     echo  "<br>";
// }

// while($angka <= 20){
//     echo "while ke- $angka";
//     $angka++;
//     echo "<br>";
// }

// while($angka <= 20):
//     echo "while ke- $angka";
//     $angka++;
//     echo "<br>";
// endwhile;

// perulangan do while
// proses dulu baru ngecek kebalikan while

// $angka = 1;
// do {
//     echo "DO while ke- " . $angka;
//     $angka ++;
//     echo "<br>";
// }while($angka <= 40);

// foreach loop -> array
// $makanan = array("sate",  "pempek", "seblak", "ceker");
// $a = 0;
// foreach($makanan as $food){
//     echo $a+1 . " . "  .$makanan[$a];
//     echo "<br>";
// }

// // kalau mau mengeluarkan semuanya
// foreach ($makanan as $food){
//     echo $a++ . " . " .$food;
//     echo "<br>";
// }

// break/continue
$a = 0;

for($a; $a<=30; $a++){
    if($a == 10){
    break;
}
echo "loop break ke-" . $a;
echo "<br>";
}


?>