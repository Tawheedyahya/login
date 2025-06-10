1.clone

2.create a database _log

3.then dumbing the database log_.sql

4.go to the project directory in you terminal run this command
    composer install

5.then run this command
    cp .env.example .env

6.if key is not there run this command
    php artisan key:generate
    also check your asset path my asset path is public

7.check .env
    DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=log_
DB_USERNAME=root
DB_PASSWORD=

8.then important one i can set only one admin if role==0 tha user is admin
  so create admin to run this command
  
    php artisan db:seed -class='UserSeeder'




