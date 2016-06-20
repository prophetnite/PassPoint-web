# PassPoint-web
PassPoint - Windows credential auditing

--- Configuration/ Installation ---
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

composer install
composer update

cp .env-example .env
php artisan key:generate

Update ./config/database.php
Create database 'homestead'
php artisan migrate

chgrp -R www-data /var/www/laravel
chmod -R 775 /var/www/laravel/app/storage


--- if swap/memory is issue ---
dd if=/dev/zero of=/swapfile bs=1024 count=512k
mkswap /swapfile
swapon /swapfile

Should you have additional issues server tweaks may need to be made.
Review https://www.digitalocean.com/community/tutorials/how-to-install-laravel-with-nginx-on-an-ubuntu-12-04-lts-vps

I have found it to be quite helpful.