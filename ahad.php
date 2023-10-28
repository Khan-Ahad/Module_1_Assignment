<?php
function fibonacci($n) {
    $fib = [];
    $fib[0] = 0;
    $fib[1] = 1;

    echo "Fibonacci Series (up to $n numbers): ";
    echo $fib[0] . " " . $fib[1] . " ";

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        echo $fib[$i] . " ";
    }
}

fibonacci(10);
?>