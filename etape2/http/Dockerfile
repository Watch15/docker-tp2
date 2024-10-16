FROM nginx:alpine

RUN echo 'server { \
    listen 80; \
    root /usr/share/nginx/html; \
    index index.php index.html; \
    location / { \
        try_files $uri $uri/ /index.php?$args; \
    } \
    location ~ \.php$ { \
        include fastcgi_params; \
        fastcgi_pass php:9000; \
        fastcgi_index index.php; \
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name; \
    } \
}' > /etc/nginx/conf.d/default.conf

COPY src/ /usr/share/nginx/html/

EXPOSE 8080