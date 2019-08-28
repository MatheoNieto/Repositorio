<?php

class Profesor_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }   
    
//---------------------------------------------------------------------------------------------------------------------------->    
//------------------------------------------------- <Usuario> ---------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    public function usuarios(){
        $this->db->select('usuarios.imgperfil,usuarios.nombre1,usuarios.nombre2,usuarios.apellidos,usuarios.codigo,usuarios.email,usuarios.tel ');
        $this->db->where('usuarios.tipou',1);
        $resuser=$this->db->get('usuarios');
        return $resuser->result();
    }
    
    public function datosuser($codigo){
        $this->db->select('*');
        $this->db->where('codigo',$codigo);
        $resultado= $this->db->get('usuarios');
        return $resultado->result();
    }
    
    public function actulizardatos($datos,$codigo){
        $this->db->where('codigo', $codigo);
        $this->db->update('usuarios', $datos);
    }
    
//---------------------------------------------------------------------------------------------------------------------------->    
//----------------------------------------------- </Usuario> ----------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
//---------------------------------------------------------------------------------------------------------------------------->    
//------------------------------------------------ <Avances> ----------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
//---------------------------------------------------------------------------------------------------------------------------->    
//--------------------------------------------Actualizar avances ------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    public function avanceante($datos,$iddocumento){
        
        $this->db->where('iddocumento', $iddocumento);
        $this->db->update('avance', $datos);
                    
    }
    
    public function avancefinal($datos,$id_documento){
        
        $this->db->where('id_documento', $id_documento);
        $this->db->update('avance2', $datos);
        
    }
    
//---------------------------------------------------------------------------------------------------------------------------->    
//--------------------------------------------Actualizar Estado -------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    public function avanceante2($datos,$id_documento){
        
        $this->db->where('id', $id_documento);
        $this->db->update('documento', $datos);
        
    }
    
    public function avanceante3($datos,$id_documento){
        
        $this->db->where('id', $id_documento);
        $this->db->update('documento2', $datos);
        
    }
    
    public function avancefinal2($datos,$id_documento){
        
        $this->db->where('id', $id_documento);
        $this->db->update('documento2', $datos);
        
    }
    

//---------------------------------------------------------------------------------------------------------------------------->    
//--------------------------------------------Consultar avances -------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    public function consultaravance($iddocumento){
        
        $this->db->select('*');
        $this->db->where('iddocumento',$iddocumento);
        $resultado= $this->db->get('avance');
        return $resultado->result();
        
    }    
    
    public function consultaravance2($iddocumento){
        
        $this->db->select('*');
        $this->db->where('id_documento',$iddocumento);
        $resultado= $this->db->get('avance2');
        return $resultado->result();
        
    }

//---------------------------------------------------------------------------------------------------------------------------->    
//----------------------------------------------- </Avances> ----------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
//---------------------------------------------------------------------------------------------------------------------------->    
//--------------------------------------------- <Comentarios> ---------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
//---------------------------------------------------------------------------------------------------------------------------->    
//--------------------------------------------Enviar Comentarios ------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    public function enviarnuevocomentarioA($datos){

        $this->db->insert('comentarios',$datos);
        
    }
    
    public function enviarnuevocomentarioF($datos){

        $this->db->insert('comentarios2',$datos);
        
    }
    
//---------------------------------------------------------------------------------------------------------------------------->    
//--------------------------------------------Consultar Comentarios ---------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    public function ComentariosAnte($id){
        
        $this->db->select('*');
        $this->db->where('comentarios.id_adjunto',$id);
        $this->db->join('usuarios','usuarios.codigo = comentarios.cod_comento');
        $this->db->order_by("comentarios.fechacomentario", "DESC");
        $resultdoc = $this->db->get('comentarios');       
        return $resultdoc->result();
        
    }
    
    public function ComentariosFinal($id){
        
        $this->db->select('*');
        $this->db->where('comentarios2.id_adjunto',$id);
        $this->db->join('usuarios','usuarios.codigo = comentarios2.cod_comento');
        $this->db->order_by("comentarios2.fechacomentario", "DESC");
        $resultdoc = $this->db->get('comentarios2');       
        return $resultdoc->result();
        
    }
    
//---------------------------------------------------------------------------------------------------------------------------->    
//--------------------------------------------- </Comentarios> --------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
//---------------------------------------------------------------------------------------------------------------------------->    
//----------------------------------------------- <Anexos> ------------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
//---------------------------------------------------------------------------------------------------------------------------->    
//------------------------------------------------Subir Anexos --------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    public function subiranexo($datos){
        
          $this->db->insert('anexos',$datos);
            if ($this->db->affected_rows() > 0){
          return TRUE;
      }else{
          return false;
      } 
    } 
    
    public function subiranexo2($datos){
        
          $this->db->insert('anexos2',$datos);
            if ($this->db->affected_rows() > 0){
          return TRUE;
      }else{
          return false;
      } 
    } 
    
//---------------------------------------------------------------------------------------------------------------------------->    
//--------------------------------------------Consultar Anexos --------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    public function consultaranexid($id){
        
        $this->db->select('*');
        $this->db->where('anexos.id_documento',$id);
        $this->db->order_by("anexos.fecha_anexo", "DESC");
        $resultdoc = $this->db->get('anexos');       
        return $resultdoc->result();
        
    }
    
    public function consultaranexid2($id){
        
        $this->db->select('*');
        $this->db->where('anexos2.id_documento',$id);
        $this->db->order_by("anexos2 .fecha_anexo", "DESC");
        $resultdoc = $this->db->get('anexos2');       
        return $resultdoc->result();
        
    }
    
//---------------------------------------------------------------------------------------------------------------------------->    
//----------------------------------------------- </Anexos> ------------------------------------------------------------------>
//---------------------------------------------------------------------------------------------------------------------------->
    
//---------------------------------------------------------------------------------------------------------------------------->    
//------------------------------------------------ <Adjunto> ----------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->

//----------------------------------------------------------------------------------------------------------------------------->    
//-------------------------------------------Consultas Adjunto elegido--------------------------------------------------------->
//----------------------------------------------------------------------------------------------------------------------------->
    
    public function consultaradjid($idadjunto){
        
        $this->db->select('*');
        $this->db->where('documentos_adjuntados.id',$idadjunto );
        $this->db->order_by("documentos_adjuntados.fecha_adjunto", "DESC");
        $resultdoc = $this->db->get('documentos_adjuntados');       
        return $resultdoc->result();
        
    }
    
    public function consultaradjid2($idadjunto){
        
        $this->db->select('*');
        $this->db->where('documentos_adjuntados2.id',$idadjunto );
        $this->db->order_by("documentos_adjuntados2.fecha_adjunto", "DESC");
        $resultdoc = $this->db->get('documentos_adjuntados2');       
        return $resultdoc->result();
        
    }
    
//----------------------------------------------------------------------------------------------------------------------------->    
//-----------------------------------Consultas Adjunto para visualizar--------------------------------------------------------->
//----------------------------------------------------------------------------------------------------------------------------->
    
    public function consultardocid($id){
        
        $this->db->select('*');
        $this->db->where('documentos_adjuntados.id_documento',$id );
        $this->db->order_by("documentos_adjuntados.fecha_adjunto", "DESC");
        $this->db->limit(1);
        $resultdoc = $this->db->get('documentos_adjuntados');       
        return $resultdoc->result();
        
    }
    
    public function consultardocid2($id){
        
        $this->db->select('*');
        $this->db->where('documentos_adjuntados2.id_documento',$id );
        $this->db->order_by("documentos_adjuntados2.fecha_adjunto", "DESC");
        $this->db->limit(1);
        $resultdoc = $this->db->get('documentos_adjuntados2');       
        return $resultdoc->result();
        
    }
    
//----------------------------------------------------------------------------------------------------------------------------->    
//-----------------------------------Consultas todos los Adjuntos para visualizar---------------------------------------------->
//----------------------------------------------------------------------------------------------------------------------------->
    
        public function consultardocidC($id){
        
        $this->db->select('*');
        $this->db->where('documentos_adjuntados.id_documento',$id );
        $this->db->order_by("documentos_adjuntados.fecha_adjunto", "DESC");
        $resultdoc = $this->db->get('documentos_adjuntados');       
        return $resultdoc->result();
        
    }
    
    public function consultardocidC2($id){
        
        $this->db->select('*');
        $this->db->where('documentos_adjuntados2.id_documento',$id );
        $this->db->order_by("documentos_adjuntados2.fecha_adjunto", "DESC");
        $resultdoc = $this->db->get('documentos_adjuntados2');       
        return $resultdoc->result();
        
    }
    
//----------------------------------------------------------------------------------------------------------------------------->    
//-----------------------------------Consultas todos los Adjuntos disponibles---------------------------------------------->
//----------------------------------------------------------------------------------------------------------------------------->
    
        public function consultardocidT(){
        
        $this->db->select('*');
        $this->db->order_by("documentos_adjuntados.fecha_adjunto", "DESC");
        $resultdoc = $this->db->get('documentos_adjuntados');       
        return $resultdoc->result();
        
    }
    
    public function consultardocidT2(){
        
        $this->db->select('*');
        $this->db->order_by("documentos_adjuntados2.fecha_adjunto", "DESC");
        $resultdoc = $this->db->get('documentos_adjuntados2');       
        return $resultdoc->result();
        
    }
    
//---------------------------------------------------------------------------------------------------------------------------->    
//----------------------------------------------- </Adjunto> ----------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
 
//---------------------------------------------------------------------------------------------------------------------------->   
//--------------------------------------------------Anteproyecto-------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    public function consultardocT(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->order_by("documento.titulo", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    } 
    
    public function consultardocA(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->order_by("documento.autor1", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    } 
    
    public function consultardocactT(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->where('documento.Estado',"Proceso" );
        $this->db->order_by("documento.titulo", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    
    public function consultardocactA(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->where('documento.Estado',"Proceso" );
        $this->db->order_by("documento.autor1", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    
    public function consultardocfinT(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->where('documento.Estado',"Terminado" );
        $this->db->order_by("documento.titulo", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    } 
    
    public function consultardocfinA(){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->where('documento.Estado',"Terminado" );
        $this->db->order_by("documento.autor1", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    } 

//---------------------------------------------------------------------------------------------------------------------------->
//--------------------------------------------------Final--------------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    public function consultardoc2T(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->order_by("documento2.titulo", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    
    public function consultardoc2A(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->order_by("documento2.autor1", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    } 
    
    public function consultardocactT2(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->where('documento2.Estado',"Proceso" );
        $this->db->order_by("documento2.titulo", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    
    public function consultardocactA2(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->where('documento2.Estado',"Proceso" );
        $this->db->order_by("documento2.autor1", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    }
    
    public function consultardocfinT2(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->where('documento2.Estado',"Terminado" );
        $this->db->order_by("documento2.titulo", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    } 
    
    public function consultardocfinA2(){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->where('documento2.Estado',"Terminado" );
        $this->db->order_by("documento2.autor1", "ASC");
        $resultdoc = $this->db->get();
        return $resultdoc->result();
    } 
    
//---------------------------------------------------------------------------------------------------------------------------->    
//---------------------------------------------------------------------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    public function enviarmensajes($mensajed){
        
         $this->db->insert('dificultades',$mensajed);
            if ($this->db->affected_rows() > 0){
          return TRUE;
      }else{
          return false;
      } 
    }
    
//---------------------------------------------------------------------------------------------------------------------------->    
//---------------------------------------------------------------------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    public function revisardocumentoAid($datos,$id){
                
        $this->db->where('id', $id);
        $this->db->update('documento', $datos);
    } 
    
    public function revisardocumentoFid($datos,$id){
                
        $this->db->where('id', $id);
        $this->db->update('documento2', $datos);
    } 
    
}