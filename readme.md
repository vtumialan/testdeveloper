API HTTP - Rotación de matriz NxN 90° (Antihorario)

Pasos para iniciar el proyecto.-

1.- Clonar el proyecto.

2.- Instalar las dependencias definidas en el composer.json, en la raíz del proyecto ejecutar el siguiente comando:

        composer install
    
3.- Iniciar el proyecto:

        php artisan serve


Endpoint.-

URL: http://localhost:8000/api/TestDeveloper

Type: POST

Example:

    Input: "[[1,2,3,4],[5,6,7,8],[9,10,11,12],[13,14,15,16]]"

	Output: "[[4,8,12,16],[3,7,11,15],[2,6,10,14],[1,5,9,13]]"
