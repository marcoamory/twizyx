<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TwizyX : connexion</title>

    <!-- Bootstrap -->
    <link href="vue/login/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Feuille de style de la page de login -->
    <link href="vue/login/dist/css/login.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<img class="logoHautGauche" src="vue/login/dist/images/logo.png" />
    <div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				
				<h2 class="slogan sloganConnexion show" id="sloganConnexion">Connectez-vous à votre compte pour gérer vos commandes en ligne.</h2>
				<h2 class="slogan sloganInscription hidden" id="sloganInscription">Créez un compte pour commander une modification.</h2>
				
				
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Se connecter</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Créer un compte</a>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="controleur/login/login.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="email" name="connexionEmail" id="username" tabindex="1" class="form-control" placeholder="Adresse e-mail" value="" required>
									</div>
									<div class="form-group">
										<input type="password" name="connexionMotDePasse" id="password" tabindex="2" class="form-control" placeholder="Mot de passe" required>
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Se souvenir de moi</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Connexion">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">J'ai oublié mon mot de passe</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="controleur/login/register.php" method="post" role="form" style="display: none;" onsubmit="return verifForm(this)">
									<div class="form-group">
										<input type="email" name="creerEmail" id="creerEmail" tabindex="1" class="form-control" placeholder="Adresse e-mail" value="" onblur="verifMail(this)" required>
									</div>
									<div class="form-group">
										<input type="password" name="creerMotDePasse" id="creerMotDePasse" tabindex="2" class="form-control" placeholder="Mot de passe" required >				
									</div>
									<div class="form-group">
										<input type="password" name="creerConfirmationMotDePasse" id="creerConfirmationMotDePasse" tabindex="2" class="form-control" placeholder="Confirmez le mot de passe" onblur="verifMotDePasse(this)" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Créer mon compte">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="panel-footer">TwizyX Technology by F-Tech SARL</div>
				</div>
			</div>
		</div>
	</div>    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="vue/login/dist/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="vue/login/dist/js/bootstrap.min.js"></script>
    
    <!-- Scripts pour la page de login -->
    <script src="vue/login/dist/js/login.js"></script>
    <script src="vue/login/verif.js"></script>
  </body>
</html>