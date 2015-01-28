<?php
$directory = dirname(__FILE__) . '/locale';
$domain = 'mydomain';

echo "Base directory: $directory\n";

echo sprintf("msgid   : custom_msgid\n");

$locale ="en";
setlocale(LC_ALL, $locale);
putenv('LC_ALL=' . $locale);
bindtextdomain($domain, $directory);
textdomain($domain);

echo sprintf("English : %s\n", _('custom_msgid'));

$locale ="de_DE";
setlocale(LC_ALL, $locale);
putenv('LC_ALL=' . $locale);
bindtextdomain($domain, $directory);
textdomain($domain);

echo sprintf("German  : %s\n", _('custom_msgid'));

$locale ="fr_FR";
setlocale(LC_ALL, $locale);
putenv('LC_ALL=' . $locale);
bindtextdomain($domain, $directory);
textdomain($domain);

echo sprintf("French  : %s\n", gettext('custom_msgid'));
