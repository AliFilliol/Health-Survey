<?php
/* Question 1 */

use JetBrains\PhpStorm\ArrayShape;


/* Test first if PHP have any mistakes
Function is called: isset() */



if (isset($_SESSION['index'])) {
$post = $_SESSION['index'];

echo 

//if (isset($_post['range-slider']) )
$value = $post['range-slider'];
$value = intval($value);

}

//if ($valueQuestion1)>= 3){
$totalPoints = $totalPoints + 0;

//} else {
    $totalPoints = $totalPoints + 1;


if ($valueQuestion1 >= 3){
    $totalPoints = $totalPoints + 1;

}

else {
    echo" Delelopment ERROR: The requested value is not given in the POST.";
}



















