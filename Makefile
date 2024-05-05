build:
	docker compose build
up:
	docker compose up -d
down:
	docker compose down
php-bash:
	docker compose exec php-laravel bash
php-logs:
	docker compose logs php-laravel
nginx-bash:
	docker compose exec nginx-laravel bash
nginx-logs:
	docker compose logs nginx-laravel
redis-bash:
	docker compose exec redis-laravel bash
redis-logs:
	docker compose logs redis-laravel
vendor:
	@echo Выполняется установка зависимостей
	@docker compose run --rm php-laravel composer install
	@echo Успешно выполнено.
key-generate:
	@echo Выполняется генерация ключа Laravel и .env
	@cp .env.example .env
	@docker compose run --rm php-laravel php artisan key:generate
	@echo Успешно выполнено.

phpcs:
	@docker run --rm -v .:/tools/app ghcr.io/aleksandrtm/php-tools phpcs

npm-install:
	@docker run -it --rm -v $$(pwd):/app -w /app --user 1000:1000 node:20.12.2 npm i
npm-build:
	@docker run -it --rm -v $$(pwd):/app -w /app --user 1000:1000 node:20.12.2 npm run build
npm-dev:
	@docker run -it --rm -v $$(pwd):/app -w /app --user 1000:1000 -p 5173:5173 node:20.12.2 npm run dev

install: vendor key-generate

clean:
	@rm -fr ./node_modules && rm -fr ./vendor
