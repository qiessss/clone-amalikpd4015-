
<!DOCTYPE html>
<html>
<head>
	<title>Amali Sem 4 2022</title>
</head>
<style type="text/css">
	body {
		background-color: floralwhite;
	}
	table {
		width: 75%;
		margin: 0 auto;
	}
	th {
		background-color: deeppink;
	}
	a {
		display: inline-block;
		background-color: lightpink;
		padding: 14px 16px;
		text-decoration: white;
	}

</style>
<body>
  <br><br>
  <div style="width: 75%; margin: 0 auto; text-align: center; "><img src="logoflorist.png" style="border-radius: 20px;"></div> 

  <div style=" background-color: antiquewhite; color: black; width: 75%; margin: 0 auto;">
  	<a>HALAMAN UTAMA</a>
  	<a href="tempahanbunga.php" style="float: right;">LOG KELUAR</a>
  </div>
  <h2 style="text-align: center;">SENARAI TEMPAHAN BUNGA CAYAHA FLORIST</h2>
	<table border="1" cellpadding="5" cellspacing="0" bgcolor="grey">
		<tr>
			<th>Id Pembeli</th>
			<th>Nama Pembeli</th>
			<th>Jenis Buaga</th> 
			<th>Jenis Penghantaran</th>
		</tr>
		<?php
		include 'config.php';
			$result = mysqli_query($connect,"SELECT * FROM bunga ") 
					or die(mysqli_error());
			

			while ($res=mysqli_fetch_array($result)) {
				echo "
					<tr>
						<td>".$res['idpembeli']."</td>
						<td>". $res['namapembeli'] ."</td>
						<td>". $res['jenisbunga'] ."</td>
						<td>". $res['jenispenghantaran'] ."</td>
					</tr>
						";
			}
		?>
	</table>
</body>
</html>