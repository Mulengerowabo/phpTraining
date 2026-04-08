<?
$users = [
    'mathieu',
    'Giorgio',
    'Jacques',
]

if(in_array('Giorgio',$users)){
    echo ('la valeur existe dans le tableau');
}
if (in_array('Jeph',$users)){
    echo('Ce type n'existe pas dans le tableau);
}
?>