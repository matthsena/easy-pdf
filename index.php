<?php

require_once './vendor/autoload.php';
require_once './settings/interface.php';

$mpdf = new \Mpdf\Mpdf();

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
        $content = '';
        $showWatermark = false;
        $watermarkSrc = '';

        function setContent ($param) {

                $this->content = $param;
                if (!$this->content) throw Exception('Content is empty!!');
        }

        function setWatermark ($param) {

                $this->watermarkSrc = $param;
                if ($this->watermarkSrc) $this->showWatermark = true;
	}

	function genPDF () {
		if ($this->showWatermask == true) 
		{
			$mpdf->SetWatermarkImage($this->watermarkSrc);
			$mpdf->showWatermark = true;
			$mpdf->WriteHTML($this->content);
			$mpdf->Output();
		
		}
	}


}

?>
