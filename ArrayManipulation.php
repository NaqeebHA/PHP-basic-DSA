<?php

    function arrayFlattening($array)
    {
        $newArray = [];

        foreach($array as $element) {
            if (is_array($element)) {
                $newArray = array_merge($newArray, arrayFlattening($element));
            } else {
                $newArray[] = $element;
            }
        }

        return $newArray;

    }

    function arraySorting($array)
    {
        $arraySize = sizeof($array);

        for ($i=0; $i<$arraySize-1; $i++) {
            for ($j=$i+1; $j<$arraySize; $j++) {
                if ($array[$i] > $array[$j]) {
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }

        return $array;
    }

    function arrayDuplicates($array)
    {
        $arraySize = sizeof($array);
        $duplicates = [];

        for ($i=0; $i<$arraySize-1; $i++) {
            for ($j=$i+1; $j<$arraySize; $j++) {
                if ($array[$i] == $array[$j]) {
                    $duplicates[] = $array[$i];
                    break;
                }
            }
        }

        return array_unique($duplicates);
    }

    function arrayIntersection($array1, $array2)
    {
        $array1Size = sizeof($array1);
        $array2Size = sizeof($array2);
        $intersections = [];

        for ($i=0; $i<$array1Size; $i++) {
            for ($j=0; $j<$array2Size; $j++) {
                if ($array1[$i] == $array2[$j]) {
                    $intersections[] = $array1[$i];
                    break;
                }
            }
        }

        return array_unique($intersections);
    }

    function maxSubarraySum($array)
    {
        $arraySize = sizeof($array);
        $subarray = [];
        $sum = 0;

        for ($i = 0;  $i < $arraySize-1; $i++) {
            if ($array[$i] + $array[$i+1] > $sum) {
                $subarray[0] = $array[$i];
                $subarray[1] = $array[$i+1];
                $sum = $array[$i] + $array[$i+1];
            }
        }

        return $subarray;
    }

    //test
    print_r(arrayFlattening([1, [2, 3], [4, [5, 6], 2, 1]]));
    print("\n");
    print_r(arraySorting([5, 2, 9, 1, 5, 6, 1, 1, 3]));
    print("\n");
    print_r(arrayDuplicates([1, 2, 3, 6, 6, 2, 4, 5, 1, 6]));
    print("\n");
    print_r(arrayIntersection([1, 2, 3, 4, 6, 1], [3, 4, 5, 6]));
    print("\n");
    print_r(maxSubarraySum([1, 2, 3, 4, 5, 2, 7, 3]));