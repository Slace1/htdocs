<html>
	<head>
		<title> Créér votre compte utilisateur </title>

	<!--<link rel="stylesheet" href="" type="text/css">-->
	<img src="favicon.png" alt="" align=top>

	</head>
	<body>

			<form method="post" action="validerFour.php">
			<h1> Créér votre compte utilisateur : </h1>
			<div class="champ">
				<label for="username">Username : </label>
				<input type="text" name="username" id="username" required="true" autocomplete="off" />
			</div>
			<div class="champ">
				<label for="email">Email : </label>
				<input type="email" name="email" id="email" required="true" autocomplete="on"/>
			</div>
			<div class="champ">
				<label for="Phone_number">Phone number : </label>
				<input type="tel" name="Phone_number" id="Phone_number" required="true" pattern="+[0-9]{2} [0-9]{1}[0-9]{8}" placeholder="Format : + xx xxxxxxxx" autocomplete="on"/>
			</div>
			<div class="champ">
				<label for="password">Password : </label>
				<input type="text" name="password" id="password" autocomplete="off"/>
			</div>
			<!--<div class="champ">
				<label for="Confirm_password">Confirm password: <label>
				<input type="text" name="Confirm_password" id="Confirm_password" required="true" autocomplete="on"/>
			</div>-->
      <div>
			<input type="submit" value="Enregistrer" name="Enregistrer"/>
			<input type="reset" value="Effacer">
      <input type="button" onclick="self.location.href='http://192.168.64.2/ProjectS78/Authentification.php'" value="Retour"/>
			</div>
      </form>
  </body>
</html>
