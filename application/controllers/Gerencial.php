<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gerencial extends CI_Controller {

    /**
     * Index Page for this controller. 
     * blah blah blah
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
        $this->db->select('SELECT SUM(produto_preco_venda) FROM transacao t 
        INNER JOIN produto p on t.transacao_produto_id = p.produto_id 
        WHERE t.transacao_empresa_id = 15 
        AND t.transacao_status = 0 
        AND t.transacao_status_item = 0 
        ');

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('gerencial/grafico_view_barra');
        $this->load->view('inc/footer-adm');
    }

    public function vendas() {
        $valor = 0;
        $total = 0;
        $valorComissao = 0;
        $start_date = "01-09-2017";
        $end_date = "30-09-2017";

        $this->db->select('transacao_produto_quantidade, produto_preco_venda');
        $this->db->where('transacao_empresa_id', $this->session->userdata('user_id'));
        $this->db->where('transacao_status', "0");
        $this->db->where('transacao_status_item', "0");
        $this->db->where('transacao_data BETWEEN "' . date('Y-m-d H:m:s', strtotime($start_date)) . '" and "' . date('Y-m-d H:m:s', strtotime($end_date)) . '"');
        $this->db->join('produto', 'transacao_produto_id=produto_id', 'inner');
        $data['transacao'] = $this->db->get('transacao')->result();

        foreach ($data['transacao'] as $trans) {
            $total = $total + ($trans->transacao_produto_quantidade * $trans->produto_preco_venda);
        }
        $data['valorTotal'] = $total;
        $data['valorComissao'] = $total * 0.05;


        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('gerencial/vendasPorData', $data);
        $this->load->view('inc/footer-adm');
    }

}
