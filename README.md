
![Logo](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)



# BVN Verify

This is my solution to SageCapital technical task for the Full-stack Engineer role.

The project was built with laravel and mysql. 
I used SMTP4Dev as the test mail server


## Installation

Clone the repo and run the following commands
    
## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`YOU_VERIFY_API_KEY`

__SMTP ENVIRONMENT VARIABLE__
```bash
  MAIL_MAILER=smtp
  MAIL_HOST=localhost
  MAIL_PORT=25
  MAIL_USERNAME={put any username}
  MAIL_PASSWORD={put any password}
  MAIL_ENCRYPTION=tls
  MAIL_FROM_ADDRESS={put any email address}
  MAIL_FROM_NAME="${APP_NAME}"
```

__MYSQL ENVIRONMENT VARIABLE__
```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3316
  DB_DATABASE=bvnverfiy
  DB_USERNAME=root
  DB_PASSWORD=root123@
```

__YOU_VERIFY_API_KEY__
```bash
 YOU_VERIFY_API_KEY={API_KEY}
```


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

https://docs.docker.com/desktop/

## 

__Clone the project__

```bash
  git clone git@github.com:MrGiddz/TailwindBVNProject.git
```

Go to the project directory

```bash
  cd TailwindBVNProject
```

Install composer dependencies

```bash
  composer install
```

install npm dependencies

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

## Additional Documentations

__Laravel 10__: https://laravel.com/docs/10.x

__Docker__: https://docs.docker.com/desktop/

__smtp4dev__: https://github.com/rnwood/smtp4dev