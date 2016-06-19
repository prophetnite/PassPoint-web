# PassPoint-web
PassPoint - Windows credential auditing

--- After git clone ---
Update ./config/database.php
Create database 'homestead'
php artisan migrate
cp .env-example .env
php artisan key:generate
