<?php
if(isset($_POST['mailform'])) {
   if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {
			$headers  = 'From: [madara.ghogho]@gmail.com' . "\r\n" .
						'MIME-Version: 1.0' . "\r\n" .
						'Content-type: text/html; charset=utf-8';
						$subject  = 'TR: Nouvelle entrée : Formulaire de contact simple';
						$message='
						<html>
							<body>
								<div style="text-align: center; background-color:rgb(229 233 233);padding: 1%;width: 100%;">
									<div style="background-color: rgb(255, 255, 255);width: 48%;display: block;margin: auto; border: 1px solid rgb(155, 161, 161);border-radius: 12px;padding: 5px;">
										<h3>Nom Prenom</h3>
										<h5>'.$_POST['nom'].' </h5>
										<br>
										<hr style="width: 70%;">
										<h3>Email</h3>
										<h5>'.$_POST['mail'].'</h5>
										<br>
										<hr style="width: 70%;">
										<h5>Commentaire ou message</h5> <br>
										<p>'.$_POST['message'].'</p>
							
									</div>
								</div>
							</body>
						</html>
						';
			mail($_POST['mail'], $subject, $message, $headers);
			$msg="Votre message a bien été envoyé !";
   } else {
      $msg="Tous les champs doivent être comp !";
   }
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Union Sportive de Grigny </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Datetimepicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div id="fh5co-container">
		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">
				
				<div class="fh5co-overlay"></div>
				<div class="fh5co-text">
					<div class="container">
						<div class="row">
						
							<img class="to-animate" src="images/LOGO-USG--HD.gif" alt="" style="width: 45%;">
							<h2 class="to-animate">L'UNION SPORTIVE DE GRIGNY </h2>
						</div>
					</div>
				</div>
			  	<ul class="slides">
			   	<li style="background-image: url(images/Plan2.png);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/plan1.png);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
			  	</ul>

			</div>
			
		</div>
		
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<div class="fh5co-menu-1">
						<a href="#" data-nav-section="home">Accueil</a>
						<a href="#" data-nav-section="about">l'USG</a>
						<a href="#" data-nav-section="features">ACTIVITÉS</a>
					</div>
					<div class="fh5co-logo with-icon icon-1">
						<a href="index.html" style="padding: 1%;"><img class="logo"src="images/Logo200-200.png" alt=""></a>
					</div>
					<div class="fh5co-menu-2">
						<a href="#" data-nav-section="contact">CONTACT</a>
						<a href="#" data-nav-section="events">MÉDIATHÈQUE</a>
						<a href="#" data-nav-section="events">PARTENAIRES</a>
					</div>
				</div>
				
			</div>
		</div>

		<div id="fh5co-about" data-section="about">
			<div class="fh5co-2col fh5co-text">
				<h2 class="heading to-animate">À propos de nous</h2>
				<p class="to-animate"style="font-size: large;"><span class="firstcharacter">B</span>ienvenue sur le site internet de votre association sportive l’Union Sportive de Grigny fondée en 1970 et qui est présente à travers ses 16 sections sportives.

					Ses disciplines vont des sports collectifs aux sports santés en passant par les sports handi. L’Union Sportive de Grigny Omnisports s’inscrit comme la plus grande association de la ville. Avec ses 2500 adhérents elle se place au cœur de la ville et de ses acteurs.
					
					L’association s’engage pour la ville et possède selon les sections sportives un rayonnement départemental jusqu’à national pour quelques sections sportives tels que l’Athlétisme, le Football, la Natation et le Volleyball.
					
					Assistez à la vie associative de l’USG grâce aux évènements sportifs et éducatifs de votre association par le biais des posts d’articles, photos et vidéos selon les sections sportives.</p>
				<!-- <p class="text-center to-animate"><a href="#" class="btn btn-primary btn-outline">Get in touch</a></p> -->
			</div>
			<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(images/res_img_1.png)"></div>
		</div>

		<div id="fh5co-sayings">
			<div class="container">
				<div class="row to-animate">

					<div class="flexslider">
						<ul class="slides">
							
							<li>
								<blockquote>
									<p>&ldquo;Vous devez attendre des choses de vous-même avant de pouvoir les faire.&rdquo;</p>
									<p class="quote-author">&mdash; Michael Jordan</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo; Si vous pensez que vous allez échouer, alors vous allez probablement échouer.&rdquo;</p>
									<p class="quote-author">&mdash; Kobe Bryant</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Il y a plus de courage que de talents dans la plupart des réussites.&rdquo;</p>
									<p class="quote-author">&mdash;  Félix Leclerc</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Échouer, c’est avoir la possibilité de recommencer de manière plus intelligente.&rdquo;</p>
									<p class="quote-author">&mdash; Henry Ford</p>
								</blockquote>
							</li>
							
							
						</ul>
					</div>

				</div>
			</div>
		</div>

		<div id="fh5co-featured" data-section="features">
			<div class="container" style="padding-right: 0;padding-left: 0;">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">ACTIVITÉS</h2>
					</div>
				</div>
				<div class="row">
					<div class="fh5co-grid">
						<div class="fh5co-v-half to-animate-2">
							<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/individuel.png);background-size: contain; "></div>
								<div class="fh5co-v-col-2 fh5co-text arrow-left">
									<h2>SPORTS INDIVIDUELS</h2>
									<p> <br><a href="Sports/Athlétisme.html"> Athlétisme – Golden Blocks</a> <br><br> <a href="Sports/Danse.html">Danse – Double dutch</a><br><br><a href="Sports/Gymnastique.html">Gymnastique</a> <br><br><a href="Sports/Natation.html">Natation </a><br><br>
										<a href="Sports/Plongée.html">Plongée sous marine</a> <br><br> <a href="Sports/Tennis.html">Tennis – Fête le mur </a><br><br><a href="Sports/Tennis_Table.html">Tennis de table </a><br><br> <a href="Sports/Tir_à_l'arc.html">Tir à l’arc </a><br><br> <a href="Sports/Triathlon.html">Triathlon</a></p>
								</div>
							
						</div>
						<div class="fh5co-v-half">
							<div class="fh5co-h-row-2 to-animate-2">
								<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/combat.png);background-size: contain;"></div>
								<div class="fh5co-v-col-2 fh5co-text arrow-left">
									<h2>SPORTS DE COMBATS</h2>
									<!-- <span class="pricing">$12.00</span> -->
									<p ><br><a href="Sports/AÏkibudo.html"> Aïkibudo</a><br><br><a href="Sports/Judo.html">Judo</a></p>
								</div>
							</div>
							<div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
								<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/collectif.png);background-size: contain; "></div>
								<div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-right">
									<h2>SPORTS COLLECTIFS</h2>
									<p > <br><a href="Sports/basketball.html">Basketball</a><br><br><a href="Sports/Football.html">Football</a><br><br><a href="Sports/Handball.html">Handball</a><br><br><a href="Sports/Hockey.html">Hockey Subaquatique</a><br><br><a href="Sports/Volleyball.html">Volleyball </a></p>
								</div>
							</div>
						</div>

						<div class="fh5co-v-half to-animate-2">
							<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/handi.png)"></div>
							<div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
								<h2>PORTS HANDI</h2>
								<p style="padding-top: 10%;"><br><a href="Sports/Handi_Tennis.html">Handi Tennis</a><br><br><a href="Sports/handi_Tir_à_l'arc.html">Handi Tir à L'arc</a><br><br><a href="Sports/handi_Volleyball.html">Handi Volleyball</a></p>
							</div>
						</div>
						<div class="fh5co-v-half to-animate-2">
							<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/santé.png);background-size: contain;"></div>
							<div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
								<h2>SPORTS SANTÉS</h2>
								<p style="padding-top: 10%;"><br><a href="#">Aquagym</a>  <br><br><a href="#">Éveil Aquatique</a> </p>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>

		<div id="fh5co-type" style="    background-image: url(images/slide_1.png);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-1">Plus de 2000 adhérents</h3>
						</div>
					</div>
					<div class="col-md-4 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-2">16 sections sportives</h3>
						</div>
					</div>
					<div class="col-md-4 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-3">100% fun</h3>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<?php
			
			try{
				$pdo = new PDO('mysql:host=usg.bdd01.blocnet.fr;dbname=usgbdd;charset=utf8','usgbdd','Usg@2021!');
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $e){
				die("ERROR: Could not connect. " . $e->getMessage());
			} 
		?>
		<div id="fh5co-events" data-section="events" style="background-image: url(images/fond.jpg);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2 to-animate">
						<h2 class="heading">ACTUALITÉS DE L'UNION SPORTIVE DE GRIGNY</h2>
						<p class="sub-heading">DÉCOUVREZ NOS DERNIERS ARTICLES</p>
					</div>
				</div>
				<div class="row">
				<?php 
						try{
							$sql = "SELECT * FROM articles";   
							$result = $pdo->query($sql);
							if($result->rowCount() > 0){
								while($row = $result->fetch()){?>
					<div class="col-md-3">
						<div class="fh5co-event to-animate-2">
							<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" alt=""><br>
							<h3><?php echo $row['titre'] ?></h3> <br>
							<p><?php

									$texte = $row['texte'];
									$string =strip_tags($texte);
								
									if(strlen($string) >100):

										$strCut = substr($texte,0,100);
										$endPoint=strrpos($strCut,'');
										$string=$endPoint?substr($strCut,0,$endPoint):substr($strCut,0);
										$string.='...';
									endif;
								echo $string; ?> </p>
							<p><a href="articles.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-outline">Read More</a></p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="fh5co-event to-animate-2">
							<h3>Nous vous remercions pour votre fidélité</h3>
							<span class="fh5co-event-meta">March 19th, 2016</span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="#" class="btn btn-primary btn-outline">Read More</a></p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="fh5co-event to-animate-2">
							<h3>Le mot du président</h3>
							<span class="fh5co-event-meta">March 19th, 2016</span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="#" class="btn btn-primary btn-outline">Read More</a></p>
						</div>
					</div>
					
				</div>
			</div>
		</div>

	
		<?php 
						}
						echo "</table>";
						// Free result set
						unset($result);
					} else{
						echo "No records matching your query were found.";
					}
				} catch(PDOException $e){
					die("ERROR: Could not able to execute $sql. " . $e->getMessage());
				}
				 
				// Close connection
				unset($pdo);
					?>

		<div id="fh5co-contact" data-section="contact">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Contact</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 to-animate-2">
						<h3>Nous contacter</h3>
						<ul class="fh5co-contact-info">
							<li class="fh5co-contact-address ">
								<i class="icon-home"></i>
								1 Rue du Minotaure, 91350  <br>Grigny
							</li>
							<li><i class="icon-phone"></i> 01 69 45 23 21</li>
							<li><i class="icon-envelope"></i>usg.president@sfr.fr</li>
							<li><i class="icon-globe"></i> <a href="http://usg91.fr/" target="_blank">usg91.fr/</a></li>
						</ul>
					</div>
					<div class="col-md-6 to-animate-2">
						<form method="POST" action="index.php" data-nav-section="contact">
								<h3>Nous laisser un commentaire</h3>
								<div class="form-group ">
									<label for="name" class="sr-only">Nom</label>
									<input id="name" class="form-control" placeholder="Nom" type="text"   name="nom" />
								</div>
								<div class="form-group ">
									<label for="prenom" class="sr-only">Prénom</label>
									<input id="prenom" class="form-control" placeholder="Prénom" type="text" name="prenom">
								</div>
								<div class="form-group ">
									<label for="email" class="sr-only">Email</label>
									<input id="email" class="form-control" placeholder="Email" type="email"  name="mail">
								</div>
								<div class="form-group ">
									<label for="message" class="sr-only">Message</label>
									<textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
								</div>
								<div class="form-group ">
									<input class="btn btn-primary" value="envoyer" type="submit"  name="mailform">
								</div>
						</form>
						<?php if(isset($msg)) {
							echo $msg;
						 }
						?>
					</div>
				</div>
			</div>
		</div>

		
	</div>
	<div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21083.71481825545!2d2.3688725875954146!3d48.658361520951026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5df0372480ab5%3A0x40b82c3688b45d0!2sGrigny!5e0!3m2!1sfr!2sfr!4v1623240571951!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>	</div>

	<div id="fh5co-footer">
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="to-animate">&copy; Union Sportive de Grigny - Tout droit réservé <br> 
					</p>
					<p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="fh5co-social">
						<li class="to-animate-2"><a href="https://www.facebook.com/UnionSportivedeGrigny/"><i class="icon-facebook"></i></a></li>
						<li class="to-animate-2"><a href="https://twitter.com/USGrigny"><i class="icon-twitter"></i></a></li>
						<li class="to-animate-2"><a href="https://www.instagram.com/union.sportive.de.grigny/?hl=fr"><i class="icon-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	
	
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootstrap DateTimePicker -->
	<script src="js/moment.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<script>
		$(function () {
	       $('#date').datetimepicker();
	   });
	</script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

