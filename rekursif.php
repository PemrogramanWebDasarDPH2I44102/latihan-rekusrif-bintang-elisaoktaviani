<?php
$pola = 5;
    function rekursif($h,$a){
        if($h>0){
            if($a>0){
                echo "* ";
                $a--;
                rekursif($h,$a);
            }else{
                echo"<br>";
                $h--;
                rekursif($h,$h);           
                 }
            }
    }
    rekursif($pola,$pola);

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "*/==========================================*/<br>";
 $pola = 5;
    function pattern($b,$n, $pola){
        if($b<=$pola){
            if($n<=$b){
                echo "$n";
                $n++;
                pattern($b,$n,$pola);
            }else{
                echo"<br>";
                $b++;
                pattern($b,1,$pola);           
                 }
            }
    }
    pattern(1,1,$pola);
?>
