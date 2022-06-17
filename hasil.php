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
									<?php
										$b = 1;
										for($a = 2; $a <= $_POST["int"] - 1; $a++){
										if($_POST["int"]%$a == 0){
											$b = 0;
										}
										}
										if($b == 1){
											echo($_POST["int"]);
											echo(" Adalah Bilangan Prima");
										}else{
											echo($_POST["int"]);
											echo(" Bukan Bilangan Prima");
										}
									?>

									</td>
									<tr>
										<td>
											<button class="hasil" type="submit" name="hasil" onclick="postest8.php">Cek Again</button>
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