<?php

class Persona{
  private $db;
  public function __construct(){
  require_once('../core/models/model_conexion.php');
  $this->db = new Conexion2();
}




function listar_persona($valor){

  if (empty($valor)) {

      echo "falta DNI";
  }else{

   
  $sql = "SELECT persona.perso_id, persona.perso_nom, persona.perso_app,persona.perso_apm ,dato_pe.dtpe_id,dato_pe.perso_id, dato_pe.tpdt_id, alm_tipodato.tpdt_des, dato_pe.dtpe_desc FROM alm_dato_persona dato_pe INNER JOIN alm_persona persona ON dato_pe.perso_id = persona.perso_id INNER JOIN alm_tipodato ON dato_pe.tpdt_id = alm_tipodato.tpdt_id WHERE alm_tipodato.tpdt_id = 1 AND dato_pe.dtpe_desc LIKE '%".$valor."%' LIMIT 1 " ;

  }
   
  
  $resultado = $this->db->query($sql);
  
  /*
  if ($this->db->rows($resultado) > 0) {
    echo "no datos ";
  }

*/
  $arreglo = array();
  while($re =$this->db->recorrer($resultado)){ ///MYSQL_BOTH, MYSQL_ASSOC, MYSQL_NUM
    $arreglo[] = $re;
  }
  return $arreglo;
  $this->db->liberar($sql);
  $this->db->close();

}




}

/*
$mod_alumno = new Alumno();
if ($mod_alumno->modificar_alumno('16','mod','mod','mod','66666666','address','666666','666@gmail.com','99999','66666.png')) {
  echo "correcto";
}else{
  echo "error";
}
*/








$instancia = new Persona();
$resp = $instancia->listar_persona(43458671);
print_r($resp);




/*
$instancia = new Alumno();
if ($instancia->registro_alumno('j3o@45gmail.com','45456756','2015/12/12','julioo','corpus','mechato','ppaoo','346456','23','M','passwordd')) {
  echo "registro correcto";
}else{
  echo "ocurrio un error";
}


*/
 ?>
