<?php
/*
 *
 * @author Matheus Alexandre de Sena
 *
 */

class Filter {

        function filterValue ($value) {

                if (isset[$_REQUEST[$value]]) return $_REQUEST[$value];
		else return false;

        }

}

