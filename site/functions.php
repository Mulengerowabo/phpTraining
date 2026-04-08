<?php
function displayAuthor(string $authoremail,$users):string
{

    foreach ($users as $user) {
        if ($authoremail === $user) {
            echo $user['full_name'] . '(' . $user['age'] . 'ans)';
        }}
    return 'auteur invalid';
}
    function isValidRecipe(array $recipe):bool{
    if(array_key_exists('is_enabled',$recipe)){
        $isEnabled = $recipe['is_enabled'];
    }
    else{
        $isEnabled = false;
    }
    return $isEnabled;
}

function getRecipe(array $recipes):array{
    $valid_recipes = [];
    foreach($recipes as $recipe){
        if(isValidRecipe($recipe)){
            $valid_recipes []=$recipe;
        }}
        return $valid_recipes;
    }
?>