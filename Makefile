# import config.
cnf ?= .env
include $(cnf)
export $(shell sed 's/=.*//' $(cnf))

# DOCKER TASKS
# Build the container
build: ## Build the container
	docker-compose build

build-nc: ## Build the container without caching
	docker-compose build --no-cache

run: ## Run container on port configured in `.env`
	docker-compose up -d
	docker exec -it $(APP_NAME)_$(PHP_CONTAINER_NAME) composer install
	docker exec -it $(APP_NAME)_$(PHP_CONTAINER_NAME) composer dump-env env
	docker exec -it $(APP_NAME)_$(PHP_CONTAINER_NAME) composer dump-autoload --optimize

db: ## Update database
	docker exec -it $(APP_NAME)_$(PHP_CONTAINER_NAME) php bin/console d:d:c --if-not-exists
	docker exec -it $(APP_NAME)_$(PHP_CONTAINER_NAME) php bin/console d:s:u --force --complete

up: build run db ## Run container on port configured in `.env` (Alias to run)

down: ## Stop and remove a running container
	docker-compose down -v --remove-orphans