<?php
ob_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table >
						  <thead>
							  <tr>
								  <th>id</th>
								  <th>title</th>
								  <th>interpret</th>
								  <th>jahr</th>
							  </tr>
						  </thead>   
						  <tbody>
                     <?php
					 		include "koneksi.php";
							$sqlTampil = "SELECT * FROM  cds ORDER by id";
							$qryTampil = mysql_query($sqlTampil, $koneksi) or die ("gagal simpan".mysql_error());
						
							while($dataTampil= mysql_fetch_array($qryTampil))
							{
							?>
							<tr>
								<td><?php echo $dataTampil['id']; ?></td>
								<td class="center"><?php echo $dataTampil['titel']; ?></td>
								<td class="center"><?php echo $dataTampil['interpret']; ?></td>
								<td class="center"><?php echo $dataTampil['jahr']; ?></td>
							</tr>
                            <?php  } ?>
						  </tbody>
					  </table>
</body>
</html>
<?php
$html = ob_get_clean();
 
// require_once("../dompdf_config.inc.php");
require_once("dompdf/dompdf_config.inc.php");
/* 
$html =
  '<html><body>'.
  '<h1>Halo, berikut alamat Anda : </h1>'.
  '<p>Alamat lengkap Anda adalah : </p>'.
  '</body></html>';
*/
 
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
//$dompdf->stream('coba.pdf');
$dompdf->stream('coba.pdf',array('Attachment' => 0));
//$dompdf->stream('my.pdf',array('Attachment'=>0));.
 
?>