# Contact-package for Laravel

## Send email and save to database - laravel package test

## Install Laravel first ..

### >> $composer create-project laravel/laravel appName
### >> $composer global require laravel/installer
### >> cd appName

## install package

### >> $composer require magna/contact

### >> 1. create database
### >> 2. edit .env file
### - set database connect
### - set SMTP email account

## After install

### (RootFolder)
### >> $php artisan vendor:publish
### ande next select number with package name magna\contact and enter

### >> $composer dump-autoload
### >> $php artisan migrate
### >> $php artisan serve
### open url route contact >> http://127.0.0.1:8000/contact

## Info

### after send data save this data to database and send email to two admins address
### admin address change in config file: contact.php - keys: (send_email_to and send_email_to2)
