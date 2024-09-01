#!/bin/bash

docker compose down
docker compose up -d app
docker compose run --rm composer install
docker compose run --rm artisan db:seed
docker compose run --rm artisan key:generate