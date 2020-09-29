Steps

Clone the repo
Setup MySQL database
Rename the .env.example to .env.
You can do so by running the following command mv .env.example .env

Fill the .env file
Run composer install

Run php artisan storage:link

Run php artisan jwt:secret

Generate the application key by running php artisan key:generate

Create the database structure by running php artisan migrate

Seed the database by running php artisan db:seed