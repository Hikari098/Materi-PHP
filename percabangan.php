<?php

//  1. if
// $umur = 17;

// if($umur >= 17){
//     echo "takut tambah dewasa";
// }

// // 2. if else
// $umur = 17;
// if($umur >= 17){
//     echo "takut dewasa $umur";
// }else{
//     echo "tidak takut";
// }

// // 3. if else if
// $umur = 2;
// if($umur >= 17){
//     echo "takut dewasa $umur";
// }else if($umur >= 13){
//     echo "takut tapi b aja";
// }else if($umur  >=10){
//     echo "ketar ketir";
// }else{
//     echo "ngga takut";
// }

//  4. switch case
// default untuk memenuhi kebutuhan lain misal nilai dibawah 50 maka akan muncul defaultnya 
// $nilai = 40;
// switch(true){
//     case $nilai >= 90:
//     echo "pintar kali";
//     break;
//     case $nilai >= 80:
//     echo "mayan lah";
//     break;
//     case $nilai >= 70:
//     echo "b aja";
//     break;
//     case $nilai >= 50:
//     echo "geli kali";
//     break;
//     default:
//     echo "cape deh";
// }

//  5. ternary fersi singkat if else
// : fungsi memisahkan kondisi if else
$umur = 7;
$kondisi = $umur >= 17 ? "selamat dah gede" : "masih bocil dek";
echo $kondisi;
?>