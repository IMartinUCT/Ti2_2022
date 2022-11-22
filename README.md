# Generador de reportes
UCT 2022


## Que buscamos con el proyecto

- Crear una aplicacion que sea lo mas intuitiva. 
- Lograr facilitar el uso de un generador de reportes al usuario.
- Automatizacion del labor de los contadores.
- Guardar los reportes en distintos formatos (excel, json, pdf).
- Múltiples plataformas donde se podrá usar la aplicación!.
- Personalización de los reportes dinámicos.


## Fase de instalación
Para instalar este proyecto se tendrá que usar:

```bash
  - Microsoft SQL Server.
  - Laravel.
  - PHP 7.
  - Un IDE de preferencia.
```

## SQL Server


Descagamos SQL Server de su pagina oficial ```https://go.microsoft.com/fwlink/p/?linkid=2216019```, una vez abierto nos saldrán 3 opciones, Básica, Custom, Media, nosotros instalamos la configuración básica aceptamos los términos y condiciones, designaremos la ruta a donde queremos el programa y le daremos a instalar. Una vez finalizada la instalación clickeamos save. 
Ahora debemos  instalar la interfaz gráfica de su pagina oficial ```https://aka.ms/ssmsfullsetup``` una vez instaldo nos saldrá una ventana la cual contendrá la ruta a donde queremos instalar, y daremos a instalar.

## Xampp y php 7.4

Descargamos Xampp de su página oficial ```https://www.apachefriends.org/download.html```, una vez abierto nos dara un advertencia, la cual deberemos aceptar posteriormente nos abrirá al instalador apretaremos los botones que diga siguiente, llegará un punto donde nos pedirá la ruta de instalación a la cual nosotros lo dejaremos por defecto y mas adelante nos pedirá seleccionar un idioma a elección y por ultimo le daremos a instalar y comenzará la instalación.

## Composer

Primero descargaremos Composser de su pagina oficial ```https://getcomposer.org/Composer-Setup.exe```, una vez ejecutado haremos click a instalar para todos los usuarios, se nos abrirá otra ventana y le daremos a siguiente, seleccionamos la ruta de php le daremos click a la casilla que dice agregar el php a la ruta y siguiente, nos preguntará por un proxy lo ignoramos y aprendamos siguiente por último apretamos el botón de instalar y se comenzará la descarga. 

## Laravel

Abrimos la consola, ingresamos el siguiente comando ```composer global require "laravel/installer=~1.1"``` 
![command](https://media.discordapp.net/attachments/1007703019128881246/1044404521142583428/image.png?width=506&height=74)
![install](https://media.discordapp.net/attachments/1007703019128881246/1044405071909232740/image.png?width=279&height=473)
y empezará la descarga de las dependencias. Comprobaremos la instalación con ```laravel -v```.
![version](https://media.discordapp.net/attachments/1007703019128881246/1044594433401827389/image.png?width=201&height=39) 

##
Primero que todo se tendrán que descargar los programas referenciados, luego de realizar la instalación,
tendremos que clonar el proyecto, esto se puede hacer mediante SSH, GitHub Desktop o directamente desde la página.

Terminado eso, procedemos a crear un nuevo proyecto de laravel, con el comando ```laravel new *nombre-del-proyecto* ```. Este comando nos hace una creación limpia de entorno para trabajar con el framework.

##  Configuracion del proyecto

Posteriormente, accedimos a la ruta de las vistas en ```Proyecto/resources/views```, en esta carpeta se encontrarán todos los archivos de extensión ```.blade.php``` los cuales se interpretan como vistas. Luego nos ubicamos en el archivo ```web.php``` el cual encontramos en ```Proyecto/routes/web.php```, este archivo nos servirá para configurar y asignar rutas en el navegador para cada una de las vistas que creemos. Dentro de la misma carpeta resource encontraremos otra carpeta llamada views dónde contendrá todos aquellos archivos php.

Nos dirigimos a la carpeta del proyecto para realizar el primer cambio en el archivo ```.env```, buscaremos dentro del archivo la sección donde se especifica el motor de DB a utilizar, por defecto utiliza ```DB_CONNECTION=mysql```, en el cual cambiaremos ```mysql``` por ```sqlsrv``` que es el parámetro con el cual laravel sabe que debe interpretar las conexiones con la DB. Otro cambio que debemos realizar antes de comenzar a trabajar es el cambio de los puertos que harán de puente de información entre el framework y la DB, por defecto viene con ```DB_PORT=3306``` en el caso de SQL Server se necesita cambiar el puerto ```3306``` por el puerto ```1433```. En los apartados de ```DB_USERNAME``` y ```DB_PASSWORD``` los dejamos en blanco, ya que, trabajamos de manera local, por ende, no requerimos de ese parámetro.

Continuo de esto, creamos las migraciones de nuestra base de datos con el comando ```php artisan migrate```, el cual empezará a crear las tablas base que tiene Laravel 7.2.4, siendo la más importante para este proyecto la de los usuarios, la que editamos a nuestro gusto. Ahora crearemos las otras tablas que utilizaremos usando el comando ```php artisan make:migration create_gastos_table``` y  ```artisan make:migration departamentos```, ya añadidos los datos que tendrán cada tabla con sus respectivos datos, se empezará con las relaciones entre tablas utilizando el comando ```php artisan make:model Gasto``` , ```php artisan make:model Departamento``` y  ```php artisan make:model User```. Dentro del model de Gasto indicamos que un gasto sólo puede pertenecer a un departamento, dentro del model de Departamento indicamos que un departamento puede contener muchos gastos y usuarios, dentro de User indicamos que un usuario puede contener solo un departamento y creamos una función donde encriptamos la contraseña del usuario ingresado para tener más seguridad antes un ingreso de forma no legal es decir un posible hackeo del sistema.


## Correr la aplicación localmente clonando el repositorio

Clonar el proyecto

```bash
  git clone https://github.com/IMartinUCT/Ti2_2022.git
```

Vamos al repositorio y lo iniciamos con PHP

```bash
  cd Ti2_2022-Development\Ti2_2022-Development\integracion2
  
```

Iniciamos el servidor local

```bash
  php artisan migrate
  php artisan serve
```



## Uso y ejemplos de uso

```javascript
function Ocultar(){

  let button = document.querySelectorAll('.menu button');
  let content_inside = document.querySelectorAll('.content_inside');

  Array.from(button).forEach(function(buttonArray, i) {
  buttonArray.addEventListener('click', function() {

      Array.from(button).forEach(buttonAll => buttonAll.classList.remove('button_active'));
      
      Array.from(content_inside).forEach(content_insideAll => content_insideAll.classList.remove('content_inside_active'));
      
      button[i].classList.add('button_active'); 
      
      content_inside[i].classList.add('content_inside_active');  
    });
  });
}
```
dentro de esta función tenemos definido todo el mecanismo para poder reemplazar las tablas dependiendo de la tabla que quiera ver el usuario

```php 
class GastoController extends Controller
{
    public function index() {

        if (Auth::user()) {
            $user = Auth::user();
            $id_depa = $user->id_departamento;
            $columnas_gastos = DB::getSchemaBuilder()->getColumnListing('gastos');
            $filas_gastos = DB::table('gastos')->where('id_departamento',$id_depa)->get();
            return view('documentos',compact('columnas_gastos', 'filas_gastos'));            
        }else{
            return view('index');
        }
    }

    function list(){

        return Gasto::all();
    }
}
```
Este código es uno de los encargados de realizar peticiones a la DB, y esta retorna los datos solicitados dentro de una vista (View).

## FAQ

#### Puedo usar mis propias bases de datos?

¡Claro que sí! Cualquier usuario podrá tener su propia base de datos

#### Hay riesgos de seguridad con las contraseñas?

¡No!, al usar bcrypt, algoritmo diseñado específicamente para hash de contraseñas. MD5 y SHA1 son algoritmos de hash de propósito general. Por diseño, además, bcrypt permite agregar un salt al proceso de generación del hash, lo que, de entrada, lo hace inmune a ataques de diccionario.


## Screenshots

Login
![Login](https://cdn.upload.systems/uploads/oyjZ5x5J.png)
Registro
![Registro](https://cdn.upload.systems/uploads/gFCEnADz.png)
Documentos
![documentos](https://cdn.upload.systems/uploads/fbXgFjMy.png)



## Contribuciones

Todo apoyo es agradecido, para aportar al proyecto; simplemente realiza tus cambios deseados en la aplicación y ¡nosotros veremos cómo queda!

Favor seguir las reglas de conducta del producto.


## 🔗 Links de los desarrolladores
Rigo (https://github.com/Cinnamotion)
Nicolas (https://github.com/Nipicoco)
Rodrigo (https://github.com/RodrigoAlt11)
Pato (https://github.com/patoskixd)
