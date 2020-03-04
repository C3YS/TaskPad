# TaskPad
TaskPad is a [Laravel 6](https://laravel.com)-powered application developed as a a very basic example CRUD application.

# Features 
- [x] Simple user registration & authentication
- [x] Seeders for filling the database with demo information
- [x] Time tracking for user-created tasks

# Configuration & Usage

## Initial Configuration
```
# Clone the repository
git clone https://github.com/TheodoreBellas/TaskPad.git

# Copy over the example environment file
cd TaskPad
cp .env.example .env

# Download required composer packages
composer install

# Download required NPM packages
npm install    # alternatively, `yarn install` 

# Set Laravel's application key
php artisan key:generate
```

## Database Configuration
To run migrations, seeders, and other database interactions, you may need to update the `.env` file with your local database's information, as shown below:

```
DB_CONNECTION=mysql
DB_HOST=<Host, probably "localhost" or "127.0.0.1">
DB_PORT=<MySQL port, probably 3306>
DB_DATABASE=<MySQL database the application uses, probably "laravel">
DB_USERNAME=<MySQL user>
DB_PASSWORD=<MySQL user password>
```

## Migrations & Seeding
To run the initial migrations and create/seed the database tables, you can run:
```
php artisan migrate --seed
```
from the project's root directory. 

If you want to re-set it for any reason, you can run:
```
php artisan migrate:reset
```

The database seeders will seed only the data from files in the `database/seeds/json` directory, but should you want to add a larger amount of
Faker-generated data, there's a custom Artisan command to do so:
```
php artisan operations:create-demo-data
``` 

This command utilizes several model factories to generate users, customers, projects, tasks, and task logs with fake/nonsensical data. However, all info generated will maintain proper/accurate inter-model relationships.
 
## Compiling Front-End Assets
You can use the built-in Webpack mix file to (re-)compile front-end assets using `npm run dev` (or `yarn run dev`). To watch for changes, you can also replace `dev` with `watch-poll`.

## Serving the Application
You're more than welcome to set this application up inside of [`nginx`](https://www.nginx.com/) or [`httpd (Apache)`](https://httpd.apache.org/)- configuring [Laravel for both is well-documented](https://laravel.com/docs/6.x/installation#web-server-configuration)- but the quickest way to run the application locally is to use `artisan`'s `serve` command, as shown below:
```
php artisan serve --port=<desired port, 8080 by default>
```

Note that if you really need to use port `80`, elevated privileges will be required.

## Third-Party Components
I used a few other libraries/tools to provide some of the functionality seen in this app, such as:
- [jQuery 3.2](https://jquery.com/)
- [Bootstrap 4](https://getbootstrap.com/)
- [FontAwesome 5](https://fontawesome.com/)
- [DataTables 1.10](https://datatables.net/)
