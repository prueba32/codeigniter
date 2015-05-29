<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class model extends CI_Model {  

	function __construct() {
    parent::__construct();
  }

  /* ###########################           funcion guardar   #####################################           */

  function guardar($data){
  	$this->db->insert('clientes', $data);
  }
  function guardarauto($data){
    $this->db->insert('automoviles', $data);
  }
   
/* ###########################                  cerrar     #####################################           */

/* ###########################           funcion ver todo   #####################################           */
public function provincias($limite = 0)
  {
    $this->db->order_by('provincia');
    $provincia = $this->db->get('provincia');
    if($provincia->num_rows()>0)
    {
      return $provincia->result();
    }
  }

  function verTodo($limite = 0){
  	$query = $this->db->get('clientes');
  	if ($query->num_rows() > 0){
  		return $query;
  	}else{
  		return FALSE;
  	}
  }
  function verTodoauto($limite = 0){ 
    $query = $this->db->get('automoviles');
    if ($query->num_rows() > 0){
      return $query;
    }else{
      return FALSE;
    }
  }
  
 
    

  /* ###########################           cerrar  #####################################           */

  /* ###########################           funcion buscar   #####################################           */

  function buscar($query) {
    $this->db->like('nombre', $query);
    $this->db->or_like('apellidos', $query);
     

    $query = $this->db->get('clientes');
    if ($query->num_rows() > 0){
      return $query;
    }else{
      return FALSE;
    }
  }
   
 function totalResultados($query){
    $this->db->like('nombre', $query);
    $this->db->or_like('apellidos', $query);
    $query = $this->db->get('clientes');
    return $query->num_rows();
  }

 function buscaralquiler($query) {
    $this->db->like('nombre', $query);
    $this->db->or_like('apellidos', $query);
     

    $query = $this->db->get('clientes');
    if ($query->num_rows() > 0){
      return $query;
    }else{
      return FALSE;
    }
  }
   
 function totalResultadosalquiler($query){
    $this->db->like('nombre', $query);
    $this->db->or_like('apellidos', $query);
    $query = $this->db->get('clientes');
    return $query->num_rows();
  }

  function buscarauto($query) {
    $this->db->like('marca', $query);
    $this->db->or_like('modelo', $query);
    $query = $this->db->get('automoviles');
    if ($query->num_rows() > 0){
      return $query;
    }else{
      return FALSE;
    }
  }


  function totalResultadosauto($query){
    $this->db->like('marca', $query);
    $this->db->or_like('modelo', $query);
    $query = $this->db->get('automoviles');
    return $query->num_rows();
  }
  
  
  
  /* ###########################             cerrar   #####################################           */

  /* ###########################           funcion eliminar  #####################################           */

  function eliminarId($id){
    $this->db->where('id', $id);
    $this->db->delete('clientes');
  }
  function eliminarIdauto($id){
    $this->db->where('id', $id);
    $this->db->delete('automoviles');
  }

  /* ###########################           cerrar  #####################################           */

 





/* ###########################           funcion editar    #####################################           */
function editarEnlace($id,$data){
  $this->db->where('id',$id);
  $this->db->update('clientes',$data);

}

function obtenerEnlace($id){
  $this->db->where('id', $id); 
  $query = $this->db->get('clientes');
  if ($query->num_rows() > 0) {
    return $query;
   }else{
    return FALSE;
  }
 

}

function editarEnlaceauto($id,$data){
  $this->db->where('id',$id);
  $this->db->update('automoviles',$data);

}

function obtenerEnlaceauto($id){
  $this->db->where('id', $id); 
  $query = $this->db->get('automoviles');
  if ($query->num_rows() > 0) {
    return $query;
   }else{
    return FALSE;
  }
 

}
/* ###########################           cerrar   #####################################           */
	
}