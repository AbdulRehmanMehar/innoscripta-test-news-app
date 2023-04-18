## News App

Fetches data from

-   NewYork Times
-   The Guardian
-   NewsAPI

### How to run?

-   Run `
docker run --rm \
-u "$(id -u):$(id -g)" \
-v "$(pwd):/var/www/html" \
-w /var/www/html \
laravelsail/php82-composer:latest \
composer install --ignore-platform-reqs`. For more info, visit https://laravel.com/docs/9.x/sail#installing-composer-dependencies-for-existing-projects
-   Rename `.env.example` to `.env`.
-   Run `docker compose up -d`.
-   Run `docker compose run laravel.test php composer install`
-   Run `docker compose down`

-   Run `./vendor/bin/sail up`. Backend will be accessible at `http://localhost:8000` and Frontend at `http://localhost:3000`
-   Run the migrations `./vendor/bin/sail artisan migrate`
-   Run the seeder `./vendor/bin/sail artisan db:seed`
-   Run the Scheduled Job to fetch news `./vendor/bin/sail artisan schedule:work`
