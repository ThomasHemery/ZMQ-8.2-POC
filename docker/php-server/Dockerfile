FROM php:8.2-cli-alpine

ENV ZMQ_PHP_CHECKOUT_REF="68d4bf090b6a12e40dcd6178837ef729f43c2d2e"

RUN apk add --update curl zip git zlib-dev libzip-dev curl-dev autoconf

COPY scripts /usr/bin/

RUN php-install-zmq

COPY app /usr/local/app

EXPOSE 5555/tcp

ENTRYPOINT ["php", "/usr/local/app/bin/console.php"]