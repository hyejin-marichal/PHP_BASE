<?php
function solution($N)
{
    $compterzero[][] = array();
    $changeBin = array();
    $check = 0;
    $zero = 0;
    while ($N >= 1) {
        if ($N == 1) {
            $bin = '1';
        } else {

            if ($N % 2 == 0) {
                $bin = '0';
            } else {
                $bin = '1';
            }
        }
        array_push($changeBin, $bin);
        $N = $N / 2;
    }
    $changeBin = array_reverse($changeBin);
    foreach ($changeBin as $element) {
        echo $element;
    }

    foreach ($changeBin as $compte)
    {
        if ($compte == '1')
        {
            array_push($compterzero, $check);
            $check++;

        }
        else
        {
            $zero=$zero++;
            array_push($compterzero, $check,$zero);
        }

    }


    var_dump($compterzero);

    print($zero);
}

solution(12);


//
/* foreach (solution() as $element)
{
    echo $element;
}

$nombreZero[][] = array();

foreach ()
foreach (solution() as $element) {

    if($element == '1') {


        $nombreUn++;
    }
}
*/