# formas
Ejercicio de modelado de clases para GeoPagos

El framework elegido para este ejercicio es Laravel 5.5
Para ver las clases en funcionamiento deben hacer una instalacion de laravel 5.5 utilizando composer:
<ol>
  <li>Ejecutar el comando<br>
    <code>composer create-project --prefer-dist laravel/laravel geopagos</code>
  </li>
  <li>Crear el  directorio packages dentro del directorio geopagos</li>
  <li>Copiar el directorio robertlopez dentro del directorio packages</li>
  <li>
    Modificar la seccion psr-4 del archivo geopagos/composer.json para que quede como sigue<br>
    <code>
        "psr-4": {
            "App\\": "app/",
            "robertlopez\\Formas\\": "packages/robertlopez/Formas/src"
        }
    </code>
  </li>
  <li>Ejecutar el comando<br>
    <code>composer dump-autoload</code>
  </li>
  
 Una demostracion de generacion de formas en tiempo de ejecucion a peticion del usuario se puede ver en la ruta
  goepagos/public/test
  
Una demostracion de las respuestas de todos los metodos de las formas se puede ver en la ruta
  geopagos/public/formas
  
