FROM ctftraining/base_image_nginx_php_56

LABEL Author=Feng

COPY ./source /var/www/html

RUN chown -R www-data:www-data /var/www/ \
    && echo "flag{a9542bb104fe3f4d562e1d275e03f5ba}">/flag \
    && echo "flag{a9542bb104fe3f4d562e1d275e03f5ba}">/var/www/html/fffffffffffffflag.php \
    && echo '<?php include "SSRF.php"?>'>/var/www/html/index.php
