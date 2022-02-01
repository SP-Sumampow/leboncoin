#!/bin/bash
cd ./infra
docker-compose up -d --build && docker-compose run php yarn run encore dev watch