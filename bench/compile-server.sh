!#/bin/bash
echo 'Compiling bench server...'
rm -rf bench-server
python /usr/local/src/kphp-kdb/KPHP/tests/kphp.py bench.php -o bench-server -n

