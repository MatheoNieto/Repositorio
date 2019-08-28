<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('principal_model');
        
    
    }

    public function index(){
        $sesion = $this->session->userdata('codigo'); 
          $sesion2 = $this->session->userdata('tipou'); 
        if($sesion){  
            
            if ($sesion2 == 1){
            //cargando datos
            $datosu['usuarios'] = $this->principal_model->datosuser($sesion);
            
            $datosu['documentos'] = $this->principal_model->consultandodocumentos($sesion);
            
            $datosu['countanexos'] = $this->principal_model->anexos_por_usuariocount($sesion);
            
            $datosu['countanexos2'] = $this->principal_model->anexos_por_usuariocount2($sesion);
            
            $datosu['adjuntos'] = $this->principal_model->adjutos_por_usuario($sesion);
            
            $datosu['adjuntos2'] = $this->principal_model->adjutos_por_usuario2($sesion);
            
            $datosu['anexos'] = $this->principal_model->anexos_por_usuario($sesion);
            
            $datosu['anexos2'] = $this->principal_model->anexos_por_usuario2($sesion);
            
            $datosu['documentos2'] = $this->principal_model->consultandodocumentoss($sesion); 
            
          if  (!empty($datosu['documentosautor'] = $this->principal_model->consultandodocumentosautores($sesion)  ))   {
              
              $var1 = $datosu['documentosautor'][0]['codigouser'];
                $var2 = $datosu['documentosautor'][0]['codigouser2'];
                $datosu['datosa1'] = $this->principal_model->primerautor($var1);
                $datosu['datosa2'] = $this->principal_model->segundoautor($var2);
          }  
            if  (!empty($datosu['documentosautor2'] = $this->principal_model->consultandodocumentosautores2($sesion)  ))   {
              
              $var1 = $datosu['documentosautor2'][0]['codigouser'];
                $var2 = $datosu['documentosautor2'][0]['codigouser2'];
                $datosu['datosa12'] = $this->principal_model->primerautor2($var1);
                $datosu['datosa22'] = $this->principal_model->segundoautor2($var2);
          }
          
                
            
              $datosu['integrantes'] = $this->principal_model->usuarios();   
            $datosu['tituloexitentes'] = $this->principal_model->consultandodocumentostitulos(); 
                
            $prueba['esatdoproyecto'] = $this->principal_model->estadoingresa($sesion);

            //views 1
            $this->load->view('paginaprincipal', $datosu);
                 $this->load->view('contenido/contenedorAyudaE.php',$datosu);
            $this->load->view('contenido/contenedor1',$datosu);
            $this->load->view('contenido/contenedor1-1',$datosu);
            $this->load->view('contenido/contenedor1-2',$datosu);
            $this->load->view('contenido/contenedor2',$datosu);
               
            if ($prueba['esatdoproyecto'][0]['ingresa'] > 0){
                
                 $this->load->view('contenido/contenedor3',$datosu); $this->load->view('contenido/contenedor4',$datosu);
            }else{
                
            }
            $this->load->view('contenido/contenedor5',$datosu);
            $this->load->view('contenido/contenedor5-1',$datosu);
            $this->load->view('contenido/contenedor5-2',$datosu);
            $this->load->view('contenido/contenedor7',$datosu);
            $this->load->view('contenido/contenedor8',$datosu);
            $this->load->view('contenido/contenedor8-1',$datosu);
            $this->load->view('contenido/contenedor8-2',$datosu);
            $this->load->view('contenido/contenedor8-3',$datosu);
            $this->load->view('contenido/contenedor8-4',$datosu);
            $this->load->view('contenido/contenedor8-5',$datosu);
            $this->load->view('contenido/contenedor8-6',$datosu);
            $this->load->view('contenido/contenedor8-6-1',$datosu);
            $this->load->view('contenido/contenedor8-7',$datosu);
            $this->load->view('contenido/contenedor8-8',$datosu);
            $this->load->view('contenido/contenedor8-8-1',$datosu);
            $this->load->view('contenido/contenedor8-9',$datosu);
            $this->load->view('contenido/contenedor8-10',$datosu);
            $this->load->view('contenido/contenedor9',$datosu);
            $this->load->view('contenido/contenedor10',$datosu);
            $this->load->view('contenido/contenedor11',$datosu);
            $this->load->view('contenido/contenedor12',$datosu);
            $this->load->view('contenido/contenedor13',$datosu);
            $this->load->view('contenido/contenedor14',$datosu);
            $this->load->view('contenido/contenedor15',$datosu);
            
                
        }elseif($sesion2 == 2){
            redirect('profesor');
      }elseif($sesion2 == 3){
           redirect('admin');
      }
        }else{
            redirect('login'); 
        }  

    }
      
    
public function creardocumento(){

    if ($this->input->is_ajax_request()){

        $sesion = $this->session->userdata('codigo');  
        date_default_timezone_set('America/Bogota');
        $fecha =   date("Y/m/d H:i:s");
        $codigo1 = $sesion;
        $titulo = $this->input->post('txttitulo');
        $autor1 = $this->input->post('txtprimerautor');
        $autor2 = $this->input->post('txtsegundoautor');
        $descripcion = $this->input->post('txtdescripcionanteproyecto');
        $codigo2 = $this->input->post('txtcodigo2');      

        if ($autor2 ==""){
            $codigo2  = NULL;
        } 
    
            $title = array(
                'id' => NULL,
                'titulo' => $titulo,
                'autor1' => $autor1,
                'autor2' => $autor2,           
                'descripcion' => $descripcion,           
                'fecha_creacion' => $fecha,
                'codigouser' => $codigo1,
                'codigouser2' => $codigo2,
                'Estado' => 'Proceso',
            ); 
        $title2 = array(
                'id' => NULL,
                'titulo' => $titulo,
                'autor1' => $autor1,
                'autor2' => $autor2,           
                'descripcion' => $descripcion,           
                'fecha_creacion' => $fecha,
                'codigouser' => $codigo1,
                'codigouser2' => $codigo2,
                'Estado' => 'Sin iniciar',
            );

            if ($this->principal_model->insertardocumento($title,$title2,$codigo1,$codigo2)== true){
                  return "Exito";  
            }else{ 
                echo "Error";
            }

       

    }else{
        show_404();
    }
}
    
      public function modificardatosanteproyecto(){
       $sesion = $this->session->userdata('codigo'); 
              $codigo = $sesion;
        $titulom = $this->input->post('txttitulom');
        $descripcionm = $this->input->post('txtdescripcionanteprom');
      
        
        if ( $this->principal_model->modificardocumento($titulom,$descripcionm,$codigo)== true)
          echo "Modifico el anteproyecto";         
        else 
            echo "No se pudo modificar";
    } 
    public function modificardatosinforme(){
        
       $sesion = $this->session->userdata('codigo'); 
        $codigo = $sesion;
        $tituloinfom = $this->input->post('txttituloinformem');
        $descripcioninfom = $this->input->post('txtdescripcionanteproinformem');
      
        
        if ( $this->principal_model->modificarinforme($tituloinfom,$descripcioninfom,$codigo)== true)
          echo "Modifico el anteproyecto";         
        else 
            echo "No se pudo modificar";
    }
    
    public function cargaDatos(){
        
        $sesion = $this->session->userdata('codigo'); 
        $datosu['usuarios'] = $this->principal_model->datosuser($sesion);
        $datosu['documentos'] = $this->principal_model->consultandodocumentos($sesion);
        $this->load->view('contenido/contenedor3',$datosu);
        $this->load->view('contenido/contenedor4',$datosu);

       
 }  public function cargaDatos1(){
        
        $sesion = $this->session->userdata('codigo');  
        $datosu['documentos2'] = $this->principal_model->consultandodocumentoss($sesion);
        $this->load->view('contenido/contenedor8-3',$datosu);
        $this->load->view('contenido/contenedor8-4',$datosu);

       
 }  
    public function cargaDatos2(){

        $sesion = $this->session->userdata('codigo');

        $datosu['documentos'] = $this->principal_model->consultandodocumentos($sesion);

        $datosu['documentosautor'] = $this->principal_model->consultandodocumentosautores($sesion);

        $varautor1 = $datosu['documentosautor'][0]['codigouser'];
        $varautor2 = $datosu['documentosautor'][0]['codigouser2'];

        $datosu['datosa1'] = $this->principal_model->primerautor($varautor1);
        $datosu['datosa2'] = $this->principal_model->segundoautor($varautor2); 


        $this->load->view('contenido/contenedor7',$datosu);

       
 }    
    public function cargaDatos3(){
        
          $sesion = $this->session->userdata('codigo');  
           $datosu['documentos'] = $this->principal_model->consultandodocumentos($sesion);
            $this->load->view('contenido/contenedor14',$datosu);
        
       
 }      public function cargaDatos4(){
        
          $sesion = $this->session->userdata('codigo');
        $datosu['usuarios'] = $this->principal_model->datosuser($sesion); 
           $datosu['documentos'] = $this->principal_model->consultandodocumentos($sesion);
         $datosu['documentos2'] = $this->principal_model->consultandodocumentoss($sesion);
            
            $this->load->view('contenido/contenedor1-1',$datosu);
        
       
 }  public function cargaDatos5(){
        
          $sesion = $this->session->userdata('codigo');  
        $datosu['usuarios'] = $this->principal_model->datosuser($sesion);
            $this->load->view('contenido/contenedor9',$datosu);
        
       
 }  public function cargaDatos6(){
        
          $sesion = $this->session->userdata('codigo'); 
         $datosu['adjuntos'] = $this->principal_model->adjutos_por_usuario($sesion);
         $this->load->view('contenido/contenedor5-2',$datosu);
        
       
 }public function cargaDatos61(){
        
          $sesion = $this->session->userdata('codigo'); 
         $datosu['adjuntos2'] = $this->principal_model->adjutos_por_usuario2($sesion);
            $this->load->view('contenido/contenedor8-6-1',$datosu);
        
       
 }   public function cargaDatos7(){
        
         $idadjunto = $this->input->post('id');         
        $datosu['comentarios'] = $this->principal_model->comentarios($idadjunto);
         $this->load->view('contenido/contenedor6-1',$datosu);
        
       
 } public function cargaDatos71(){
         $idadjunto = $this->input->post('id');         
         $datosu['comentarios2'] = $this->principal_model->comentarioss($idadjunto);
         $this->load->view('contenido/contenedor8-11-1',$datosu);
        
       
 }  public function cargaDatos8(){
        
       $sesion = $this->session->userdata('codigo');  
         $codigo = $sesion;
         $codigodocumentos= $this->input->post('txtidadjunto');       
     
        
         $datosu['usuarios'] = $this->principal_model->datosuser($codigo);
        
         $datosu['mostraradjunto'] = $this->principal_model->mostraradjunto($codigodocumentos);
        
          $datosu['comentarios'] = $this->principal_model->comentarios($codigodocumentos);
        
        
            $this->load->view('contenido/contenedor6',$datosu);
            $this->load->view('contenido/contenedor6-1',$datosu);
        
       
 }
    
    public function cargaDatos9(){
        
         $sesion = $this->session->userdata('codigo'); 
         $datosu['anexos'] = $this->principal_model->anexos_por_usuario($sesion);
         $this->load->view('contenido/contenedor8-1',$datosu);
        
        
        
    } 
    public function cargaDatos91(){
        
         $sesion = $this->session->userdata('codigo'); 
         $datosu['countanexos'] = $this->principal_model->anexos_por_usuariocount($sesion);
         $this->load->view('contenedor1-1',$datosu);
        
        
        
    }   public function cargaDatos92(){
        
         $sesion = $this->session->userdata('codigo'); 
         $datosu['anexos'] = $this->principal_model->anexos_por_usuario2($sesion);
         $this->load->view('contenido/contenedor8-1',$datosu);
        
        
        
    } 
    public function cargaDatos93(){
        
         $sesion = $this->session->userdata('codigo'); 
         $datosu['countanexos'] = $this->principal_model->anexos_por_usuariocount2($sesion);
         $this->load->view('contenedor1-1',$datosu);
        
        
        
    }
   
    
    public function modificardatospersonales(){
         if ($this->input->is_ajax_request()){
            
        $sesion = $this->session->userdata('codigo');  
        $codigo = $sesion;
        $nombre = $this->input->post('txtnombresa');
        $apellidos = $this->input->post('txtapellidosa');
        $codigo = $this->input->post('txtcodiogoa');
        $email = $this->input->post('txtemaia');
        $telefono = $this->input->post('txttelefonoa');
        $nombres = explode(" ", $nombre);
        $nombre1 = $nombres[0]; 
        $nombre2 = $nombres[1];       
            
       
              $datos = array(
            'nombre1' => $nombre1,
            'nombre2' => $nombre2,
            'apellidos' => $apellidos,
            'codigo' => $codigo,           
            'email' => $email,           
            'tel' => $telefono
        );
         
     $this->principal_model->actulizardatos($datos,$codigo);
          return 'hola';        
        
    }else{
            show_404();
        }
      
    }
    
    public function modificarintegrante(){
        if ($this->input->is_ajax_request()){
            
        $sesion = $this->session->userdata('codigo');  
        $codigo = $sesion;
        $autor2 = $this->input->post('txtsegundoautor2');
        $codigo2 = $this->input->post('txtcodigo22');
      
        if ($this->principal_model->segundoautor($codigo,$autor2,$codigo2)== true)
            echo "registro guardado";         
        else 
            echo "No se pudo guardar";
            
    }else{
            show_404();
        } 
      
    }
    
    public function subiradjutno(){        
          
            $iddocumento = $this->input->post('iddocumento');
            date_default_timezone_set('America/Bogota');
            $fecha_adjuntado =   date("Y/m/d H:i:s");
            
                $config['upload_path'] = "./css/adjuntos/";
                $config['allowed_types'] = "pdf";
                $config['max_size'] = 512000;
           
        
          $this->load->library('upload',$config);
     
        if ($this->upload->do_upload('archivo')){
            
           $data = array("upload_data" => $this->upload->data());
				$datos = array(
					"adjunto" => $data['upload_data']['file_name'],
                    "fecha_adjunto" =>$fecha_adjuntado,
                    "id_documento" =>$iddocumento                    
				);
            
				$this->principal_model->subir($datos);
            echo 'true';
                
        }else{
            echo 'no';
        }
        
        
    }     public function subiradjutno2(){
        
          
            $iddocumento = $this->input->post('iddocumento2');
            date_default_timezone_set('America/Bogota');
            $fecha_adjuntado =   date("Y/m/d H:i:s");
            
                $config['upload_path'] = "./css/adjuntos2/";
                $config['allowed_types'] = "pdf";
                $config['max_size'] = 512000;
            

        
          $this->load->library('upload',$config);
     
        if ($this->upload->do_upload('archivo2')){
            
           $data = array("upload_data" => $this->upload->data());
				$datos = array(
					"adjunto" => $data['upload_data']['file_name'],
                    "fecha_adjunto" =>$fecha_adjuntado,
                    "id_documento" =>$iddocumento
                    
				);
				if ($this->principal_model->subir2($datos)==TRUE) {
                }
            echo 'inserto';
        }else{
            $error = array('error' => $this->upload->display_errors());
            foreach($error as $er){
                echo $er;
            }
        }
    }  
    
    public function subiranexo(){
                  
            $iddocumento = $this->input->post('iddocumentoanexo');
            $descripcionanexo = $this->input->post('txtdescripcionanexos');
            date_default_timezone_set('America/Bogota');
            $fecha_adjuntado =   date("Y/m/d H:i:s");
            
                $config['upload_path'] = "./css/anexos/";
                $config['allowed_types'] = "*";
                $config['max_size'] = 512000;
                $config['overwrite'] = 'TRUE';

        
          $this->load->library('upload',$config);
     
        if ($this->upload->do_upload('anexo')){
            
           $data = array("upload_data" => $this->upload->data());
				$datos = array(
					"anexo" => $data['upload_data']['file_name'],
                    "descripcionanexo" => $descripcionanexo,
                    "fecha_anexo" =>$fecha_adjuntado,
                    "id_documento" =>$iddocumento
                    
				);
				$this->principal_model->subiranexo($datos);
            echo 'true';
        }else{
            echo 'no';
        }
    }public function subiranexo2(){
                  
            $iddocumento = $this->input->post('iddocumentoanexo2');
            $descripcionanexo = $this->input->post('txtdescripcionanexos2');
            date_default_timezone_set('America/Bogota');
            $fecha_adjuntado =   date("Y/m/d H:i:s");
            
                $config['upload_path'] = "./css/anexos2/";
                $config['allowed_types'] = "*";
                $config['max_size'] = 512000;
                $config['overwrite'] = 'TRUE';

        
          $this->load->library('upload',$config);
     
        if ($this->upload->do_upload('anexo2')){
            
           $data = array("upload_data" => $this->upload->data());
				$datos = array(
					"anexo" => $data['upload_data']['file_name'],
                    "descripcionanexo" => $descripcionanexo,
                    "fecha_anexo" =>$fecha_adjuntado,
                    "id_documento" =>$iddocumento
                    
				);
				$this->principal_model->subiranexo2($datos);
            echo 'true';
        }else{
            echo 'no';
        }
    }
    
    
    
    public function modificarfondo(){
        $fondo = $this->input->post('nombreimgfondo');
        $sesion = $this->session->userdata('codigo');  
        $tema = $this->input->post('toggleButton');
        $codigo = $sesion;
           $this->principal_model->fondocambia($fondo,$codigo,$tema);
    }
    
    public function hacercomentario(){
         $sesion = $this->session->userdata('codigo'); 
        date_default_timezone_set('America/Bogota');
        $fechacomentado =   date("Y/m/d H:i:s");        
        $codigo = $sesion;
        $idadjunto = $this->input->post('txtidadjunto');
        $comentario = $this->input->post('txtcomentario');
        
         $datos = array(
            'comentario' => $comentario,
            'fechacomentario' => $fechacomentado,
            'cod_comento' => $codigo,           
            'id_adjunto' => $idadjunto
        );        
      
        if ($this->principal_model->insertacomentario($datos)==TRUE){
            
            echo 'listo';   
                     
        }else{
            return 'false';
        }
        
    }  
    public function hacercomentario2(){
        
         $sesion = $this->session->userdata('codigo'); 
        date_default_timezone_set('America/Bogota');
        $fechacomentado =   date("Y/m/d H:i:s");        
        $codigo = $sesion;
        $idadjunto = $this->input->post('txtidadjunto2');
        $comentario = $this->input->post('txtcomentario2');
        
         $datos = array(
            'comentario' => $comentario,
            'fechacomentario' => $fechacomentado,
            'cod_comento' => $codigo,           
            'id_adjunto' => $idadjunto
        );        
      
        if ($this->principal_model->insertacomentario2($datos)==TRUE){
            
            echo 'listo';            
        }else{
            echo 'false';
        }
        
    }
    
   public function cargardocumento(){
         $sesion = $this->session->userdata('codigo');        
        if($sesion){ 
         $sesion = $this->session->userdata('codigo');  
         $codigo = $sesion;
         $codigodocumentos= $this->input->post('txtidadjunto');       
     
        
         $datosu['usuarios'] = $this->principal_model->datosuser($codigo);
        
         $datosu['mostraradjunto'] = $this->principal_model->mostraradjunto($codigodocumentos);
        
          $datosu['comentarios'] = $this->principal_model->comentarios($codigodocumentos);
        
        
            $this->load->view('contenido/contenedor6',$datosu);
            $this->load->view('contenido/contenedor6-1',$datosu);
            $this->load->view('contenido/contenedor6-1-1',$datosu);
             }else{
            redirect('login'); 
        }  
       
    }   public function cargardocumento2(){
         $sesion = $this->session->userdata('codigo');        
        if($sesion){  
         $codigo = $sesion;
         $codigodocumentos2= $this->input->post('txtidadjunto2');
        
         $datosu['usuarios'] = $this->principal_model->datosuser($codigo);
        
         $datosu['mostraradjunto2'] = $this->principal_model->mostraradjunto2($codigodocumentos2);
        
          $datosu['comentarios2'] = $this->principal_model->comentarioss($codigodocumentos2);
        
        
            $this->load->view('contenido/contenedor8-11',$datosu);
            $this->load->view('contenido/contenedor8-11-1',$datosu);
            $this->load->view('contenido/contenedor8-11-1-1',$datosu);
             }else{
            redirect('http://repositorioucp.com'); 
        }  
       
    }
    
    public function enviarproblema(){
        
        date_default_timezone_set('America/Bogota');
        $fechaconctacto =   date("Y/m/d H:i:s"); 
        $nombres = $this->input->post('txtnombres');  
        $email = $this->input->post('txtemail');  
        $tel = $this->input->post('txttel');  
        $ausnt = $this->input->post('txtasunto');  
        $mensajes = $this->input->post('txtmensajes');  
        
         $difiucltad = array(
            'id' => NULL,
            'nombreyapellidos' => $nombres,
            'email' => $email,           
            'telefono' => $tel,
            'asunto' => $ausnt,
            'descripcion' => $mensajes,
            'fechasolicitud'=> $fechaconctacto
        );        
      
        if ($this->principal_model->enviarmensajes($difiucltad)==TRUE){            
            echo 'TRUE';            
        }else{
            return 'false';
        }
        
        
    }  public function enviarsugerencias(){        
       
        $mensajes = $this->input->post('txtsugerie');  
        
         $sugerencia = array(            
            'sugerencia' => $mensajes
        );        
      
        if ($this->principal_model->enviarsugerencia($sugerencia)==TRUE){            
            echo 'TRUE';            
        }else{
            return 'false';
        }
        
        
    }
    
}
