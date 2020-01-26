## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

### 1) Clone this repo locally

### 2) cd into your Project

### 4) Install Composer Dependencie

### composer install

### 5) Install NPM Dependencies
npm install

or if you prefer yarn (as i do)
yarn

### 6) Create a copy of your .env file

cp .env.example .env

### 7) Generate an app encryption key

php artisan key:generate

### 8) Create an empty database for our application

Create an empty database for your project using the database tools you Prefer

### 9) In the .env file, add database information to allow Laravel to connect to the database

In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. This will allow us to run migrations in the next step.

### 10. Migrate the database

php artisan migrate

### 11) Now run Command to run Application

php artisan serve


### Register your self as a user and test URL below 

http://localhost:8000/admin

you will redirect to user dashboard

#### Now register your self as Admin and test URL below

http://localhost:8000/admin

you will see admin
