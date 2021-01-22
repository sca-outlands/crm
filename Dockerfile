# Outlands CiviCRM docker build

FROM drupal:8.9-apache

MAINTAINER Graf Iohann der Vuhs

# Add some necessary utilities
RUN \
  apt-get update && apt-get -y install vim git patch

RUN \
  apt-get update && apt-get install -y libicu-dev \
  && docker-php-ext-install intl \
  && docker-php-ext-enable intl \
  && docker-php-ext-install mysqli \
  && docker-php-ext-enable mysqli

# Add CV - CiviCRM cli
RUN \
  curl -LsS https://download.civicrm.org/cv/cv.phar -o /usr/local/bin/cv \
  && chmod +x /usr/local/bin/cv

COPY ./etc/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Set the default working directory
VOLUME ["/var/www/html"]
WORKDIR /var/www/html/

# Override any previous entrypoint
CMD ["/entrypoint.sh"]


