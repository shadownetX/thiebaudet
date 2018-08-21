## THIEBAUDET

**Requirements:**

* Docker: https://www.docker.com/get-docker
* Docker-compose: https://docs.docker.com/compose/gettingstarted/

> You could use ```ctop``` for monitoring docker containers.
>
>```sudo wget https://github.com/bcicen/ctop/releases/download/v0.7/ctop-0.7-linux-amd64 -O /usr/local/bin/ctop```
>
>```sudo chmod +x /usr/local/bin/ctop```

**About this stack:**

* **[nginx:1.13-alpine]** :  Use ```http://localhost/``` to access the website or use ```http://thiebaudet.vonp``` with this configuration : ```sudo sh -c "echo '127.0.0.1   terraqueus.dev' >> /etc/hosts"```
* **[php:7.2-fpm-alpine]** 
* **[redis:4-alpine]** Check "About: Redis" section.
* **[node:9-alpine]** Check "About: Symfony 4 - Encore" section.

### Manipulate containers

| **For short** | **Custom command**                  | **Purpose**                          |
|---------------|-------------------------------------|---------------------------------------|
| BUILD         | ```bin/docker build```              | Build the app                         |
| RUN           | ```bin/docker run```                | Run the app                           |
| STOP          | ```bin/docker stop```               | Stop the app                          |
| DESTROY       | ```bin/docker destroy```            | Destroy the app                       |
| INSTALL       | ```bin/docker install```            | Initialize the app                    |
| EXPELLIARMUS  | ```bin/docker expelliarmus```       | Prune docker env                      |
| AVADAKEDAVRA  | ```bin/docker avadakedavra```       | Stop then destroy containers + images |

### Access to containers

| **For short** | **Custom command**                    | **Purpose**                                            |
|---------------|---------------------------------------|--------------------------------------------------------|
| EXEC-PHP      | ```bin/docker exec-php [ARGS]```      | Execute a command inside the php container             |
| EXEC-ROOT     | ```bin/docker exec-php-root [ARGS]``` | Execute a command as ROOT inside the php container     |
| EXEC-NODE     | ```bin/docker exec-node [ARGS]```     | Execute a command inside the nodejs container          |
| BASH          | ```bin/docker bash```                 | Access /bin/bash or sh (alpine)                        |
| COMPOSER      | ```bin/docker composer [ARGS]```      | Execute composer                                       |
| SYMFONY       | ```bin/docker console [ARGS]```       | Execute Symfony's console (bin/console)                |

### Informations about containers

| **For short** | **Custom command**                           | **Purpose**                           |
|---------------|----------------------------------------------|---------------------------------------|
| PS            | ```bin/docker ps```                          | List all running containers           |

##### About: [Redis](https://redis.io/)

Check configuration using : ```docker-compose exec redis redis-cli ping```.
It should display ```PONG```!

##### About: [Symfony 4 - Encore](https://symfony.com/doc/current/frontend.html)

| **usage**      | **env**        | **commands**                                                                                  | **On start** |
|----------------|----------------|-----------------------------------------------------------------------------------------------|:------------:|
| encore         | dev            | ```bin/docker exec-node node_modules/.bin/encore dev```                                       | n            |
| encore         | continuous dev | ```bin/docker exec-node node_modules/.bin/encore dev --watch --watch-aggregate-timeout 100``` | **Y**        |
| encore         | prod           | ```bin/docker exec-node node_modules/.bin/encore production```                                | n            |