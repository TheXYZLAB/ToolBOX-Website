<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
	-----------------------------------------------------------------------------------
	Modified by Weili An  william-an.xyz
	@William-An on github https://github.com/William-An
-->
<html>
	<head>
		<title>TheToolBox</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="static/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="static/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="static/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="static/css/ie8.css" /><![endif]-->
		<link rel="shortcut icon" href="static/images/favicon.ico">	<!--// TODO Need a logo-->
	</head>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3199022834616540",
    enable_page_level_ads: true
  });
</script>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo">
							<img src="static/images/logo.svg" alt="" />
						</span>	<!--// TODO  Need to change this to toolbox icon And thetoolbox.online can directly refer to this server -->
						<h1>TheToolBox</h1>
						<p>A collection of tools<br> for students
							</p>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#Citation" class="active">Citation</a></li>
							<li><a href="#Exam">Exam</a></li>
							<li><a href="#Timer">Timer</a></li>
							<li><a href="#Links">Links</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Citation -->
							<section id="Citation" class="main special">
							<!--Create an equation similar to the timer one-->
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>Citation</h2>
											<span class="icon major style2 fa-pencil"></span>
											<ul class="actions">
											<li>
											<a class="button" onclick="selectButton(this),loadTemplate(this,'Citation/urlCitation')">MLA</a> <!--Use php to load html? AJAX-->
											</li>
											<li>
											<a class="button" onclick="selectButton(this),loadTemplate(this,'Citation/urlCitation')">APA</a>
											</li>
											<!--<li>
											<a class="button" onclick="selectButton(this),loadTemplate(this,'urlCitation')">Wiki</a>
											</li>-->
											</ul>
										</header>
									</div>
								</div>
							</section>

						<!-- Exam -->
							<section id="Exam" class="main special">
								<header class="major">
									<h2>Exam</h2>
									<span class="icon major style3 fa-cloud-download"></span>
								<ul class="actions">
										<li><a onclick="selectButton(this),loadTemplate(this,'Exam/downloadform')" class="button">AP</a></li>
										<li><a onclick="selectButton(this),loadTemplate(this,'Exam/satlinks')" class="button">SAT</a></li>
										<!--<li><a onclick="selectButton(this),loadTemplate(this,'Exam/actlinks')" class="button">TOEFL</a></li>-->
										<!--<li><a onclick="selectButton(this),loadTemplate(this,'Exam/actlinks')" class="button">IELTS</a></li>-->
										<!--<li><a onclick="selectButton(this),loadTemplate(this,'Exam/actlinks')" class="button">ACT</a></li>-->
									</ul>
								</header>
							</section>

						<!-- Timer-->
							<section id="Timer" class="main special">
								<header class="major">
									<h2>Timer</h2>
									<ul class="statistics">
									<li class="style1">
										<span class="icon fa-clock-o"></span>
										<strong>Time</strong>
									</li>
									<li class="style2">
										<span class="icon fa-plus"></span>
										<strong>Plus</strong>
									</li>
									<li class="style3">
										<span class="icon fa-lightbulb-o"></span>
										<strong>Idea</strong>
									</li>
									<li class="style4">
										<span class="icon fa-arrow-right"></span>
										<strong>Equals</strong>
									</li>
									<li class="style5">
										<span class="icon fa-diamond"></span>
										<strong>Success</strong>
									</li>
								</ul>
									<ul class="actions">
										<li><a onclick="selectButton(this),loadTemplate(this,'Timer/Pomodoro')" class="button">Pomodoro</a></li>
										<li><a onclick="selectButton(this),loadTemplate(this,'Timer/Muse')" class="button">Muse</a></li>
										<!--<li><a onclick="selectButton(this),loadTemplate(this,'Exam/actlinks')" class="button">TOEFL</a></li>-->
										<!--<li><a onclick="selectButton(this),loadTemplate(this,'Exam/actlinks')" class="button">IELTS</a></li>-->
										<!--<li><a onclick="selectButton(this),loadTemplate(this,'Exam/actlinks')" class="button">ACT</a></li>-->
									</ul>
								</header>
								
							</section>

						<!-- Useful links-->
							<section id="Links" class="main special">
								<header class="major">
									<h2>Congue imperdiet</h2>
									<p>Donec imperdiet consequat consequat. Suspendisse feugiat congue<br />
									posuere. Nulla massa urna, fermentum eget quam aliquet.</p>
								</header>
								<footer class="major">
									<ul class="actions">
										<li><a href="generic.html" class="button special">Get Started</a></li>
										<li><a href="generic.html" class="button">Learn More</a></li>
									</ul>
								</footer>
							</section>

					</div>

				<!-- Footer -->
				<?php
						include "static/Template/footer.php";
					?>

			</div>

		<!-- Scripts -->
	<?php
		include 'static/Template/scripts.php';
	?>
</body>
</html>


