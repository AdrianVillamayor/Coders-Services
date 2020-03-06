<?php

// I18N Support
$lang = "es_ES.utf8"; // Default language

// You can do something else, so many ways...
// Be carefule, use  xx\_CC where xx is lang and cc is country
// If it does not work, add try xx\_CC.utf8
if(!empty($_GET["lang"]))
  $lang = $_GET["lang"];

setlocale(LC_ALL, $lang);
// If no translation, try to comment out those two lines
// putenv("LANG={$lang}");
// putenv("LANGUAGE={$lang}");

// use domain if you got multiple project on the same server. This is not necessarily your server domain name.
// It can be your project name
$domain = 'metalast';
$locale_directory = '/var/www/html/locale/';
// Where is your locale directory, relative and absolute path work
bindtextdomain($domain, $locale_directory);
textdomain($domain);

echo _("CUSTOM PROGRAMMING");

