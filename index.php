<!DOCTYPE html>
<html>
	<head>
		<title>Apoteka</title>
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
		<nav class="navbar navbar-expand-md navbar-dark justify-content-center" id="top">
			<div class="justify-content-center">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.php">APOTEKA</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="row justify-content-center mt-5 mb-5">
			<div class="col-lg-8 justify-content-center text-center mt-3">
				<!--<a href="form.php">FORMA</a>-->
				<form method="POST" action="racun.php">
					<table>
						<tr>
							<th>Artikal</th>
							<th>Kolicina</th>
						</tr>
						<tr>
							<td>Andol</td>
							<td><input type="text" name="and" value="0"></td>
						</tr>
						<tr>
							<td>Aspirin</td>
							<td><input type="text" name="asp" value="0"></td>
						</tr>
						<tr>
							<td>Vitamin C</td>
							<td><input type="text" name="vit" value="0"></td>
						</tr>
					</table>
					Kako ste saznali za nasu apoteku? 
					<select name="opt">
						<option value="Ja sam redovan kupac">Ja sam redovan kupac</option>
						<option value="TV reklama">TV reklama</option>
						<option value="Halo oglasi">Halo oglasi</option>
					</select>
					<input type="submit" value="Naruci">
				</form>
			</div>
		</div>
	</body>
</html> 