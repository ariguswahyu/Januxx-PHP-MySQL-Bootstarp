<?php 
	ob_start();
	include "koneksi.php";
	$titel		= $_POST['tx_titel'];
	$interpret	= $_POST['tx_interpret'];
	$jahr	= $_POST['tx_jahr'];
	
	$txtIDH = $_POST['txtIDH'];
	
	
	if(trim($titel) == "")
	{
		echo "titel Kosong";
		
		}else if (trim($interpret)==""){
			echo "interpret masih kosong";
			}
			
			else
			{
				
				$sqlSimpan = "UPDATE cds SET
				titel = '$titel',
				interpret = '$interpret',
				jahr = '$jahr'
				WHERE id = '$txtIDH' ";
				
			mysql_query($sqlSimpan,$koneksi)
				or die ("gagal".mysql_error());
				
				#
				echo "berita berhasil diubah";
				header('Location: cds_list.php');
				
				}

?>