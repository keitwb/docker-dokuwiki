FROM debian:jessie

ENTRYPOINT ["/entrypoint"]
EXPOSE 80
EXPOSE 443

# Install prerequisites
RUN apt-get update -q && \
    apt-get -yq install nginx openssl vim && \
    apt-get autoremove -yq && apt-get clean

COPY nginx.conf /etc/nginx/nginx.conf
COPY nginx_site.conf /etc/nginx/sites-enabled/dokuwiki

COPY entrypoint /entrypoint
