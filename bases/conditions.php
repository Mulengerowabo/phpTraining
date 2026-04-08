<?php
/* $isEnabled = true;
$isOwner = true;
$isAdmin = false;
if(($isEnabled && $isOwner) || $isAdmin ){
    echo("Vous etes le proprietaire et vous etes autorise");
}

elseif($isOwner){
    echo("is For you but isn't enabled for you");
}
else{
    echo("access denied");
}
*/

$score = 16;

switch ($score){
    case 0:
        echo("vous n'etes pas eligible au programme");
        break;

    case 10 :
        echo("Vous etes moyen veuillez fournir des efforts");
        break;
}

$age = 18;

$isAdult = ($age >= 18) ?true : false;
// if ($age >= 18){
//     $isAdult = true;
// }
// else{
//     $isAdult = false;
// }
?> 