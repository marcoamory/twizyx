<div class="row">
	<div class="col-md-7 col-md-offset-3 col-md-12">
		<div class="tim-title">
			<h2>Commande d'une modification</h2>
		</div>
		<form method="post" id="order_form" action="../../controleur/account/order.php">
			<div id="accordeon">
				<div class="panel-group" id="accordion">
					<!-- PREMIER ACCORDEON -->  
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title done">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseStep1">
								<span id="doneIcon1" class="glyphicon glyphicon-ok-circle step" aria-hidden="true"></span>
								Sélectionnez la modification
								</a>
							</h4>
						</div>
						<div id="collapseStep1" class="panel-collapse collapse">
							<div class="panel-body">
								<h4>Sélectionnez le modèle de votre véhicule</h4>
								<ul class="nav nav-pills radio">
									<li id="t45"><a data-toggle="tab">Twizy 45</a></li>
									<li id="t80" class=""><a data-toggle="tab">Twizy 80</a></li>
								</ul>
								<h4>Sélectionnez la configuration souhaitée</h4>
								<ul id="tx45list" class="nav nav-pills radio hidden">
									<li id="tx45"><a data-toggle="tab" class="alone">TwizyX45</a></li>
								</ul>
								<ul id="tx80list" class="nav nav-pills radio hidden">
									<li id="tx80"><a data-toggle="tab">TwizyX80</a></li>
									<li id="tx80s"><a data-toggle="tab">TwizyX80Sport</a></li>
								</ul>
								<ul id="txlist" class="nav nav-pills radio">
									<li id="tx45"><a data-toggle="tab">TwizyX45</a></li>
									<li id="tx80"><a data-toggle="tab">TwizyX80</a></li>
									<li id="tx80s"><a data-toggle="tab">TwizyX80Sport</a></li>
								</ul>
								<div class='hidden'>
									<input id="t45radio" type="radio" name="modele" value="Twizy45" required>
									<input id="t80radio" type="radio" name="modele" value="Twizy80">
									<input id="tx45radio" type="radio" name="config" value="TwizyX45" required>
									<input id="tx80radio" type="radio" name="config" value="TwizyX80">
									<input id="tx80sradio" type="radio" name="config" value="TwizyX80 Sport">
								</div>
								<div class="space-30"></div>
								<button type="button" onclick="nextStep(1);" class="btn btn-sm btn-info floatRight">
								Suivant <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</button>
							</div>
						</div>
					</div>
					<!--  end acordeon 1 -->
					<!-- SECOND ACCORDEON -->  
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseStep2">
								<span id="doneIcon2" class="glyphicon glyphicon-ok-circle step" aria-hidden="true"></span>
								Informations de contact
								</a>
							</h4>
						</div>
						<div id="collapseStep2" class="panel-collapse collapse">
							<div class="panel-body">
								<h4>Vérifiez vos informations de contact</h4>
								<div class="alert alert-info">Ces informations sont essentielles pour que la commande se passe bien, nous aurons besoin de pouvoir vous contacter tout au long de la procédure.
									Si celles ci sont erronées, veuillez les corriger.
								</div>
								<div class="form-group">
									<label for="nom">Nom</label>
									<input id="nom" name="nom" type="text" value="<?php echo $_SESSION["nom"] ?>" placeholder="" class="form-control" />
								</div>
								<div class="form-group">
									<label for="prenom">Prénom</label>
									<input id="prenom" name="prenom" type="text" value="<?php echo $_SESSION['prenom'] ?>" placeholder="" class="form-control" />
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input id="email" name="email" type="email" value="<?php echo $_SESSION['email'] ?>" placeholder="" class="form-control" />
								</div>
								<div class="form-group">
									<label for="prenom">Langue de contact</label>
									<ul class="nav nav-pills radio">
										<li id='fr'><a data-toggle="tab">Français</a></li>
										<li id='en'><a data-toggle="tab">Anglais</a></li>
										<li id='de'><a data-toggle="tab">Allemand</a></li>
										<li id='nl'><a data-toggle="tab">Néerlandais</a></li>
										<li id='es'><a data-toggle="tab">Espagnol</a></li>
										<li id='it'><a data-toggle="tab">Italien</a></li>
									</ul>
								</div>
								<div class='hidden'>
									<input id="frradio" type="radio" name="lang" value="fr" <?php echo $_SESSION['fr'];?>>
									<input id="enradio" type="radio" name="lang" value="en" <?php echo $_SESSION['en'];?>>
									<input id="deradio" type="radio" name="lang" value="de" <?php echo $_SESSION['de'];?>>
									<input id="nlradio" type="radio" name="lang" value="nl" <?php echo $_SESSION['nl'];?>>
									<input id="esradio" type="radio" name="lang" value="es" <?php echo $_SESSION['es'];?>>
									<input id="itradio" type="radio" name="lang" value="it" <?php echo $_SESSION['it'];?>>
								</div>
								<div class="space-30"></div>
								<button type="button" onclick="prevStep(2);" class="btn btn-sm btn-info floatLeft">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Précédent
								</button>
								<button type="button" onclick="nextStep(2);" class="btn btn-sm btn-info floatRight">
								Suivant <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</button>
							</div>
						</div>
					</div>
					<!--  end acordeon 2 -->
					<!-- TROISIEME ACCORDEON -->  
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseStep3">
								<span id="doneIcon3" class="glyphicon glyphicon-ok-circle step" aria-hidden="true"></span>
								Adresse de livraison
								</a>
							</h4>
						</div>
						<div id="collapseStep3" class="panel-collapse collapse">
							<div class="panel-body">
								<h4>Veuillez entrer l'adresse de livraison</h4>
								<div class="form-group">
									<label for="nomDestinataire">Nom + prénom destinataire</label>
									<input id="nomDestinataire" name="nomDestinataire" type="text" placeholder="Emmanuel AMORY" value="<?php echo $_SESSION['destinataire']; ?>" class="form-control" />
								</div>
								<div class="form-group">
									<label for="nomSociete">Société (facultatif)</label>
									<input id="nomSociete" name="nomSociete" type="text" placeholder="" value="<?php echo $_SESSION['nomSociete']; ?>" class="form-control" />
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
											<label for="rue">Rue</label>
											<input id="rue" name="rue" type="text" placeholder="Rue des Ritals" value="<?php echo $_SESSION['rue']; ?>" class="form-control" />
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
										<div class="form-group">
											<label for="numero">Numéro</label>
											<input id="numero" name="numero" type="text" placeholder="10" value="<?php echo $_SESSION['numero']; ?>" class="form-control" />
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
										<div class="form-group">
											<label for="boite">Boîte</label>
											<input id="boite" name="boite" type="text" placeholder="3B" value="<?php echo $_SESSION['boite']; ?>" class="form-control" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<div class="form-group">
											<label for="ville">Ville</label>
											<input id="ville" name="ville" type="text" placeholder="Boulogne-Billancourt" value="<?php echo $_SESSION['ville']; ?>" class="form-control" />
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<div class="form-group">
											<label for="codePostal">Code postal</label>
											<input id="codePostal" name="codePostal" type="text" placeholder="92100" value="<?php echo $_SESSION['codePostal']; ?>" class="form-control" />
										</div>
									</div>
								</div>
								<div class="form-group">
											<label for="pays">Pays</label>
											<input id="pays" name="pays" type="text" placeholder="France" value="<?php echo $_SESSION['pays']; ?>" class="form-control" />
										</div>
								<div class="space-30"></div>
								<button type="button" onclick="prevStep(3);" class="btn btn-sm btn-info floatLeft">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Précédent
								</button>
								<button type="button" onclick="nextStep(3);" class="btn btn-sm btn-info floatRight">
								Suivant <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</button>
							</div>
						</div>
					</div>
					<!--  end acordeon 3 -->
					<!-- QUATRIEME ACCORDEON -->  
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseStep4">
								<span id="doneIcon4" class="glyphicon glyphicon-ok-circle step" aria-hidden="true"></span>
								Adresse de facturation
								</a>
							</h4>
						</div>
						<div id="collapseStep4" class="panel-collapse collapse">
							<div class="panel-body">
								<h4>Veuillez encoder vos informations de facturation</h4>
								<div class="form-group" id="factSocieteSwitch">
									<label for="nom">Facturation au nom d'une société</label><br> <!-- Nom société/nom pp + Numéro TVA -->
									<div class="switch"
										data-on-label="<i class='fa fa-check'></i>"
										data-off-label="<i class='fa fa-times'></i>">
										<input type="checkbox" name="facturationSociete"/>
									</div>
								</div>
								<div class="form-group">
									<label for="nom">Adresse de facturation différente de la livraison</label><br> <!-- Infos relatives adresse -->
									<div class="switch"
										data-on-label="<i class='fa fa-check'></i>"
										data-off-label="<i class='fa fa-times'></i>">
										<input type="checkbox" name="difAdresses"/>
									</div>
								</div>
								<div class="form-group">
									<label for="nomSocieteFacturation">Nom de la société</label>
									<input id="nomSocieteFacturation" name="nomFacturation" type="text" placeholder="Emmanuel AMORY" class="form-control" />
								</div>
								<div class="form-group">
									<label for="numeroTVA">Numéro TVA/SIREN/autre</label>
									<input id="numeroTVA" name="tva" type="text" placeholder="" class="form-control" />
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
											<label for="rueFacturation">Rue</label>
											<input id="rueFacturation" name="rueFacturation" type="text" placeholder="Rue des Ritals" class="form-control" />
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
										<div class="form-group">
											<label for="numeroFacturation">Numéro</label>
											<input id="numeroFacturation" name="numeroFacturation" type="text" placeholder="10" class="form-control" />
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
										<div class="form-group">
											<label for="boiteFacturation">Boîte</label>
											<input id="boiteFacturation" name="boiteFacturation" type="text" placeholder="3B" class="form-control" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<div class="form-group">
											<label for="villeFacturation">Ville</label>
											<input id="villeFacturation" name="villeFacturation" type="text" placeholder="Boulogne-Billancourt" class="form-control" />
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<div class="form-group">
											<label for="codePostalFacturation">Code postal</label>
											<input id="codePostalFacturation" name="codePostalFacturation" type="text" placeholder="92100" class="form-control" />
										</div>
									</div>
								</div>
								<div class="form-group">
											<label for="pays">Pays</label>
											<input id="paysFacturation" name="paysFacturation" type="text" placeholder="France" class="form-control" />
										</div>
								<div class="space-30"></div>
								<button type="button" onclick="prevStep(4);" class="btn btn-sm btn-info floatLeft">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Précédent
								</button>
								<button type="submit" onclick="nextStep(4);" class="btn btn-sm btn-info floatRight">
								Suivant <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</button>
							</div>
						</div>
					</div>
					<!--  end acordeon 4 -->
				</div>
				<!--  end of panel group -->
			</div>
			<!--  end acordeon -->
		</form>
	</div>
</div>