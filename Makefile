db_name=doctrine

run:
	php main.php

install:
	php composer.phar install

migrate/init:
	mysql -uroot -e "CREATE DATABASE $(db_name)"
	mysql -uroot $(db_name) < migrations/create_persons.sql
	mysql -uroot $(db_name) < migrations/create_company.sql

migrate/seed:
	mysql -uroot $(db_name) < migrations/seeds.sql

_migrate/clean:
	mysql -uroot $(db_name) -e "DROP DATABASE $(db_name)"
