<h1>Multi user login with Laravel</h1>
Created with laravel 6.5, this application allow user register and login in their accounts, seeing pages restricted only for users. It is possible to create admin users that have access to restrict admin pages to the control of the system. The admin page can not be access by the ordinary. This application is a base for a multi user web application.
To access the admin page you need to create an user with tinker of some else generating a hash password with Hash:make('your_password') to the system authenticate your password and you have access to the admin painel. The general configuration to this project, like any other in lavavel >= 6.0 it is necessary to execute the following commands:
'''console
composer install
composer require laravel/ui
php artisan make:auth
php atisan migrate
'''
Also you need to change the .env file to configure your database name.
