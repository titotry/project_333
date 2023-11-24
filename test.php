<?php
  $data = array(
    'name' => 'John Doe',
    'email' => 'john@example.com',
    'age' => 30
);

$countery ["UAE"]["abu dhabi"]=["A1"=>1021,"B2"=>10,"C3"=>10];
$countery ["UAE"]["dubai"]=["A1"=>1023,"B2"=>10,"C3"=>10];
$countery ["UAE"]["sharjah"]=["A1"=>1024,"B2"=>10,"C3"=>10];
$countery ["UAE"]["ajman"]=["A1"=>1025,"B2"=>10,"C3"=>10];
$countery ["UAE"]["umm al quwain"]=["A1"=>1026,"B2"=>10,"C3"=>10];
$countery ["UAE"]["ras al khaimah"]=["A1"=>1027,"B2"=>10,"C3"=>10];
$countery ["UAE"]["fujairah"]=["A1"=>1029,"B2"=>10,"C3"=>10,"E5"=>10,"F6"=>10];
/*
foreach ($data as $key => $value) {
    echo $key . ' = ' . $value . '<br>';
}*/

foreach($countery as $key=>$value){ /* key =BH...ect     value=manama...... ect*/
    $c=0;
    $pop=0;
    echo "key of countery".$key."<br>";
    echo "value".$value."<br>";
    
    foreach($value as $key2=> $v2){ /* v2= hole arry in manama...ect*/  //if we add $key in here it will be the the arry all =["A1"=>101,.....ect
        echo "value".$key2."<br>";
        echo " value".$v2."<br>";
        foreach($v2 as $key2=>$v3){ /* v3= the values in the arry inside a1...ect*/
            echo "value".$key3."<br>";
            echo " value".$v3."<br>";
        }
        
    }}

?>