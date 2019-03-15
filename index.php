<?php

require_once './vendor/autoload.php';
require_once './settings/interface.php';
require_once './settings/filter.php';

$mpdf = new \Mpdf\Mpdf();
$filter = new Filter;

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
        private $content;
        private $showWatermark = false;
        private $watermarkSrc;

        function setContent ($param) {

                $this->content = $filter->filterValue('content');

                if (!$this->content) throw Exception('Content is empty!!');
        }

        function setWatermark ($param) {

                $this->watermarkSrc = $filter->filterValue('watermark');

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
