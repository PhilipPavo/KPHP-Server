#!/bin/bash
echo "Compilling apps...\n"
rm -rf apps
python /usr/local/src/kphp-kdb/KPHP/tests/kphp.py apps.php -o apps
