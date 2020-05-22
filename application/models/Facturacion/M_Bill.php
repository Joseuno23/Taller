<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Bill extends VS_Model {

    public function __construct() {
        parent::__construct();
    }

	function Retencion($id = false){
        
        if($id)
            $this->db->where('rete_id',$id);
        
        $result = $this->db->select('*')
                ->from('cat_retefuente')
                ->get();
       
        return $result->result();
    }
	
	function GetCategorias($id = false) {

        if ($id)
            $this->db->where('id_categoria', $id);

        $result = $this->db->select('*')
                ->from('sys_categoria')
                ->like('tipo', 'P')
                ->order_by('descripcion')
                ->get();

        return $result->result();
    }
}
