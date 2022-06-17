<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Postest 8 PWEB</title>
	<link rel="stylesheet" type="text/css" href="my.css">
</head>
<body>
	<div class="header">
		<h1 class="text">POSTEST PRAKTIKUM 8 DASAR-DASAR PHP</h1>
		<hr class="grs">
	</div>
	<div class="isi">
		<form name="form" action="hasil.php" method="post">
			<table class="bil">
				<tr>
					<td>
						<label for="bil" class="it"><h3>INPUT BILANGAN</h3></label>
					</td>
					<tr class="angka">
						<td>
							<table>
								<tr>
									<td>
										<input class="angka1" type="text" name="int" placeholder="Masukkan Bilangan">
									</td>
									<tr>
										<td>
											<button class="hasil" type="subm" 
											name="tombol" onclick="hasil.php">Submit</button>
										</td>
									</tr>
								</tr>
							</table>
						</td>
					</tr>
				</tr>
			</table>
		</form>
	</div>
	<div class="footer">
		<p>Copyright Ian Oktafian Purnomosidi | 2000018199</p>
	</div>
</body>
</html>