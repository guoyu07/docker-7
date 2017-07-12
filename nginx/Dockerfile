FROM nginx:1.9.0

COPY nginx.conf        /etc/nginx/nginx.conf
COPY php.conf          /etc/nginx/php.conf
COPY fastcgi.conf      /etc/nginx/fastcgi.conf
COPY vhosts/*.conf    /etc/nginx/conf.d/
RUN mkdir /opt/log /opt/log/nginx
RUN chown -R www-data.www-data /opt/log

#EXPOSE 80
#VOLUME ["/opt"]
#docker build -t mickeyouyou/nginx ./nginx
#docker run -p 80:80 -v /Users/zongbao/dev:/opt -it mickeyouyou/nginx