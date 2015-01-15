#!/bin/bash
echo "Compilling bench...\n"
rm -rf bench
python /usr/local/src/kphp-kdb/KPHP/tests/kphp.py bench.php -o bench
