<?php

class Principal_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }    
    public function datosuser($codigo){
        $this->db->select('*');
        $this->db->where('codigo',$codigo);
        $resultado= $this->db->get('usuarios');
        return $resultado->result();
    }
    
    public function primerautor($codigo){
        $this->db->select('*');
        $this->db->where('codigo',$codigo);
        $resss= $this->db->get('usuarios');
        return $resss->result();
    } 
    public function segundoautor($codigo2){
        $this->db->select('*');
        $this->db->where('codigo',$codigo2);
        $resss= $this->db->get('usuarios');
        return $resss->result();
    } 
    public function primerautor2($codigo){
        $this->db->select('*');
        $this->db->where('codigo',$codigo);
        $resss= $this->db->get('usuarios');
        return $resss->result();
    } 
    public function segundoautor2($codigo2){
        $this->db->select('*');
        $this->db->where('codigo',$codigo2);
        $resss= $this->db->get('usuarios');
        return $resss->result();
    }
    
     public function consultandodocumentos($codigo){        
        $this->db->select('*');
        $this->db->from('documento');
        $this->db->join('avance','documento.id = avance.iddocumento');
        $this->db->where('documento.codigouser',$codigo );
        $this->db->or_where('documento.codigouser2',$codigo );
        $ressul = $this->db->get();
        return $ressul->result();
    } 
    
    public function estadoingresa($codigo){        
       $this->db->select('*');
        $this->db->where('codigo',$codigo);
        $resultado= $this->db->get('usuarios');
        return $resultado->result_array();
    }  public function consultandodocumentosautores($codigo){        
        $this->db->select('*');
        $this->db->where('documento.codigouser',$codigo );
        $this->db->or_where('documento.codigouser2',$codigo );
        $ressull = $this->db->get('documento');
        return $ressull->result_array();
    }   
    public function consultandodocumentosautores2($codigo){        
        $this->db->select('*');
        $this->db->where('documento2.codigouser',$codigo );
        $this->db->or_where('documento2.codigouser2',$codigo );
        $ressull = $this->db->get('documento2');
        return $ressull->result_array();
    }
    
    public function consultandodocumentoss($codigoo){        
        $this->db->select('*');
        $this->db->from('documento2');
        $this->db->join('avance2','avance2.id_documento = documento2.id');
        $this->db->where('documento2.codigouser',$codigoo);
        $this->db->or_where('documento2.codigouser2',$codigoo);
        $resssl = $this->db->get();
        return $resssl->result();
    } 
    
    public function usuarios(){
        $this->db->select('*');
        $this->db->where('usuarios.tipou',1);
        $resuser=$this->db->get('usuarios');
        return $resuser->result();
    }
     public function consultandodocumentostitulos(){        
        $this->db->select('*');
        $ressul = $this->db->get('documento');
        return $ressul->result();
    }  

    public function insertardocumento($titulo,$titulo2,$codigo1,$codigo2){
        
        $this->db->insert('documento',$titulo); 
        $this->db->insert('documento2',$titulo2); 
      
      if ($this->db->affected_rows() > 0){
            
        $this->db->set('ingresa',1);
        $this->db->where('codigo',$codigo1);
        $this->db->update('usuarios');
        
        if ($codigo2 != NULL){
        
        $this->db->set('ingresa',1);
        $this->db->where('codigo',$codigo2);
        $this->db->update('usuarios'); 
        }
       
      } 
       
    }
    
    public function fondocambia($fondo,$codigo,$tema){
        $this->db->set('imgfondo',$fondo);
        $this->db->set('tema',$tema);
        $this->db->where('codigo',$codigo);
        $this->db->update('usuarios'); 
    }
    
     public function modificardocumento($titulo,$descripcion,$codigo){
                
        $this->db->set('titulo',$titulo);
        $this->db->set('descripcion',$descripcion);
        $this->db->where('documento.codigouser',$codigo );
        $this->db->or_where('documento.codigouser2',$codigo );
        $this->db->update('documento');
           if ($this->db->affected_rows() > 0){
          return true;
      }else{
          return false;
      }        
       
    }
     public function modificarinforme($titulo,$descripcion,$codigo){
                
        $this->db->set('titulo',$titulo);
        $this->db->set('descripcion',$descripcion);
        $this->db->where('documento2.codigouser',$codigo );
        $this->db->or_where('documento2.codigouser2',$codigo );
        $this->db->update('documento2');
           if ($this->db->affected_rows() > 0){
          return true;
      }else{
          return false;
      }        
       
    }
    
    public function actulizardatos($datos,$codigo){
          $this->db->where('codigo', $codigo);
        $this->db->update('usuarios', $datos);
    }
    
    public function subir($datos){
        
          $this->db->insert('documentos_adjuntados',$datos);
            if ($this->db->affected_rows() > 0){
          return TRUE;
      }else{
          return false;
      } 
    }  public function subir2($datos){
        
          $this->db->insert('documentos_adjuntados2',$datos);
            if ($this->db->affected_rows() > 0){
          return TRUE;
      }else{
          return false;
      } 
    }
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
    
     public function adjutos_por_usuario($codigo){
        $this->db->select('documentos_adjuntados.id,documentos_adjuntados.adjunto,documentos_adjuntados.fecha_adjunto,documentos_adjuntados.id_documento');
        $this->db->from('documentos_adjuntados');
        $this->db->join('documento','documento.id = documentos_adjuntados.id_documento');
        $this->db->where('documento.codigouser',$codigo);
        $this->db->or_where('documento.codigouser2',$codigo);
        $this->db->order_by("documentos_adjuntados.fecha_adjunto", "DESC");
        $ressu= $this->db->get();
        return $ressu->result();
    }
    public function adjutos_por_usuario2($codigo){
        $this->db->select('documentos_adjuntados2.id,documentos_adjuntados2.adjunto,documentos_adjuntados2.fecha_adjunto,documentos_adjuntados2.id_documento');
        $this->db->from('documentos_adjuntados2');
        $this->db->join('documento2','documento2.id = documentos_adjuntados2.id_documento');
        $this->db->where('documento2.codigouser',$codigo);
        $this->db->or_where('documento2.codigouser2',$codigo);
        $this->db->order_by("documentos_adjuntados2.fecha_adjunto", "DESC");
        $ressull= $this->db->get();
        return $ressull->result();
    }
    public function comentarios($codigo){
        $this->db->select('*');
        $this->db->from('comentarios');   
        $this->db->join('usuarios','usuarios.codigo = comentarios.cod_comento');
        $this->db->where('comentarios.id_adjunto',$codigo);
        $this->db->order_by("comentarios.fechacomentario", "DESC");
        $ressultado= $this->db->get();
        return $ressultado->result();
    } 
 
    
       public function comentarioss($codigo2){
           
        $this->db->select('*');
        $this->db->from('comentarios2');   
        $this->db->join('usuarios','usuarios.codigo = comentarios2.cod_comento');
        $this->db->where('comentarios2.id_adjunto',$codigo2);
        $this->db->order_by("comentarios2.fechacomentario", "DESC");
        $ressultadore= $this->db->get();
        return $ressultadore->result();
           
    }  
    public function anexos_por_usuario($codigo){
        $this->db->select('*');
        $this->db->from('anexos');   
        $this->db->join('documento','documento.id=anexos.id_documento');
        $this->db->where('documento.codigouser',$codigo);
        $this->db->or_where('documento.codigouser2',$codigo);
        $this->db->order_by("anexos.fecha_anexo", "DESC");
        $ressultadoo= $this->db->get();
        return $ressultadoo->result();
        
    } 
     public function anexos_por_usuariocount($codigo){
        $this->db->select('count(anexo) AS cantanex');
        $this->db->from('anexos');   
        $this->db->join('documento','documento.id=anexos.id_documento');
        $this->db->where('documento.codigouser',$codigo);
        $this->db->or_where('documento.codigouser2',$codigo);
        $this->db->order_by("anexos.fecha_anexo", "DESC");
        $ressultadoon= $this->db->get();
        return $ressultadoon->result();
    }  
    public function anexos_por_usuario2($codigo){
        $this->db->select('*');
        $this->db->from('anexos2');   
        $this->db->join('documento2','documento2.id=anexos2.id_documento');
        $this->db->where('documento2.codigouser',$codigo);
        $this->db->or_where('documento2.codigouser2',$codigo);
        $this->db->order_by("anexos2.fecha_anexo", "DESC");
        $ressultadoo= $this->db->get();
        return $ressultadoo->result();
    } 
     public function anexos_por_usuariocount2($codigo){
        $this->db->select('count(anexo) AS cantanex');
        $this->db->from('anexos2');   
        $this->db->join('documento2','documento2.id=anexos2.id_documento');
        $this->db->where('documento2.codigouser',$codigo);
        $this->db->or_where('documento2.codigouser2',$codigo);
        $this->db->order_by("anexos2.fecha_anexo", "DESC");
        $ressultadoon= $this->db->get();
        return $ressultadoon->result();
    } 
    
    public function insertacomentario($datos){
        
         $this->db->insert('comentarios',$datos);
        
          if ($this->db->affected_rows() > 0){
          return TRUE;
      }else{
          return false;
      } 
    }  
    public function insertacomentario2($datos){
        
         $this->db->insert('comentarios2',$datos);
        
          if ($this->db->affected_rows() > 0){
          return TRUE;
      }else{
          return false;
      } 
    }
    
    public function mostraradjunto($code){
        
         $this->db->select('*');
         $this->db->where('documentos_adjuntados.id',$code);
         $ressultado= $this->db->get('documentos_adjuntados');
        return $ressultado->result();
    } 
    public function mostraradjunto2($code){
        
         $this->db->select('*');
         $this->db->where('documentos_adjuntados2.id',$code);
         $ressultadow= $this->db->get('documentos_adjuntados2');
        return $ressultadow->result();
    }
    
    public function enviarmensajes($mensajed){
        
         $this->db->insert('dificultades',$mensajed);
            if ($this->db->affected_rows() > 0){
          return TRUE;
      }else{
          return false;
      } 
    } 
    public function enviarsugerencia($mensajesgu){
        
         $this->db->insert('sugerencias',$mensajesgu);
            if ($this->db->affected_rows() > 0){
          return TRUE;
      }else{
          return false;
      } 
    }
    
    
}