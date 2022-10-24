# Proyecto de laravel con debian 
[Link de repositorio remoto](https://github.com/FabrizioSG/debian_laravel)
## Episodio 5
Explicacion de rutas  
Aplicar negrita a la vista de welcome  
Funciones que se pueden poner dentro del return de las rutas  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/c650006340d41f1f4dca740f49790da684109a41)

## Episodio 6

Cambiar welcome page  
Agregar CSS  
Crear alertas con JS   
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/d2902cc06d880b5f77699aa212a23b23ef32d2f1)
## Episodio 7
Agregar mas CSS  
Primeros blog Posts  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/df3ed2efe4e932c79e45ad0d42485ed71b0cedb2)

## Episodio 8
Agregar las rutas y archivos para obtener el contenido de los post de manera dinamica  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/200ea515547049d1bd6881f79db45b1d4711f30f)

## Episodio 9
Atrapar los errores posibles que puede tener una ruta, aprender de expresiones regulares  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/eac64ba672cb73522965b334e29a6f621560cdba)

## Episodio 10
Utilizar cache para economizar recursos de peticiones al servidor  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/cc45c560bae67c0c8337d0794a42a4758bf5c443)

## Episodio 11
Utilizar clases para mejorar el codigo, de manera que encontrar los posts sea mas facil y no ensucie tanto el codigo de rutas  
Utilizar el FileSystem para obtener de manera dinamica el numero y el contenido de los posts existentes  
Introduccion a la metadata  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/79aa4fa9f99602b1f3432443eb17d0a1359d69d0)

## Episodio 12
Utilizar librerias externas para manejar metadata (Spazie YamlFrontMatter)  
Utilizar collections para iterar y mapear de mejor manera  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/20d00f0b3ddc41965d7e17e9864e51805bdd91be)

## Episodio 13
Sortear por fecha para acomodar los post  
Cachear el resultado de los post para no hacer futuras peticiones al servidor de informacion constante  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/fdff148088ca954bc105bddaf3f6e8a0b5c1d38d)

## Episodio 14
Introduccion a Blade  
Diferentes sintaxis para mejorar el rendimiento del codigo  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/7ad8bbdc8765faf772030296ae4d3fea3d6ddcd6)

## Episodio 15
Introduccion e implementacion de layout files para facilitar el reciclaje de codigo en los views  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/8e594081f239fee43af314c6bc3883227fd44757)

## Episodio 16
Implementar un findOrFail para atrapar el error cuando una ruta de post no existe  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/98f4070c5d1f96c5aa6cb3b10498b8ab9d7fc94c)

## Episodio 17
Introduccion a la conexion a base de datos  
Se cambian parametros en el archivo .env para poder conectar a nuestra instancia de MySql  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/82cb0171c9c1f4e63a68fe0d65bd27f92ec427bc)

## Episodio 18
Introduccion a las migraciones, estructura de la base de datos y rollbacks  
Tip: Laravel bloquea las migraciones para limpiar la base de datos si el ambiente es de produccion
``` php artisan migrate:fresh ```  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/97ec6cbd584007df3386e12c7c0f15ed40f0377c)

## Episodio 19
Introduccion a los modelos, creacion de usuarios e interaccion con tinker  
Comandos como: 
```
    $user-> new User;
    $user -> save();
    $user -> Find::all();
```
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/efa895e9ab3cce5bb11c5d486178a166fc87887a)

## Episodio 20
Creacion de modelos y migraciones utilizando PHP artisan
```
php artisan make:migration create_posts_table
```

Crear modelo
```
php artisan make:model Post

```
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/d80ed467130aac00cd67aaefcb0f40d6b10b30a5)

## Episodio 21
Consultas a la base de datos para actualizar el primer post
```
$post = App\Models\Post::first();

$post->body = = new body;
$post->save();
```
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/81d89bfc929eb5ad457770046ce6aa59f8047a13)

## Episodio 22
Crear post con el siguiente codigo:
```
Post::create(['title'=>'My second post','excerpt'=>'Lorem Ipsum',
'body'=>'Lorem ipsum Lorem ipsum Lorem Ipsum']);
```

Agregar el $fillable en el modelo de Post para que el codigo anterior corra de manera correcta  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/3072dd97d2e53f4394d33dbfe7e48394c737d1a0)

## Episodio 23
Mejorar la busqueda del post mediante el cambio de enviar un ```Post $post``` en lugar de un ```$id``` en el request 
del Endpoint

```
Route::get('/posts/{post}', function (Post $post) {

    // $post = Post::findOrFail($id);

    return view('post',['post' => $post]);

});
```
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/039c20a90f8ffcf018be6cfc2887b55ebb054d4f)

## Episodio 24
Crear migracion y modelo para agregar categorias a los blog posts
```
php artisan make:model Category -m
```
Se crea una relacion entre cada post y categoria mediante una llave foranea llamada ```category_id``` en el modelo de *post*
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/9c5373bf2ab22aafb9f2d224d3f519484e1204a3)

## Episodio 25
Crear la relacion Post - Categoria pero desde el modelo de *Category* mediante este codigo:
```
public function posts(){
        
        return $this->hasMany(Post::class);
    }
```
Para poder consultar cada categoria y traer todos los posts que pertenecen  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/c6972f07b88761dfb3c4048bcfca185c156c613d)

## Episodio 26
Solucionar el llamado 'N+1 problem'  
Instalar la libreria 'Clockwork'
```
composer require itsgoingd/clockwork

```
Tambien se puede agregar la extension del navegador de manera opcional  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/adea97da2b5868d54e26bc7d033bce30712fb6ee)

## Episodio 27
Agregar creador de cada post mediante una relacion similar a cada post con su categoria  
Crear un seeder para poblar la base de datos de manera automatica
```
php artisan db:seed
```
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/dc8642b3df84c1bebf12147aa1621eae47e9752d)

## Episodio 28
Utilizar factories para crear contenido en la base de datos de manera aleatoria y de forma rapida
```
php artisan make:factory PostFactory
php artisan make:factory CategoryFactory
```
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/17a032e132a56ce8827f90ee2b1a5546fd0a9279)

## Episodio 29
Ver todos los posts relacionados al autor similar al proceso realizado con las categorias  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/3e8d5400a5c71f10486da15df28838ffee9ba6b9)

## Episodio 30
Solucionar el N+1 previamente detallado pero en las categorias de cada post mediante el siguiente codigo en Post
```
protected $with = ['category','author'];

```
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/ba2a485b6fedc4ea372de674d584557b32592c54)

## Episodio 31
Convertir el html y CSS a blade utilizando tambien el complemento de Tailwind, ademas de utilizar componentes para reutilizar codigo en las vistas.  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/e91b90aa49fb2de587497f5516f902e90b5ca5ab)

## Episodio 32
Inyectar la informacion de los posts de la pagina principal de manera dinamica  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/be6e3432de71fdfe14c525143b01bb5790ca7ff0)

## Episodio 33
Similar al episodio anterior, cargar los post en su pagina individual de manera dinamica  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/a880ca5b88716ebd0e95a88facb66872a1166673)

## Episodio 34
Hacer un dropdown para mostrar las categorias en el homepage utilizando JavaScript  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/d32d48af70b4618bfb89bcd2e30ff598e638c870)

## Episodio 35
Extraer el dropdown como un componente para reciclar ese codigo  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/7eba396b24d594da2bc38053939bf1a6e2a9b1ca)

## Episodio 36
Limpieza y mejoras de codigo  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/a460e934406dcc96441e114c61255de5a43b3bfc)

## Episodio 37
Funcion de busqueda   
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/cd5d22877f8454048f65d6fd90f6c2cfae43540d)

## Episodio 38
Mejorar funcion de busqueda de posts  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/4d2a86427ba559c12359080efcb331ee4e955ccd)

## Episodio 39
Mejorar el query similar a la busqueda de posts pero ahora por categoria  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/2d06e1bf5a32a7f9601c6162848fe017498f7772)

## Episodio 40
Extraer el codigo del dropdown de categorias en su propio componente para mejorar aun mas y limpiar el codigo de las vistas  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/d63c3e807f36d7bfe6528ecde676b18f1f621547)

## Episodio 41
Implementar un filtro por autor  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/31bac13c2f6f2ca2454e8db7fc70533d0992177d)

## Episodio 42
Unir el filtro para categoria y busqueda de texto  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/aa4c0b54302761df8e0d293b33dc74b3448271e1)

## Episodio 43
Arreglar un pequeno bug en las busquedas  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/8ab7da31b0dc557317bfc4e600f0802d5d9147e1)

## Episodio 44
Paginar la informacion que se muestra en las vistas cuando son muchos posts  
Hacer codigo de vendors publico para poder actualizar o cambiar vistas  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/0e2fe31b1abb17754571952a9a51e4c89558b22c)

## Episodio 45
Implementar una pagina de registro de usuario, autenticacion, autorizacion  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/7f0e8f8c86388e8eed71fa87d408b36bcea6aca9)

## Episodio 46
Hashear las contraseñas para guardarlas de manera segura en la base de datos  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/d7e653e4a9d276a6d6fb5b2526dc1d84ca84ad1f)

## Episodio 47
Implementar validacion de errores y mensajes de error  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/da11e752999d673a88c9a3a50c246710850dbf56)

## Episodio 48
Mostrar un mensaje de exito flash cuando el registro es completado de manera exitosa  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/a8ef9c6e1527eec1e097af7e3693d60d910f7262)

## Episodio 49
Implementar la funcion de iniciar y cerrar sesion  
Introduccion al middleware  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/9260affcb805fc4e94991c2727c43f25990f935a)

## Episodio 50
Crear la vista de inicio de sesion y manejar los posibles errores de validacion  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/d7dc7ff02654ab55985a9bd0ac77a2a74cdf559b)

## Episodio 51
Demo de laravel breeze, una libreria de autenticacion que genera las vistas y toda la logica relacionada con autenticacion y autorizacion de usuarios  
[Laravel breeze](https://laravel.com/docs/9.x/starter-kits#laravel-breeze)
``` composer require laravel/breeze --dev
php artisan breeze:install
 
php artisan migrate
npm install
npm run dev
```
## Episodio 52
Se crea un componente para agregar comentarios a la vista de post  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/d729872f0dcefee2296a9a24c2488cae7ff2ba54)

## Episodio 53
Se crea la tabla asignada a comentarios, ademas se introduce una nueva forma de relacionar las tablas post y users con comentarios  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/713f2978a126c103611cd2ea03a92abd203d885e)

## Episodio 54
Mostrar los comentarios de manera dinamica para su respectivo post  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/4d5fd5f0935ea96933564288a8639e0b0e0b574e)

## Episodio 55
Crear el form que permitira a los usuarios que tengan una sesion activa crear comentarios para un post  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/68e323cd3c5c2aa79300298fd628f5baacf12f68)

## Episodio 56
Utilizar el form previamente creado para guardar el comentario escrito por el usuario  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/616e5aa37ecb68f575fd2f882132b0efa69adf01)

## Episodio 57
Limpieza de codigo y extraccion de algunos componentes para mejorar el codigo de las vistas  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/d3fddb24e299569b67f6fcd0f423c68968f228cb)

## Episodio 58
Implementar mailchimp como servicio de correos  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/abed312e25ce942bc1671c737e16bca0af2e0e75)

## Episodio 59
Activar el form para poder suscribirse al servicio de newsletter  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/1841ee350b8e8d07fcffc0825ff5bd853130e308)

## Episodio 60
Crear un controlador y un servicio para el newsletter para limpiar el codigo en rutas  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/a876ac5a8f277846d6d22d00d4163202bf418363)

## Episodio 61
Se introducen varios conceptos como service containers, php interfaces y registration bindings.  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/de6a7dca1548673d2b4a4f3ca8caf83b1bd4db3f)

## Episodio 62
Se implementa la creacion de una seccion para administradores que permita realizar acciones como crear posts mediante una interfaz en la web  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/60d9b093d82b52315c6ec8b86530d0cc59e15365)

## Episodio 63
Se crea la vista para crear un post en la seccion para administradores  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/6669800f346206669e8f374a2e3e0d7ac84736dc)

## Episodio 64
Implementar la funcion de agregar una miniatura para los posts  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/93d97af4c6aa359b3fb7cbe148d518df98dc6c79)

## Episodio 65
Extraer algunas piezas de codigo como componentes para mejorar la eficacia del codigo de las vistas   
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/76d0f4e149bf332521ef27e5d9f0c9ee5b34e6ae)

## Episodio 66
Se extiende el layout de la pagina de administrador para tener una barra de navegacion al lado  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/99e490e827c90e24f9d4ada0b6467ea593ca1c7d)

## Episodio 67
Agregar la funcion de editar y borrar posts desde el menu de administrador  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/a7f14e4c81ef649ae6e38c541135f4a4ce92c28d)

## Episodio 68
Agrupar la logica de validacion aparte en el controlador del administrador para mejorar la eficiencia del codigo  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/b99aaaaa2320debb0a75e628f3e2f84198ab3b5e)

## Episodio 69
Cambios en autorizacion para que usuarios que NO son administradores no puedan ver las secciones unicas para admins  
[Codigo](https://github.com/FabrizioSG/debian_laravel/commit/cd436b023ef2943f1446220e97cfa6a0f90807bf)

## Episodio 70
Conclusion del curso y next steps
