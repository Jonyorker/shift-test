FROM php:8.1-fpm

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libonig-dev \
    libzip-dev \
    libgd-dev
# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
#Mine

# Install extensions
#RUN docker-php-ext-install pdo_pgsql pgsql imagick mbstring zip exif pcntl xdebug pcov redis
#RUN docker-php-ext-configure gd --with-external-gd
#RUN docker-php-ext-install gd

ADD --chmod=0755 https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN install-php-extensions pdo_pgsql pgsql odbc pdo_sqlsrv sqlsrv imagick mbstring zip exif pcntl xdebug pcov redis

##Add repository ODBC and Install the Microsoft ODBC driver for SQL Server
#RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
#    && curl https://packages.microsoft.com/config/ubuntu/22.04/prod.list > /etc/apt/sources.list.d/mssql-release.list \
#    && apt-get update \
#    && apt-get install -y unixodbc-dev \
#    && ACCEPT_EULA=Y apt-get install -y msodbcsql17 \
#    && ACCEPT_EULA=Y apt-get install -y mssql-tools \
#    && apt-get install -y gcc musl-dev make
#
## Install the PHP drivers for Microsoft SQL Server
#
#RUN curl -O https://pear.php.net/go-pear.phar \
#     && php go-pear.phar

#RUN pecl channel-update pecl.php.net \
#    && pecl install sqlsrv pdo_sqlsrv \
#    && printf "; priority=20\nextension=sqlsrv.so\n" > /etc/php/8.1/mods-available/sqlsrv.ini \
#    && printf "; priority=30\nextension=pdo_sqlsrv.so\n" > /etc/php/8.1/mods-available/pdo_sqlsrv.ini \
#    && phpenmod -v 8.1 sqlsrv pdo_sqlsrv \
#    && pecl clear-cache \
#    && rm -rf /tmp/* /var/tmp/*

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]