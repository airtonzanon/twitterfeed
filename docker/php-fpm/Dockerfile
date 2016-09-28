FROM phpdockerio/php7-fpm:latest

RUN apt-get update \
    && apt-get -y --no-install-recommends install  php7.0-pgsql php7.0-gd \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*


WORKDIR "/var/www/twitterfeed"
