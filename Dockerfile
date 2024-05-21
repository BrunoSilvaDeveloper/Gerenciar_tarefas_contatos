# Use a imagem oficial do PHP 8.3 com Apache
FROM php:8.3-apache

# Defina o ServerName para suprimir o aviso
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copie o conteúdo do projeto para o diretório padrão do Apache
COPY . /var/www/html/

# Conceda permissões adequadas aos arquivos do projeto
RUN chown -R www-data:www-data /var/www/html

# Exponha a porta 80 para o Apache
EXPOSE 80
