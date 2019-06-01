<!--
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
-->
<?php
    function factorial($input){
        if($input <= 1) {
            echo 'Enter the number above one';
        } else {
            echo $input . ' = ';
            while($input % 2 == 0) {
                if ($input / 2 == 1) {
                    $input /= 2;
                    echo 2;
                } else {
                    $input /= 2;
                    echo '2 x ';                                           
                }
            }
            while($input > 1) {
                for($i = 3; $i <= $input; $i += 2) {
                    if ($input % $i == 0) {
                        if ($input / $i == 1) {
                            $input /= $i;
                            echo $i;
                            break;
                        } else {
                            $input /= $i;
                            echo $i . ' x ';                                            
                            break;
                        }
                    }
                }
            }
        }
    }
    echo '<h2>Prime factorization</h2>';
    for($i = 1; $i <= 10; $i++){
        if($i == 1){
            echo $i . ' = Cannot be factored<br/><br/>';
        }else {
        echo factorial($i) . '<br/><br/>';
        }
    }
?>
