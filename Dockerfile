# Cria a imagem de PHP com Apache
FROM php:8.2-apache

# Executa atualização do container e instalação de alguns softwares
RUN apt-get update && apt-get upgrade -y && apt-get install -y wget

# Instalação de bibliotecas necessárias para correta utilização do Moodle
RUN apt-get install -y --no-install-recommends \
  libpq-dev \
  rsync \
  netcat-openbsd \
  libicu-dev \
  libz-dev \
  libjpeg-dev \
  libfreetype6-dev \
  libbz2-dev \
  libjpeg62-turbo-dev \
  gnupg \
  libpng-dev \
  libxslt-dev \
  gettext \
  unixodbc-dev \
  uuid-dev \
  ghostscript \
  libaio1 \
  libgss3 \
  locales \
  sassc \
  libmagickwand-dev \
  libldap2-dev \
  libzip-dev && \
apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Instala a extensão mysqli para docker
RUN docker-php-ext-install pdo pdo_pgsql

# Configura extensões do PHP apenas se não estiverem já ativas
RUN if ! php -m | grep -qi bcmath; then docker-php-ext-configure bcmath --enable-bcmath && docker-php-ext-install bcmath; fi
RUN if ! php -m | grep -qi soap; then docker-php-ext-configure soap --enable-soap && docker-php-ext-install soap; fi
RUN if ! php -m | grep -qi zip; then docker-php-ext-configure zip && docker-php-ext-install zip; fi

# O gd já está configurado com as opções padrão, então só instalar se necessário
RUN if ! php -m | grep -qi gd; then docker-php-ext-configure gd --with-freetype --with-jpeg && docker-php-ext-install gd; fi

# Instala outras extensões necessárias
RUN docker-php-ext-install opcache pgsql intl pcntl sockets ldap

# Instala extensões via PECL
RUN pecl install igbinary uuid xmlrpc-beta imagick && docker-php-ext-enable igbinary uuid xmlrpc imagick

# Limpeza final
RUN apt-get autopurge -y && apt-get autoremove -y && apt-get autoclean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Configura o arquivo php.ini para melhorar o desempenho do Moodle
RUN { \
  echo 'log_errors = on'; \
  echo 'display_errors = off'; \
  echo 'always_populate_raw_post_data = -1'; \
  echo 'cgi.fix_pathinfo = 1'; \
  echo 'session.auto_start = 0'; \
  echo 'upload_max_filesize = 500M'; \
  echo 'post_max_size = 150M'; \
  echo 'max_execution_time = 1800'; \
  echo 'max_input_vars = 5000'; \
  echo '[opcache]'; \
  echo 'opcache.enable = 1'; \
  echo 'opcache.memory_consumption = 128'; \
  echo 'opcache.max_accelerated_files = 8000'; \
  echo 'opcache.revalidate_freq = 60'; \
  echo 'opcache.use_cwd = 1'; \
  echo 'opcache.validate_timestamps = 1'; \
  echo 'opcache.save_comments = 1'; \
  echo 'opcache.enable_file_override = 0'; \
} | tee /usr/local/etc/php/conf.d/php.ini

WORKDIR /var/www/html

# Cria e configura o diretório de dados do Moodle
RUN mkdir /var/www/moodledata && \
    chmod 0770 /var/www/moodledata && \
    chown www-data:www-data /var/www/moodledata -R