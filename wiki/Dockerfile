FROM debian:jessie

ENTRYPOINT ["/entrypoint"]

RUN apt-get update -q &&\
    apt-get install -yq \
      wget \
      php5-fpm \
      imagemagick \
      vim

ENV DOKUWIKI_VERSION=2015-08-10a
# Verify the checksum since their SSL cert is invalid for HTTPS
ENV DOKUWIKI_SHA256SUM=98f0868c0cf9fc6664b57f89149fa537b73222bcc010247771e4afc08c8199fd

RUN cd /opt &&\
    wget http://download.dokuwiki.org/src/dokuwiki/dokuwiki-${DOKUWIKI_VERSION}.tgz &&\
    echo "$DOKUWIKI_SHA256SUM dokuwiki-${DOKUWIKI_VERSION}.tgz" | sha256sum -c - &&\
    tar -xf dokuwiki*.tgz &&\
    mv dokuwiki-${DOKUWIKI_VERSION} dokuwiki &&\
    chown www-data.www-data -R dokuwiki &&\
    rm dokuwiki*.tgz

EXPOSE 8888

RUN mkdir /wiki/ && cp -r /opt/dokuwiki/data /wiki/data
VOLUME ["/wiki"]

COPY local.php users.auth.php /opt/dokuwiki/conf/
VOLUME ["/opt/dokuwiki"]

COPY www.conf /etc/php5/fpm/pool.d/www.conf
COPY entrypoint /entrypoint
