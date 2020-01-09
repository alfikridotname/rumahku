<?php 

function inggris_tgl($tgl)
{
	$pecah  = [];
	$pecah 	= explode("/", $tgl);
	$tgl 	= $pecah[0];
	$bln 	= $pecah[1];
	$thn 	= $pecah[2];

	// return $thn.'-'.$bln.'-'.$tgl;
	return $pecah;
}

?>