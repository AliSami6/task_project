# Laravel Role Permission Management System - Laravel `8.x` `9.x`

A task  managment project which manage Role, Permissions , Tasks and every actions of your Laravel application. 

```
Username - super@gmail.com
password - 12345678
```
> **Note:** Don't try to modify the Super Admin (Role & admin) data.

## Requirements:
- Laravel `8.x` | `9.7`
- Spatie role permission package  `5.5`




- Laravel `8.7` & PHP - `7.x`


## Project Setup
Git clone -
```console
git clone https://github.com/AliSami6/task_project.git
```

Go to project folder -
```console
cd task_project
```

Install Laravel Dependencies -
```console
composer install
```
. database sql file include in database->sql->task_management.sql
Create database called - `task_management`

Create `.env` file by copying `.env.example` file

Generate Artisan Key (If needed) -
```console
php artisan key:generate
```

Migrate Database with seeder -
```console
php artisan migrate:refresh --seed
```

Run Project not mendatory -
```php
php artisan serve
```


So, You've got the project of task Management on your http://127.0.0.1:8000/admin/login

## How it works
1. Login using Super Admin Credential -
    1. Username - `super@gmail.com`
    1. Password - `12345678`
2. Create Admin
3. Create Role
4. Assign Permission to Roles
5. Assign Multiple Role to an admin
6. Check by login with the new credentials.
7. Create task.
8. If you've not enough permission to do any task, you'll get a warning message.



