<?php

class Verporyectesinvitado_model extends CI_Model {
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
    
    public function comentarios($id){
        
        $this->db->select('*');
        $this->db->where('comentarios.id_adjunto',$id);
        $this->db->order_by("comentarios.fechacomentario", "DESC");
        $resultdoc = $this->db->get('comentarios');       
        return $resultdoc->result();
        
        
        
    }
    
    
        public function insertacomentario($datos){
        
         $this->db->insert('comentarios',$datos);
        
          if ($this->db->affected_rows() > 0){
          return TRUE;
      }else{
          return false;
      } 
    }  





}