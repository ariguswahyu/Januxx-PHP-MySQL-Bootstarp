<?php
ob_start();
?>
<?php
		include "koneksi.php";
		$editID = $_GET['id'];
		$sqlTampil = "SELECT * FROM cds WHERE id ='$editID'";
		$qryTampil = mysql_query($sqlTampil, $koneksi) or die ("gagal simpan".mysql_error());
		$dataTampil = mysql_fetch_array($qryTampil);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table width="200" border="1">
  <tbody>
    <tr>
      <td>id</td>
      <td><?php echo $dataTampil['id']; ?></td>
    </tr>
    <tr>
      <td>title</td>
      <td><?php echo $dataTampil['titel']; ?></td>
    </tr>
    <tr>
      <td>interpret</td>
      <td><?php echo $dataTampil['interpret']; ?></td>
    </tr>
    <tr>
      <td>jahr</td>
      <td><?php echo $dataTampil['jahr']; ?></td>
    </tr>
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