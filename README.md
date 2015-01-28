# php-gettext-demo
Demonstration of the PHP gettext extension on action (loading and showing localized messages)

This repository will show you the directory layout and the PHP code required to load and show localized messages using the gettext library

* Tested on OSX with PHP 5.5.20
* For Windows more tweaking/variables would be needed - TODO


One liner to regenerate all .mo files:

``for filename in `find .|grep messages.po$`; do dest=`echo "$filename" | sed 's/po/mo/g'`; msgfmt $filename -o $dest done;``
