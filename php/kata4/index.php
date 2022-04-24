<?php

require_once __DIR__.'/Next bigger number with the same digits/first_solve.php';
require_once __DIR__.'/Next bigger number with the same digits/second_solve.php';

function debug($array)
{
    echo '<pre>'.print_r($array,1).'</pre>';
}



// debug(nextBigger(12));
// debug(nextBigger(513));
// debug(nextBigger(2017));
// debug(nextBigger(414));
// debug(nextBigger(144));
// debug(nextBigger(123456789));
// debug(nextBigger(1234567890));
// debug(nextBigger(9876543210));
// debug(nextBigger(9999999999));
// debug(nextBigger(59884848459853));

// debug(nextBigger2(123456789));
debug(nextBigger2(144));
debug(nextBigger2(59884848459853));
debug(nextBigger2(1111111111111111119));
//debug(nextBigger(1111111111111111119));
// echo 987654321 === 123456798 ? "1" : "0";
// echo "</br>";
// debug(nextBigger2(12));