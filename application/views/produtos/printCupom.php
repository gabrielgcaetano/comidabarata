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
$this->email->to('contato@comidabarata.com.br');
$this->email->subject('Email Test');
$this->email->message('Testing the email class.');


//$this->email->initialize($config);


    

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
        </style>
        <h1>Cupom ComidaBarata.com.br</h1>
        <h4>Cupom gerado via site as 10/10/2017 14:10</h4>
        <table>
            <tr>
                <th>Produto</th>
                <th>Supermercado</th>
                <th>Quantidade</th>
                <th>Total</th>
            </tr>';


foreach ($itensCupom as $item) {

    $html = $html . ' <tr> ';
    $html = $html . ' <th> ' . $item->produto_nome . ' </th> ';
    $html = $html . ' <th> ';
    $html = $html . ' <ul> ';
    $html = $html . $item->user_nome;
    $html = $html . ' </ul> ';
    $html = $html . ' <ul> ';
    $html = $html . $item->user_endereco;
    $html = $html . ' </ul> ';
    $html = $html . ' </th> ';
    $html = $html . ' <th> ' . $item->transacao_produto_quantidade . ' </th> ';
    $html = $html . ' <th> ' . number_format(($item->transacao_produto_quantidade * $item->produto_preco_venda), 2) . ' </th> ';
    $html = $html . ' </tr> ';
}

$html = $html . ' </table>
<br>
<h1>Código de Ativação : 7ABG9SF5</h1>
<h4>Regulamento</h4>
<h6> - Ter o cupom não garante o produto.</h6>
<h6> - Validade do cupom de 7 dias á contar data de geração.</h6>
<h6> - ComidaBarata.com.br apenas intermedia o anuncio do produto.</h6>
<br>

<h4>Acesse agora mesmo www.comidabarata.com.br e comece a economizar hoje mesmo</h4>
';

// Carrega seu HTML
$dompdf->load_html($html);

//Renderizar o html
$dompdf->render();

////Exibibir a página
$dompdf->stream(
        "cupomComidaBarata.pdf", array(
    "Attachment" => true //Para realizar o download somente alterar para true
        )
);

$this->email->attach($dompdf->stream("cupomComidaBarata.pdf"), 'attachment', '1234.pdf', 'application/pdf');


//Send mail 
if ($this->email->send()) {
    $this->session->set_flashdata("email_sent", "Email sent successfully.");
} else {
    $this->session->set_flashdata("email_sent", "Error in sending Email.");
}