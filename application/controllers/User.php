<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index() {
        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('adm/main');
        $this->load->view('inc/footer-adm');
    }

    public function redirecionamento() {
        $this->db->where('user_id', $_SESSION['user_id']);
        $dados['user'] = $this->db->get('user')->result();

        $this->load->view('redirecionamento', $dados);
    }

    public function login_entry() {
        // Pega os dados do Formulario de Login
        $user_email = $this->input->post('user_email');
        $user_senha = $this->input->post('user_senha');

        // Compara os dados no banco
        $this->db->where('user_email', $user_email);
        $this->db->where('user_senha', $user_senha);

        // Retorna o resultado
        $data['user'] = $this->db->get('user')->result();

        if (count($data['user']) == 1) {
            $dados['user_email'] = $data['user'][0]->user_email;
            $dados['user_id'] = $data['user'][0]->user_id;
            $dados['user_nome'] = $data['user'][0]->user_nome;
            $dados['user_nivel'] = $data['user'][0]->user_tipo_user_id;
            $dados['user_logado'] = true;

            $this->session->set_userdata('user_id', $dados['user_id']);
            $this->session->set_userdata('user_nomee', $dados['user_nome']);
            $this->session->set_userdata('user_logado', $dados['user_logado']);

            redirect('user/redirecionamento');
        } else {
            redirect('main?ErroSenha');
        }
    }

    public function loginView() {
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
        $this->load->view('perfil/loginHome');
        $this->load->view('inc/footer_main');
    }

    public function error404() {
        $this->db->select('*');
        $this->db->where('transacao_user_id', $this->session->userdata('user_id'));
        $this->db->where('transacao_status', "0");
        $this->db->where('transacao_status_item', "1");
        $this->db->where('transacao_token', "");
        $this->db->join('produto', 'transacao_produto_id=produto_id', 'inner');
        $data['carrinho'] = $this->db->get('transacao')->result();

        $this->load->view('inc/head_main');
        $this->load->view('inc/nav_superior', $data);
        $this->load->view('errors/cli/error_404');
        $this->load->view('inc/footer_main');
    }

    public function newsletter() {
        $data['newsletter_email'] = $this->input->post('newsletter_email');
        $data['newsletter_status'] = '1';

        if ($this->db->insert('newsletter', $data)) {
            redirect('main');
        }
    }

    public function alterarPerfil() {
        $this->db->select('*');
        $this->db->where('transacao_user_id', $this->session->userdata('user_id'));
        $this->db->where('transacao_status', "0");
        $this->db->where('transacao_status_item', "1");
        $this->db->where('transacao_token', "");
        $this->db->join('produto', 'transacao_produto_id=produto_id', 'inner');
        $data['carrinho'] = $this->db->get('transacao')->result();

        $this->db->where('user_id', $_SESSION['user_id']);
        $data['user'] = $this->db->get('user')->result();

        $this->load->view('inc/head_main');
        $this->load->view('inc/nav_superior', $data);
        $this->load->view('perfil/perfilAlterar');
        $this->load->view('inc/footer_main');
    }

    public function alterarPerfilDadosPessoaisSalvar() {
        $data['user_nome'] = $this->input->post('user_nome');
        $data['user_email'] = $this->input->post('user_email');
        $data['user_senha'] = $this->input->post('user_senha');
        $data['user_documento'] = $this->input->post('user_documento');
        $data['user_dt_aniversario'] = $this->input->post('user_dt_aniversario');
        $data['user_sexo'] = $this->input->post('user_sexo');
        $data['user_tipo_user_id'] = '2';
        $data['user_status'] = '1';

        $this->db->where('user_id', $_SESSION['user_id']);
        if ($this->db->update('user', $data)) {
            redirect('User/alterarPerfil');
        } else {
            redirect('main');
        }
    }

    public function alterarPerfilContatoSalvar() {
        $data['user_ddd_1'] = $this->input->post('user_ddd_1');
        $data['user_tel_1'] = $this->input->post('user_tel_1');
        $data['user_ddd_2'] = $this->input->post('user_ddd_2');
        $data['user_tel_2'] = $this->input->post('user_tel_2');

        $this->db->where('user_id', $_SESSION['user_id']);
        if ($this->db->update('user', $data)) {
            redirect('User/alterarPerfil');
        } else {
            redirect('main');
        }
    }

    /*
     * =============================================
     * =====    Inicio do Controller do USER   =====
     * =============================================    
     */

    public function register_save() {
        // recebe os dados do formulário
        $data['user_nome'] = $this->input->post('user_nome');
        $data['user_email'] = $this->input->post('user_email');
        $data['user_senha'] = $this->input->post('user_senha');
        $data['user_tipo_user_id'] = '2';

        if ($this->db->insert('user', $data)) {
            // Pega os dados do Formulario de Login
            $user_email = $data['user_email'];
            $user_senha = $data['user_senha'];

            // Compara os dados no banco
            $this->db->where('user_email', $user_email);
            $this->db->where('user_senha', $user_senha);

            // Retorna o resultado
            $data['user'] = $this->db->get('user')->result();

            if (count($data['user']) == 1) {
                $dados['user_email'] = $data['user'][0]->user_email;
                $dados['user_id'] = $data['user'][0]->user_id;
                $dados['user_nome'] = $data['user'][0]->user_nome;
                $dados['user_logado'] = true;

                $this->session->set_userdata('user_id', $dados['user_id']);
                $this->session->set_userdata('user_nomee', $dados['user_nome']);
                $this->session->set_userdata('user_logado', $dados['user_logado']);

                redirect('user/redirecionamento');
            }
        } else {
            redirect(base_url(''));
        }
    }

    public function UserUpdate($user_id = null) {
        $this->db->where('user_id', $_SESSION['user_id']);
        $data['user'] = $this->db->get('user')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('perfil/userUpdate', $data);
        $this->load->view('inc/footer-adm');
    }

    public function UserUpdateSalvar() {
        // recebe os dados do formulário
        $id = $this->input->post('user_id');

        $data['user_nome'] = $this->input->post('user_nome');
        $data['user_sexo'] = $this->input->post('user_sexo');
        $data['user_email'] = $this->input->post('user_email');
        $data['user_senha'] = $this->input->post('user_senha');
        $data['user_documento'] = $this->input->post('user_documento');
        $data['user_dt_aniversario'] = $this->input->post('user_dt_aniversario');
        $data['user_ddd_1'] = $this->input->post('user_ddd_1');
        $data['user_tel_1'] = $this->input->post('user_tel_1');
        $data['user_ddd_2'] = $this->input->post('user_ddd_2');
        $data['user_tel_2'] = $this->input->post('user_tel_2');
        $data['user_status'] = $this->input->post('user_status');
        $data['user_cep'] = $this->input->post('user_cep');

        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d H-i-s');
        // define as configurações para upload da foto
        $config['upload_path'] = './images/empresa/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->session->userdata('user_id') . '-' . $date;


        $this->load->library('upload', $config);

        $this->upload->do_upload('user_foto');

        $arquivo = $this->upload->data();
        $data['user_foto'] = $arquivo['file_name'];

        $this->db->where('user_id', $id);
        if ($this->db->update('user', $data)) {

            $this->db->where('user_id', $_SESSION['user_id']);
            $data['user'] = $this->db->get('user')->result();

            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('inc/modal');
            $this->load->view('modal/modalSalvoUpdate');
            $this->load->view('perfil/userUpdate', $data);
            $this->load->view('inc/footer-adm');
        } else {
            // Erro Cadastro
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('inc/modal');
            $this->load->view('modal/modalErroUpdate');
            $this->load->view('perfil/userUpdate', $data);
            $this->load->view('inc/footer-adm');
        }
    }

    /*
     * =============================================
     * ===== Inicio do Controller do TIPO USER =====
     * =============================================    
     */

    public function tipoUserLista() {
        $this->db->select('*');
        $this->db->where('user_tipo_status=1');
        $dados['user_tipo'] = $this->db->get('user_tipo')->result();
        $count = $this->db->count_all_results();


        if ($count > 0) {
            $this->load->view('inc/modal');
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('adm/tipoUserLista', $dados);
            $this->load->view('inc/footer-adm');
        } else {
            $this->load->view('inc/modal');
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('inc/modal');
            $this->load->view('modal/modalPesquisaZero');
            $this->load->view('adm/tipoUserLista', $dados);
            $this->load->view('inc/footer-adm');
        }
    }

    public function tipoUserAdd() {
        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('adm/tipoUserAdd');
        $this->load->view('inc/footer-adm');
    }

    public function tipoUserSalvar() {
        // recebe os dados do formulário
        $data['user_tipo_nome'] = $this->input->post('user_tipo_nome');
        $data['user_tipo_status'] = 1;

        // Produto Salvo
        if ($this->db->insert('user_tipo', $data)) {

            $this->db->select('*');
            $this->db->where('user_tipo_status=1');
            $dados['user_tipo'] = $this->db->get('user_tipo')->result();

            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('inc/modal');
            $this->load->view('modal/modalSalvoCadastro');
            $this->load->view('adm/tipoUserLista', $dados);
            $this->load->view('inc/footer-adm');

            // Erro Cadastro
        } else {
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('inc/modal');
            $this->load->view('modal/modalSalvoCadastro');
            $this->load->view('adm/tipoUserAdd');
            $this->load->view('inc/footer-adm');
        }
    }

    public function tipoUserPesquisa() {
        $nome = $this->input->post('user_tipo_nome');

        $this->db->select('*');
        $this->db->where('user_tipo_status=1');
        $this->db->like('user_tipo_nome', $nome);
        $dados['user_tipo'] = $this->db->get('user_tipo')->result();
        $count = count($dados['user_tipo']);

        // Verifica se resultou em Zero resultados
        if ($count > 0) {
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('adm/tipoUserLista.php', $dados);
            $this->load->view('inc/footer-adm');
        } else {
            $this->load->view('inc/modal');
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('inc/modal');
            $this->load->view('modal/modalPesquisaZero');
            $this->load->view('adm/tipoUserLista', $dados);
            $this->load->view('inc/footer-adm');
        }
    }

    public function tipoUserUpdate($user_tipo_id = null) {
        $this->db->where('user_tipo_id', $user_tipo_id);
        $data['user_tipo'] = $this->db->get('user_tipo')->result();

        $this->load->view('inc/head-adm');
        $this->load->view('inc/menu_left');
        $this->load->view('adm/tipoUserUpdate', $data);
        $this->load->view('inc/footer-adm');
    }

    public function tipoUserUpdateSalvar() {
        // recebe os dados do formulário
        $id = $this->input->post('user_tipo_id');

        $data['user_tipo_nome'] = $this->input->post('user_tipo_nome');
        $data['user_tipo_status'] = $this->input->post('user_tipo_status');

        $this->db->where('user_tipo_id', $id);
        if ($this->db->update('user_tipo', $data)) {
            // Produto Salvo
            $this->db->select('*');
            $this->db->where('user_tipo_status=1');
            $dados['user_tipo'] = $this->db->get('user_tipo')->result();

            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('inc/modal');
            $this->load->view('modal/modalSalvoUpdate');
            $this->load->view('adm/tipoUserLista', $dados);
            $this->load->view('inc/footer-adm');
        } else {
            // Erro Cadastro
            $this->load->view('inc/head-adm');
            $this->load->view('inc/menu_left');
            $this->load->view('inc/modal');
            $this->load->view('modal/modalErroUpdate');
            $this->load->view('adm/tipoUserAdd');
            $this->load->view('inc/footer-adm');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('main');
    }

}
