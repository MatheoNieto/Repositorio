<?php 

class Verproyectos_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }
    
   public function proyectos(){
        $this->db->select('*');
       $this->db->order_by("documento.titulo", "ASC");
        $resultado= $this->db->get('documento');
            return $resultado->result();       
       
    }
    
    public function verdocumento($id){
        
        $this->db->select('*');
        $this->db->where('documentos_adjuntados.id_documento',$id );
        $this->db->order_by("documentos_adjuntados.fecha_adjunto", "DESC");
        $this->db->limit(1);
        $resultdoc = $this->db->get('documentos_adjuntados');       
        return $resultdoc->result();
        
        
    }
    
    
    
}





