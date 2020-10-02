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

newExercise(6);
//Switched functions around, fixed ; in randomHeroName, fixed implode parameters according to glue and pieces as in documentation.
//random went to far so put -1 in the randomHeroName, now no errors when loading page.
//https://www.php.net/manual/en/function.count.php
// foreach had a missing ampersand
//REPLACED ALL ECHOES WITH RETURN EXCEPT THE LAST ONE

$arr = [];

function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as &$param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    return implode (" - ", $params);
}

function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $rand_name = $heroes[rand(0,count($heroes)-1)][rand(0, 10)];

    return $rand_name;
}


echo "Here is the name: " . combineNames();


newExercise(7);
//return changed to echo because it needs to be printed to screen.
//looked up date, change into an integer with intval (takes the numer from year variable)
function copyright(int $year) {
    echo "&copy; $year BeCode";
}
copyright(intval(date('Y')));

newExercise(8);
//switched || (or) with && (and)
//removed the return 'smith' and added it to the first return
//added breaklines to put returns beneath each other
function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith <br/>';
    }
    return 'No access <br/>';
}

//do not change anything below
//should greet the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//no access
echo login('john@example.be', 'dfgidfgdfg');
//no access
echo login('wrong@example.be', 'wrong');
//you can change things again!

newExercise(9);
//=== and !== compare type and value as shown below: weird thing is that it shows 6 results instead of 4
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');
    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            echo 'Unacceptable Found<br />';

        }
    }
    echo 'Acceptable<br />';
}

//invalid link
isLinkValid('http://www.google.com/hack.pdf');
//invalid link
isLinkValid('https://google.com');
//VALID link
isLinkValid('http://google.com');
//VALID link
isLinkValid('http://google.com/test.txt');

newExercise(10);

//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
//count the array beforehand (replace array.length), also did the -1 just like in prev ex, it counts one to far
$fruitArr = count($areTheseFruits)-1;
for($i=0; $i <= $fruitArr; $i++) {
    if(!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits);//do not change this