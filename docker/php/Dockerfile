ARG PHP
ARG NAME

FROM $PHP

ENV PS1 "\[\033[1;36m\]Docker $NAME 🐋\[\033[0;35m\]\[\033[01;37m\]:\w\$ \[\033[00m\]"

RUN apk --update --no-cache add git \
    openrc \
    bash \
    vim \
    yarn

RUN set -xe \
    && apk add --update \
        icu \
    && apk add --no-cache --virtual .php-deps \
        make \
    && apk add --no-cache --virtual .build-deps \
        $PHPIZE_DEPS \
        zlib-dev \
        icu-dev \
        g++ \
    && docker-php-ext-configure intl \
    && docker-php-ext-install \
        intl \
        pdo_mysql \
        opcache \
    && docker-php-ext-enable intl \
    && { find /usr/local/lib -type f -print0 | xargs -0r strip --strip-all -p 2>/dev/null || true; } \
    && apk del .build-deps \
    && rm -rf /tmp/* /usr/local/lib/php/doc/* /var/cache/apk/*

COPY --from=composer:2.1 /usr/bin/composer /usr/bin/composer
