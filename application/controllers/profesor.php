<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesor extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('profesor_model');

    }

    public function index(){

        $sesion = $this->session->userdata('codigo');
        $sesion2 = $this->session->userdata('tipou');
        
        if($sesion){  
            
            if ($sesion2 == 1){
                
                redirect('principal');
                
            }elseif($sesion2 == 2){

                //cargando datos
                $datosu['usuarios'] = $this->profesor_model->datosuser($sesion);
                $datosu['integrantes'] = $this->profesor_model->usuarios();                 

                //views
                $this->load->view('paginaprofesor', $datosu);
                $this->load->view('contenidop/contenedorCargando', $datosu);
                $this->load->view('contenidop/contenedorContactos', $datosu);
                $this->load->view('contenidop/contenedorSuperior', $datosu);
                $this->load->view('contenidop/contenedorUserdata', $datosu);
                $this->load->view('contenidop/contenedorAyudaP', $datosu);
                $this->load->view('contenidop/contenedorActuser', $datosu);
                $this->load->view('contenidop/contenedorAnteproyectos', $datosu);
                $this->load->view('contenidop/contenedorAnteproyectosListas', $datosu);
                $this->load->view('contenidop/contenedorFinales', $datosu);
                $this->load->view('contenidop/contenedorFinalesListas', $datosu);
                $this->load->view('contenidop/contenedorDivAvances', $datosu);
                $this->load->view('contenidop/contenedorAvances', $datosu);
                $this->load->view('contenidop/contenedorAnexos', $datosu);
                $this->load->view('contenidop/contenedorAnexosguardados', $datosu);
                $this->load->view('contenidop/contenedorAnexosagregar', $datosu);
                $this->load->view('contenidop/contenedorDocumento', $datosu);
                $this->load->view('contenidop/contenedorDivComentarios', $datosu);
                $this->load->view('contenidop/contenedorComentarios', $datosu);
                
                
                  
            }elseif($sesion2 == 3){
                
                redirect('admin');
                
            }

        }else{
            
            redirect('');
            
        }  

    }
    
//---------------------------------------------------------------------------------------------------------------------------->    
//------------------------------------Recargando datos de usuario------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
        
    public function cargardatosUser(){
        $sesion = $this->session->userdata('codigo');  
        $datosu['usuarios'] = $this->profesor_model->datosuser($sesion);
        
        $this->load->view('contenidop/contenedorUserdata',$datosu);
    } 
    
//---------------------------------------------------------------------------------------------------------------------------->    
//---------------------------------------Recargando documentos---------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
//---------------------------------------Recargando documentos completo------------------------------------------------------>
    
    public function cargarAnteproyectoC(){
        $sesion = $this->session->userdata('codigo');  
        $datosu['documentostaT'] = $this->profesor_model->consultardocT();
        $datosu['documentostaA'] = $this->profesor_model->consultardocA();
        $datosu['documentosA'] = $this->profesor_model->consultardocA();
        $datosu['documentosF'] = $this->profesor_model->consultardoc2A();
        $datosu['AdjuntoT'] = $this->profesor_model->consultardocidT();
        
        $this->load->view('contenidop/ContenedorCSSScripts');
        $this->load->view('contenidop/contenedorAnteproyectosListas', $datosu);
    

    }
    
    public function cargarFinalC(){
        $sesion = $this->session->userdata('codigo');  
        $datosu['documentostfT'] = $this->profesor_model->consultardoc2T();
        $datosu['documentostfA'] = $this->profesor_model->consultardoc2A();
        $datosu['documentosA'] = $this->profesor_model->consultardocA();
        $datosu['documentosF'] = $this->profesor_model->consultardoc2A();
        $datosu['AdjuntoT'] = $this->profesor_model->consultardocidT2();
        
        $this->load->view('contenidop/contenedorFinalesListas', $datosu);
        $this->load->view('contenidop/ContenedorCSSScripts', $datosu);

    }
    
//---------------------------------------Recargando Anteproyectos-------------------------------------------------------------->
    
    public function cargarAnteproyectoP(){
        $sesion = $this->session->userdata('codigo');  
        $datosu['documentostaT'] = $this->profesor_model->consultardocactT();
        $datosu['documentostaA'] = $this->profesor_model->consultardocactA();
        $datosu['documentosA'] = $this->profesor_model->consultardocA();
        $datosu['documentosF'] = $this->profesor_model->consultardoc2A();
        $datosu['AdjuntoT'] = $this->profesor_model->consultardocidT();
        
        $this->load->view('contenidop/contenedorAnteproyectosListas',$datosu);
        $this->load->view('contenidop/ContenedorCSSScripts', $datosu);

    }
    
    public function cargarAnteproyectoT(){
        $sesion = $this->session->userdata('codigo');  
        $datosu['documentostaT'] = $this->profesor_model->consultardocfinT();
        $datosu['documentostaA'] = $this->profesor_model->consultardocfinA();
        $datosu['documentosA'] = $this->profesor_model->consultardocA();
        $datosu['documentosF'] = $this->profesor_model->consultardoc2A();
        $datosu['AdjuntoT'] = $this->profesor_model->consultardocidT();
        
        $this->load->view('contenidop/contenedorAnteproyectosListas',$datosu);
        $this->load->view('contenidop/ContenedorCSSScripts', $datosu);

    }
    
//------------------------------------------Recargando Finales---------------------------------------------------------------->
    
        public function cargarFinalP(){
        $sesion = $this->session->userdata('codigo');  
        $datosu['documentostfT'] = $this->profesor_model->consultardocactT2();
        $datosu['documentostfA'] = $this->profesor_model->consultardocactA2();
        $datosu['documentosA'] = $this->profesor_model->consultardocA();
        $datosu['documentosF'] = $this->profesor_model->consultardoc2A();
        $datosu['AdjuntoT'] = $this->profesor_model->consultardocidT2();
        
        $this->load->view('contenidop/contenedorFinalesListas',$datosu);
        $this->load->view('contenidop/ContenedorCSSScripts', $datosu);

    }
    
    public function cargarFinalT(){
        $sesion = $this->session->userdata('codigo');  
        $datosu['documentostfT'] = $this->profesor_model->consultardocfinT2();
        $datosu['documentostfA'] = $this->profesor_model->consultardocfinA2();
        $datosu['documentosA'] = $this->profesor_model->consultardocA();
        $datosu['documentosF'] = $this->profesor_model->consultardoc2A();
        $datosu['AdjuntoT'] = $this->profesor_model->consultardocidT2();
        
        $this->load->view('contenidop/contenedorFinalesListas',$datosu);
        $this->load->view('contenidop/ContenedorCSSScripts', $datosu);

    }

//---------------------------------------------------------------------------------------------------------------------------->    
//---------------------------------------Cargando documento desde su ID------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    public function cargardocumentoAid(){          
            
        $sesion = $this->session->userdata('codigo'); 
        $id = $this->input->post('id');  
        $tipo = 'ante';

        $datosu['usuarios'] = $this->profesor_model->datosuser($sesion);
        $datosu['Adjunto'] = $this->profesor_model->consultardocid($id);
        $datosu['AdjuntoC'] = $this->profesor_model->consultardocidC($id);
        $datosu['Anexos'] = $this->profesor_model->consultaranexid($id);
        $datosu['Avance'] = $this->profesor_model->consultaravance($id);
        $datosu['Estado'] = $tipo;

        $numero = 0;

        foreach ($datosu['Adjunto'] as $adj){

            $numero++;
            
        }
    
        if ($numero == '0'){
        
            echo '<script>
                    swal("Error","El proyecto no tiene documentos adjuntados","success");
                    setTimeout ("location.reload();", 1000);  
                </script>';

        }else{
            
            $this->load->view('contenidop/ContenedorCSSScripts', $datosu);
            $this->load->view('contenidop/contenedorAvances', $datosu);
            $this->load->view('contenidop/contenedorAnexos', $datosu);
            $this->load->view('contenidop/contenedorAnexosguardados', $datosu);
            $this->load->view('contenidop/contenedorAnexosagregar', $datosu);
            $this->load->view('contenidop/contenedorDocumento', $datosu);

        }
    }
    
    public function revisardocumentoAid(){ 
        
        $id = $this->input->post('id');  
        $visto = 1;
        
        $datos = array(
                'vistop' => $visto
            );
        
        $this->profesor_model->revisardocumentoAid($datos,$id);
        
    }
    
    public function cargardocumentoFid(){          
            
        $sesion = $this->session->userdata('codigo'); 
        $id = $this->input->post('id');  
        $tipo = 'final';

        $datosu['usuarios'] = $this->profesor_model->datosuser($sesion);
        $datosu['Adjunto'] = $this->profesor_model->consultardocid2($id);
        $datosu['AdjuntoC'] = $this->profesor_model->consultardocidC2($id);
        $datosu['Anexos'] = $this->profesor_model->consultaranexid2($id);
        $datosu['Avance'] = $this->profesor_model->consultaravance2($id);
        $datosu['Estado'] = $tipo;

        $numero = 0;

        foreach ($datosu['Adjunto'] as $adj){

            $numero++;
            
        }
    
        if ($numero == '0'){
        
            echo '<script>
                    swal("Error","El proyecto no tiene documentos adjuntados","success");
                    setTimeout ("location.reload();", 1000);  
                </script>';

        }else{
            
            $this->load->view('contenidop/ContenedorCSSScripts', $datosu);
            $this->load->view('contenidop/contenedorAvances', $datosu);   
            $this->load->view('contenidop/contenedorAnexos', $datosu);
            $this->load->view('contenidop/contenedorAnexosguardados', $datosu);
            $this->load->view('contenidop/contenedorAnexosagregar', $datosu);
            $this->load->view('contenidop/contenedorDocumento', $datosu);

        }
    }
    
    public function revisardocumentoFid(){ 
        
        $id = $this->input->post('id');  
        $visto = 1;
        
        $datos = array(
                'vistop' => $visto
            );
        
        $this->profesor_model->revisardocumentoFid($datos,$id);
        
    }
    
//---------------------------------------------------------------------------------------------------------------------------->    
//-----------------------------------------Cargando Adjunto desde su ID------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    public function cargardAdjuntoAid(){          
            
        $sesion = $this->session->userdata('codigo'); 
        $id = $this->input->post('id'); 
        $idadjunto = $this->input->post('idadjunto'); 
        $tipo = $this->input->post('tipo'); 

        $datosu['usuarios'] = $this->profesor_model->datosuser($sesion);
        $datosu['Adjunto'] = $this->profesor_model->consultaradjid($idadjunto);
        $datosu['AdjuntoC'] = $this->profesor_model->consultardocidC($id);
        $datosu['Estado'] = $tipo;
        
        $this->load->view('contenidop/contenedorDocumento', $datosu);

    }
    
     public function cargardAdjuntoFid(){          
            
        $sesion = $this->session->userdata('codigo'); 
        $id = $this->input->post('id'); 
        $idadjunto = $this->input->post('idadjunto'); 
        $tipo = $this->input->post('tipo'); 

        $datosu['usuarios'] = $this->profesor_model->datosuser($sesion);
        $datosu['Adjunto'] = $this->profesor_model->consultaradjid2($idadjunto);
        $datosu['AdjuntoC'] = $this->profesor_model->consultardocidC2($id);
        $datosu['Estado'] = $tipo;
            
        $this->load->view('contenidop/contenedorDocumento', $datosu);

    }
    
//---------------------------------------------------------------------------------------------------------------------------->    
//-------------------------------------------Cargando comentarios------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    public function ComentariosAnte(){          
            
        $sesion = $this->session->userdata('codigo'); 
        $id = $this->input->post('id'); 
        $tipo = $this->input->post('tipo'); 

        $datosu['usuarios'] = $this->profesor_model->datosuser($sesion);
        $datosu['Adjunto'] = $this->profesor_model->consultaradjid($id);
        $datosu['AdjuntoC'] = $this->profesor_model->consultardocidC($id);
        $datosu['Comentarios'] = $this->profesor_model->ComentariosAnte($id);
        $datosu['Estado'] = $tipo;

        $this->load->view('contenidop/contenedorComentarios', $datosu);
        
        

    }
    
    public function cargarComentariosAnte(){          
            
        $sesion = $this->session->userdata('codigo'); 
        $id = $this->input->post('id'); 
        $tipo = $this->input->post('tipo'); 

        $datosu['usuarios'] = $this->profesor_model->datosuser($sesion);
        $datosu['Adjunto'] = $this->profesor_model->consultaradjid($id);
        $datosu['AdjuntoC'] = $this->profesor_model->consultardocidC($id);
        $datosu['Comentarios'] = $this->profesor_model->ComentariosAnte($id);
        $datosu['Estado'] = $tipo;

        

    }
    
    public function ComentariosFinal(){          
            
        $sesion = $this->session->userdata('codigo'); 
        $id = $this->input->post('id'); 
        $tipo = $this->input->post('tipo'); 

        $datosu['usuarios'] = $this->profesor_model->datosuser($sesion);
        $datosu['Adjunto'] = $this->profesor_model->consultaradjid2($id);
        $datosu['AdjuntoC'] = $this->profesor_model->consultardocidC2($id);
        $datosu['Comentarios'] = $this->profesor_model->ComentariosFinal($id);
        $datosu['Estado'] = $tipo;

        $this->load->view('contenidop/contenedorComentarios', $datosu);
        
        

    }

//---------------------------------------------------------------------------------------------------------------------------->    
//-------------------------------------------Enviando comentarios------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    public function enviarcomentA(){
        
        $sesion = $this->session->userdata('codigo');                     
        date_default_timezone_set('America/Bogota');
        $fechacomentado =  date("Y/m/d H:i:s");                
        $idadjunto = $this->input->post('idadjunto');
        $idusuario = $this->input->post('idusuario');
        $comentario = $this->input->post('comentario');
        $tipo = $this->input->post('tipo'); 
        
        $datos = array(
            'comentario' => $comentario,
            'fechacomentario' => $fechacomentado,
            'cod_comento' => $idusuario,           
            'id_adjunto' => $idadjunto
        );
        
        $this->profesor_model->enviarnuevocomentarioA($datos);        
        $datosu['usuarios'] = $this->profesor_model->datosuser($sesion);
        $datosu['Adjunto'] = $this->profesor_model->consultaradjid($idadjunto);
        $datosu['AdjuntoC'] = $this->profesor_model->consultardocidC($idadjunto);
        $datosu['Comentarios'] = $this->profesor_model->ComentariosAnte($idadjunto);
        $datosu['Estado'] = $tipo;
        
        $this->load->view('contenidop/contenedorComentarios', $datosu);
        
        
    
        }
    
    public function enviarcomentF(){
        
        $sesion = $this->session->userdata('codigo');                     
        date_default_timezone_set('America/Bogota');
        $fechacomentado =  date("Y/m/d H:i:s");                
        $idadjunto = $this->input->post('idadjunto');
        $idusuario = $this->input->post('idusuario');
        $comentario = $this->input->post('comentario');
        $tipo = $this->input->post('tipo'); 
        
        $datos = array(
            'comentario' => $comentario,
            'fechacomentario' => $fechacomentado,
            'cod_comento' => $idusuario,           
            'id_adjunto' => $idadjunto
        );
        
        $this->profesor_model->enviarnuevocomentarioF($datos);        
        $datosu['usuarios'] = $this->profesor_model->datosuser($sesion);
        $datosu['Adjunto'] = $this->profesor_model->consultaradjid2($idadjunto);
        $datosu['AdjuntoC'] = $this->profesor_model->consultardocidC2($idadjunto);
        $datosu['Comentarios'] = $this->profesor_model->ComentariosFinal($idadjunto);
        $datosu['Estado'] = $tipo;

        $this->load->view('contenidop/contenedorComentarios', $datosu);
        
        

        }
    
//---------------------------------------------------------------------------------------------------------------------------->    
//-------------------------------------------Enviando anexo------------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
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
            if ($this->profesor_model->subiranexo($datos)==TRUE) {}
            
        }else{
            echo $this->upload->display_errors();
        }
    }
    
    public function subiranexo2(){

        $iddocumento = $this->input->post('iddocumentoanexo');
        $descripcionanexo = $this->input->post('txtdescripcionanexos');
        date_default_timezone_set('America/Bogota');
        $fecha_adjuntado =   date("Y/m/d H:i:s");

        $config['upload_path'] = "./css/anexos2/";
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
            if ($this->profesor_model->subiranexo2($datos)==TRUE) {}
            
        }else{
            echo $this->upload->display_errors();
        }
    }
    
    public function cargarnuevosanexos(){
        
        $iddocumento = $this->input->post('id');
        $tipo = $this->input->post('tipo'); 
        
        $datosu['Adjunto'] = $this->profesor_model->consultardocid($iddocumento);
        $datosu['Anexos'] = $this->profesor_model->consultaranexid($iddocumento);
        $datosu['Estado'] = $tipo;
        $this->load->view('contenidop/contenedorAnexosguardados', $datosu);
        
    } 
    
    public function cargarnuevosanexos2(){
        
        $iddocumento = $this->input->post('id');
        $tipo = $this->input->post('tipo'); 
        
        $datosu['Adjunto'] = $this->profesor_model->consultardocid2($iddocumento);
        $datosu['Anexos'] = $this->profesor_model->consultaranexid2($iddocumento);
        $datosu['Estado'] = $tipo;
        $this->load->view('contenidop/contenedorAnexosguardados', $datosu);
        
    }
    
//---------------------------------------------------------------------------------------------------------------------------->    
//-------------------------------------Modificar datos personales------------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    public function modificardatospersonales(){
        
        if ($this->input->is_ajax_request()){
            
            $codigo = $sesion;
            $sesion = $this->session->userdata('codigo');  
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
         
     $this->profesor_model->actulizardatos($datos,$codigo);
          return 'hola';        
        
    }else{
            show_404();
        }
      
    }
    
//---------------------------------------------------------------------------------------------------------------------------->    
//------------------------------------------- Actualizacion del proyecto ----------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
        
    public function actualizarante(){
        
        $descripcionproblema = $this->input->post('descripcionproblema');
        $objetivos = $this->input->post('objetivos');
        $justificacion = $this->input->post('justificacion');
        $antecedentes = $this->input->post('antecedentes');
        $marcoc = $this->input->post('marcoc');
        $marcot = $this->input->post('marcot'); 
        $alcance = $this->input->post('alcance');
        $cronograma = $this->input->post('cronograma');
        $presupuesto = $this->input->post('presupuesto');
        $bibliografia = $this->input->post('bibliografia');
        $idavance = $this->input->post('idavance');
        
        $datos = array(
                'descripcionproblema' => $descripcionproblema,
                'objetivos' => $objetivos,
                'justificacion' => $justificacion,
                'antecedentes' => $antecedentes,           
                'marcoc' => $marcoc,           
                'marcot' => $marcot,           
                'alcance' => $alcance,           
                'cronograma' => $cronograma,           
                'presupuesto' => $presupuesto,           
                'bibliografia' => $bibliografia
            );
        
        $this->profesor_model->avanceante($datos,$idavance);

    }
    
    public function actualizarante2(){
        
        $Estado = $this->input->post('Estado');
        $Estado2 = $this->input->post('Estado2');
        $idavance = $this->input->post('idavance');
        
        $datos = array(
                'Estado' => $Estado
            );
        
        $datos2 = array(
                'Estado' => $Estado2
            );
        
        $this->profesor_model->avanceante2($datos,$idavance);
        $this->profesor_model->avanceante3($datos2,$idavance);

    }
    
//---------------------------------------------------------------------------------------------------------------------------->    
//------------------------------------------- Actualizacion del proyecto ----------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
        
    public function actualizarfinal(){
        
        $resumen = $this->input->post('resumen');
        $introduccion = $this->input->post('introduccion');
        $marco_teorico = $this->input->post('marco_teorico');
        $metodologia = $this->input->post('metodologia');
        $resultados = $this->input->post('resultados');
        $concluciones = $this->input->post('concluciones'); 
        $anexos = $this->input->post('anexos');
        $bibliografia = $this->input->post('bibliografia');
        $idavance = $this->input->post('idavance');
        
        $datos = array(
                'resumen' => $resumen,
                'introduccion' => $introduccion,
                'marco_teorico' => $marco_teorico,
                'metodologia' => $metodologia,           
                'resultados' => $resultados,           
                'concluciones' => $concluciones,           
                'anexos' => $anexos,           
                'bibliografia' => $bibliografia
            );
        
        $this->profesor_model->avancefinal($datos,$idavance);

    }
    
    public function actualizarfinal2(){
        
        $Estado = $this->input->post('Estado');
        $idavance = $this->input->post('idavance');
        
        $datos = array(
                'Estado' => $Estado
            );
        
        $this->profesor_model->avancefinal2($datos,$idavance);

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
      
        if ($this->profesor_model->enviarmensajes($difiucltad)==TRUE){            
            echo 'TRUE';            
        }else{
            return 'false';
        }
        
        
    }
    
}
