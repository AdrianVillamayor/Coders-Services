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
// if (in_array("ca", $explode_url)) {
//     $lang = 'ca';
// }


define('LOCALE_DIR',  '/var/www/html/locale/');
define('DEFAULT_LOCALE', 'en_US');
define('LOCALE_DOMAIN', 'coders.services');

if ($lang == 'es') $locale = 'es_ES';
// if ($lang == 'ca') $locale = 'ca_ES';
if ($lang == 'en') $locale = 'en_US';

$locale = (isset($locale))? $locale : DEFAULT_LOCALE;

$_SESSION['locale'] = $locale;
$_SESSION['lang']   = $lang;

echo $lang;
echo $locale;


setlocale(LC_ALL, $locale);

bindtextdomain(LOCALE_DOMAIN, LOCALE_DIR);

textdomain(LOCALE_DOMAIN);