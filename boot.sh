#!/bin/bash

docker-compose up -d
docker exec -it janken php main.php