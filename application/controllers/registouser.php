<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registouser extends CI_Controller {

    
    public function __construct(){
        parent::__construct();
        $this->load->model('registrouser_model');
    }
 
    
    public function index(){ 
   
        $this->load->view('registrouser');
        
    }
}