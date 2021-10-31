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
