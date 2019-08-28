<?php

class Admin_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }
    
    public function datosuser($codigo){
        $this->db->select('*');
        $this->db->where('codigo',$codigo);
        $resultado= $this->db->get('usuarios');
        return $resultado->result();
    } public function datosdelosestudiantes(){
        $this->db->select('*');
        $this->db->where('tipou',1);
        $resultado= $this->db->get('usuarios');
        return $resultado->result();
    } public function datosdelosprofesores(){
        $this->db->select('*');
        $this->db->where('tipou',2);
        $resultado= $this->db->get('usuarios');
        return $resultado->result();
    }public function soliinfor(){
        $this->db->select('*');
        $this->db->where('estado',1);
        $resultado= $this->db->get('dificultades');
        return $resultado->result();
    } 
    public function difi(){
        $this->db->select('*');
         $this->db->where('estado',0);
        $this->db->order_by("dificultades.fechasolicitud", "DESC");
        $resultado= $this->db->get('dificultades');
        
        return $resultado->result();
    }
    public function mensaje($id){
        
         // $this->db->set('estado',1);
       // $this->db->where('id',$id);
        //$this->db->update('dificultades'); 
        
        $this->db->select('*');
        $this->db->where('id',$id);
        $resultado= $this->db->get('dificultades');
        return $resultado->result();
    }public function estadom($id){
        
        $this->db->set('estado',1);
        $this->db->where('id',$id);
        $this->db->update('dificultades');       
    
    }public function modifistudent($datos,$codigo){
        
        $this->db->set($datos);
        $this->db->where('codigo',$codigo);
        $this->db->update('usuarios');       
    
    }public function registstudent($datos){
        
        $this->db->insert('usuarios',$datos);       
    
    }public function modifiprofesor($datos,$codigo){
        
        $this->db->set($datos);
        $this->db->where('codigo',$codigo);
        $this->db->update('usuarios');       
    
    }public function regisprofesro($datos){
        
        $this->db->insert('usuarios',$datos);       
    
    }
    

    
    public function countdifi(){
        $this->db->select('COUNT(id) AS contardifi');
         $this->db->where('estado',0);
        $resultado= $this->db->get('dificultades');
        return $resultado->result();
    }
    
      public function anteproyectoproceso(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->join('avance','documento.id = avance.iddocumento');
        $this->db->where('documento.Estado',"Proceso" );
        $this->db->where('documento.vistop',1 );
        $this->db->order_by("documento.titulo", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
          
    }   public function anteproyectoprocesoautor1(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->join('avance','documento.id = avance.iddocumento');
        $this->db->where('documento.Estado',"Proceso" );
        $this->db->where('documento.vistop',1 );
        $this->db->order_by("documento.autor1", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    public function anteproyectoprocesoautor2(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->join('avance','documento.id = avance.iddocumento');
        $this->db->where('documento.Estado',"Proceso" );
        $this->db->where('documento.vistop',1 );
        $this->db->order_by("documento.autor2", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    } public function anteproyectoprocesocant(){        
        $this->db->select('COUNT(documento.id) AS cuneta');
        $this->db->from('documento');
        $this->db->where('documento.Estado',"Proceso" );
        $this->db->where('documento.vistop',1 );
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }    
    
    public function anteproyectosinrevi(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->join('avance','documento.id = avance.iddocumento');
        $this->db->where('documento.Estado',"Proceso" );
        $this->db->where('documento.vistop',0 );
        $this->db->order_by("documento.titulo", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
          
    }   public function anteproyectoprocesosinreviautor1(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->join('avance','documento.id = avance.iddocumento');
        $this->db->where('documento.Estado',"Proceso" );
        $this->db->where('documento.vistop',0 );
        $this->db->order_by("documento.autor1", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    public function anteproyectoprocesosinreviautor2(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->join('avance','documento.id = avance.iddocumento');
        $this->db->where('documento.Estado',"Proceso" );
        $this->db->where('documento.vistop',0 );
        $this->db->order_by("documento.autor2", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    } public function anteproyectoprocesosinrevicant(){        
        $this->db->select('COUNT(documento.id) AS cuneta');
        $this->db->from('documento');
        $this->db->where('documento.Estado',"Proceso" );
        $this->db->where('documento.vistop',0 );
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }    
    
    public function anteproyectoterminnados(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->join('avance','documento.id = avance.iddocumento');
        $this->db->where('documento.Estado',"Terminado" );
        $this->db->where('documento.vistop',1 );
        $this->db->order_by("documento.titulo", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
          
    }   public function anteproyectoprocesoterminnadosautor1(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->join('avance','documento.id = avance.iddocumento');
        $this->db->where('documento.Estado',"Terminado" );
        $this->db->where('documento.vistop',1 );
        $this->db->order_by("documento.autor1", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    public function anteproyectoprocesoterminnadosautor2(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->join('avance','documento.id = avance.iddocumento');
        $this->db->where('documento.Estado',"Terminado" );
        $this->db->where('documento.vistop',1 );
        $this->db->order_by("documento.autor2", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    } public function anteproyectoprocesoterminnadoscant(){        
        $this->db->select('COUNT(documento.id) AS cuneta');
        $this->db->from('documento');
        $this->db->where('documento.Estado',"Terminado" );
        $this->db->where('documento.vistop',1 );
        $resultdoc = $this->db->get();
        return $resultdoc->result();
        
    }   public function anteproyectotodos(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->join('avance','documento.id = avance.iddocumento');
        $this->db->order_by("documento.titulo", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
          
    }   public function anteproyectoprocesotodosautor1(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->join('avance','documento.id = avance.iddocumento');
        $this->db->order_by("documento.autor1", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    public function anteproyectoprocesotodosautor2(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->join('avance','documento.id = avance.iddocumento');
        $this->db->order_by("documento.autor2", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    } 
    public function anteproyectoprocesotodoscant(){        
        $this->db->select('COUNT(documento.id) AS cuneta');
        $this->db->from('documento');
              $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    
    //INforme FiNak=l
  public function informeproceso(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->join('avance2','documento2.id = avance2.id_documento');
        $this->db->where('documento2.Estado',"Proceso" );
        $this->db->where('documento2.vistop',1 );
        $this->db->order_by("documento2.titulo", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
          
    }   public function informeprocesoautor1(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->join('avance2','documento2.id = avance2.id_documento');
        $this->db->where('documento2.Estado',"Proceso" );
        $this->db->where('documento2.vistop',1 );
        $this->db->order_by("documento2.autor1", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    public function informeprocesoautor2(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->join('avance2','documento2.id = avance2.id_documento');
        $this->db->where('documento2.Estado',"Proceso" );
        $this->db->where('documento2.vistop',1 );
        $this->db->order_by("documento2.autor2", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    } public function informeprocesocant(){        
        $this->db->select('COUNT(documento2.id) AS cuneta');
        $this->db->from('documento2');
        $this->db->where('documento2.Estado',"Proceso" );
        $this->db->where('documento2.vistop',1 );
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    
     public function sininformeproceso(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->join('avance2','documento2.id = avance2.id_documento');
        $this->db->where('documento2.Estado',"Sin iniciar" );
        $this->db->order_by("documento2.titulo", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
          
    }   public function sininformeprocesoautor1(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->join('avance2','documento2.id = avance2.id_documento');
        $this->db->where('documento2.Estado',"Sin iniciar" );
        $this->db->order_by("documento2.autor1", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    public function sininformeprocesoautor2(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->join('avance2','documento2.id = avance2.id_documento');
        $this->db->where('documento2.Estado',"Sin iniciar" );
        $this->db->order_by("documento2.autor2", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    } 
    
    public function sininformeprocesocant(){        
        $this->db->select('COUNT(documento2.id) AS cuneta');
        $this->db->from('documento2');
        $this->db->where('documento2.Estado',"Sin iniciar" );
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    
    
    
    public function informesinrevi(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->join('avance2','documento2.id = avance2.id_documento');
        $this->db->where('documento2.Estado',"Proceso" );
        $this->db->where('documento2.vistop',0 );
        $this->db->order_by("documento2.titulo", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
          
    }   public function informesinreviautor1(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->join('avance2','documento2.id = avance2.id_documento');
        $this->db->where('documento2.Estado',"Proceso" );
        $this->db->where('documento2.vistop',0 );
        $this->db->order_by("documento2.autor1", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    public function informesinreviautor2(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->join('avance2','documento2.id = avance2.id_documento');
        $this->db->where('documento2.Estado',"Proceso" );
        $this->db->where('documento2.vistop',0 );
        $this->db->order_by("documento2.autor2", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    } public function informesinrevicant(){        
        $this->db->select('COUNT(documento2.id) AS cuneta');
        $this->db->from('documento2');
        $this->db->where('documento2.Estado',"Proceso" );
        $this->db->where('documento2.vistop',0 );
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }    
    
    
    
    public function informeterminnados(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->join('avance2','documento2.id = avance2.id_documento');
        $this->db->where('documento2.Estado',"Terminado" );
        $this->db->where('documento2.vistop',1 );
        $this->db->order_by("documento2.titulo", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
          
    }   public function informeterminnadosautor1(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->join('avance2','documento2.id = avance2.id_documento');
        $this->db->where('documento2.Estado',"Terminado" );
        $this->db->where('documento2.vistop',1 );
        $this->db->order_by("documento2.autor1", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    public function informeterminnadosautor2(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->join('avance2','documento2.id = avance2.id_documento');
        $this->db->where('documento2.Estado',"Terminado" );
        $this->db->where('documento2.vistop',1 );
        $this->db->order_by("documento2.autor2", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    } public function informeterminnadoscant(){        
        $this->db->select('COUNT(documento2.id) AS cuneta');
        $this->db->from('documento2');
        $this->db->where('documento2.Estado',"Terminado" );
        $this->db->where('documento2.vistop',1 );
        $resultdoc = $this->db->get();
        return $resultdoc->result();
        
    }
    
     public function informetotodos(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->join('avance2','documento2.id = avance2.id_documento');
        $this->db->order_by("documento2.titulo", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
          
    }   public function informeprocesotodosautor1(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->join('avance2','documento2.id = avance2.id_documento');
        $this->db->order_by("documento2.autor1", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    public function informeprocesotodosautor2(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->join('avance2','documento2.id = avance2.id_documento');
        $this->db->order_by("documento2.autor2", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    } 
    public function informeprocesotodoscant(){        
        $this->db->select('COUNT(documento2.id) AS cuneta');
        $this->db->from('documento2');
              $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    
    
    
    //documentos o archivos subidos
    public function documentossubidos(){        
        $this->db->select('COUNT(documentos_adjuntados.id) AS cuntadocuments');
        $this->db->from('documentos_adjuntados');
              $resultdoc = $this->db->get();
        return $resultdoc->result();
    }public function documentossubidos2(){        
        $this->db->select('COUNT(documentos_adjuntados2.id) AS cuntadocuments2');
        $this->db->from('documentos_adjuntados2');
              $resultdoc = $this->db->get();
        return $resultdoc->result();
    }public function anexossubidos(){        
        $this->db->select('COUNT(anexos.id) AS cuntaanexos');
        $this->db->from('anexos');
              $resultdoc = $this->db->get();
        return $resultdoc->result();
    }public function anexossubidos2(){        
        $this->db->select('COUNT(anexos2.id) AS cuntaanexos2');
        $this->db->from('anexos2');
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    
    
    
    public function cantaestudiantes(){
        
        $this->db->select('COUNT(codigo) AS cantestudiantes');
        $this->db->where('usuarios.tipou',1);
        $this->db->from('usuarios');
        $resultdoc = $this->db->get();
        return $resultdoc->result();
        
        
    } public function cantdocentes(){
        
        $this->db->select('COUNT(codigo) AS cantdocentes');
        $this->db->where('usuarios.tipou',2);
        $this->db->from('usuarios');
        $resultdoc = $this->db->get();
        return $resultdoc->result();
        
        
    }public function cantsolicitudes(){
        
        $this->db->select('COUNT(id) AS cantsoli');
        $this->db->where('estado',1);
        $this->db->from('dificultades');
        $resultdoc = $this->db->get();
        return $resultdoc->result();
        
        
    }
    
    
    
  
}