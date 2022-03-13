<?php

function bulan($b)
{
	//list bulan
	$bulan = [
		'01'=>'Januari',
		'02'=>'Februari',
		'03'=>'Maret',
		'04'=>'April',
		'05'=>'Mei',
		'06'=>'Juni',
		'07'=>'Juli',
		'08'=>'Agustus',
		'09'=>'September',
		'10'=>'Oktober',
		'11'=>'November',
		'12'=>'Desember'
	];
	
	return $bulan[$b];
}

function tanggal($tgl)
{
	//list bulan
	$bulan = [
		'01'=>'Januari',
		'02'=>'Februari',
		'03'=>'Maret',
		'04'=>'April',
		'05'=>'Mei',
		'06'=>'Juni',
		'07'=>'Juli',
		'08'=>'Agustus',
		'09'=>'September',
		'10'=>'Oktober',
		'11'=>'November',
		'12'=>'Desember'
	];
	
	$tanggal = explode("-", $tgl);
	
	return $tanggal[2]." ".$bulan[$tanggal[1]]." ".$tanggal[0];
}

function tanggal_waktu($tgl)
{
	//list bulan
	$bulan = [
		'01'=>'Januari',
		'02'=>'Februari',
		'03'=>'Maret',
		'04'=>'April',
		'05'=>'Mei',
		'06'=>'Juni',
		'07'=>'Juli',
		'08'=>'Agustus',
		'09'=>'September',
		'10'=>'Oktober',
		'11'=>'November',
		'12'=>'Desember'
	];
	
	$tgl = explode(" ",$tgl);
	$tanggal = explode("-", $tgl[0]);
	
	return $tanggal[2]." ".$bulan[$tanggal[1]]." ".$tanggal[0]." ".$tgl[1];
}
