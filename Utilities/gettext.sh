clear
echo CLEAN UP
echo
rm -rf output/*
#php language.php
echo
echo Creating catalogs from templates and source code...
echo

if [ -f ../locale/es_ES/LC_MESSAGES/metalast.po ]
then
echo es_ES PO file exists, updating!
find  ../common ../  -name '*.php' | xargs xgettext --from-code UTF-8 -L php -p ../locale/es_ES/LC_MESSAGES/ -o update.po
msgmerge -U ../locale/es_ES/LC_MESSAGES/metalast.po ../locale/es_ES/LC_MESSAGES/update.po
rm ../locale/es_ES/LC_MESSAGES/update.po
else
find ../common ../ -name '*.php' | xargs xgettext --from-code UTF-8 -L php -p ../locale/es_ES/LC_MESSAGES/ --default-domain=metalast
fi
echo Compiling new es_ES
msgfmt ../locale/es_ES/LC_MESSAGES/metalast.po -o ../locale/es_ES/LC_MESSAGES/metalast.mo
echo

if [ -f ../locale/ca_ES/LC_MESSAGES/metalast.po ]
then
echo ca_ES PO file exists, updating!
find ../common ../ -name '*.php' | xargs xgettext --from-code UTF-8 -L php -p ../locale/ca_ES/LC_MESSAGES/ -o update.po --copyright-holder metalast
msgmerge -U ../locale/ca_ES/LC_MESSAGES/metalast.po ../locale/ca_ES/LC_MESSAGES/update.po
rm ../locale/ca_ES/LC_MESSAGES/update.po
else
find  ../common ../  -name '*.php' | xargs xgettext --from-code UTF-8 -L php -p ../locale/ca_ES/LC_MESSAGES/ --default-domain=metalast
fi
echo Compiling new ca_ES
msgfmt ../locale/ca_ES/LC_MESSAGES/metalast.po -o ../locale/ca_ES/LC_MESSAGES/metalast.mo
echo

if [ -f ../locale/en_US/LC_MESSAGES/metalast.po ]
then
echo en_US PO file exists, updating!
find  ../common ../  -name '*.php' | xargs xgettext --from-code UTF-8 -L php -p ../locale/en_US/LC_MESSAGES/ -o update.po
msgmerge -U ../locale/en_US/LC_MESSAGES/metalast.po ../locale/en_US/LC_MESSAGES/update.po
rm ../locale/en_US/LC_MESSAGES/update.po
else
find  ../common ../  -name '*.php' | xargs xgettext --from-code UTF-8 -L php -p ../locale/en_US/LC_MESSAGES/ --default-domain=metalast
fi
echo Compiling new en_US
msgfmt ../locale/en_US/LC_MESSAGES/metalast.po -o ../locale/en_US/LC_MESSAGES/metalast.mo
echo