# Contact-package for Laravel

## Send email and save to database - laravel package test

## Install Laravel first ..
### >> $composer create-project laravel/laravel appName
### >> cd appName

## Before install package:

### >> 1. create database
### >> 2. edit .env file
### - set database connect
### - set SMTP email account

## install package

### run command >> $composer require magna/contact

## After install

### (RootFolder)
### run command >> $php artisan migrate
### run command >> $php artisan serve
### open url route contact >> http://127.0.0.1:8000/contact

## Info

### after send data save this data to database and send email to two admins address
### admin address change in config file: contact.php - keys: (send_email_to and send_email_to2)

