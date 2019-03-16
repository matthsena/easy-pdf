<?php

require_once './GetPDF.php';

$pdf = new GetPDF;
$pdf->setContent('<h2>aaaaaaaaaaaa</h2><p>la la la</p>');
$pdf->buildPDF();
?>
