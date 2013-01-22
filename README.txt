
  Ulises Rodríguez
  
  Site 		: http://www.ulisesrodriguez.com
  Twitter	: @isc_ulises
  Facebook	: http://www.facebook.com/ISC.Ulises
  gmail		: ing.ulisesrodriguez@gmail.com
  skype		: systemonlinesoftware
  Github	: https://github.com/ulisesrodriguez
  
  Location: Mundial


	
  Descripción
    
  Permite crear, editar, eliminar y ver usuarios registrados en tu aplicación. Lenguaje español e ingles
  
  Instalación
  
  1.- Descarga. https://github.com/ulisesrodriguez/user.git"
  
  2.- Descarga Codeigniter. http://ellislab.com/codeigniter
  
  3.- Descarga la extención HMVC para codeigniter. https://github.com/Crypt/Codeigniter-HMVC
  
  4.- Descomprime el archivo rar de codeigniter y copealo en C:\\yourserver\www.  
  
  5.- Descomprime el archivo rar de la exitencón HMVC y configurala.  
  
  6.- Descomprime el archivo rar y copea el módulo en application/modules/.    
 
  7.- Instala la tabla que se encuentra en application/modules/user/assets/sql/sql.sql  
  
  8.- Ejecuta http://youcodeigniterinstalation/user/view_list.  
		
  
  Configuración javascript
  
  
  Abre el archivo application/modules/user/assets/script/users.js
  Modifica la variable url en la ruta absoluta a tu instalación de codeigniter
  Ejemplo: http://localhost/codeigniter/
  var url = '';
  
  
  Configuración de paginación
  
  Abre el archivo application/modules/user/controllers/user.php
  
  En el metodo
  
  public function view_list( $begin = 0 )
	
  $config['per_page'] = 20;  //Aquí cambia la cantidad de registros por pagina que quieres mostrar
  
	  
  
  
  Configuración de lenguaje
  
  Abre el archivo application/modules/user/controllers/user.php
  Por defecto el valor es english si lo quieres en español modifica las siguentes lineas a spanish
  
  
  // Languege

	public $language = 'english';

  // Language Validator

	public $lang_validator = 'english';
  




                               -o/-
                               +oo//-
                              :ooo+//:
                             -ooooo///-
                             /oooooo//:
                            :ooooooo+//-
                           -+oooooooo///-
           -://////////////+oooooooooo++////////////::
            :+ooooooooooooooooooooooooooooooooooooo+:::-
              -/+ooooooooooooooooooooooooooooooo+/::////:-
                -:+oooooooooooooooooooooooooooo/::///////:-
                  --/+ooooooooooooooooooooo+::://////:-
                     -:+ooooooooooooooooo+:://////:--
                       /ooooooooooooooooo+//////:-
                      -ooooooooooooooooooo////-
                      /ooooooooo+oooooooooo//:
                     :ooooooo+/::/+oooooooo+//-
                    -oooooo/::///////+oooooo///-
                    /ooo+::://////:---:/+oooo//:
                   -o+/::///////:-      -:/+o+//-
                   :-:///////:-            -:/://
                     -////:-                 --//:
                       --                       -:
