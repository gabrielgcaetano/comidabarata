<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Denuncia extends CI_Controller {

    public function verifica_sessao() {
        if ($this->session->userdata('user_logado') == false) {
            redirect(base_url('user/loginView'));
        }
    }

    public function index() {
        
    }

    public function insert() {
        if ($this->input->post('denuncia_produto_id') != null) {
            // recebe os dados do formulário
            $data['denuncia_titulo'] = $this->input->post('denuncia_titulo');
            $data['denuncia_descricao'] = $this->input->post('denuncia_descricao');
            $data['denuncia_user_id_usuario'] = $this->session->userdata('user_id');
            $data['denuncia_user_id_empresa'] = $this->input->post('denuncia_user_id_empresa');
            $data['denuncia_produto_id'] = $this->input->post('denuncia_produto_id');
            $data['denuncia_check'] = 0;

            if ($this->db->insert('denuncia', $data)) {
                redirect(base_url('main'));
            } else {
                redirect(base_url('main'));
            }
        } else {
            redirect(base_url('main'));
        }
    }
    
    public function selectOff(){
        $this->db->select('*');
        $this->db->join('produto', 'denuncia_produto_id=produto_id', 'inner');
        $this->db->where('denuncia_check', 0);
        $this->db->where('denuncia_user_id_empresa', $this->session->userdata('user_id'));
        $dados['denuncia'] = $this->db->get('denuncia')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('adm/denunciaLista', $dados);
        $this->load->view('inc/footer-adm');
    
    }
    
    public function selectOn(){
        $this->db->select('*');
        $this->db->join('produto', 'denuncia_produto_id=produto_id', 'inner');
        $this->db->where('denuncia_check', 1);
        $this->db->where('denuncia_user_id_empresa', $this->session->userdata('user_id'));
        $dados['denuncia'] = $this->db->get('denuncia')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('adm/denunciaListaConcluida', $dados);
        $this->load->view('inc/footer-adm');
    
    }
    
    public function findPorTitulo(){
        $titulo = $this->input->post('denuncia_titulo');

        $this->db->select('*');
        $this->db->join('produto', 'denuncia_produto_id=produto_id', 'inner');
        $this->db->where('denuncia_user_id_empresa', $this->session->userdata('user_id'));
        $this->db->like('denuncia_titulo', $titulo);
        $dados['denuncia'] = $this->db->get('denuncia')->result();
        $count = count($dados['denuncia']);

        // Verifica se resultou em Zero resultados
        if ($count > 0) {
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('adm/denunciaLista', $dados);
            $this->load->view('inc/footer-adm');
        } else {
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('modal/modalPesquisaZero');
            $this->load->view('adm/denunciaLista', $dados);
            $this->load->view('inc/footer-adm');
        }
    }
    
    public function updateDenunciaConcluida(){
        $id = $this->input->post('denuncia_id');

        $data['denuncia_check'] = 1;

        $this->db->where('denuncia_id', $id);
        if ($this->db->update('denuncia', $data)) {
            // recarrega a view (index)
            redirect(base_url('denunciasMinhaEmpresaOn'));
        }
    }
    

}
