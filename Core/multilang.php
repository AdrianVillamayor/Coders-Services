<?php

$url = $_SERVER["REQUEST_URI"];

$explode_url = explode('/', $url);

$lang = "en";
if (in_array("en", $explode_url)) {
    $lang = 'en';
}
if (in_array("es", $explode_url)) {
    $lang = 'es';
}

if (isset($lang) && $lang == 'en') {
  $web_lang = "en_EN";
} else {
  $web_lang = "es_ES";
  $lang = "es";
}

setlocale(LC_ALL, $web_lang.".utf8");

$domain = 'coders';
$locale_directory = '/var/www/html/locale/';

bindtextdomain($domain, $locale_directory);
textdomain($domain);
