<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('adm/main');
        $this->load->view('inc/footer-adm');
    }

    public function login() {

        $this->load->view('inc/head-acesso');
        $this->load->view('acesso/login');
        $this->load->view('inc/footer-acesso');
    }
    
    public function login_entry() {

        // Pega os dados do Formulario de Login
        $user_email = $this->input->post('user_email');
        $user_senha = $this->input->post('user_senha');

        // Compara os dados no banco
        $this->db->where('user_email', $user_email);
        $this->db->where('user_senha', $user_senha);

        // Retorna o resultado
        $data['user'] = $this->db->get('user')->result();
        
        if (count($data['user']) == 1) {
            $dados['user_email'] = $data['user'][0]->user_email;
            $dados['user_id'] = $data['user'][0]->user_id;
 
            $this->session->set_userdata('user_id', $dados['user_id']);

            redirect('produto');
        } else {

            redirect('main?ErroSenha');
        }
    }

    public function register() {

        $this->load->view('inc/head-acesso');
        $this->load->view('acesso/register');
        $this->load->view('inc/footer-acesso');
    }

    public function register_save() {
        // recebe os dados do formulário
        $data['user_nome'] = $this->input->post('user_nome');
        $data['user_email'] = $this->input->post('user_email');
        $data['user_senha'] = $this->input->post('user_senha');
        

        if ($this->db->insert('user', $data)) {

            redirect(base_url('produto'));
        } else {
            redirect(base_url(''));
        }
    }

    
    
    
    
    
    
}
