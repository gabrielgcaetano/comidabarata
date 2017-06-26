<?php

class Produto_model extends CI_Model{
    function __construct() {
        
        parent::__construct();
    }
    
    public function tipoProdutosSalvar(){
        
       // recebe os dados do formulário
        $data['tipo_produto_nome'] = $this->input->post('tipo_produto_nome');
        $data['tipo_produto_status'] = 1;

        // Produto Salvo
        return $this->db->insert('tipo_produto', $data);
    }
    
}