<?php

/*
 *
 * @author Matheus Alexandre de Sena
 *
 */

interface iPdf 
{
	public function setContent ($content);
	
	public function setWatermark ($imgSrc);

	public function genPDF ();
	

}

?>
