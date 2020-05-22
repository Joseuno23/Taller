<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Bill extends Controller {

    public function __construct() {
        parent::__construct();
		$this->load->model('Facturacion/M_Bill');
        $this->ValidateSession();
    }

    public function Panel() {
        $array['menus'] = $this->M_Main->ListMenu();

        $Header['menu'] = $this->load->view('Template/Menu/V_Menu', $array, true);
        $Header['array_css'] = array(DATATABLES_CSS, SWEETALERT_CSS, SELECT2_CSS, RANGOPICKER_CSS, ICHECK_CSS_RED, DATEPICKER_CSS);
        $this->load->view('Template/V_Header', $Header);
        
		$data = array();
        foreach ($this->M_Bill->LoadButtonPermissions("FACTURA") as $btn) {
            $data[$btn->name] = $btn->name;
        }
        
        $tabla = $this->load->view('Billing/Bill/V_List_Bill', $data, true);
        $clientes = $this->M_Bill->ListarClientesNew();

        $this->load->view('Billing/Bill/V_Panel', array('table' => $tabla, 'clientes' => $clientes));

        $Footer['sidebar_tabs'] = $this->load->view('Template/V_sidebar_tabs', null, true);
        $Footer['array_js'] = array(DATATABLES_JS, DATATABLES_JS_B, SWEETALERT_JS, SELECT2_JS, MOMENT, RANGOPICKER_JS, ICHECK_JS, DATEPICKER_JS);
        $Footer["btn_datatable"] = BTN_DATATABLE_JS;
        $this->load->view('Template/V_Footer', $Footer);
    }
    
    public function NewP() {
        $array['menus'] = $this->M_Main->ListMenu();

        $Header['menu'] = $this->load->view('Template/Menu/V_Menu', $array, true);
        $Header['array_css'] = array(DATATABLES_CSS, ALERTIFY_CSS,ALERTIFY_CSS2,SELECT2_CSS,SWEETALERT_CSS,DATEPICKER_CSS,TIMEPICKER_CSS, FILER_CSS);
        
        $this->load->view('Template/V_Header', $Header);
        
        $data['clientes'] = $this->M_Bill->ListarClientesNew();
        $data['retenciones'] = $this->M_Bill->Retencion();
        $data['category'] = $this->M_Bill->GetCategorias();
       
        $detail = array();
        $adjuntos = array();
                
        $btns = $this->M_Bill->LoadButtonPermissions("FACTURA");
        
        foreach ($btns as $btn) {
            $button = $btn->name;
            $data[$button] = $button;
        }
        
        $data['adjuntos'] = $this->load->view('Billing/Bill/V_Adjuntos',array('adjuntos'=>$adjuntos,'factura_id'=>''),true);
        $data['detail'] = '';
        $this->load->view('Billing/Bill/V_Form_New',$data);

        $Footer['sidebar_tabs'] = $this->load->view('Template/V_sidebar_tabs', null, true);
        $Footer['array_js'] = array(DATATABLES_JS, DATATABLES_JS_B, ALERTIFY_JS,SELECT2_JS,SWEETALERT_JS,DATEPICKER_JS, AUTO_NUMERIC,TIMEPICKER_JS, FILER_JS);
        $this->load->view('Template/V_Footer', $Footer);
    }
    
    public function Edit($id) {
        $array['menus'] = $this->M_Main->ListMenu();

        $Header['menu'] = $this->load->view('Template/Menu/V_Menu', $array, true);
        $Header['array_css'] = array(DATATABLES_CSS, ALERTIFY_CSS,ALERTIFY_CSS2,SELECT2_CSS,SWEETALERT_CSS,DATEPICKER_CSS,TIMEPICKER_CSS, FILER_CSS);
        
        $this->load->view('Template/V_Header', $Header);
        
        $data['id'] = $id;
        
        $data['row'] = $this->M_Bill->InfoBill($id);
        $data['val'] = $this->M_Bill->InfoValues($id);
        $data['clientes'] = $this->M_Bill->ListarClientesNew();
        $data['campanas'] = $this->M_Bill->ListarCampana($data['row']->id_cliente);
        $data['retenciones'] = $this->M_Bill->Retencion();
        $data['category'] = $this->M_Bill->GetCategorias();
       
        $detail = $this->M_Bill->ListaDetailBill($id);
        $adjuntos = $this->M_Bill->ListaAdjuntos($id);
                
        $btns = $this->M_Bill->LoadButtonPermissions("FACTURA");
        
        foreach ($btns as $btn) {
            $button = $btn->name;
            $data[$button] = $button;
        }
        
        $data['adjuntos'] = $this->load->view('Billing/Bill/V_Adjuntos',array('adjuntos'=>$adjuntos,'factura_id'=>$id),true);
        $data['detail'] = $this->load->view('Billing/Bill/V_Table_Detail',array('detail'=>$detail),true);
        $this->load->view('Billing/Bill/V_Form_Update',$data);

        $Footer['sidebar_tabs'] = $this->load->view('Template/V_sidebar_tabs', null, true);
        $Footer['array_js'] = array(DATATABLES_JS, DATATABLES_JS_B, ALERTIFY_JS,SELECT2_JS,SWEETALERT_JS,DATEPICKER_JS, AUTO_NUMERIC,TIMEPICKER_JS, FILER_JS);
        $this->load->view('Template/V_Footer', $Footer);
    }
    
    
   
}
