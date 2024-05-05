FROM php:8.2
COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt update
RUN apt install -y git unzip

RUN mkdir /var/app
RUN useradd -ms /bin/bash tester
RUN chown tester:tester /var/app

USER tester
WORKDIR /var/app

ADD src /var/app/src
ADD tests /var/app/tests
ADD composer.json /var/app
ADD composer.lock /var/app

RUN composer install
CMD ["vendor/bin/phpunit", "tests"]
