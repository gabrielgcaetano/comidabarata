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
        $email_user = $this->input->post('email_user');
        $password_user = $this->input->post('password_user');

        // Compara os dados no banco
        $this->db->where('email_user', $email_user);
        $this->db->where('password_user', $password_user);

        // Retorna o resultado
        $data['user'] = $this->db->get('user')->result();
        
        if (count($data['user']) == 1) {
            $dados['full_name_user'] = $data['user'][0]->email_user;
            $dados['id'] = $data['user'][0]->id;
 
            $this->session->set_userdata('id_user', $dados['id']);

            redirect('produto');
        } else {

            redirect('main');
        }
    }

    public function register() {

        $this->load->view('inc/head-acesso');
        $this->load->view('acesso/register');
        $this->load->view('inc/footer-acesso');
    }

    public function register_save() {
        // recebe os dados do formulário
        $data['full_name_user'] = $this->input->post('full_name_user');
        $data['email_user'] = $this->input->post('email_user');
        $data['password_user'] = $this->input->post('password_user');
        

        if ($this->db->insert('user', $data)) {

            redirect(base_url('produto'));
        } else {
            redirect(base_url(''));
        }
    }

    
    
    
    
    
    
}
