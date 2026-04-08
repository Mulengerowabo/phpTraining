<?php
$users = [
    [
        'username' => 'Giorgio',
        'useremail'=> 'georgesmulengero7@gamil.com',
        'password' => 'Gior123gio',
    ],

    [
        'username' => 'Serge',
        'useremail'=> 'georgesmulengero337@gamil.com',
        'password' => 'Gior123gio',
    ],

    [
        'username' => 'Ghislain',
        'useremail'=> 'georgesmulengero735@gamil.com',
        'password' => 'Gior123gio',
    ],
];

$lines = 3;
$counter = 0;
for ( $lines = O; $lines <= 2; $lines++ ){
    echo $users[$counter]['username'] . ' ' . $users[$counter]['useremail'] . '<br />';
}
?>