<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

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
        $this->db->select('*');
        $this->db->where('status', "1");
        $dados['product'] = $this->db->get('product')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/all_adverts', $dados);
        $this->load->view('inc/footer-adm');
    }

    public function my_adverts() {
        $this->db->select('*');
        $this->db->where('status', "1");
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $dados['product'] = $this->db->get('product')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/all_adverts', $dados);
        $this->load->view('inc/footer-adm');
    }

    public function registerProduct() {
        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/register_product');
        $this->load->view('inc/footer-adm');
    }

    public function saveRegister() {

        // recebe os dados do formulário
        $data['name'] = $this->input->post('name');
        $data['price'] = $this->input->post('price');
        $data['id_user']= $this->session->userdata('id_user');
        $data['status'] = 1;

        // define as configurações para upload da foto
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 1024;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        $this->upload->do_upload('foto');

        $arquivo = $this->upload->data();
        $data['foto'] = $arquivo['file_name'];

        if ($this->db->insert('product', $data)) {

// recarrega a view (index)
            redirect(base_url('produto'));
        } else {
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('produtos/register_product');
            $this->load->view('inc/footer-adm');
        }
    }

    public function formUpdate($id = null) {
        $this->db->where('id', $id);
        $data['product'] = $this->db->get('product')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/update_product', $data);
        $this->load->view('inc/footer-adm');
    }
    
     public function formProduct($id = null) {
        $this->db->where('id', $id);
        $data['product'] = $this->db->get('product')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/product', $data);
        $this->load->view('inc/footer-adm');
    }

    public function update() {
        // recebe os dados do formulário
        $id = $this->input->post('id');

        $data['name'] = $this->input->post('name');
        $data['price'] = $this->input->post('price');
        $data['status'] = $this->input->post('status');

        $this->db->where('id', $id);
        if ($this->db->update('product', $data)) {
            // recarrega a view (index)
            redirect(base_url('produto'));
        }
    }
    
    public function comprar() {
        
        // recebe os dados do formulário
        $data['id_produto'] = $this->input->post('id');
        $data['id_user'] = $_SESSION["id_user"];
        $data['quant'] = $this->input->post('quant');
        $data['status'] = 1;


        if ($this->db->insert('transacao', $data)) {

// recarrega a view (index)
            redirect(base_url('produto/historicoCompras'));
        } else {
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('produtos?erro');
            $this->load->view('inc/footer-adm');
        }
    }
    
     public function historicoCompras() {
        $this->db->select('*');
        $this->db->where('status', "1");
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->join('product','product_id=', 'inner' );
        $dados['transacao'] = $this->db->get('transacao')->result();
        
       

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/historico', $dados);
        $this->load->view('inc/footer-adm');
    }
    
    

}
