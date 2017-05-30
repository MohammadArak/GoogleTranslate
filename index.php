<?php

require 'GoogleTranslate.php';

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
    $gtr = new GoogleTranslate();
    $array = array(
        'error'=>false,
        'result'=>$gtr->translate($text, $lang),
        'lang'=>$gtr->get_lang($lang)
    );
}

echo json_encode($array);

?>
