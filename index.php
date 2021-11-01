<?php
// question 1
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

    // question 2
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

    echo '<br><br>';

    // question 3
    // country, state, prefecture, city, zipcode
    $address = ['Japan', 'kinki', 'Osaka', 'Yao', '5810018'];
    var_dump($address);
    echo '<br>';
    echo $address[0];
    echo '<br>';
    echo $address[3];
    
    echo '<br><br>';

    $adress2= ['country'=>'Japan', 'state'=>'kinki', 'prefecture'=>'Osaka', 'city'=>'Yao', 'zip'=>'5810018'];
    var_dump($adress2);
    echo '<br>';
    echo $adress2['country'].'<br>';
    echo $adress2['zip'].'<br>';