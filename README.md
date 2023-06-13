
![Logo](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)



# BVN Verify

This is my solution to SageCapital technical task for the Full-stack Engineer role.

The project was built with laravel and mysql. 
I used SMTP4Dev as the test mail server


## Installation

Clone the repo and run the following commands

```bash
  
  cd my-project
```
    
## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`YOU_VERIFY_API_KEY`


## Run Locally

__Install dependencies__

if composer is not installed, install it with the command below 

__composer for mac using homebrew__
```bash
brew install composer
```

__composer for windows__
```bash
#!/bin/sh

EXPECTED_CHECKSUM="$(php -r 'copy("https://composer.github.io/installer.sig", "php://stdout");')"
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
ACTUAL_CHECKSUM="$(php -r "echo hash_file('sha384', 'composer-setup.php');")"

if [ "$EXPECTED_CHECKSUM" != "$ACTUAL_CHECKSUM" ]
then
    >&2 echo 'ERROR: Invalid installer checksum'
    rm composer-setup.php
    exit 1
fi

php composer-setup.php --quiet
RESULT=$?
rm composer-setup.php
exit $RESULT
```

__Install PHP__

__Install php for mac__
```bash
brew install php
```

__Install PHP for windows__

Visit : https://www.geeksforgeeks.org/how-to-install-php-in-windows-10/


__Install Docker__

Visit and download the appropriate version for your system

## 

__Clone the project__

```bash
  git clone git@github.com:MrGiddz/TailwindBVNProject.git
```

Go to the project directory

```bash
  cd TailwindBVNProject
```

```bash
  composer install
```

```bash
  npm install
```

Start docker yml

Ensure docker is running on your pc then run the following command in your terminal

```bash
docker compose -f docker-compose.yml up
```

```bash
php artisan migrate
```

## 

__SMTP runs on port 25__

__MYSQL runs on port 3316__

Access the mail server on http://localhost:3000

Check the .env file and add appropriate values for individual services

## 

Start vite for tailwind compilation with
```bash
  npm run dev
```

Finally Start the Server
```bash
php artisan serve
```

