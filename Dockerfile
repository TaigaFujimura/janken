FROM --platform=linux/amd64 php:8.2-apache

RUN apt-get update && apt-get install -y \
  git \
  libonig-dev \
  vim \
  zip

COPY --from=composer /usr/bin/composer /usr/bin/composer
