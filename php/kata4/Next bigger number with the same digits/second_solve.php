<?php

function biggerNumber($n)
{
    $n = str_split('' . $n);
    rsort($n);

    return (int) join($n);
}


function nextBigger2($n)
{
    $o = biggerNumber($n);
    for ($i = $n + 1; $i <= $o; $i++) {
        if (biggerNumber($i) === $o) {
            debug($o);
            return $i;
        }
    }

    return -1;
}
