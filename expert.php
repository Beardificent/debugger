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
newExercise(1);
//INSTEAD OF DEFINING X I USED IT AS A PARAMETER and CALL UPON FUNCTION
newExercise(2);
//Arrays start at 0 not at 1
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

newExercise(3);
// I CHEATED ON THIS ONE BUT IN THE DUMB WAY
$str = '"Debugged !"';
echo substr($str, 0, 15);

//LOOK I JUST HAD TO CHANGE THE DOUBLE QUOTES WITH SINGLES
$str = 'Debugged ! Also very fun';
echo substr($str, 0, 10);

newExercise(4);
// In order to be able to directly modify array elements within the loop precede $value with &
foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);

newExercise(5);
// OOOF I AM A GENIUS! IT DOESNT WORK WHEN <= THAN Z BECAUSE OF ALL THE VALUES, < DOESNT WORK BECAUSE IT WONT PASS Z, BUT YOU GOTTA STOP IT BEFORE IT SWTITCHES TO AA! BOOYA
$arr = [];
for ($letter = 'A'; $letter != 'AA'; $letter++) {
    array_push($arr, $letter);
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array