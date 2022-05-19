<?php
echo "<h1> Associative Arrays</h1>";
    $arr = array("freeFire","Pung","COC","COD","CandyCrush");
    // foreach ($arr as $value) {
    //     echo   "$value <br>"  ;
    // }
    
    $assArr = array("ElonMusk"=> "Twitter",
    "BillGates" => "Microsoft",
    "Mark zuckerburg" => "facebook",
    "Harry Bhaiya" => "CodeWithHarry",
    "Sundar picahai" => "Google"
    );
    // echo   $assArr["BillGates"]  ;
        foreach ($assArr as $key => $value) {
        echo   "Owner Name is <b> $key </b> and Company is  <b>$value </b><br>"   ;
        };

?>  