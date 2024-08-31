build:
	docker-compose build

run:
	docker-compose up -d

install:
	docker-compose exec php bash -c 'composer setup'

#from image documentation
chown-www-data:
	docker-compose exec php bash -c 'chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache'

#from image documentation
chmod-storage-cache:
	docker-compose exec php bash -c 'chmod -R 775 /var/www/storage /var/www/bootstrap/cache'

migrate:
	docker-compose exec php bash -c 'php artisan migrate'

config-clear:
	docker-compose exec php bash -c 'php artisan config:clear'

compile: build run chown-www-data chmod-storage-cache install migrate config-clear

down:
	docker-compose down

stop:
	docker-compose stop
