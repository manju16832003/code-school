# Docker 


Remove all images

`docker rmi $(docker images -a -q)`

Stop and Remove all containers

```
docker stop $(docker ps -a -q)
docker rm $(docker ps -a -q)
```


## Docker Compose

### Execute command in docker

`docker-compose exec <SERVICE> <COMMAND>`

`docker-compose exec redis redis-cli`
