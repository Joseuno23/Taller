<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function ValidateSession() {
        if (!$this->session->has_userdata('IdUser')) {
            header('Location: ' . base_url());
            return false;
        }
    }

}