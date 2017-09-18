<?php

class Produto_model extends CI_Model {

    function __construct() {

        parent::__construct();
    }

    public function tipoProdutosSalvar() {

        // recebe os dados do formulário
        $data['tipo_produto_nome'] = $this->input->post('tipo_produto_nome');
        $data['tipo_produto_status'] = 1;

        // Produto Salvo
        return $this->db->insert('tipo_produto', $data);
    }

    public function get_produtos() {
        $this->db->select('*');
        $this->db->where('produto_status', "1");
        return $dados['produto'] = $this->db->get('produto')->result();
    }
    
    public function get_produtos_destaque() {
        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $this->db->where('produto_destaque', "1");
        return $dados['produto_destaque'] = $this->db->get('produto', 3)->result();
    }

    public function get_qtd_produtos() {
        $this->db->select('count(*) as total');
        $this->db->where('produto_status', "1");
        return $this->db->get('produto')->result();
    }

    public function get_produtos_pag($value, $reg_p_pag, $categoria) {
        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $this->db->where('produto_tipo_produto_sub_id', $categoria);
        $this->db->limit($reg_p_pag, $value);
        return $dados['produto'] = $this->db->get('produto')->result();
    }

}
