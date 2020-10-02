<?php
declare(strict_types=1);

//DISPLAY ERROR HANDLING
ini_set("display_errors", '1');
ini_set("display_startup_errors", '1');
error_reporting(E_ALL);

//HAD TO DECLARE $X and CALL UPON FUNCTION
function newExercise() {
    $x = 1;
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}
newExercise();
//HAD TO DECLARE $X and CALL UPON FUNCTION
newExercise();
//Arrays start at 0 not at 1
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

newExercise();
