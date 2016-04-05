#! /bin/sh
mysql -u root -e "DROP DATABASE IF EXISTS sacids_app1_test;"
mysql -u root -e "CREATE DATABASE sacids_app1_test;"
CI_ENV=testing php index.php migration latest
cd application/tests/
../../bin/phpunit
eval "cd ../..; exit $?"
