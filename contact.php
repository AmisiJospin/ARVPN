<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="shortcut icon"  href="image/logo.jpg" />
	<title>ARVPN| Contact</title>
</head>
<body>
	
	<div class="corps">
		<div id="entete">	
			<a href="."><img src="image/logo.jpg" /></a>
		</div>
	
	<div id="menu">
		<ul>
			<a href="."><li>Accueil</li></a>
			<a href="activity.php"><li>Activités</li></a>
			<a href="#"><li>Projets</li></a>
			<a href="#"><li>Réalisations</li></a>
			<a href="contact.php"><li class="menu_active">Contacts</li></a>
		</ul>
	</div>
		
		<div id="contenu">
	
	<p>
						<div class="title"><h3 class="exe">Formulaire de contacts</h3></div>
						<div class="erreur">
							<?php include('verification.php');?> 
						</div>
					
						
					
					<form action="" method="POST">
					
							<table>
						<div class="social">
							<strong>Nos informations</strong>
							<ul class="contact">
						<li>
							<p>
								<span class="home"></span><strong>Adresse:</strong> Commune d’Ibanda<br/>Ville de BUKAVU<br/>Province du Sud-Kivu en RD Congo
							</p>
						</li>
						<li>
							<p class="phone">
								<strong>Téléphone:</strong> (+243)99 465 598 3<br/>
										  (+243)81 407 319 6<br/>
                                          (+243)99 466 045 9<br/>
                                          (+243)85 333 442 2

								</p>
						</li>
						<li>
							<p class="mail">
								<strong>Email:</strong> arvpnrdc@gmail.com
							</p>
						</li>
					</ul>
						</div>
								<tr>
									<td>Nom:</td>
									<td><input type="text" name="nom" class="textform" value="" placeholder="Ex:Amisi"/></td>
								</tr>
								
								<tr>
									<td>Téléphone:</td>
									<td><input type="number" name="phone" class="textform" value="" placeholder="Ex:(+257)75603090" /></td>
								</tr>
								
								<tr>
									<td>Adresse Electronique:</td>
									<td><input type="email" name="email" class="textform" value="" placeholder="Ex: jospinamissi@gmail.com"/></td>
								</tr>
								
								<tr>
									<td colspan="2">
										<h3>Ecrivez - Nous:</h3>
										<textarea name="texte" class="message"  placeholder="Ex: Bonjour! Je suis ravi ......"></textarea>
									</td>
								</tr>
								<tr>
									<td colspan="2"><input type="submit" name="boutonenvoyer"  value="Envoyer" class="boutonenvoyer" /></td>
								</tr>
								
								</table>
						</form>
						</p>
	
	
	
	<div id="pied_de_page">
		<div class="pied">
			Retrouvez-nous: <img src="image/icon1.gif" class="icon" title="Facebook" /><img src="image/icon2.gif" class="icon" title="Twitter" /><img src="image/icon3.gif" class="icon" title="Linked" /><br/>
			&copy; ARVPN 2015 All Right Reserved
		</div>
	</div>
	
	</div>
	</div>
</body>
</html>

