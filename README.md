## Descripción

API de Georesearch para la obteción de Puntos de Interés.

## Instalación

	git clone https://github.com/benjaminarteaga/georesearch-api.git
	cd georesearch-api
	cp .env.example .env
	composer install

## Configuración

Dentro del archivo `.env` cambiar los valores de las siguientes variables:

	DB_HOST=(URL Host DB)
	DB_USERNAME=(USER DB)
	DB_PASSWORD=(PASSWORD DB)

## Disponibilizar

En la raíz del proyecto ejecutar el siguiente comando para levantar el server:

	php artisan serve --port=3010