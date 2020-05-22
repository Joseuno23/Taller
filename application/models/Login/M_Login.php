<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends VS_Model {

    public function __construct() {
        parent::__construct();
    }

    function Validar_User($data = null) {

        $this->psw = $this->input->post("psw");

        if (!empty($this->input->post('pswnew'))):
            $this->db->where("user", $this->input->post("usr"));
            $this->db->where("password", md5($this->input->post("psw")));
            $this->db->update("sys_users", array("password" => md5($this->input->post("pswnew")), "last_date" => date('Y-m-d')));
            $this->psw = $this->input->post("pswnew");
        endif;

        if ($data):
            $this->db->where("u.email", $data['email']);
        else:
            $this->db->where("u.user", $this->input->post("usr"));
            $this->db->where("u.password", md5($this->psw));
        endif;

        $result = $this->db->select("*,u.status as activ")
                ->from("sys_users u")
                ->join("sys_roles r", "u.rol = r.id_roles")
                ->join("sys_preferences_html p", "u.id_users = p.id_users", "left")
                ->get();

        if ($result->num_rows() > 0) {

            $reg = $result->row();

            if ($reg->activ == 1) {
                
                $datetime1 = new DateTime($reg->last_date);
                $datetime2 = new DateTime(date("Y-m-d"));
                $interval = $datetime1->diff($datetime2);

                if ((int) $interval->format('%a') > 60) {
                    return "CHANGE";
                } else {
                    
                    $rsTime = $this->db->query("SELECT * FROM sys_timesheet t 
                                    WHERE t.id_users = ".$reg->id_users." 
                                    AND t.id_estado = 10 AND t.num not in (6,7) AND t.festivo != 1 
                                    AND t.fecha <=  DATE_SUB(CURDATE(),INTERVAL 2 DAY)")->num_rows();
                    
                    $this->db->where("id_users", $reg->id_users);
                    $this->db->update("sys_users", array("last_entry" => date("Y-m-d H:i:s")));

                    $newdata = array(
                        'IdUser' => $reg->id_users,
                        'UserMedios' => $reg->id_users_medios,
                        'NameUser' => $reg->name,
                        'IdRol' => $reg->rol,
                        'Rol' => $reg->description,
                        'Email' => $reg->email,
                        'Avatar' => $reg->avatar,
                        'Skin' => $reg->skin,
                        'Layout' => $reg->layout,
                        'Sidebar' => $reg->sidebar,
                    );

                    $this->session->set_userdata($newdata);

                    $this->db->insert("sys_access_ip", array("fecha" => date("Y-m-d H:i:s"), "nombre" => $reg->name, "ip" => $this->getUserIP()));

                    return "OK";
                }
                
            }else{
                return "LOCKED";
            }
        } else {
            return "ERROR";
        }
    }

}
