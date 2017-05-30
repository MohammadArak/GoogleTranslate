<?php

// __  __       _                                         _    _               _
//|  \/  | ___ | |__   __ _ _ __ ___  _ __ ___   __ _  __| |  / \   _ __ __ _ | | __
//| |\/| |/ _ \| '_ \ / _` | '_ ` _ \| '_ ` _ \ / _` |/ _` | / _ \ | '__/ _` || |/ /
//| |  | | (_) | | | | (_| | | | | | | | | | | | (_| | (_| |/ ___ \| | | (_| ||   <
//|_|  |_|\___/|_| |_|\__,_|_| |_| |_|_| |_| |_|\__,_|\__,_/_/   \_\_|  \__,_||_|\_\

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
