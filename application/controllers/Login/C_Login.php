<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends Controller {
        
    public function __construct() { 
        parent::__construct();
        $this->load->model('Login/M_Login');
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
    
    function ForgotToPassword(){
        $emailTo = $this->input->post("email");
        
        $validate = $this->M_Main->ValidateForgot($emailTo);

        if($validate > 0){
            $cc = "";
            $subject = "Recuperar contraseña";
            $html = $this->load->view("Login/V_Email_Template",array("id"=>$validate),true);
//            $html = "<h2>Recuperar Contraseña</h2><hr><br> <a href='".base_url()."C_Service/ForgotToPassword/".$validate."'>Clic AQUI<a>";

            $res = $this->SendEmail($emailTo,$cc,$subject,$html);
        }else{
            $res = "EMPTY";
        }
        echo $res;     
    }
   
}
