<?php

//* 1.  String
// $dataString = "Sate";
// echo "makanan kesukaanku " . $dataString;

// print $dataString;
// echo "<br>";

// // var_dump = ngasih tau tipe datanya dan jumlah karakter katanya
// var_dump($dataString);
// echo "<br>";

// print_r ($dataString);

// //* 2.  Number
// // float = angka desimal 200.000 , number = "100"
// $dataNumber = 2000.000;
// echo "Nomornya " . $dataNumber;

// print $dataNumber;
// echo "<br>";

// var_dump($dataNumber);
// echo "<br>";

// print_r ($dataNumber);

//* 3.  Boolean
// 1 = true, (  ) = false . Kalau manggil pakai variabel
// $dataBoolean = true;

// echo "hasil wooi";

// if($dataBoolean){
//     echo "Hasil true";
// }else{
//     echo "Hasil false";
// }

// // variabel
// $dataBoolean = true;
// if($dataBoolean){
//     echo "Hasil $dataBoolean";
// }else{
//     echo "Hasil $dataBoolean";
// }

// * 4. Null
// pengecekan data null
// $cekNull = is_null($dataNull);
// // echo $cekNull
// var_dump($cekNull);

// $dataNull = null;
// $dataNull2 = 56;

// print "ini data $dataNull2"

// * 5. Array
// $bias = array("JK", "JAY","KIMING", "PECEYE");
// print "biasku $bias[1]";
// echo "<br>";
// echo $bias[0];
// // array (berapa data {[index] tipe data (jumlahnya) isi datanya})
// var_dump($bias);

// * 6. Operasi array

// ngubah data -> rumus = $variabel[index] = "value"
// $bias[1] = "BOEMGYU";
// echo $bias[1];
// echo "<br>";
// echo "bias diurutannya yaitu" . $bias[2]= "jihoo";

// // menambahkan data dipaling belakang, rumus= $variabel[] = "value"
// echo $bias[] = "jin";
// var_dump($bias);

// // hapus data pd arr , rumus = unset($var[index])
// unset($bias[2]);
// var_dump($bias);

// // menghitung data arr rumus = echo count($var)  
//  echo count($bias)

// * 7. Mapping , depan, tengah, belakang = key. firdha= value
// $nama = array(
//     "depan" => "fir",
//     "tengah" => "dha",
//     "belakang" => "nisa"
// );

// cara akses panggil bungkus paling luar / var baru ["key"]
// echo $nama["tengah"];

// * 8. Mapping arr dalam array
$nama = array(
    "depan" => "fir",
    "tengah" => "dha",
    "belakang" => "nisa",
    "alamat" => array(
        "kota" => "bogor",
        "negara" => "indo"
    )
);
// kulit luar var panggil dulu
// (. " ") untuk beri spasi
echo $nama["depan"]  . " " .$nama ["alamat"] ["kota"] ;

?>