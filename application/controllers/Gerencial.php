<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Apenas Empresa

class Gerencial extends CI_Controller {

    public function verificar_session() {
        if ($this->session->userdata('logado') == false) {
            redirect('main');
        }
    }

    public function verificar_nivel() {
        if ($this->session->userdata('nivel_usuario') == "3") {
            redirect(base_url());
        }
    }

    public function index() {
        
    }

    public function grafico_marcas_piechart() {
        $this->verificar_session();
        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('gerencial/grafico_marcas');
        $this->load->view('inc/footer-adm');
    }

    public function grafico_view_barra() {
        $this->verificar_session();
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
        $this->verificar_session();
        $valor = 0;
        $total = 0;
        $valorComissao = 0;
        $lucro = 0;
        $quantidadeItes = 0;
        $start_date = "01-09-2017";
        $end_date = "30-09-2017";

        $start_date = $this->input->post('data_inicio');
        $end_date = $this->input->post('data_final');

        $data['h_data_inicio'] = $start_date;
        $data['h_data_final'] = $end_date;

        $this->db->select('transacao_produto_quantidade, produto_preco_venda');
        $this->db->where('transacao_empresa_id', $this->session->userdata('user_id'));
        $this->db->where('transacao_status', "0");
        $this->db->where('transacao_status_item', "0");
        $this->db->where('transacao_data BETWEEN "' . date('Y-m-d H:m:s', strtotime($start_date)) . '" and "' . date('Y-m-d H:m:s', strtotime($end_date)) . '"');
        $this->db->join('produto', 'transacao_produto_id=produto_id', 'inner');
        $data['transacao'] = $this->db->get('transacao')->result();

        foreach ($data['transacao'] as $trans) {
            $total = $total + ($trans->transacao_produto_quantidade * $trans->produto_preco_venda);
            $quantidadeItes += $trans->transacao_produto_quantidade;
        }
        $data['valorTotal'] = $total;
        $data['valorComissao'] = $total * 0.1;
        $data['lucro'] = $total * 0.9;
        $data['quantidadeItes'] = $quantidadeItes;
        $data['data_inicio'] = $start_date;
        $data['data_final'] = $end_date;

        if (date('d/m/Y', strtotime($start_date)) != "01/01/1970") {
            $this->load->view('gerencial/print/rel_vendas_resumido', $data);
        }

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('gerencial/vendasPorData', $data);
        $this->load->view('inc/footer-adm');
    }

    public function print_vendas_resumida() {
        $this->verificar_session();
        $valor = 0;
        $total = 0;
        $valorComissao = 0;
        $lucro = 0;
        $quantidadeItes = 0;
        $start_date = "01-09-2017";
        $end_date = "30-09-2017";

        $start_date = $this->input->post('h_data_inicio');
        $end_date = $this->input->post('h_data_final');
        $data['data_inicio'] = date('m-d-Y', strtotime($start_date));
        $data['data_final'] = date('m-d-Y', strtotime($end_date));

        $this->db->select('transacao_produto_quantidade, produto_preco_venda');
        $this->db->where('transacao_empresa_id', $this->session->userdata('user_id'));
        $this->db->where('transacao_status', "0");
        $this->db->where('transacao_status_item', "0");
        $this->db->where('transacao_data BETWEEN "' . date('Y-d-m H:m:s', strtotime($start_date)) . '" and "' . date('Y-d-m H:m:s', strtotime($end_date)) . '"');
        $this->db->join('produto', 'transacao_produto_id=produto_id', 'inner');
        $data['transacao'] = $this->db->get('transacao')->result();

        foreach ($data['transacao'] as $trans) {
            $total = $total + ($trans->transacao_produto_quantidade * $trans->produto_preco_venda);
            $quantidadeItes += $trans->transacao_produto_quantidade;
        }
        $data['valorTotal'] = $total;
        $data['valorComissao'] = $total * 0.1;
        $data['lucro'] = $total * 0.9;
        $data['quantidadeItes'] = $quantidadeItes;


        $this->load->view('gerencial/print/rel_vendas_resumido', $data);
        ;
    }

    public function relAnunciosAtivos() {
        $this->verificar_session();
        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $data['produto'] = $this->db->get('produto')->result();

        $this->load->view('gerencial/print/rel_anuncios_ativos', $data);
    }

    public function grafMaisVistos() {
        $this->verificar_session();
        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $this->db->limit('5', '0');
        $dados['produto'] = $this->db->get('produto')->result();

        $array = " ['Produto', 'Views'], ";

        foreach ($dados['produto'] as $produto) {
            $array = $array . " ['" . $produto->produto_nome . "', " . number_format($produto->produto_visita, 0) . "], ";
        }

        $dados['array'] = "" . $array . "";

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('gerencial/grafico_mais_vistos', $dados);
        $this->load->view('inc/footer-adm');
    }

    public function grafMaisVendidos() {
        $this->verificar_session();
        $this->verificar_nivel();
        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $this->db->where('transacao_empresa_id', $this->session->userdata('user_id'));
        $this->db->group_by('transacao_produto_id');
        $this->db->join('produto', 'transacao_produto_id=produto_id', 'inner');
        $this->db->limit('5', '0');
        $dados['transacao'] = $this->db->get('transacao')->result();

        $array = " ['Produto', 'Views'], ";

        foreach ($dados['transacao'] as $transacao) {
            $array = $array . " ['" . $transacao->produto_nome . "', " . number_format($transacao->transacao_produto_quantidade, 0) . "], ";
        }

        $dados['array'] = "" . $array . "";

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('gerencial/grafico_mais_vistos', $dados);
        $this->load->view('inc/footer-adm');
    }

}
