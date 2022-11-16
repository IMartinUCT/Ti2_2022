
# Generador de reportes
UCT 2022

A brief description of what this project does and who it's for


## Que buscamos con el proyecto

- Porder facilitar el uso de un generador de reportes a los usuarios
- Editar los reportes
- Guardar los reportes en distintos formatos (excel, json, pdf)
- Multiples plataformas donde se podra usar la aplicacion!
- Personalizacion de los reportes dinamicos




## Fase de instalacion
Para instalar este proyecto se tendra que usar:

```bash
  - Microsoft SQL Server.
  - Laravel.
  - PHP 7.
  - Un IDE de preferencia.
```
Primero que todo se tendran que descargar los programas referenciados, luego de realizar la instalacion,
tendremos que clonar el proyecto, esto se puede hacer mediante SSH, GitHub Desktop o directamente desde la pagina.

al clonar la aplicacion, tendremos que vincular la base de datos deseada a nuestro SQL Server, luego, iniciar el servidor y agregar los plugins de sql server a las extenciones de PHP.



## Correr la aplicacion localmente

Clone the project

```bash
  git clone https://github.com/IMartinUCT/Ti2_2022.git
```

Vamos al repositorio y lo iniciamos con PHP

```bash
  cd Ti2_2022-Development\Ti2_2022-Development\integracion2
  
```

Iniciamos el servidor local

```bash
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
dentro de esta funcion tenemos definido todo el mecanismo para poder reemplazar las tablas dependiendo de la tabla que quiera ver el usuario



## FAQ

#### Puedo usar mis propias bases de datos?

Claro que si! Cualquier usuario podra tener su propia base de datos

#### Hay riesgos de seguridad con las contraseñas?

No!, al usar bcrypt, algoritmo diseñado específicamente para hash de contraseñas. MD5 y SHA1 son algoritmos de hash de propósito general. Por diseño, además, bcrypt permite agregar un salt al proceso de generación del hash, lo que, de entrada, lo hace inmune a ataques de diccionario.


## Screenshots
Login
![Login](https://cdn.upload.systems/uploads/oyjZ5x5J.png)
Registro
![Registro](https://cdn.upload.systems/uploads/gFCEnADz.png)
Documentos
![documentos](https://cdn.upload.systems/uploads/fbXgFjMy.png)




## Contribuciones

Todo apoyo es agradecido, para poder hacer aportes al proyecto, solamente haz tus cambios deseados y nosotros veremos como queda!


Favor seguir las reglas de conducta del producto.


## 🔗 Links de los desarrolladores
Rigo (https://github.com/Cinnamotion)
Nicolas (https://github.com/Nipicoco)
Rodrigo (https://github.com/RodrigoAlt11)
Pato (https://github.com/patoskixd)
