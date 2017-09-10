<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gerencial extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        
    }

    public function grafico_marcas_piechart() {
        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('gerencial/grafico_marcas');
        $this->load->view('inc/footer-adm');
    }
    
    public function grafico_view_barra() {
        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('gerencial/grafico_view_barra');
        $this->load->view('inc/footer-adm');
    }

}
