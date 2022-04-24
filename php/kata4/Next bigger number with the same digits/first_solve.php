<?php

function delimeter($array)
{
    $head = array_reverse($array);
    $tail = [];
    $indexSlice = 0;
    for ($i = 1; $i <= count($head) - 1; $i++) {
        if ($head[$i] > $head[$i - 1]) {
            $tail[] = $head[$i - 1];
            $indexSlice++;
        } else if ($head[$i] == $head[$i - 1]) {
            $tail[] = $head[$i - 1];
            $indexSlice++;
            continue;
        } else {
            $tail[] = $head[$i - 1];
            $indexSlice++;
            return ["head" => array_slice($array, 0, -$indexSlice), "tail" => $tail];
        }
    }
    return -1;
}

function minNumbersInTail($tail, $numberDelimetrArray)
{
    $minNumberIndexInTail = array_search(min($tail), $tail);
    if ($tail[$minNumberIndexInTail] > $numberDelimetrArray) {
        return $minNumberIndexInTail;
    } else {
        unset($tail[$minNumberIndexInTail]);
        return minNumbersInTail($tail, $numberDelimetrArray);
    }
}

function swap(&$left, &$right): void
{
    if ($left === $right) {
        return;
    }

    $tmp = $left;
    $left = $right;
    $right = $tmp;
}

function nextBigger($n)
{
    $array = delimeter(str_split($n));
    if (gettype($array) != 'array') {
        return $array;
    } else {
        $numberDelimetrArray = &$array['head'][count($array['head']) - 1];
        $minIndexInTail = minNumbersInTail($array['tail'], $numberDelimetrArray);
        // //swap element
        swap($array['tail'][$minIndexInTail], $numberDelimetrArray);
        sort($array['tail']);
        $result = implode('', $array['head']);
        $result .= implode('', $array['tail']);
        return intval($result);
    }
}
