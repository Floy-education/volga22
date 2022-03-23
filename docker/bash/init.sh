#!/bin/bash
set -me

APP_ENV=$1

/usr/local/bin/docker-php-entrypoint

if [ $APP_ENV == 'dev' ]; then
    php-fpm
else
    php-fpm
fi

fg %1