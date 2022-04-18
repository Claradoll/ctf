FROM ctftraining/base_image_nginx_mysql_php_56

LABEL Author=Feng 

COPY src /var/www/html

RUN sh -c 'mysqld_safe &' \
    && sleep 5s \
    && mysql -e "source /var/www/html/db.sql;" -uroot -proot \
    && rm -f /var/www/html/db.sql 

ENV FLAG="flag{d3f0efbb7a81e0cfcc10ecbca54faf53}"

CMD ['unset','FLAG']


