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
        </style>';
$html = $html . ' <h1>ComidaBarata.com.br</h1> ';
$html = $html . ' <h2>Relatório Resumido Venda por Período</h2> ';
$html = $html . ' <h4>Data de ' . date('d/m/Y', strtotime($data_inicio)) . ' a ' . date('d/m/Y', strtotime($data_final)) ;
$html = $html . ' <hr>';
$html = $html . ' <br>';
$html = $html . ' <br> ';
$html = $html . ' <h2>Valor Venda Total : ' . number_format($valorTotal, 2) . '</h2> ';
$html = $html . ' <h2>Comissão Sistema : ' . number_format($valorComissao, 2) . '</h2> ';
$html = $html . ' <h2>Lucro : ' . number_format($lucro, 2) . '</h2> ';
$html = $html . ' <h2>Quantidade produtos vendidos : ' . number_format($quantidadeItes, 2) . '</h2> ';

// Carrega seu HTML
$dompdf->load_html($html);

//Renderizar o html
$dompdf->render();
$pdf = $dompdf->output();
////Exibibir a página
$dompdf->stream(
        "rel_vendas_resumido.pdf", array(
    "Attachment" => true //Para realizar o download somente alterar para true
        )
);
