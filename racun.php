<!DOCTYPE html>
<html>
	<head>
		<title>FORMA</title>
		<meta charset="utf-8">
		<meta name="author" content="Mihajlo Karadzic" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row justify-content-center mt-5 mb-5">
			<div class="col-lg-8 justify-content-center text-center mt-3">		
				<a href="index.php">NAZAD</a>
				<div id="racun">
					<h2>FISKALNI RACUN</H2>
					<?php 
						$vreme=new DateTime('now', new DateTimeZone('Europe/Belgrade'));
						echo date_format($vreme, 'Y-m-d H:i:s');
					?>
					<table>
						<tr>
							<th>Artikal</th>
							<th>Kolicina</th>
						</tr>
						<tr>
							<td>Andol</td>
							<td><?php echo $_POST['and']?></td>
						</tr>
						<tr>
							<td>Aspirin</td>
							<td><?php echo $_POST['asp']?></td>
						</tr>
						<tr>
							<td>Vitamin C</td>
							<td><?php echo $_POST['vit']?></td>
						</tr>
					</table>
					<?php
						
						$n= intval(htmlspecialchars($_POST['and']));
						$n+=intval(htmlspecialchars($_POST['asp']));
						$n+=intval(htmlspecialchars($_POST['vit']));
						echo "Ukupno ste kupili : ".$n." proizvoda.<br>Ukupna cena bez poreza jeste : ".($n*100)." dinara.<br>Ukupna cena sa porezom jeste : ".($n*100+$n*100*0.08)." dinara.";
						
						if($_POST['opt']!="Ja sam redovan kupac"){
							echo "<br>Hvala! Dodjite nam ponovo!";
						}
						$myfile = fopen("racun.txt", "a");
						$txt ="Kupili ste ".$_POST['asp']." Aspirina , ".$_POST['and']." Anadola i ".$_POST['vit']." Vitamina C. \r\nUkupna cena:".($n*100+$n*100*0.08)." dinara.\r\nVreme:".date_format($vreme, 'Y-m-d H:i:s')."\r\n\r\n";
						fwrite($myfile, $txt);
						fclose($myfile);
					?>
				</div>
			</div>
		</div>
	</div>
	</body>
</html> 