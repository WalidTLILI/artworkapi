# docker/php-fpm/Dockerfile
FROM php:7.4-fpm

RUN apt-get update \
    && apt-get install -qqy \
    git \
    unzip \
    && docker-php-ext-install pdo_mysql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && rm -rf /tmp/* \
    && rm -rf /var/tmp/*

# Install composer
RUN curl -sS https://getcomposer.org/installer | php \
	&& mv composer.phar /usr/bin/composer

# Install symfony
RUN curl -sS https://get.symfony.com/cli/installer | bash \
    && mv /root/.symfony/bin/symfony /usr/local/bin/symfony

CMD ["php-fpm"]

EXPOSE 9000
