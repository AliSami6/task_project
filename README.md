# Laravel Role Permission Management System - Laravel `7.x` `9.x`

A task managment project which manage Role, Permissions , task , and every actions of your Laravel application. A complete solution for Role based Access Control in Laravel.


Username - superadmin@gmail.com
password - 12345678
```
> **Note:** Don't try to modify the Super Admin (Role & admin) data.

## Requirements:
- Laravel `8.x` | `9.7`
- Spatie role permission package  `5.11`
- Laravel ui  `3.x`




- Laravel `8.7` & PHP - `7.x`


## Project Setup
Git clone -
```console
git clone https://github.com/AliSami6/task_management.git
```

Go to project folder -
```console
cd task_management
```

Install Laravel Dependencies -
```console
composer install
```

Create database called - `task_management`

Create `.env` file by copying `.env.example` file

Generate Artisan Key (If needed) -
```console
php artisan key:generate
```

Migrate Database with seeder -
```console
php artisan migrate --seed
```

Run Project -
```php
php artisan serve
```

Since, there is any problem to seeder, Please import the .sql file directly - https://github.com/AliSami6/task_management/blob/master/database/sql/task_management.sql

So, You've got the project of Laravel Role & Permission Management on your http://localhost:8000

## How it works
1. Login using Super Admin Credential -
    1. Username - `superadmin@gmail.com`
    1. Password - `12345678`
2. Create Admin
3. Create Role
4. Assign Permission to Roles
5. Assign Multiple Role to an admin
6. Check by login with the new credentials.
7. If you've not enough permission to do any task, you'll get a warning message.

## Learn More & Discussion
https://www.allphptricks.com/simple-laravel-10-user-roles-and-permissions/?fbclid=IwAR17TwT7Tt3RSz6VYXKmWBSEPXxKbPrYOVuy78k-VYccyfoA8Vcup9TG1Rc



## Wanna talk with me
Please mail me at - alisamicse320@gmail.com

