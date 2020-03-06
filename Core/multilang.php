<?php
$url = $_SERVER["REQUEST_URI"];

$spanishLanguage = array('eu','ca','es','an','gl');

$lang = 'en';

if(!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if (in_array($lang, $spanishLanguage)) {
        $lang = "es";
    }else{
        $lang = "en";
    }
}

$explode_url = explode('/', $url);

if (in_array("en", $explode_url)) {
    $lang = 'en';
}
if (in_array("es", $explode_url)) {
    $lang = 'es';
}

setlocale(LC_ALL, $lang);

$domain = 'coders.services';
$locale_directory = '/var/www/html/locale/';

bindtextdomain($domain, $locale_directory);
textdomain($domain);