FROM ctftraining/base_image_nginx_php_56

LABEL Author=Feng

ENV FLAG flag{1030f2aec488f1310f74b041529e686e}

COPY ./src /var/www/html
COPY flag /

RUN echo $FLAG  > /flag \
    && chmod -R 777 /var/www/html/upload
