#! /bin/sh
DB_USER=${DB_USER:-root}

mysql -u $DB_USER -e "DROP DATABASE IF EXISTS sacids_app1_test;"
mysql -u $DB_USER -e "CREATE DATABASE sacids_app1_test;"
CI_ENV=testing php index.php migration latest
cd application/tests/
../../bin/phpunit
eval "cd ../..; exit $?"
