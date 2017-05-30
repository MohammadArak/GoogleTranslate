<?php

$text = $_GET['text'];
$lang = $_GET['lang'];

if(!$text){
    $array = array(
        'error'=>true,
        'result'=>'Invalid Parametr Text'
    );
}elseif(!$lang){
    $array = array(
        'error'=>true,
        'result'=>'Invalid Parametr Language'
    );
}else{
    $array = array(
        'error'=>false,
        'result'=>translate($text, $lang),
        'lang'=>get_lang($lang)
    );
}

echo json_encode($array);

?>
