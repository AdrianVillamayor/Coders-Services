<?php
require_once('../Libraries/gettext.inc');

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
if (in_array("ca", $explode_url)) {
    $lang = 'ca';
}

define('LOCALE_DIR',  'locale');
define('DEFAULT_LOCALE', 'en_US');
define('LOCALE_DOMAIN', 'metalast');

if ($lang == 'es') $locale = 'es_ES';
if ($lang == 'ca') $locale = 'ca_ES';
if ($lang == 'en') $locale = 'en_US';

$_SESSION['locale'] = $locale;
$_SESSION['lang']   = $lang;

$encoding = 'UTF-8';
$locale = (isset($locale))? $locale : DEFAULT_LOCALE;

putenv("LC_ALL=$locale");

// gettext setup
T_setlocale(LC_MESSAGES, $locale);

// Set the text domain as 'messages'
bindtextdomain(LOCALE_DOMAIN, LOCALE_DIR);

// bind_textdomain_codeset is supported only in PHP 4.2.0+
if (function_exists('bind_textdomain_codeset')) {
    bind_textdomain_codeset(LOCALE_DOMAIN, $encoding);
}
textdomain(LOCALE_DOMAIN);