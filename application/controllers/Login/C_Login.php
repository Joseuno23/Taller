<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends Controller {
        
    public function __construct() { 
        parent::__construct();
    }

    public function index(){
        $data['menu'] = $this->load->view('V_Menu',false,true);
        $this->load->view('V_Index',$data);
    }
    
    
   
}
