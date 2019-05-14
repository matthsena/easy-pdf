<?php

require_once './GetPDF.php';

$key = (isset($_REQUEST['k'])) ? $_REQUEST['k'] : null;
$content = (isset($_REQUEST['c'])) ? $_REQUEST['c'] : null;
$keyFile = fopen("hash.txt", "r") or die ("Unable to open file!");
$tmpKey = fgets($keyFile);
fclose($keyFile);

if ($key == $tmpKey && $content) {
    
    $pdf = new GetPDF;
    $pdf->setContent($content);
    $pdf->buildPDF();
} else throw new Exception("Invalid arguments")

?>
