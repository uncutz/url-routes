#Docker Image: 
##PHP 8.0
##NGINX
##MySql
##PhpMyAdmin

###Ports

8081:80

8082:80

3306:3306


###Access:

-Seiten laden über:
"localhost:8081"

-Index.php in app/public legen

-Datenbank laden über:
"localhost:8082"


###Docker Instruction:

Docker Container starten:
```bash
$ docker-compose up
```
(im gleichen Ordner wie docker-compose.yml machen)


Docker Container herunterfahren:

```bash
docker-compose down
```


Docker Container bauen 

```bash
$ docker-compose build
```

oder

```bash
$ docker-compose up -d --build
```

(immer machen, wenn man etwas an Dockerfile oder der .yml macht)
 

Docker Images entfernen :
(die durch die Docekrfile geladen wurden)

```bash
docker-compose down --rmi all
```



