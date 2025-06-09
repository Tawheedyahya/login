1.using admin.lte for automatic login password
2.create a database _log
3.then dumbing the database log_.sql
4.go to the project directory in you terminal run this command
    composer install
5.then run this command
    cp .env.example .env
6.if key is not there run this command
    php artisan key:generate
also check your asset path my asset path is public
