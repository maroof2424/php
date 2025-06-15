<?php

    // if else 

    $score = 85;

    if ($score >= 90){
        echo "Grade: A <br>";
    } elseif ($score >= 75) {
        echo "Grade: B <br>";
    } elseif ($score >= 60){
        echo "Grade: C <br>";
    } else{
        echo "Grade: F <br>";
    }

    // switch case

    $grade = 'B';

    switch ($grade) {
        case 'A':
            echo "Excellent!. <br>";
            break;
        case 'B':
            echo "Good!. <br>";
            break;
        case 'C':
            echo "You passed!. <br>";
            break;
        default:
            echo "Better luck next time!.<br>";
            break;
    }


?>