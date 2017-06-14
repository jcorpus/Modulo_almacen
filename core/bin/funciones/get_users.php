<?php
function ver_usuarios(){
  $db = new Conexion();
  //$sql = $db->query("SELECT * FROM usuarios");
  //$sql = $db->query("SELECT* FROM usuarios inner join persona on persona.id_persona = usuarios.id_persona ");
  $sql = $db->query("call pa_listar_usuarios()");
  if ($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)){
      $usuarios[$d['perso_id']] = array(
        'perso_id' => $d['perso_id'],
        'usu_id' => $d['usu_id'],
        'usu_nom' => $d['usu_nom'],
        'perso_nom' => $d['perso_nom'],
        'perso_app' => $d['perso_app'],
        'perso_apm' => $d['perso_apm'],
        'all_apellido' => $d['perso_app']." ".$d['perso_apm'],        
        'usu_est' =>$d['usu_est']
      );
    }
  }else{
    $usuarios = false;

  }
  $db->liberar($sql);
  $db->close();

  return $usuarios;
}

 ?>
