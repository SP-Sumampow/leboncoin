FROM php:8.1.1-fpm-alpine3.15
RUN apk --update --no-cache add git
RUN docker-php-ext-install pdo_mysql
# Whatever you did in your PHP Dockerfile
# Removing /var/lib/apt/lists worked
# Node.js
ENV NODE_VERSION=16.13.0
RUN apk update
RUN apk add --update nodejs
RUN apk add --update npm
RUN npm install --global yarn
COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /var/www
EXPOSE 9000