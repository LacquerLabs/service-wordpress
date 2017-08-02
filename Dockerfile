FROM lacquerlabs/service-webapp:latest

# Wordpress Specific ENV Vars
ENV DB_CHARSET			utf8mb4
# ENV DB_COLLATE			""
ENV AUTH_KEY			setme_AUTH_KEY
ENV SECURE_AUTH_KEY		setme_SECURE_AUTH_KEY
ENV LOGGED_IN_KEY		setme_LOGGED_IN_KEY
ENV NONCE_KEY			setme_NONCE_KEY
ENV AUTH_SALT			setme_AUTH_SALT
ENV SECURE_AUTH_SALT	setme_SECURE_AUTH_SALT
ENV LOGGED_IN_SALT		setme_LOGGED_IN_SALT
ENV NONCE_SALT			setme_NONCE_SALT
ENV WP_DEBUG			false
ENV WP_TABLE_PREFIX		wp2_

# install database and other needed packages for wordpress
RUN apk --update --no-cache add php7-mysqli php7-zlib php7-imagick

# fix root path for nginx
RUN sed -i "s|.*root.*/app;|    root /app/wordpress;|i" /etc/nginx/conf.d/default.conf

# download and set the user/group pair for wordpress
ADD https://wordpress.org/latest.tar.gz .
COPY ./configs/wp-config.php /app/wordpress
RUN chown -R www-data:www-data /app/wordpress


