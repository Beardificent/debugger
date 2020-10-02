<?php
declare(strict_types=1);

//DISPLAY ERROR HANDLING
ini_set("display_errors", '1');
ini_set("display_startup_errors", '1');
error_reporting(E_ALL);

//HAD TO DECLARE $X and CALL UPON FUNCTION
function newExercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}
newExercise(2);
//INSTEAD OF DEFINING X I USED IT AS A PARAMETER and CALL UPON FUNCTION
newExercise(3);
//Arrays start at 0 not at 1
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

newExercise(4);

$str = '"Debugged !"';
echo substr($str, 0, 15);

newExercise(5);

foreach($week as $day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);