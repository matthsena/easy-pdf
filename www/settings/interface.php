<?php

/*
 *
 * @author Matheus Alexandre de Sena
 *
 */

interface iPDF 
{
	public function setContent (string $content);
	
	public function setWatermark (string $imgSrc);

	public function buildPFD ();


}

?>
