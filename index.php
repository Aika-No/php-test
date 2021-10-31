<?php
    function fizzBuzz ($number){
        switch (true){
            case $number % 15 === 0:
                return 'FizzBuzz';
                break;

            case $number % 3 ===0:
                return 'Fizz';
                break;

            case $number % 5 === 0:
                return 'Buzz';
                break;

            default:
                return $number;
                break;
        }
    }

    for ($i=1; $i<=100; $i++){
        echo fizzBuzz($i). '';
    }
    echo '<br><br>';

    for ($i=1; $i<=10000; $i++){
        $point = 0;
        for ($j = 1; $j<=$i; $j++){
            if ($i % $j == 0){
                $point += 1;
            }
        }
        if ($point ==2){
            echo $i."\n";
        }
    }
