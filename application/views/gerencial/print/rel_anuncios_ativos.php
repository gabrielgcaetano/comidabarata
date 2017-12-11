<?php

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
        </style>';
$html = $html . ' <h1> ComidaBarata.com.br </h1> ';
$html = $html . ' <h2> Relatório Produtos Ativos </h2> ';
$html = $html . ' <hr> ';
$html = $html . ' <br> ';
$html = $html . ' <br> ';
$html = $html . ' <table> ';
$html = $html . ' <tr> ';
$html = $html . ' <th> Descrição </th> ';
$html = $html . ' <th> Valor Original (R$) </th> ';
$html = $html . ' <th> Valor Anunciado (R$) </th> ';
$html = $html . ' </tr> ';
foreach ($produto as $prod) {
    $html = $html . ' <tr> ';
    $html = $html . ' <td> ' . $prod->produto_nome; ' </td> ';
    $html = $html . ' <td> ' . number_format($prod->produto_preco_velho,2) . ' </td> ';
    $html = $html . ' <td> ' . number_format($prod->produto_preco_venda,2). ' </td> ';
    $html = $html . ' </tr> ';
}
$html = $html . ' </table> ';

// Carrega seu HTML
$dompdf->load_html($html);

//Renderizar o html
$dompdf->render();
$pdf = $dompdf->output();
////Exibibir a página
$dompdf->stream(
        "rel_anuncios_ativos.pdf", array(
    "Attachment" => true //Para realizar o download somente alterar para true
        )
);
