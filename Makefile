db_name=doctrine

composer.phar:
	curl -sS https://getcomposer.org/installer | php

run:
	php main.php

install: composer.phar
	php $< install

migrate/init:
	mysql -uroot -e "CREATE DATABASE $(db_name)"
	mysql -uroot $(db_name) < migrations/create_persons.sql
	mysql -uroot $(db_name) < migrations/create_company.sql
	mysql -uroot $(db_name) < migrations/create_shipping.sql
	mysql -uroot $(db_name) < migrations/create_product.sql

migrate/seed:
	mysql -uroot $(db_name) < migrations/seeds.sql

_migrate/clean:
	mysql -uroot $(db_name) -e "DROP DATABASE $(db_name)"
