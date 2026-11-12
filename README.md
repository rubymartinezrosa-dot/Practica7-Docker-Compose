# Práctica 7: Aplicación Web con Docker Compose

## Descripción
Aplicación web desarrollada en PHP que muestra un mensaje de Hola Mundo y se conecta a una base de datos MySQL utilizando Docker Compose.

## Tecnologías
- PHP 8.3
- Apache
- MySQL 8.4
- Docker
- Docker Compose

## Estructura
```text
Practica7-Docker-Compose/
├── src/
│   └── index.php
├── Dockerfile
├── docker-compose.yml
├── README.md
└── .gitignore
```

## Ejecutar el proyecto

1. Clonar el repositorio:
```bash
git clone https://github.com/rubymartinezrosa-dot/Practica7-Docker-Compose.git
```

2. Entrar a la carpeta:
```bash
cd Practica7-Docker-Compose
```

3. Iniciar los contenedores:
```bash
docker compose up -d --build
```

4. Abrir en el navegador:

http://localhost:8081

## Detener el proyecto
```bash
docker compose down
```

Proyecto académico – Práctica 7.