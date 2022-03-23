# docker

<p>

Чтобы запустить проект с помощью докера необходимо склонировать репозиторий с уже подготовленой средой, она будет содержать
php-fpm и nginx -> <url>

Пройдемся по содержимому репозитория:
docker-compose.yaml - основной файл для запуска проекта, в нем храняться сервисы и все настройки для запуска:

nginx:

    build:
        context: ./nginx
    restart: unless-stopped
    container_name: ${NAME}_nginx
    working_dir: /var/www/app
    environment:
        - VIRTUAL_HOST=${HOST}
    depends_on:
        - php
    volumes:
        - ${PROJECT_PATH}:/var/www/app
        - ./nginx/conf.d/:/etc/nginx/conf.d
        - ./nginx/nginx.conf:/etc/nginx/nginx.conf
        - ./nginx/sites-enabled/app.conf:/etc/nginx/sites-enabled/${NAME}.conf
    networks:
        - frontend
        - backend


первый сервис - nginx
Указывается первый ключ -
build - откуда брать образ (в нашем случае кастомный файл DockerFile)
restart - указывается когда контэйнер должен быть перезагружен (как остановится, сразу должен перезагрузиться)
working_dir - указывается рабочая папка
environment - указываем переменные среды (тут указываем ключ для обратного проксирования, а именно наш домен)
depends_on - указываем какие сервисы должны быть загружены перед nginx
volumes - маунтим (mount) неомходимые папки в контейнер, благодаря этому получается синхронность фалйов
networks - сети к которым подключен данные сервис

php:

    build:
        context: ./php
    restart: unless-stopped
    container_name: ${NAME}_php
    working_dir: /var/www/app
    environment:
        - VIRTUAL_PROTO=fastcgi
    volumes:
        - ${PROJECT_PATH}:/var/www/app
    networks:
        - backend


В этом сервисе все тоже самое, так что -> смотреть предыдущие обозначения

networks:

    frontend:
        external:
            name: ${PROXY_NETWORK_NAME}
    backend:
        external:
            name: ${BACKEND_NETWORK_NAME}


Присоединяем новые сервисы к уже существующим сетям, которые запущены на docker-engine, чтобы данные сервисы имели возможность
"общаться" с mysql и другими важными сервисами, которые будут запускаться только один раз.

Во всем файле конфигурации встречаются переменные ${SOME_VAR} - это переменные заданные из .env файла, там же можно и указать
необходимые данные.

</p>
