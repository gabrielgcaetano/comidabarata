<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index() {
        if(isset($_SESSION['user_id'])){
             $this->db->where('user_id', $_SESSION['user_id']);
            $dados['user'] = $this->db->get('user')->result();
            if  ($dados['user'][0]->user_tipo_user_id == 3) {
                $this->load->view('redirecionamento', $dados);
            }
        }
        
        
        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $this->db->order_by("produto_data_cadastro", "asc");
        $dados['produto'] = $this->db->get('produto')->result();
        
        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $this->db->where('produto_destaque', "1");
        $dados['produto_destaque'] = $this->db->get('produto', 12)->result();

        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $this->db->where('produto_validade_Bol', "1");
        $this->db->order_by("produto_data_cadastro", "asc");
        $dados['produto_validade'] = $this->db->get('produto', 12)->result();

        $this->db->select('*');
        $this->db->where('transacao_user_id', $this->session->userdata('user_id'));
        $this->db->where('transacao_status', "0");
        $this->db->where('transacao_status_item', "1");
        $this->db->where('transacao_token', "");
        $this->db->join('produto', 'transacao_produto_id=produto_id', 'inner');
        $data['carrinho'] = $this->db->get('transacao')->result();

        if (!isset($_SESSION['user_nomee'])) {
            $this->session->set_userdata('user_nomee', "");
        }

        $this->load->view('inc/head_main');
        $this->load->view('inc/nav_superior', $data);
        $this->load->view('home', $dados);
        $this->load->view('inc/footer_main');
    }

    public function login() {
        $this->load->view('inc/head-website');
        $this->load->view('main');
        $this->load->view('inc/footer-website');
    }

}
