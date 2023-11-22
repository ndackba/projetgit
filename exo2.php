<?php
$num = 8;
$prime = true;
for($i = 2; $i <= sqrt($num); $i++) {
    if($num % $i == 0) {
        $prime = false;
        break;
    }
}
if($prime) {
    echo "$num est premier.";
} else {
    echo "$num n'est pas premier."

?>