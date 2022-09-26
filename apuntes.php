<1. RUTAS BASICAS> 
Lo primero que vamos a ver son las rutas que existen en Laravel, aqui podremos configurar nuestras rutas, en el apartado \routes, podremos encontrar los diferentes tipos de rutas que podemos usar e implementar en nuestro proyecto:
    1. API's
    2. Canales
    3. Consola
    4. Rutas Web
Dentro de las Rutas Web podremos encontrar una función que funciona como una ruta la cual devuelve una vista o una cadena de instrucciones.
Aquí se pueden definir todas las rutas y metodos HTTP que se deseen.
Metodos HTTP:
    1. GET: Conseguir datos
    2. POST: Guardar datos
    3. PUT: Actualizar datos o recursos
    4. DELETE: Eliminar recursos

ESTRUCTURA DE LAS RUTAS
Proceso para escribir una ruta: 
1. Escribir 'Route::'
2. Escribir el metodo que se va a usar 'get();'
3. Escribir el primer parametro que será el nombre de la ruta 'get('/mostrar-fecha')'
4. Escribir una función anonima Callback despues del primer parametro 'get('/mostrar-fecha', function(){})'
Dentro de ella, estará todo el procedimiento o la vista.
5. Forma final: 
<?php
    Route::get('/mostrar-fecha', function () {
        echo date("l jS \of F Y h:i:s A");  //Imprime el día y la hora en la página indicada
    });
?>
Importante: Esta es la forma incorrecta o no profesional de escribir las rutas, ya que aquí solamente deben estar las vistas y la lógica escencial. 

Parametros: Pasar parametros mediante la URL, se puede realizar mediante el apartado de rutas, se van a agregar para realizar distintas funciones. La forma que lleva es la siguiente:
    1. Primero escribir tu ruta completa con la sintaxis mencionada anteriormente, pero se le agregará un segundo segmento dentro del parametro del nombre de la ruta, ademas se le pasara como parametro una variable a la función anónima:
        <?php
            Route::get('/especialidad/{specialityName}', function($specialityName){
                return view('especialidad');
            });
        ?>
    2. Despues escribimos un array que indica donde se guardará lo ingresado en la URL en la variable creada:
        <?php
            Route::get('/especialidad/{specialityName}', function ($specialityName) {
                return view('especialidad', array(
                    'specialityName' => $specialityName
                ));
            });
        ?>
    3. Si deseamos que lo ingresado en la URL sea opcional, tendremos que agregar un signo de '?' al lado del segundo parametro, y elegir un valor por default en la variable:
        <?php
            Route::get('/especialidad/{specialityName?}', function ($specialityName = 'Elige primero una especialidad') {
                return view('especialidad', array(
                    'specialityName' => $specialityName
                ));
            });
        ?>
    4. Si queremos aplicar condicionales mediante expresiones regulares, lo podemos implementar terminando la ruta, con la funcion de where():
        <?php
            Route::get('/especialidad/{specialityName?}', function ($specialityName = 'Elige primero una especialidad') {
                return view('especialidad', array(
                    'specialityName' => $specialityName
                ));
            })->where(array(
                'specialityName' => '[a-zA-Z]+'
            ));
        ?>
    5. Para agregar un parametro adicional, se agrega de la siguiente manera:
        <?php
            Route::get('/especialidad/{specialityName?}/{area?}', function ($specialityName = 'Elige primero una especialidad', $area = 'Agrega un area') {
                return view('especialidad', array(
                    'specialityName' => $specialityName,
                    'area' => $area
                ));
            })->where(array(
                'specialityName' => '[a-zA-Z]+',
                'area' => '[a-zA-Z]+'
            ));
        ?>
        
<2. VISTAS>
Las vistas son las páginas iniciales a las cuales se encuentran en el apartado \resources\views

Las debemos llamar como <nombre-pagina>.blade.php

Para agregar una vista correctamente a una ruta se debe escribir dentro de la función Callback el siguiente comando: 'return view('<nombre-pagina>')'.
Ejemplo:
<?php
    Route::get('/', function () {
        return view('index');
    });
?>

