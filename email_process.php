<!DOCTYPE html>
<html>
	<head>
		<title>akata Services | Your ICT Solutions Company in The Gambia</title>
		<meta charset="utf-8" />
		<meta name="description" content="akata Services is a Web Design &amp; Development company headquartered in the Gambia. akata sell Computers and offers Computer Networking &amp; Repairs"/>
		<meta name="keywords" content="akata, akata Services, akata Gambia, akata gm, web design development, computer sales">
		<link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon'/ >
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index">akata Services</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index">Home</a></li>
							<li>
								<a href="#">Services</a>
								<ul>
									<li><a href="#">Computer Sales</a></li>
									<li><a href="#">Computer Networking</a></li>
									<li><a href="#">Web Design &amp; Development</a></li>
								</ul>
							</li>
							<li><a href="#">About Us</a></li>
							<li><a href="#" class="button special">akata Offers</a></li>
						</ul>
					</nav>
				</header>

				<section id="five" class="wrapper style2 special fade">
					<div class="container">

						<?php 
							require_once 'swiftmailer/swiftmailer/lib/swift_required.php';

							//grab post data
							$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
							$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
							$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

							//Create Email body
							$data = "Name: " . $name . "<br />" . "Email: " . $email . "<br />" ."Message: " . $message;

							// Create the transport
							$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
								->setUsername('bbmanjang@gmail.com')
								->setPassword('bmanjang@123.com');

							// Create the mailer
							$mailer = Swift_Mailer::newInstance($transport);
							$message = Swift_Message::newInstance('Web Lead')
								->setFrom(array('bbmanjang@gmail.com' => 'Web Lead From akata Servicess'))
								->setTo(array('info@akata.gm', 'bbmanjang@gmail.com' => 'Lead Recipients'))
								->setSubject('Web Lead From akata Services')
								->setBody ($data, 'text/html');

							// send the message
							$result = $mailer->send($message);
						?>

						<header>
							<h2>Thank you for contacting us, we will get back to you shortly.</h2>
							<p>It's all about delivering value to our awesome customers and in particular, to you, our loyal customer.</p>
						</header>

				</div>
				</section>

				<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://twitter.com/akataGM" target="_blank" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="http://facebook.com/akataGM" target="_blank" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="http://linkedin.com/akataGM" target="_blank" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="http://instagram.com/akataGM" target="_blank" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="mailto:info@akata.gm" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>Copyright &copy; 2016 akata Services. All rights reserved.</li><li><a href="http://akata.gm">Privacy Policy</a></li><li><a href="http://akata.gm">Cookies</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<?php include_once("analyticstracking.php") ?>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
