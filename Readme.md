#Proyecto de laravel con debian#

## Episodio 5
Explicacion de rutas
Aplicar negrita a la vista de welcome
Funciones que se pueden poner dentro del return de las rutas

## Episodio 6

Cambiar welcome page
Agregar CSS
Crear alertas con JS

## Episodio 7
Agregar mas CSS
Primeros blog Posts

## Episodio 8
Agregar las rutas y archivos para obtener el contenido de los post de manera dinamica

## Episodio 9
Atrapar los errores posibles que puede tener una ruta, aprender de expresiones regulares

## Episodio 10
Utilizar cache para economizar recursos de peticiones al servidor

## Episodio 11
Utilizar clases para mejorar el codigo, de manera que encontrar los posts sea mas facil y no ensucie tanto el codigo de rutas
Utilizar el FileSystem para obtener de manera dinamica el numero y el contenido de los posts existentes
Introduccion a la metadata

## Episodio 12
Utilizar librerias externas para manejar metadata (Spazie YamlFrontMatter)
Utilizar collections para iterar y mapear de mejor manera

## Episodio 13
Sortear por fecha para acomodar los post
Cachear el resultado de los post para no hacer futuras peticiones al servidor de informacion constante

## Episodio 14
Introduccion a Blade
Diferentes sintaxis para mejorar el rendimiento del codigo

## Episodio 15
Introduccion e implementacion de layout files para facilitar el reciclaje de codigo en los views

## Episodio 16
Implementar un findOrFail para atrapar el error cuando una ruta de post no existe

## Episodio 17
Introduccion a la conexion a base de datos
Se cambian parametros en el archivo .env para poder conectar a nuestra instancia de MySql

## Episodio 18
Introduccion a las migraciones, estructura de la base de datos y rollbacks
Tip: Laravel bloquea las migraciones para limpiar la base de datos si el ambiente es de produccion
``` php artisan migrate:fresh ```

## Episodio 19
Introduccion a los modelos, creacion de usuarios e interaccion con tinker
Comandos como: 
```
    $user-> new User;
    $user -> save();
    $user -> Find::all();
```

## Episodio 20
Creacion de modelos y migraciones utilizando PHP artisan
```
php artisan make:migration create_posts_table
```

Crear modelo
```
php artisan make:model Post

```

## Episodio 21
Consultas a la base de datos para actualizar el primer post
```
$post = App\Models\Post::first();

$post->body = = new body;
$post->save();
```




