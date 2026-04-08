<?php
$users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
];

$userPosition = array_search('Mathieu Nebra',$users);
echo '"Mathieu" est a la position:' . $userPosition .PHP_EOL;
?>