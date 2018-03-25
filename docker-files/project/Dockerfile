FROM phusion/baseimage

ENV LANG            en_US.UTF-8
ENV LC_ALL          en_US.UTF-8

CMD ["/sbin/my_init"]

# installing packages
RUN add-apt-repository -y ppa:ondrej/php \
    && apt-get update \
    && DEBIAN_FRONTEND="noninteractive" apt-get install -y \
        nginx \
        php7.1-bcmath \
        php7.1-cli \
        php7.1-curl \
        php7.1-fpm \
        php7.1-mbstring \
        php7.1-mcrypt \
        php7.1-pgsql \
        php7.1-redis \
        php7.1-soap \
        php7.1-xdebug \
        php7.1-xml \
        php7.1-zip \
        php7.1-gd \
        curl \
        git \
        htop \
        unzip \
        vim \
        wget

# misc commands and configs
RUN sed -i "s/;date.timezone =.*/date.timezone = UTC/" /etc/php/7.1/fpm/php.ini \
    && sed -i "s/;date.timezone =.*/date.timezone = UTC/" /etc/php/7.1/cli/php.ini \
    && echo "daemon off;" >> /etc/nginx/nginx.conf \
    && sed -i "s/www-data/root/g" /etc/nginx/nginx.conf \
    && sed -i -e "s/;daemonize\s*=\s*yes/daemonize = no/g" /etc/php/7.1/fpm/php-fpm.conf \
    && sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/" /etc/php/7.1/fpm/php.ini \
    && sed -i -e "s/#\sserver_names_hash_bucket_size\s64;/server_names_hash_bucket_size 128;/g" /etc/nginx/nginx.conf \
    && mkdir -p /var/www /etc/my_init.d /etc/service/nginx /etc/service/phpfpm /run/php

# php conf files
# xdebug
RUN rm -f /etc/php/7.1/fpm/conf.d/xdebug.ini /etc/php/7.1/cli/conf.d/xdebug.ini /etc/php/7.1/mods-available/xdebug.ini
COPY php/xdebug.ini /etc/php/7.1/mods-available/
# php-fpm pool
COPY php/x-custom.conf /etc/php/7.1/fpm/pool.d/

# composer
# Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
	&& php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
	&& php -r "unlink('composer-setup.php');"

# nginx conf files
COPY nginx/project.conf /etc/nginx/sites-enabled/project.conf
COPY nginx/x-custom.conf /etc/nginx/conf.d/

# services
COPY service-run/nginx.sh  /etc/service/nginx/run
COPY service-run/phpfpm.sh /etc/service/phpfpm/run

# startup scripts
COPY wait-for-it /var
COPY startup-scripts/* /etc/my_init.d/

# cronjob files
COPY cron-jobs/* /etc/cron.d/
RUN chmod -R 644 /etc/cron.d/

WORKDIR /var/www

# permissions and owner files changes
RUN chmod +x /etc/service/nginx/run \
    && chmod +x /etc/service/phpfpm/run \
    && chown -R root:root /var/log/nginx \
    && chown -R www-data:www-data .

EXPOSE 80

RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /etc/nginx/sites-enabled/default
