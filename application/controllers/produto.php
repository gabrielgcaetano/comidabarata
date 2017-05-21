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
        $this->db->where('produto_status', "1");
        $dados['produto'] = $this->db->get('produto')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/all_adverts', $dados);
        $this->load->view('inc/footer-adm');
    }

    public function my_adverts() {
        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $this->db->where('produto_user_id', $this->session->userdata('user_id'));
        $dados['produto'] = $this->db->get('produto')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/my_adverts', $dados);
        $this->load->view('inc/footer-adm');
    }

    public function all_adverts() {
        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $dados['produto'] = $this->db->get('produto')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/all_adverts', $dados);
        $this->load->view('inc/footer-adm');
    }

    public function registerProduct() {

        $this->db->select('*');
        $dados['tipo_produto'] = $this->db->get('tipo_produto')->result();



        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/register_product', $dados);
        $this->load->view('inc/footer-adm');
    }

    public function saveRegister() {

        // recebe os dados do formulário
        $data['produto_nome'] = $this->input->post('produto_nome');
        $data['produto_preco_novo'] = $this->input->post('produto_preco_novo');
        $data['produto_user_id'] = $this->session->userdata('user_id');
        $data['produto_tipo_produto_id'] = $this->input->post('produto_tipo_produto');
        $data['produto_status'] = 1;

        // define as configurações para upload da foto
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 1024;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        $this->upload->do_upload('produto_foto');

        $arquivo = $this->upload->data();
        $data['produto_foto'] = $arquivo['file_name'];

        if ($this->db->insert('produto', $data)) {

// recarrega a view (index)
            redirect(base_url('produto'));
        } else {
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('produtos/register_product');
            $this->load->view('inc/footer-adm');
        }
    }

    public function formUpdate($produto_id = null) {
        $this->db->where('produto_id', $produto_id);
        $data['produto'] = $this->db->get('produto')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/update_product', $data);
        $this->load->view('inc/footer-adm');
    }

    public function formProduct($id = null) {
        $this->db->where('produto_id', $id);
        $data['produto'] = $this->db->get('produto')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/product', $data);
        $this->load->view('inc/footer-adm');
    }

    public function update() {
        // recebe os dados do formulário
        $id = $this->input->post('produto_id');

        $data['produto_nome'] = $this->input->post('produto_nome');
        $data['produto_preco_novo'] = $this->input->post('produto_preco_novo');
        $data['produto_status'] = $this->input->post('produto_status');

        $this->db->where('produto_id', $id);
        if ($this->db->update('produto', $data)) {
            // recarrega a view (index)
            redirect(base_url('produto'));
        }
    }

    public function comprar() {

        // recebe os dados do formulário
        $data['produto_id'] = $this->input->post('produto_id');
        $data['user_id'] = $_SESSION["user_id"];
        $data['produto_estoque'] = $this->input->post('produto_estoque');
        $data['produto_status'] = 1;


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
        $this->db->where('user_id', $this->session->userdata('user_id'));
        $this->db->join('produto', 'produto_id=transacao_produto_id', 'inner');
        $dados['transacao'] = $this->db->get('transacao')->result();



        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/historico', $dados);
        $this->load->view('inc/footer-adm');
    }

    public function tipoProdutoLista() {
        $this->db->select('*');
        $dados['tipo_produto'] = $this->db->get('tipo_produto')->result();

        $this->load->view('inc/modal');
        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('adm/tipoProdutosLista', $dados);
        $this->load->view('inc/footer-adm');
    }

    public function tipoProdutoAdd() {
        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('adm/tipoProdutosAdd');
        $this->load->view('inc/footer-adm');
    }

    public function tipoProdutoSalvar() {
        // recebe os dados do formulário
        $data['tipo_produto_nome'] = $this->input->post('tipo_produto_nome');
        $data['tipo_produto_status'] = 1;

        // Produto Salvo

        if ($this->db->insert('tipo_produto', $data)) {

            $this->db->select('*');
            $dados['tipo_produto'] = $this->db->get('tipo_produto')->result();

            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('inc/modal');
            $this->load->view('modal/modalSalvoCadastro');
            $this->load->view('adm/tipoProdutosLista', $dados);
            $this->load->view('inc/footer-adm');

            // Erro Cadastro
        } else {

            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('inc/modal');
            $this->load->view('modal/modalErroCadastro');
            $this->load->view('produto/tipoProdutoAdd');
            $this->load->view('inc/footer-adm');
        }
    }

    public function tipoProdutoPesquisa() {
        $nome = $this->input->post('tipo_produto_nome');

        $this->db->select('*');
        $this->db->like('tipo_produto_nome', $nome);
        $dados['tipo_produto'] = $this->db->get('tipo_produto')->result();
        $count = count($dados['tipo_produto']);

        // Verifica se resultou em Zero resultados
        if ($count > 0) {
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('adm/tipoProdutosLista.php', $dados);
            $this->load->view('inc/footer-adm');
        } else {
            $this->load->view('inc/modal');
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('inc/modal');
            $this->load->view('modal/modalPesquisaZero');
            $this->load->view('adm/tipoProdutosLista.php', $dados);
            $this->load->view('inc/footer-adm');
        }
    }
    
    public function tipoProdutosUpdate($tipo_produto_id = null) {
        $this->db->where('tipo_produto_id', $tipo_produto_id);
        $data['tipo_produto'] = $this->db->get('tipo_produto')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('adm/tipoProdutosUpdate', $data);
        $this->load->view('inc/footer-adm');
    }

    public function tipoProdutosUpdateSalvar() {
        // recebe os dados do formulário
        $id = $this->input->post('tipo_produto_id');

        $data['tipo_produto_nome'] = $this->input->post('tipo_produto_nome');
        $data['tipo_produto_status'] = $this->input->post('tipo_produto_status');

        $this->db->where('tipo_produto_id', $id);
        if ($this->db->update('tipo_produto', $data)) {
            // Produto Salvo
            $this->db->select('*');
            $this->db->where('tipo_produto_status=1');
            $dados['tipo_produto'] = $this->db->get('tipo_produto')->result();

            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('inc/modal');
            $this->load->view('modal/modalSalvoUpdate');
            $this->load->view('adm/tipoProdutosLista', $dados);
            $this->load->view('inc/footer-adm');
        } else {
            // Erro Cadastro
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('inc/modal');
            $this->load->view('modal/modalErroUpdate');
            $this->load->view('adm/tipoProdutosAdd');
            $this->load->view('inc/footer-adm');
        }
    }

}
