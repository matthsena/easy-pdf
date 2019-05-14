<?php
/**
 * 
 * @author Matheus Alexandre de Sena
 * 
 */
require_once './vendor/autoload.php';
require_once './settings/interface.php';

class GetPDF  {

    private $content;
    private $waterMark;
    private $showWaterMark;

    public function setContent (string $content) {

        $this->content = (isset($_REQUEST['content'])) ? $_REQUEST['content'] : $content;

    }
    
    public function setWatermark (string $imgSrc) {

        $this->waterMark = (isset($_REQUEST['waterMark'])) ? $_REQUEST['waterMark'] : null;

        $this->showWaterMark = ($this->waterMark) ? true : false;

    }

    public function buildPDF () {

        ($this->content) ?  true  : $this->breakProccess('Content is empty');
        
        $mpdf = new \Mpdf\Mpdf();

        // $mpdf->SetWatermarkImage(($this->waterMark) ? $this->waterMark : '');
        // $mpdf->showWatermark = $this->validatePDF($this->waterMark);
        $mpdf->WriteHTML($this->content);
        $mpdf->Output();
    }

    private function validatePDF ($param) : bool {

        return ($param && $param != '') ? true : false;

    }

    private function breakProccess ($msg) {
        
        throw new Exepction ($msg);
    }

}
?>