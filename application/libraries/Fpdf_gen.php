<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fpdf_gen {

	public function __construct() {
    require_once APPPATH.'fpdf181/fpdf.php';    
		// $pdf = new FPDF();
		// $pdf->AddPage();
		// $CI =& get_instance();
		// $CI->fpdf = $pdf;
	}

}
