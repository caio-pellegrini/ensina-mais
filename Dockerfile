# --- Estágio 1: Build de Assets (Node.js) ---
FROM node:20-alpine AS assets-builder
WORKDIR /app
COPY package*.json ./
RUN npm ci
COPY . .
RUN npm run build

# --- Estágio 2: Aplicação (PHP + Nginx) ---
FROM php:8.3-fpm-alpine

# Instalar dependências de sistema e extensões PHP necessárias para o Laravel + Postgres
RUN apk add --no-cache \
    nginx \
    postgresql-dev \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    git

RUN docker-php-ext-install pdo_pgsql pgsql gd zip bcmath intl

# Configurar diretório de trabalho
WORKDIR /var/www/html

# Copiar os arquivos do projeto
COPY . .
# Copiar os assets compilados no Estágio 1
COPY --from=assets-builder /app/public/build ./public/build

# Instalar dependências do Composer (Otimizado)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Ajustar permissões para o Laravel (crucial!)
RUN chown -R www-data:www-data storage bootstrap/cache

# Copiar a configuração personalizada do Nginx
COPY ./docker/default.conf /etc/nginx/http.d/default.conf

# Expor a porta 80
EXPOSE 80

# Script de inicialização: roda migrações, limpa cache e sobe os serviços
CMD ["sh", "-c", "php artisan migrate --force && php artisan config:cache && php artisan route:cache && php artisan view:cache && php-fpm -D && nginx -g 'daemon off;'"]
