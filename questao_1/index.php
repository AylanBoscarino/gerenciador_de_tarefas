<?php
$lista = range(1, 100);

foreach($lista as $key => $value)
{
    $value = ($key + 1) % 3 == 0 ? "Fizz" : $value;
    $value = ($key + 1) % 5 == 0 ? "Buzz" : $value;
    $value = ($key + 1) % 15 == 0 ? "FizzBuzz" : $value;

    echo "$value <br>";
}