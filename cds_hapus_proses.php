<?php 
	ob_start();
	include "koneksi.php";

	$txtIDH = $_POST['txtIDH'];
	
	if (trim($txtIDH)==""){
			echo "txtIDH masih kosong";
			}
			
			else
			{
				
				$sqlSimpan = "DELETE FROM cds
				WHERE id = '$txtIDH' ";
				
			mysql_query($sqlSimpan,$koneksi)
				or die ("gagal".mysql_error());
				
				#
				echo "berita berhasil dihapus";
				header('Location: cds_list.php');
				
				}

?>