<?php
    $students = array(
        'Ariful',
        'Tanni',
        'Azad',
        'Roni Farzana'
    );

    $n = count($students);
    for($i=0; $i<$n; $i++){
        echo $students[$i].PHP_EOL;
    }