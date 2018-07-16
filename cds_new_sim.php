<?php 
	ob_start();
	include "koneksi.php";
	$titel		= $_POST['tx_titel'];
	$interpret	= $_POST['tx_interpret'];
	$jahr	= $_POST['tx_jahr'];
	
	
	if(trim($titel) == "")
	{
		echo "titel Kosong";
		
		}else if (trim($interpret)==""){
			echo "interpret masih kosong";
			}
			
			else
			{
				
				
				$sqlSimpan = "INSERT INTO cds SET
				titel = '$titel',
				interpret = '$interpret',
				jahr = '$jahr' ";
				
			mysql_query($sqlSimpan,$koneksi)
				or die ("gagal".mysql_error());
				
				#
				echo "berita berhasil disimpan";
				header('Location: cds_list.php');
				
				}

?>