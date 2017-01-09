[![Build Status](https://travis-ci.org/gakyoo/sample-php-codeigniter.svg?branch=master)](https://travis-ci.org/gakyoo/sample-php-codeigniter)

# Spike App with CodeIgniter

## Setup environment

* Manually create a database sacids_app1
  `$ mysql -u root -e "CREATE DATABASE sacids_app1;"`
* Load schema in database
  `$ php index.php migration latest`
* Load seeds
  `$ php index.php seeds seed`

## Testing

```
$ ./bin/test.sh
```
