<?php

require_once './vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>This is a PDF</h1>');
$mpdf->Output();


?>
