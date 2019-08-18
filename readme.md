# VH Coding challenge

## Run the dev environment
The different required services are described in a docker-compose file. So, install `docker` and `docker-compose`, run `docker-compose up -d` and you're good to go :)

### Initialize the database
The first time you start your environment, you will need to run the database migrations to create needed tables.

Run an interactive bash on the app container :
```bash
docker-compose exec app bash
``` 

Run database migrations :
```bash
php artisan migrate
``` 
Now, go to http://127.0.0.1:8000/ to add qustions and answers !

## Interact with different containers
To interact with different containers, you will need to execute an interactive bash on the container. Use this command :
```bash
docker-compose exec $service_name bash
``` 

`$service_name` is one of `app`, `db`, `webserver` (see docker-compose.yml file).

More on this [here](https://github.com/HLNaima/Docker-compose-laravel-nginx-mysql.git).

## Requirements met so far !
1. The website **must** be built using Laravel and MySQL.
2. The forms **must** be validated. If a form fails validation, it must stay populated, rather than getting reset.
  * Question validation:
    * Required
    * Minimum length: 5
    * Ends with a question mark ("?")
  * Answer validation:
    * Required
    * Minimum length: 5
3. The list of questions **must** be sorted from **newest to oldest**.
4. A question's list of answers **must** be sorted from **oldest to newest**.
5. Use Bootstrap, no custom styles.

## To do next
1. The textarea/input for questions **must** display a random question for the placeholder. The random questions are up to you to write! Feel free to have fun with it.
2. Try a different design that is not a copy of the provided example.
3. Host the demo somewhere.