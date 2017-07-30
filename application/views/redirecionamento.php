<?php

foreach ($user as $user) {

    if ($user->user_tipo_user_id == 1) {
        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $this->db->where('produto_user_id', $this->session->userdata('user_id'));
        $dados['produto'] = $this->db->get('produto')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/meusProdutosLista', $dados);
        $this->load->view('inc/footer-adm');
    } else if ($user->user_tipo_user_id == 2) {
        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $dados['produto'] = $this->db->get('produto')->result();

        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $this->db->where('produto_destaque', "1");
        $dados['produto_destaque'] = $this->db->get('produto', 3)->result();

        $this->load->view('inc/head-adm');
        $this->load->view('produtos/all_adverts', $dados);
        $this->load->view('inc/footer-adm');
    } else {
        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $this->db->where('produto_user_id', $this->session->userdata('user_id'));
        $dados['produto'] = $this->db->get('produto')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/meusProdutosLista', $dados);
        $this->load->view('inc/footer-adm');
    }
}
                                