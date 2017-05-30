<?php

function translate($text, $to) {
    $json_array = file_get_contents('https://translate.googleapis.com/translate_a/single?client=gtx&ie=UTF-8&oe=UTF-8&sl=auto&tl=' . $to . '&dt=t&q=' . $text);
    $jdat = json_decode($json_array);
    return $jdat[0][0][0];
}

function get_lang($input){
    $languages = array(
        'en'=>'English',
        'fa'=>'Persian',
        'fr'=>'French',
        'ar'=>'Arabic',
        'ru'=>'Russian',
        'ja'=>'Japanese',
        'zh'=>'Chinese',
        'de'=>'German',
        'es'=>'Spanish'
    );
    if($languages[$input]){
        return $languages[$input];
    }else{
        return $input;
    }
}

?>
