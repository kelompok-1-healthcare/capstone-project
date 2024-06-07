FROM php:8.0.24-zts-alpine3.16

WORKDIR /app

RUN apk update 
RUN curl -sS https://getcomposer.org/installer | php -- --version=1.10.26 --install-dir=/usr/local/bin --filename=composer

#  docker compose
RUN curl -SL https://github.com/docker/compose/releases/download/v2.27.0/docker-compose-linux-x86_64 -o /usr/local/bin/docker-compose && chmod +x /usr/local/bin/docker-compose

COPY . .

RUN composer install

EXPOSE 5000
CMD ["php","artisan","serve","--port=5000"]