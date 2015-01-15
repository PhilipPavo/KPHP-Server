
!#/bin/bash
echo 'Compiling apps server...'
rm -rf apps-server
python /usr/local/src/kphp-kdb/KPHP/tests/kphp.py apps.php -o apps-server -n
