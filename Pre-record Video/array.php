<?php
    $students = array(
        'Ariful',
        'Tanni',
        'Azad',
        'Roni Farzana'
    );

    
    //Mutable 
    $students[2] = "shafik";
    $n = count($students);
    for($i=0; $i<$n; $i++){
        echo $students[$i].PHP_EOL;
    }

    /**
     * array function 
     * array_shift() - remove array first element and return the element
     * array_unshift() - add a new item in array to first element
     * array_pop() - return last array element and remove from array
     * array_push() - Add new item in array to last elements
     * 
    */