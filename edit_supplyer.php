<?php
	include ("conn-db.php");

	//	mengambil data barang yang akan diedit
	$q = "SELECT * FROM supplyer WHERE sup_id = '".$_GET['kode']."'";
	$r = mysql_query($q) or die ($q);
	$d = mysql_fetch_array ($r);
if(isset($_POST['kode'])){
	// proses penyimpanan update
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$telepon  = $_POST['telepon'];
	if ($kode!='') {
		$q = "UPDATE supplyer SET sup_kode = '".$kode."', sup_nama = '".$nama."', sup_alamat = '".$alamat."', sup_telp = '".$telepon."' 
          WHERE sup_id = '".$_GET['kode']."'";
		$r = mysql_query($q) or die (mysql_error());
		if($r) {
			$msg = "Data sudah diedit";
		}
		else {
			$msg = "Data tidak bisa diedit";
		}
	}
}
else {$msg = '';}

	$vkode =  isset($_POST['kode']) ? $_POST['kode'] : $d['sup_kode'];
	$vnama =  isset($_POST['nama']) ? $_POST['nama'] : $d['sup_nama'];
	$valamat =  isset($_POST['alamat']) ? $_POST['alamat'] : $d['sup_alamat'];
	$vtelepon  =  isset($_POST['telepon']) ? $_POST['telepon'] : $d['sup_telp'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ubah Data </title>
<script language="JavaScript" src="jquery.js"></script>
<script>
	$(document).ready(function(){
		$("#close").click(function(){
			$("#form").hide("slow");
		});
	});
</script>
</head>

<body>
<form id="forms" method="POST" onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>?kode=<?=$_GET['kode'];?>')">
<fieldset>
<legend> Form Ubah Barang </legend>
	<div align="right"><img id="close" src="images/close.png" title="Close Form" /></div>
	<table>
		<?php
			if ($msg!='') {
				echo "
				<tr>
					<td> </td>
					<td> </td>
					<td> $msg </td>
				</tr>";
			}
		?>
		<tr>
			<td> Kode </td>
			<td> : </td>
			<td> <input type='text' name='kode' value='<?=$vkode;?>'> </td>
		</tr>
		<tr>
			<td> Nama </td>
			<td> : </td>
			<td> <input type='text' name='nama' value='<?=$vnama;?>'> </td>
		</tr>
		<tr>
			<td> Alamat </td>
			<td> : </td>
			<td> <input type='text' name='alamat' value='<?=$valamat;?>'> </td>
		</tr>
		<tr>
			<td> Telepon </td>
			<td> : </td>
			<td> <input type='text' name='telepon' value='<?=$vtelepon;?>'> </td>
		</tr>
		<tr>
			<td> </td>
			<td> </td>
			<td> 
				<input type='submit' name='ubah' value='Ubah'>  
				<input type='reset' name='reset' value='Reset'> 
			</td>
		</tr>
	</table>
</form>
</fieldset>
</body>
</html>
