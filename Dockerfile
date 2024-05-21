# Use a imagem oficial do PHP 8.3 com Apache
FROM php:8.3.7-apache

# Copie o conteúdo do projeto para o diretório padrão do Apache
COPY . /var/www/html/

# Conceda permissões adequadas aos arquivos do projeto
RUN chown -R www-data:www-data /var/www/html

# Instalar dependências adicionais do PHP, se necessário
# RUN docker-php-ext-install mysqli

# Exponha a porta 80 para o Apache
EXPOSE 80
