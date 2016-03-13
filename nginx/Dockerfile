FROM nginx:1.9.11

ENTRYPOINT ["/entrypoint"]
EXPOSE 80

RUN rm /etc/nginx/conf.d/default.conf
COPY nginx_site.conf /etc/nginx/conf.d/dokuwiki.conf

COPY entrypoint /entrypoint
