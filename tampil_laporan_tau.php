<?php
	include "conn-db.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tampil Data JQuery</title>
<style>
</style>
<script language="JavaScript" src="jquery.js"></script>
</head>

<body>
<h3>Laporan TAU</h3>
<table width='100%' border='0' cellpadding='1' cellspacing='1'>
	<tr>
		<td>
			<form name='lpengadaan' method='POST' action='cetak_tau.php' target='_blank'>
				<fieldset>
					<legend class='huruf'>&nbsp;<b>Form Filter Data TAU</b>&nbsp;&nbsp;</legend>&nbsp;
					<table border='0'>
						<tr>
							<td>Unit</td>
							<td>:</td>
							<td><select name='unit' class='inputbox'><option value=''>[ Pilih ]</option>
							<?php
								$unit = mysql_query ('select * from unit');
								while ($dunit = mysql_fetch_array ($unit)) {
									echo "<option value = '".$dunit[0]."'>".$dunit[1]."</option>";
								}
							?></select>
							</td>
						</tr>
						<tr>
							<td>Format Laporan</td>
							<td>:</td>
							<td>
								<img src = 'images/word.gif'>&nbsp;<input type='radio' name='format' value='1' class='input'>&nbsp;&nbsp;Microsoft Word
								<br>
								<img src = 'images/excel.gif'>&nbsp;<input type='radio' name='format' value='2' class='input'>&nbsp;&nbsp;Microsoft Excel
								<br>
								<img src = 'images/pdf.png'>&nbsp;<input type='radio' name='format' value='3' class='input' checked>&nbsp;&nbsp;PDF
								
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><br><input type='submit' value='Print Data' class='button'></td>
						</tr>
						<tr>
							<td colspan='3'>Catatan
								<div align='justify'>
									<ol>
										<li>Untuk filter data akan disesuaikan dengan isian yang anda isikan pada field di atas</li>
										<li>Ketika anda klik Print Data, maka akan tampil jendela baru yang siap untuk dicetak</li>
									</ol>
								</div>
							</td>
						</tr>
					</table>
				</fieldset>
			</form>
		</td>
	</tr>
	</table>
</body>
</html>
