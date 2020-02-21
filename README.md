# docker-study
 Let's learn docker

### Dockerfile Build
`docker build -t [OPTION] PATH URL`  
`docker build -t username/imagename:1.0 Dokcerfile .`

### docker image run
`docker run [OPTIONS] IMAGE`
`docker run -dit --name container_name image`  

### 컨테이너 시작
`docker start [Container]` 

### 실행 중인 컨테이너에 로컬 표준 입력, 출력
`docker attach [Container]`

### 실행 중인 컨테이너에서 명령 실행  
`docker exec -it [Container] /bin/bash`

### docker compose 실행
`docker-compose up -d`

### laravel
`laravel`  
`laravel new [project name]`  
`php artisan serve --host [ip] --port [port]`