<?php
	$my['host'] = "localhost";
	$my['user'] = "root";
	$my['pass'] = "";
	$my['dbs'] = "cdcol";
	
	
	$koneksi = mysql_connect($my['host'],$my['user'],$my['pass']);
	
	if(! $koneksi)
	{
		echo "gagal koneksi";
		mysql_error();
		}
		
	mysql_select_db($my['dbs'])
			or die ("databaase tidak ditemukan".mysql_error());

?>