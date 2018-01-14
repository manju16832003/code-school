# Docker 


Remove all images

`docker rmi $(docker images -a -q)`

Stop and Remove all containers

```
docker stop $(docker ps -a -q)
docker rm $(docker ps -a -q)
```
