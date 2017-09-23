<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

    public function verifica_sessao() {
        if ($this->session->userdata('user_logado') == false) {
            redirect(base_url('user/loginView'));
        }
    }

    public function index() {
        
    }

    public function produtoPorCategoria($str = null) {
        list($value, $categoria) = explode('-', $str);

        if ($value == NULL) {
            $value = 0;
        }

        $reg_p_pag = 12;

        if ($value < $reg_p_pag) {
            $dados['btnA'] = 'pointer-events: none';
        } else {
            $dados['btnA'] = '';
        }

        $this->load->model('produto_model', 'produto');
        $count = $this->produto->get_qtd_produtos();

        if (($count[0]->total - $value) < $reg_p_pag) {
            $dados['btnP'] = 'pointer-events: none';
        } else {
            $dados['btnP'] = '';
        }

        $this->load->model('produto_model', 'produto');
        $dados['produto'] = $this->produto->get_produtos_pag($value, $reg_p_pag, $categoria);

        $dados['produto_destaque'] = $this->produto->get_produtos_destaque();


        $dados['value'] = $value;
        $dados['reg_p_pag'] = $reg_p_pag;
        $dados['qtd_reg'] = $count[0]->total;

        $v_inteiro = (int) $count[0]->total / $reg_p_pag;
        $v_resto = $count[0]->total % $reg_p_pag;

        if ($v_resto > 0) {
            $v_inteiro += 1;
        }
        $dados['qtd_botoes'] = $v_inteiro;

        $this->db->select('*');
        $this->db->where('transacao_user_id', $this->session->userdata('user_id'));
        $this->db->where('transacao_status', "0");
        $this->db->where('transacao_status_item', "1");
        $this->db->where('transacao_token', "");
        $this->db->join('produto', 'transacao_produto_id=produto_id', 'inner');
        $data['carrinho'] = $this->db->get('transacao')->result();

        if (isset($dados['produto'][0]->produto_tipo_produto_sub_id)) {
            $dados['produto_tipo_produto_sub_id'] = $dados['produto'][0]->produto_tipo_produto_sub_id;
        } else {
            $dados['produto_tipo_produto_sub_id'] = '0';
        }

        $this->load->view('inc/head_main');
        $this->load->view('inc/nav_superior', $data);
        $this->load->view('produtos/produtoCategoria', $dados);
        $this->load->view('inc/footer_main');
    }

    public function produtoPesquisa() {
        $this->db->select('*');
        $this->db->where('transacao_user_id', $this->session->userdata('user_id'));
        $this->db->where('transacao_status', "0");
        $this->db->where('transacao_status_item', "1");
        $this->db->where('transacao_token', "");
        $this->db->join('produto', 'transacao_produto_id=produto_id', 'inner');
        $data['carrinho'] = $this->db->get('transacao')->result();

        if (isset($dados['produto'][0]->produto_tipo_produto_sub_id)) {
            $dados['produto_tipo_produto_sub_id'] = $dados['produto'][0]->produto_tipo_produto_sub_id;
        } else {
            $dados['produto_tipo_produto_sub_id'] = '0';
        }

        $nome = $this->input->post('produto_nome');

        $this->db->select('*');
        $this->db->like('produto_nome', $nome);
        $dados['produto'] = $this->db->get('produto')->result();
        $count = count($dados['produto']);


        // Verifica se resultou em Zero resultados
        if ($count > 0) {
            $this->load->view('inc/head_main');
            $this->load->view('inc/nav_superior', $data);
            $this->load->view('produtos/produtoCategoria', $dados);
            $this->load->view('inc/footer_main');
        } else {
            $this->load->view('inc/head_main');
            $this->load->view('inc/nav_superior', $data);
            $this->load->view('produtos/produtoCategoria', $dados);
            $this->load->view('inc/footer_main');
        }
    }

    public function detalheProduto($id = null) {
        $this->db->where('produto_id', $id);
        $this->db->join('tipo_produto_sub', 'produto_tipo_produto_sub_id=tipo_produto_sub_id', 'inner');
        $this->db->join('user', 'produto_user_id=user_id', 'inner');
        $this->db->order_by("produto_data_cadastro", "asc");
        $dados['produto'] = $this->db->get('produto')->result();

        $this->db->where('produto_user_id', $dados['produto'][0]->produto_user_id);
        $dados['anunciosEmpresa'] = $this->db->get('produto')->result();

        $this->db->select('*');
        $this->db->where('transacao_user_id', $this->session->userdata('user_id'));
        $this->db->where('transacao_status', "0");
        $this->db->where('transacao_status_item', "1");
        $this->db->where('transacao_token', "");
        $this->db->join('produto', 'transacao_produto_id=produto_id', 'inner');
        $data['carrinho'] = $this->db->get('transacao')->result();

        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $this->db->where('produto_destaque', "1");
        $this->db->order_by("produto_data_cadastro", "asc");
        $dados['produto_destaque'] = $this->db->get('produto', 12)->result();

        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $this->db->where('produto_validade_Bol', "1");
        $this->db->order_by("produto_data_cadastro", "asc");
        $dados['produto_validade'] = $this->db->get('produto', 12)->result();

        if (!isset($_SESSION['user_nomee'])) {
            $this->session->set_userdata('user_nomee', "");
        }

        $this->load->view('inc/head_main');
        $this->load->view('inc/nav_superior', $data);
        $this->load->view('produtos/produtoDetalhe', $dados);
        $this->load->view('inc/footer_main');
    }

    public function cupomPorEmpresa() {
        if (isset($_SESSION['user_nomee'])) {
            $this->db->select('*');
            $this->db->where('transacao_empresa_id', $this->session->userdata('user_id'));
            $this->db->where('transacao_status', "0");
            $this->db->where('transacao_status_item', "1");
            $this->db->join('produto', 'transacao_produto_id=produto_id', 'inner');
            $data['itensCupom'] = $this->db->get('transacao')->result();

            $this->db->select('*');
            $this->db->where('cupom_status', "1");
            $this->db->where('cupom_empresa_id', $this->session->userdata('user_id'));
            $this->db->order_by("cupom_data", "desc");
            $data['cupom'] = $this->db->get('cupom')->result();

            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('produtos/baixarCupom', $data);
            $this->load->view('inc/footer-adm');
        } else {
            redirect(base_url('user/loginView'));
        }
    }

    public function baixarItem($dadosComprimidos = null) {
        $produto_id = "";
        $token = "";
        list($token, $produto_id) = explode('-', $dadosComprimidos);

        $this->db->where('transacao_produto_id', $produto_id);
        $this->db->where('transacao_token', $token);
        $data['transacao'] = $this->db->get('transacao')->result();
        $total = count($data['transacao']);

        if ($total > 0) {
            $dado['transacao_status_item'] = '0';

            $this->db->where('transacao_token', $token);
            $this->db->where('transacao_produto_id', $produto_id);
            if ($this->db->update('transacao', $dado)) {

                $this->db->where('transacao_token', $token);
                $this->db->where('transacao_status_item', '1');
                $dataa['transacao'] = $this->db->get('transacao')->result();

                $totall = count($dataa['transacao']);

                if ($totall == 0) {
                    $dadu['cupom_status'] = '0';

                    $this->db->where('cupom_token', $token);
                    if ($this->db->update('cupom', $dadu)) {
                        redirect('produto/cupomPorEmpresa');
                    }
                }

                redirect('produto/cupomPorEmpresa');
            }
        } else {
            
        }


        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/update_product', $data);
        $this->load->view('inc/footer-adm');
    }

    public function my_adverts() {
        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $this->db->where('produto_user_id', $this->session->userdata('user_id'));
        $dados['produto'] = $this->db->get('produto')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/meusProdutosLista', $dados);
        $this->load->view('inc/footer-adm');
    }

    public function all_adverts() {
        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $dados['produto'] = $this->db->get('produto')->result();

        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $this->db->where('produto_destaque', "1");
        $dados['produto_destaque'] = $this->db->get('produto', 3)->result();

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
        $data['produto_preco_venda'] = $this->input->post('produto_preco_venda');
        $data['produto_user_id'] = $this->session->userdata('user_id');
        $data['produto_tipo_produto_id'] = $this->input->post('produto_tipo_produto');
        $data['produto_status'] = 1;

        $config = array(
            'upload_path' => './images/',
            'allowed_types' => 'jpg|png',
            'max_size' => '500',
            'file_name' => "2.jpg"
        );

        $this->load->library('upload', $config);

        $this->upload->do_upload('produto_foto');

        $arquivo = $this->upload->data();
        $data['produto_foto'] = $arquivo['file_name'];

        if ($this->db->insert('produto', $data)) {
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
        $data['produto_preco_venda'] = $this->input->post('produto_preco_venda');
        $data['produto_status'] = $this->input->post('produto_status');

        $this->db->where('produto_id', $id);
        if ($this->db->update('produto', $data)) {
            // recarrega a view (index)
            redirect(base_url('produto/meusProdutosLista'));
        }
    }

    public function carrinho() {
//        $this->verifica_sessao();
        if (isset($_SESSION['user_id']) != "") {

            // recebe os dados do formulário
            $data['transacao_produto_id'] = $this->input->post('produto_id');
            $data['transacao_user_id'] = $_SESSION["user_id"];
            $data['transacao_produto_quantidade'] = $this->input->post('transacao_produto_quantidade');
            $data['transacao_empresa_id'] = $this->input->post('transacao_empresa_id');
            $data['transacao_status_item'] = '1';


            if ($this->db->insert('transacao', $data)) {
                redirect(base_url());
            } else {
                redirect(base_url());
            }
        } else {
            redirect(base_url('user/loginView'));
        }
    }

    public function carrinhoDetalhe() {
        $this->verifica_sessao();
        if (isset($_SESSION['user_nomee'])) {

            $this->db->select('*');
            $this->db->where('transacao_user_id', $this->session->userdata('user_id'));
            $this->db->where('transacao_status', "0");
            $this->db->where('transacao_status_item', "1");
            $this->db->where('transacao_token', "");
            $this->db->join('produto', 'transacao_produto_id=produto_id', 'inner');
            $this->db->join('user', 'produto_user_id=user_id', 'inner');
            $data['carrinho'] = $this->db->get('transacao')->result();

            $this->db->select('*');
            $this->db->where('produto_status', "1");
            $this->db->where('produto_destaque', "1");
            $this->db->order_by("produto_data_cadastro", "asc");
            $data['produto_destaque'] = $this->db->get('produto', 12)->result();

            $this->load->view('inc/head_main');
            $this->load->view('inc/nav_superior', $data);
            $this->load->view('produtos/carrinhoDetalhado', $data);
            $this->load->view('inc/footer_main');
        } else {
            redirect(base_url('user/loginView'));
        }
    }

    public function removeItemCarrinho($id = null) {
        $this->db->where('transacao_id', $id);
        if ($this->db->delete('transacao')) {
            // recarrega a view (index)
            redirect(base_url());
        }
    }

    public function geraCupom($total = null) {
        $caracteres = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $mistura = substr(str_shuffle($caracteres), 0, 8);

        $data['cupom_empresa_id'] = $this->input->post('produto_user_id');
        $data['cupom_token'] = $mistura;
        $data['cupom_status'] = '1';
        $data['cupom_valor_total'] = '1';
        $data['cupom_user_id'] = $this->session->userdata('user_id');

        if ($this->db->insert('cupom', $data)) {

            $this->db->select('*');
            $this->db->where('transacao_user_id', $this->session->userdata('user_id'));
            $this->db->where('transacao_status', "0");
            $this->db->where('transacao_token', "");
            $this->db->where('transacao_status_item', "1");
            $this->db->join('produto', 'transacao_produto_id=produto_id', 'inner');
            $data['carrinho'] = $this->db->get('transacao')->result();

            foreach ($data['carrinho'] as $car) {
                $dataa['transacao_token'] = $mistura;

                $this->db->where('transacao_id', $car->transacao_id);
                if ($this->db->update('transacao', $dataa)) {
                    
                }
            }
            redirect(base_url('produto/meusCupons'));
        } else {
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('produtos/register_product');
            $this->load->view('inc/footer-adm');
        }
    }

    public function meusCupons() {
        if (isset($_SESSION['user_nomee'])) {

            $this->db->select('*');
            $this->db->where('transacao_user_id', $this->session->userdata('user_id'));
            $this->db->where('transacao_status', "0");
            $this->db->where('transacao_status_item', "1");
            $this->db->where('transacao_token', "");
            $this->db->join('produto', 'transacao_produto_id=produto_id', 'inner');
            $data['carrinho'] = $this->db->get('transacao')->result();

            $this->db->select('*');
            $this->db->where('transacao_user_id', $this->session->userdata('user_id'));
            $this->db->where('transacao_status', "0");
            $this->db->where('transacao_status_item', "1");
            $this->db->join('produto', 'transacao_produto_id=produto_id', 'inner');
            $data['itensCupom'] = $this->db->get('transacao')->result();

            $this->db->select('*');
            $this->db->where('cupom_user_id', $this->session->userdata('user_id'));
            $this->db->where('cupom_status', '1');
            $this->db->order_by("cupom_data", "desc");
            $data['cupom'] = $this->db->get('cupom')->result();

            $this->load->view('inc/head_main');
            $this->load->view('inc/nav_superior', $data);
            $this->load->view('produtos/meusCupons', $data);
            $this->load->view('inc/footer_main');
        } else {
            redirect(base_url('user/loginView'));
        }
    }

    public function cupomPesquisa() {
        $nome = $this->input->post('cupom_token');

        $this->db->select('*');
        $this->db->where('cupom_empresa_id', $this->session->userdata('user_id'));
        $this->db->like('cupom_token', $nome);
        $dados['cupom'] = $this->db->get('cupom')->result();
        $count = count($dados['cupom']);


        // Verifica se resultou em Zero resultados
        if ($count > 0) {
            $this->db->select('*');
            $this->db->where('transacao_token', $nome);
            $this->db->where('transacao_status', "0");
            $this->db->where('transacao_status_item', "1");
            $this->db->where('transacao_empresa_id', $this->session->userdata('user_id'));
            $this->db->join('produto', 'transacao_produto_id=produto_id', 'inner');
            $dados['itensCupom'] = $this->db->get('transacao')->result();

            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('produtos/baixarCupom', $dados);
            $this->load->view('inc/footer-adm');
        } else {
            redirect();
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

    /*
     * ==========================================
     * =========         Produto        =========
     * ========================================== 
     */

    public function meusProdutosLista() {
        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $this->db->where('produto_user_id', $this->session->userdata('user_id'));
        $dados['produto'] = $this->db->get('produto')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/meusProdutosLista', $dados);
        $this->load->view('inc/footer-adm');
    }

    public function meusProdutosAdd() {
        $this->db->select('*');

        $this->db->join('tipo_produto', 'tipo_produto_sub_tipo_produto_id=tipo_produto_id', 'inner');
        $this->db->order_by("tipo_produto_nome", "asc");
        $this->db->order_by("tipo_produto_sub_nome", "asc");
        $dados['tipo_produto_sub'] = $this->db->get('tipo_produto_sub')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('produtos/meusProdutosAdd', $dados);
        $this->load->view('inc/footer-adm');
    }

    public function meusProdutosSalvar() {
// recebe os dados do formulário
        $data['produto_nome'] = $this->input->post('produto_nome');
        $data['produto_descricao'] = $this->input->post('produto_descricao');
        $data['produto_preco_venda'] = $this->input->post('produto_preco_venda');
        $data['produto_preco_velho'] = $this->input->post('produto_preco_velho');
        $data['produto_user_id'] = $this->session->userdata('user_id');
        $data['produto_tipo_produto_sub_id'] = $this->input->post('produto_tipo_produto_sub_id');
        $data['produto_validade'] = $this->input->post('produto_validade');
        $data['produto_validade_Bol'] = $this->input->post('produto_validade_Bol');
        $data['produto_destaque'] = $this->input->post('produto_destaque');
        $data['produto_status'] = 1;

        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d H-i-s');
// define as configurações para upload da foto
        $config['upload_path'] = './images/produto/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->session->userdata('user_id') . '-' . $date;


        $this->load->library('upload', $config);

        $this->upload->do_upload('produto_foto');

        $arquivo = $this->upload->data();
        $data['produto_foto'] = $arquivo['file_name'];

        if ($this->db->insert('produto', $data)) {
            redirect(base_url('produto/meusProdutosSalvarSucesso'));
        } else {
            redirect(base_url('produto/meusProdutosSalvarErro'));
        }
    }

    public function meusProdutosSalvarSucesso() {
        $this->db->select('*');
        $this->db->where('produto_status', "1");
        $this->db->where('produto_user_id', $this->session->userdata('user_id'));
        $dados['produto'] = $this->db->get('produto')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('modal/modalSalvoCadastro');
        $this->load->view('produtos/meusProdutosLista', $dados);
        $this->load->view('inc/footer-adm');
    }

    public function meusProdutosSalvarErro() {
        // Erro Cadastro
        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('modal/modalErroCadastro');
        $this->load->view('produto/meusProdutosAdd');
        $this->load->view('inc/footer-adm');
    }

    public function meusProdutoPesquisa() {
        $nome = $this->input->post('produto_nome');

        $this->db->select('*');
        $this->db->where('produto_user_id', $this->session->userdata('user_id'));
        $this->db->like('produto_nome', $nome);
        $dados['produto'] = $this->db->get('produto')->result();
        $count = count($dados['produto']);

        // Verifica se resultou em Zero resultados
        if ($count > 0) {
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('produtos/meusProdutosLista.php', $dados);
            $this->load->view('inc/footer-adm');
        } else {
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('modal/modalPesquisaZero');
            $this->load->view('produtos/meusProdutosLista.php', $dados);
            $this->load->view('inc/footer-adm');
        }
    }

    /*
     * ==========================================
     * =========    Tipos de Produto    =========
     * ========================================== 
     */

    public function tipoProdutoLista() {
        $this->db->select('*');
        $dados['tipo_produto'] = $this->db->get('tipo_produto')->result();

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
        $this->load->model('produto_model', 'tipo');

        if ($this->tipo->tipoProdutosSalvar()) {

            $this->db->select('*');
            $dados['tipo_produto'] = $this->db->get('tipo_produto')->result();

            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('modal/modalSalvoCadastro');
            $this->load->view('adm/tipoProdutosLista', $dados);
            $this->load->view('inc/footer-adm');

// Erro Cadastro
        } else {

            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
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
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
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
            $this->load->view('modal/modalSalvoUpdate');
            $this->load->view('adm/tipoProdutosLista', $dados);
            $this->load->view('inc/footer-adm');
        } else {
// Erro Cadastro
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('modal/modalErroUpdate');
            $this->load->view('adm/tipoProdutosAdd');
            $this->load->view('inc/footer-adm');
        }
    }

    public function pag($value = null) {
        if ($value == null) {
            $value = 1;
        }
        $reg_p_pag = 3;

        if ($value <= $reg_p_pag) {
            $dados['btnA'] = 'pointer-events: none';
        } else {
            $dados['btnA'] = '';
        }

        $this->load->model('produto_model', 'produto');
        $count = $this->produto->get_qtd_produtos();

        if (($count - $value) < $reg_p_pag) {
            $dados['btnP'] = 'pointer-events: none';
        } else {
            $dados['btnP'] = '';
        }

        $this->load->model('produto_model', 'produto');
        $dados['produto'] = $this->produto->get_produtos_pag($value, $reg_p_pag);

        $dados['produto_destaque'] = $this->produto->get_produtos_destaque();


        $dados['value'] = $value;
        $dados['reg_p_pag'] = $reg_p_pag;
        $dados['qtd_reg'] = $count;

        $v_inteiro = (int) $count / $reg_p_pag;
        $v_resto = $count % $reg_p_pag;

        if ($v_resto > 0) {
            $v_inteiro += 1;
        }
        $dados['qtd_botoes'] = $v_inteiro;

        $this->load->view('inc/head-adm');
        $this->load->view('produtos/all_adverts', $dados);
        $this->load->view('inc/footer-adm');
    }

    public function pagArroz($value = null) {
        if ($value == null) {
            $value = 0;
        }
        $reg_p_pag = 12;

        if ($value <= $reg_p_pag) {
            $dados['btnA'] = 'pointer-events: none';
        } else {
            $dados['btnA'] = '';
        }

        $this->load->model('produto_model', 'produto');
        $count = $this->produto->get_qtd_produtos();

        if (($count - $value) < $reg_p_pag) {
            $dados['btnP'] = 'pointer-events: none';
        } else {
            $dados['btnP'] = '';
        }

        $this->load->model('produto_model', 'produto');
        $dados['produto'] = $this->produto->get_produtos_pag($value, $reg_p_pag);

        $dados['produto_destaque'] = $this->produto->get_produtos_destaque();


        $dados['value'] = $value;
        $dados['reg_p_pag'] = $reg_p_pag;
        $dados['qtd_reg'] = $count;

        $v_inteiro = (int) $count / $reg_p_pag;
        $v_resto = $count % $reg_p_pag;

        if ($v_resto > 0) {
            $v_inteiro += 1;
        }
        $dados['qtd_botoes'] = $v_inteiro;

        $this->db->select('*');
        $this->db->where('transacao_user_id', $this->session->userdata('user_id'));
        $this->db->where('transacao_status', "0");
        $this->db->where('transacao_status_item', "1");
        $this->db->where('transacao_token', "");
        $this->db->join('produto', 'transacao_produto_id=produto_id', 'inner');
        $data['carrinho'] = $this->db->get('transacao')->result();


        $this->load->view('inc/head_main');
        $this->load->view('inc/nav_superior', $data);
        $this->load->view('produtos/produtoCategoria', $dados);
        $this->load->view('inc/footer_main');
    }

}
