<?php

use PHPUnit\Framework\TestCase;
require_once './GetPDF.php';


class PDFText extends TestCase
{

    public function test_content() 
    {
        $pdf = new GetPDF;
        $pdf->setContent('<h1>Test Case</h1>');
        $this->assertEquals('<h1>Test Case</h1>', $pdf->getContent());
    }
}


?>