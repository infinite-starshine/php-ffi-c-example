FROM php:8.2-cli-alpine

RUN apk add --no-cache --virtual .persistent-deps libffi-dev && docker-php-ext-configure ffi --with-ffi && docker-php-ext-install ffi
RUN apk add build-base
RUN mkdir /hellothere/
ADD hellothere.c /hellothere/
ADD hellothere.h /hellothere/
RUN cd /hellothere/ && gcc -c -fPIC hellothere.c -o hellothere.o && gcc hellothere.o -shared -o libhellothere.so && cp libhellothere.so /usr/lib/
ADD main.php /main.php

ENTRYPOINT ["php", "/main.php"]
