<?php
// var_dump($argv);
    // main($argv);


 function rf($argv)
{
    if(isset($argv[1])){
        $handle = fopen($argv[1], "r");
        $n = 0;
        $storeLines = [];
        $size = 0;

        while (($line = fgets($handle)) !== false) {
            // process the line read.
            // echo $n+=1;
            var_dump($line);

            array_push($storeLines, $line);

        }
        $size = verify_map_size($storeLines); 

        // verify_line_content($storeLines);
        
        bsq($storeLines , $size);

        fclose($handle);
        
        // readfile($argv[1]);
    }
    
}

function verify_map_size($array){
    $lineNumber = count($array);
    $first =  intval($array[0]);

    if ($lineNumber -1 == $first ) {
        return $first ;
    }
    exit;

    // var_dump($first);
    // var_dump($lineNumber);

}

function verify_line_content($array){

    foreach ($array as $key => $value) {

        // echo $value;
        $moi = explode('.', $value);
        // var_dump($moi);
    }
}

function bsq($array , $size)
{
    // var_dump($array, $size);
    $bsqr_size = 1;
    $tb = [];
    array_shift($array);
    
    foreach ($array as $x => $line) {
        $arrLine = str_split($line);
        array_pop($arrLine);
        $tabX = count($arrLine);

        $tabY = $size;
        $r = str_replace('o',1,$arrLine);
        $t = str_replace('.',0,$r);

        foreach ($t as $y => $value) {
            // str_replace(1,'o',$r);
            // echo "x= ".$x." / y= ".$y." BSQ=".$value."\n";

            if ($value == 1) {
                
            }

            // $q = [$x ,$y];
            // array_push($dan , $q);

            echo $x-1;
        }

    }

    // echo $tb[3][1];

    
}

rf($argv);
