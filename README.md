# Laravel 9 with L5 Swagger package

## Requirements

- Docker
- Docker Compose

## Instalation

Download the repository:

```bash
git clone https://github.com/gabrielbs-dev/l5-swagger

cd l5-swagger
```

Run the container:

```bash
docker compose up -d --build
```

Access bash from the container:

```bash
docker exec -it [CONTAINER ID] bash
```

Install dependencies:

```bash
composer install
```

Adjust the files permissions:

```bash
chmod -R 775 ./
chown -R $USER:www-data ./
```