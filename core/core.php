<?php


  #constantes

  session_start();

  #fecha de la pag
  define('YEAR_APLICACION', 'Derchos Reservados '.date('Y',time()).' - Módulo Almacén');
  #constantes de conexion
  define('DB_HOST','localhost');
  define('DB_USER','root');
  define('DB_PASS','');
  define('DB_NAME','bd_almacen');



  #estructura
  require('core/models/classConexion.php');
  require('core/bin/funciones/get_users.php');
  require('core/bin/funciones/contador_admin.php');//contador de alumnos
  //require('controller/categoria_tesis.php');

  #obtener toda la info del usuario, nombre, email, etc
 //$_usuarios = ver_usuarios();


 ?>
