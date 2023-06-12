FROM php:8.2

WORKDIR /var/www/html

COPY . /var/www/html

EXPOSE 8005

CMD ["php", "-S", "0.0.0.0:8005"]

# build
# docker build -t farofapereira/kubernetes-hello-php .
# push to docker hub
# docker push farofapereira/kubernetes-hello-php
# run
# docker run --rm -p 8005:8005 farofapereira/kubernetes-hello-php