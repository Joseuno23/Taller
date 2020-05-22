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
    
    function Login(){
        echo json_encode(array("res" => $this->M_Login->Validar_User()));
    }
    
    function LoginToGoogle(){
        $this->load->library('Googleplus');
        
        if (isset($_GET['code'])) {
            
            $this->googleplus->getAuthenticate();

            $validate = $this->M_Main->Validar_User($this->googleplus->getUserInfo());

            if($validate == "OK"){
                header('Location: ' . base_url()."C_Panel");
            }else{
                header('Location: ' . base_url());
            }
        }else{
            echo "nada papá";
        }
    }
   
}
