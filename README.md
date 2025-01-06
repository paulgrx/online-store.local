<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Online Store

## Requirements
- PHP 8.1+
- Laravel 10
- MySQL 8.0
- Node.js 18+

## Installation

### **1. Install dependencies**
Run in termninal:

```sh
sudo apt install mysql-server apache2
sudo apt update
sudo apt install curl php-cli php-mbstring git unzip
```
### **2. Clone project from GitHub**
```sh
cd /var/www   
sudo git clone https://github.com/paulgrx/online-store.local online-store.local
cd online-store.local
```
### **3. Setting Laravel**
```sh
cp .env.example .env
php artisan key:generate
php artisan migrate
```
### **4. Install Node.js and depedencies**
```sh
sudo apt install nodejs
npm install bootstrap
npm install
```
### **5. Build frontend**
```sh
npm run build
```
### **6. Run project**
```sh
php artisan serve
```
Now open http://127.0.0.1 in your browser. 
