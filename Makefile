
create-docker-network:
	sudo docker network create --gateway 172.18.0.1 --subnet 172.18.0.0/24 catalog-network
up:
	sudo docker-compose up
stop-mysql-local:
	sudo /etc/init.d/mysql stop

exec-mysql:
	docker-compose exec db mysql -h db

artisan:
	docker-compose exec php php artisan $@