<?php

$config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'mx1.hostinger.com.br',
    'smtp_port' => 587,
    'smtp_user' => 'contato@comidabarata.com.br',
    'smtp_pass' => 'escova1995'
);

$this->load->library('email', $config);
$this->email->set_newline("\r\n");
$this->email->from('contato@comidabarata.com.br', 'Gabriel');
foreach ($user as $u) {
    $emailTo = $emailTo . $u->user_email;
}

$this->email->to($emailTo);
$this->email->subject('Cupom ComidaBarata.com.br');
$this->email->message('Obrigado por economizar conosco.');

//referenciar o DomPDF com namespace
use Dompdf\Dompdf;

// include autoloader
require_once("dompdf/autoload.inc.php");

//Criando a Instancia
$dompdf = new DOMPDF();

$html = '<style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
            h1 {
                text-align: center;
            }
        </style>';
foreach ($cupom as $c) {
    $html = $html . ' <h1>Cupom ComidaBarata.com.br</h1> ';
    $html = $html . ' <h4>Cupom gerado via site as ' . date('d/m/Y h:m:s', strtotime($c->cupom_data)) . '</h4> ';

    $html = $html . ' <table> ';
    $html = $html . ' <tr> ';
    $html = $html . ' <th>Produto</th> ';
    $html = $html . ' <th>Supermercado</th> ';
    $html = $html . ' <th>Quantidade</th> ';
    $html = $html . ' <th>Total</th> ';
    $html = $html . ' </tr> ';

    foreach ($itensCupom as $item) {

        $html = $html . ' <tr> ';
        $html = $html . ' <th> ' . $item->produto_nome . ' </th> ';
        $html = $html . ' <th> ';
        $html = $html . ' <ul> ' . $item->user_nome . '</ul>';
        $html = $html . ' <ul> ' . $item->user_endereco . '</ul>';
        $html = $html . ' </th> ';
        $html = $html . ' <th> ' . $item->transacao_produto_quantidade . ' </th> ';
        $html = $html . ' <th> ' . number_format(($item->transacao_produto_quantidade * $item->produto_preco_venda), 2) . ' </th> ';
        $html = $html . ' </tr> ';
    }

    $html = $html . ' </table> ';
    $html = $html . ' <br> ';
    $html = $html . ' <h1>Código de Ativação : ' . $c->cupom_token . '</h1> ';
    $html = $html . ' <h4>Regulamento</h4> ';
    $html = $html . ' <h6> - Ter o cupom não garante o produto.</h6> ';
    $html = $html . ' <h6> - Validade do cupom de 7 dias á contar data de geração.</h6> ';
    $html = $html . ' <h6> - ComidaBarata.com.br apenas intermedia o anuncio do produto.</h6> ';
    $html = $html . ' <br> ';
    $html = $html . ' <h4>Acesse agora mesmo www.comidabarata.com.br e comece a economizar hoje mesmo</h4> ';
}
// Carrega seu HTML
$dompdf->load_html($html);

//Renderizar o html
$dompdf->render();
$pdf = $dompdf->output();
////Exibibir a página
$dompdf->stream(
        "cupomComidaBarata.pdf", array(
    "Attachment" => true //Para realizar o download somente alterar para true
        )
);

$this->email->attach($pdf, 'attachment', 'cupomComidaBarata.pdf', 'application/pdf');


//Send mail 
if ($this->email->send()) {
    $this->session->set_flashdata("email_sent", "Email sent successfully.");
} else {
    $this->session->set_flashdata("email_sent", "Error in sending Email.");
}