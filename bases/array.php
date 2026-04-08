<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];
if (array_key_exists('title',$recipe)){
    echo("la cle 'title' se trouve dans recipe");
}
if(array_key_exists('commentaire',$recipe)){
    echo ("la cle 'commentaire' se trouve dans recette");
}
?>