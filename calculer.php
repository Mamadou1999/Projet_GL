<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Login</title>
		<link rel="stylesheet" href="calculer.css">
	</head>
	<body>
		<div id="mainWrapper">
			<div id="title">
				<h1> Ma Calculatrice </h1>
			</div>
			<div id="form">
				<form action="calculer.php">
					<p>
						<input type="number" name="nb1" id="nb1" placeholder="Nombre 1" VALUE="<?php if (isset($_GET['nb1'])){echo $_GET['nb1'];} ?>" required>
					</p>
					<p>
						<input type="number" name="nb2" id="nb2" placeholder="Nombre 2" VALUE="<?php if (isset($_GET['nb2'])){echo $_GET['nb2'];} ?>" required>
					</p>
					<p id="validateButton">
						<input type="submit" value="Sommer">
					</p>
					<p>
						<input type="text" name="som" id="som" placeholder="Somme" VALUE="<?php echo $_GET['nb1'] + $_GET['nb2']; ?>">
					</p>
				</form>
			</div>
		</div>
	</body>
</html>