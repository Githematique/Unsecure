# Unsecure

## Installation

**1.** First, clone the project :
```bash
$ git clone https://github.com/Githematique/Unsecure.git
```

**2.** Next, open file `docker-compose.yml` and change line 24 to add your project path (all before the « **:** »).

**3.** Now, place you in your project directory and run this commands (to build and start docker containers) :
```bash
$ docker-compose build
$ docker-compose up
```

**4.** Then, open your project at [localhost:8080](http://localhost:8080/)


## How it works?

Have a look at the `docker-compose.yml` file, here are the `docker-compose` built images:

* `db`: this is the MySQL database container,
* `php`: this is the PHP-FPM container in which the application volume is mounted,
* `nginx`: this is the Nginx webserver container in which application volume is mounted too,
* `elk`: this is a ELK stack container which uses Logstash to collect logs, send them into Elasticsearch and visualize them with Kibana.

This results in the following running containers:
```bash
$ docker ps -a
CONTAINER ID        IMAGE               COMMAND                  CREATED              STATUS              PORTS                    NAMES
e39a9ad49c48        mysql               "docker-entrypoint..."   About a minute ago   Created                                      unsecure_db_1
42a19350d45c        redis:alpine        "docker-entrypoint..."   About a minute ago   Up About a minute   0.0.0.0:6379->6379/tcp   unsecure_redis_1
```

_**For all problems, create an issue or a pull request.**_
