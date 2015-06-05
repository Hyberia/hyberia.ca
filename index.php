<?php
session_start();
header('Cache-control: private'); // IE 6 FIX
//***************************Begin language control *******************************
if(isset($_POST['en_x'],$_POST['en_y']))
{
$lang = fr;
 
// register the session and set the cookie
$_SESSION['lang'] = $lang;
 
setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isset($_POST['fr_x'],$_POST['fr_y']))
{
$lang = en;
 
// register the session and set the cookie
$_SESSION['lang'] = $lang;
 
setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'en';
}
$language='';
switch ($lang) {
  case 'en':
  $language='en_CA.utf8';
  break;
 
  case 'fr':
  $language='fr_CA.utf8';
  break;
 
  default:
  $language='en_CA.utf8';
 
}

putenv("LANG=$language");
setlocale(LC_ALL,$language);
$domain='messages';
bindtextdomain($domain,"locale");
bind_textdomain_codeset($domain,'UTF-8');
textdomain($domain);
//***************************End language control *******************************

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Hyberia Inc.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#top"><?php echo gettext("Top");?></a></li>
					<li><a href="#work"><?php echo gettext("Work"); ?></a></li>
					<li><a href="#portfolio"><?php echo gettext("Portfolio");?></a></li>
					<li><a href="#team"><?php echo gettext("Team"); ?></a></li>
					<li><a href="#contact"><?php echo gettext("Contact");?></a></li>
				</ul>
<div style="position:relative;"><form id="frmLang" action="<?php $_PHP_SELF ?>" method="POST"><input name="<?php if(isset($lang)){echo $lang;}else{echo "en";}?>" type="image" src="images/<?php if(isset($lang)){switch($lang){case 'en': echo "qc.png";break; case 'fr':echo "gb.png";break; default:echo "qc.png";}}else{echo "qc.png";}?>" height="32px"></form></div>
			</nav>

		<!-- Home -->
			<div class="wrapper style1 first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u 12u(mobile)">
							<span class="image fit"><img src="images/logo.png" alt="" /></span>
						</div>
						<div class="8u 12u(mobile)">
							<header>
								<h1><?php echo gettext("Hi. We're <strong>Hyberia</strong>.");?></h1>
							</header>
							<p><?php echo gettext("A <strong>webcasting</strong> and <strong>videography</strong> solution for special events and other things.");?></p>
							<a href="#work" class="button big scrolly"><?php echo gettext("What we do");?></a>
						</div>
					</div>
				</article>
			</div>

		<!-- Work -->
			<div class="wrapper style2">
				<article id="work">
					<header>
						<h2><?php echo gettext("We take your event to a global audience.");?></h2>
						<p><?php echo gettext("Webcasting is broad, but we focus on making your event available online.");?></p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-play-circle"></span>
									<h3><?php echo gettext("Live, No hassle");?></h3>
									<p><?php echo gettext("There is no limit on who can watch your event.");?></p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-ticket"></span>
									<h3><?php echo gettext("Ticketed event");?></h3>
									<p><?php echo gettext("We can monetize your event. You set the price, we deliver.");?></p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-road"></span>
									<h3><?php echo gettext("We travel");?></h3>
									<p><?php echo gettext("We are ready to go where your event is, as long as we can get to it.");?></p>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-video-camera"></span>
									<h3><?php echo gettext("Video Production");?></h3>
									<p><?php echo gettext("We can save the memories from your event.");?></p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-film"></span>
									<h3><?php echo gettext("Video editing");?></h3>
									<p><?php echo gettext("Summerized version or promotional media for your event? We do that!");?></p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-heart"></span>
									<h3><?php echo gettext("Weddings");?></h3>
									<p><?php echo gettext("Yes, we even do weddings!");?><br/><br/></p>
								</section>
							</div>
						</div>
					</div>
					<footer>
						<p><?php echo gettext("Still not sure what we can do?");?></p>
						<a href="#portfolio" class="button big scrolly"><?php echo gettext("See some of our previous work");?></a>
					</footer>
				</article>
			</div>

		<!-- Portfolio -->
			<div class="wrapper style3">
				<article id="portfolio">
					<header>
						<h2><?php echo gettext("Previous clients");?></h2>
						<p><?php echo gettext("Over the years we have worked at many great events.");?></p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a href="http://www.ganime.ca" class="image featured"><img src="images/ganime.png" alt="" /></a>
									<h3><a href="#">G-Anime</a></h3>
									<p><?php echo gettext("<i>The origin of Hyberia.</i> We started just doing it for fun and now we deliver, record and organise many shows over the 3 days of the event.");?></p>
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a href="http://www.houseofsas.ca" class="image featured"><img src="images/cirque.png" alt="" /></a>
									<h3><a href="#">Cirque Bizarre</a></h3>
									<p><?php echo gettext("3 nights of live broadcast during Ottawa Pride Week.");?></p>
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a href="#" class="image featured"><img src="images/esportsnorth.png" alt="" /></a>
									<h3><a href="#">Ottawa got Game</a></h3>
									<p><?php echo gettext("Presented by eSports North.");?></p>
								</article>
							</div>
						</div>
						<div class="row">
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a href="http://www.ottawacomiccon.com/" class="image featured"><img src="images/occ.png" alt="" /></a>
									<h3><a href="#">Ottawa Comiccon</a></h3>
									<p><?php echo gettext("Production of <a href=\"https://www.youtube.com/watch?v=1SE-LsBKIu0\">a theater ad</a> and videography for the main event hall including a <i>Skype-in</i>.");?></p>
								</article>
							</div>
						</div>
					</div>
					<footer>
						<p><?php echo gettext("Still have questions?");?></p>
						<a href="#contact" class="button big scrolly"><?php echo gettext("Get in touch with us");?></a>
					</footer>
				</article>
			</div>
        <!-- Team -->
		<div class="wrapper style2">
				<article id="team">
					<header>
						<h2><?php echo gettext("The team.");?></h2>
						<p><?php echo gettext("Founded in 2011 by Mathieu and Arnaud, we have grown to a small but dedicated team.");?></p>
					</header>
					<div class="container">					
						<div class="row">
							<div class="6u">
								<article class="box box-style3">
									<span class="me halfsize image"> 
										<img alt="" src="images/mathieu.png"></img>
									</span>
									<h3>Mathieu Charron</h3>
									<ul class="social mini">
										<li class="twitter"> 
											<a class="icon fa-twitter" href="https://twitter.com/elwillow"></a>
										</li>
										<li class="googleplus">
											<a class="icon fa-google-plus" href="https://plus.google.com/108531361055288920120/posts"></a>
										</li>
										<li class="facebook">
											<a class="icon fa-facebook" href="https://www.facebook.com/ZeWillow"></a>
										</li>
										<li class="github">
											<a class="icon fa-github" href="https://github.com/elwillow"></a>
										</li>
										<li class="linkedin">
											<a class="icon fa-linkedin" href="http://ca.linkedin.com/in/elwillow"></a>
										</li>
									</ul>
								</article>
							</div>
							<div class="6u">
								<article class="box box-style3">
									<span class="me halfsize image"> 
										<img alt="" src="images/marc.png"></img>
									</span>
									<h3>Marc Tremblay</h3>
									<ul class="social mini">
										<li class="googleplus">
											<a class="icon fa-google-plus" href="https://plus.google.com/118296864023611187309/posts"></a>
										</li>
										<li class="facebook">
											<a class="icon fa-facebook" href="https://www.facebook.com/saxapholia"></a>
										</li>
									</ul>
								</article>
							</div>
						</div>
						<div class="row">
							<div class="6u">
								<article class="box box-style3">
									<span class="me halfsize image"> 
										<img alt="" src="images/jamie.png"></img>
									</span>
									<h3>Jamie Nadeau</h3>
									<ul class="social mini">
										<li class="twitter">
											<a class="icon fa-twitter" href="https://twitter.com/jamesExiledLedg"></a>
										</li>
										<li class="googleplus">
											<a class="icon fa-google-plus" href="https://plus.google.com/110272077797160864096/posts"></a>
										</li>
										<li class="facebook">
											<a class="icon fa-facebook" href="https://www.facebook.com/jamesxL"></a>
										</li>
										<li class="github">
											<a class="icon fa-github" href="https://github.com/james2432"></a>
										</li>										
									</ul>
								</article>
							</div>
							<div class="6u">
								<article class="box box-style3">
									<h4><?php echo gettext("Other members");?></h4>
									<h5>Arnaud Dubé</h5>
								</article>
							</div>
						</div>
					</div>
				</article>
		</div>
			
		<!-- Contact -->
			<div class="wrapper style4">
				<article id="contact" class="container 75%">
					<header>
						<h2><?php echo gettext("Want to hire Get in touch!");?></h2>
						<p><?php echo gettext("We normally answer pretty quickly.");?></p>
					</header>
					<div>
						<div class="row">
							<div class="12u" id="frmFormMailContainer">
								<form name="frmFormMail" id="frmFormMail" target="submitToFrame" action='#' method="post" enctype='multipart/form-data' onsubmit='return fmgHandler.onSubmit(this)'>
									<div>
										<div class="row">
											<div class="6u 12u(mobile)">
												<input type="text" name="name" id="name" placeholder="Name" />
											</div>
											<div class="6u 12u(mobile)">
												<input type="text" name="email" id="email" placeholder="Email" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="text" name="subject" id="subject" placeholder="Subject" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="row 200%">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Send Message" /></li>
													<li><input type="reset" value="Clear Form" class="alt" /></li>
												</ul>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<hr />
								<h3><?php echo gettext("Find us on ...");?></h3>
								<ul class="social">
									<li class="twitter"><a href="http://twitter.com/hyberia" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li class="facebook"><a href="https://www.facebook.com/HyberiaInc" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<!--<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
									<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>-->
									<li class="googleplus"><a href="https://plus.google.com/100664778019267381219" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
									<li class="github"><a href="https://github.com/hyberia" class="icon fa-github"><span class="label">Github</span></a></li>
									<!--
									<li><a href="#" class="icon fa-rss"><span>RSS</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span>Instagram</span></a></li>
									<li><a href="#" class="icon fa-foursquare"><span>Foursquare</span></a></li>
									<li><a href="#" class="icon fa-skype"><span>Skype</span></a></li>
									<li><a href="#" class="icon fa-soundcloud"><span>Soundcloud</span></a></li>
									<li><a href="#" class="icon fa-youtube"><span>YouTube</span></a></li>
									<li><a href="#" class="icon fa-blogger"><span>Blogger</span></a></li>
									<li><a href="#" class="icon fa-flickr"><span>Flickr</span></a></li>
									<li><a href="#" class="icon fa-vimeo"><span>Vimeo</span></a></li>
									-->
								</ul>
								<hr />
							</div>
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; 2011-2015 Hyberia Inc.</li>
						</ul>
					</footer>
				</article>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
