<?php

$a = 50;
$b = 50;

// 1.  &&  kondisi dua duanya harus sama(true)
// 2.  ||(or) salah satu harus sama 
// if($a && $b){
//     echo "sama";
// }else{
//     echo "tidak";
// }

// if($a == 50 || $b == 40){
//     echo "sama";
// }else{
//     echo "tidak";
// }

// 3.  negasi = ! pertentangan betul disalahkan , salah dibetulkan
if(!($a == 50  && $b == 50)){
    echo "good";
}else{
    echo "noob";
}

?>