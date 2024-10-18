<?php
    function stringReverse(string $str)
    {
        $len = strlen($str);
        if ($len%2==0) {
            for ($i=0;  $i<$len/2; $i++) {
                $temp =  $str[$i];
                $str[$i] =  $str[$len-1-$i];
                $str[$len-1-$i] = $temp;
            }  
        } else {
            for ($i=0;  $i<($len-1)/2; $i++) {
                $temp = $str[$i];
                $str[$i] = $str[$len-1-$i];
                $str[$len-1-$i] = $temp;
            } 
        }
        return $str;
    }

    function fibonacci(int $n)
    {
        if ($n>0) {
            $fibonacciNumbers = [1];
            if($n>=2) {
                $fibonacciNumbers[1] = 1;
                for ($i=2; $i<=$n; $i++) {
                    $fibonacciNumbers[$i] = $fibonacciNumbers[$i-1] + $fibonacciNumbers[$i-2];
                }
            }
            return $fibonacciNumbers;
        }
    }

    function factorial(int $n) 
    {
        if ($n<=1) return 1;
        else return $n * factorial($n-1);
    }

    function isPrime(int $n) {
        $n =  abs($n);
        if ($n==1 || $n==2) return true;
        else return !($n%2==0 || $n%3==0 || $n%5==0 || $n%7==0);
    }

    function isPalindrome(string $str)
    {
        $str = strtolower($str);
        $str = preg_replace('/[^a-z0-9]/', '', $str);
        return $str == stringReverse($str);
    }

    //test
    print(stringReverse("Hello World!"));
    print("\n");
    print_r(fibonacci(13));
    print("\n");
    print(factorial(6));
    print("\n");
    print(isPrime(29) ? 'true' : 'false');
    print("\n");
    print(isPalindrome("A man, a plan, a canal: Panama") ? 'true' : 'false');