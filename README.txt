
  Ulises Rodr�guez
  
  Site 		: http://www.ulisesrodriguez.com
  Twitter	: @isc_ulises
  Facebook	: http://www.facebook.com/ISC.Ulises
  gmail		: ing.ulisesrodriguez@gmail.com
  skype		: systemonlinesoftware
  Github	: https://github.com/ulisesrodriguez
  
  Location: Mundial


	
  Descripci�n
    
  Permite crear, editar, eliminar y ver usuarios registrados en tu aplicaci�n. Lenguaje espa�ol e ingles
  
  Instalaci�n
  
  1.- Descarga. https://github.com/ulisesrodriguez/user.git"
  
  2.- Descarga Codeigniter. http://ellislab.com/codeigniter
  
  3.- Descarga la extenci�n HMVC para codeigniter. https://github.com/Crypt/Codeigniter-HMVC
  
  4.- Descomprime el archivo rar de codeigniter y copealo en C:\\yourserver\www.  
  
  5.- Descomprime el archivo rar de la exitenc�n HMVC y configurala.  
  
  6.- Descomprime el archivo rar y copea el m�dulo en application/modules/.    
 
  7.- Instala la tabla que se encuentra en application/modules/user/assets/sql/sql.sql  
  
  8.- Ejecuta http://youcodeigniterinstalation/user/view_list.  
		
  
  Configuraci�n javascript
  
  
  Abre el archivo application/modules/user/assets/script/users.js
  Modifica la variable url en la ruta absoluta a tu instalaci�n de codeigniter
  Ejemplo: http://localhost/codeigniter/
  var url = '';
  
  
  Configuraci�n de paginaci�n
  
  Abre el archivo application/modules/user/controllers/user.php
  
  En el metodo
  
  public function view_list( $begin = 0 )
	
  $config['per_page'] = 20;  //Aqu� cambia la cantidad de registros por pagina que quieres mostrar
  
	  
  
  
  Configuraci�n de lenguaje
  
  Abre el archivo application/modules/user/controllers/user.php
  Por defecto el valor es english si lo quieres en espa�ol modifica las siguentes lineas a spanish
  
  
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
