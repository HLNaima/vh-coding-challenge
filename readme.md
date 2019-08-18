# VH Coding challenge

## Run the dev environment
The different required services are described in a docker-compose file. So, install `docker` and `docker-compose`, run `docker-compose up -d` and you're good to go :)

To interact with different containers, you will need to execute an interactive bash on the container. Use this command :
```bash
docker-compose exec $service_name bash
``` 

`$service_name` is one of `app`, `db`, `webserver` (see docker-compose.yml file).
