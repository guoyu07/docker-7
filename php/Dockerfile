FROM php:7.1.6-fpm

# Install env
ADD sources.list    /etc/apt/sources.list
RUN apt-get update && apt-get install -y \
        git \
        libgearman-dev \
        libmemcached-dev \
        libmcrypt-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng12-dev \
        && rm -r /var/lib/apt/lists/*

# Install PHP extensions
#COPY ext/memcache-3.0.8.tgz /home/memcache.tgz
#COPY ext/memcached-3.0.3.tgz /home/memcached.tgz
COPY ext/redis-3.1.2.tgz /home/redis.tgz
COPY ext/msgpack-2.0.2.tgz /home/msgpack.tgz
COPY ext/swoole-1.9.15.tgz /home/swoole.tgz
COPY ext/taint-2.0.2.tgz   /home/taint.tgz
COPY ext/xdebug-2.5.5.tgz /home/xdebug.tgz
COPY ext/yaf-3.0.5.tgz /home/yaf.tgz

RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
        && docker-php-ext-install zip \
        && docker-php-ext-install gd \
        && docker-php-ext-install mbstring \
        && docker-php-ext-install mcrypt \
        && docker-php-ext-install pdo_mysql

# User extension 
#RUN pecl install /home/memcache.tgz
#RUN pecl install /home/memcached.tgz
RUN pecl install /home/redis.tgz
RUN pecl install /home/msgpack.tgz
RUN pecl install /home/swoole.tgz
RUN pecl install /home/taint.tgz
RUN pecl install /home/xdebug.tgz
RUN pecl install /home/yaf.tgz

# User ini
COPY php.d/*.ini /usr/local/etc/php/conf.d/

# PHP config
ADD php.ini         /usr/local/etc/php/php.ini
ADD php-fpm.conf    /usr/local/etc/php-fpm.conf

# Composer
ADD composer.phar /usr/local/bin/composer
RUN chmod 755     /usr/local/bin/composer

WORKDIR /opt

# Write Permission
RUN usermod -u 1000 www-data

#EXPOSE 9000
#VOLUME ["/opt"]

#docker build -t mickeyouyou/php ./php
#docker run -p 9000:9000 -v /Users/zongbao/dev:/opt -it mickeyouyou/php