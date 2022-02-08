#!/bin/bash

DBNAME=vagrant

DBUSER=vagrant

DBPASSWD=vagrantpass

echo "Creating new db $DBNAME"

sudo mysql -uroot -e "CREATE DATABASE $DBNAME"

sudo mysql -uroot -e "GRANT ALL PRIVILEGES ON $DBNAME.* to '$DBUSER'@'%'"