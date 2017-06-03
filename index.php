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
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({
    		google_ad_client: "ca-pub-3199022834616540",
    		enable_page_level_ads: true
			});
</script>
		<title>TheToolBox</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="static/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="static/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="static/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="static/css/ie8.css" /><![endif]-->
		<link rel="shortcut icon" href="static/images/favicon.ico">	<!--// TODO Need a logo-->
	</head>

	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo">
							<img src="static/images/logo.svg" alt="" />
						</span>	<!--// TODO  Need to change this to toolbox icon And thetoolbox.online can directly refer to this server -->
						<h1>TheToolBox</h1>
						<p>A collection of tools for students in order to help their study<br/>
						<?php
							include "tipsChooser.php";
						?>
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
											<p>Here is the Citation section, you can cite any website you want by clicking buttons below and filling the url blank. 
												After submitting, you can modify the citation automatically generate by the server's crawler.</p>
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
									<p>Here is the Exam section. You can download all of the past AP exam materials that were published on <a href="https://apcentral.collegeboard.com" traget="_blank">CollegeBoard AP Central</a>. 
										In addition, this section also provides links to SAT preparation websites.</p>
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
							<div>
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
									
										<!--<li><a onclick="selectButton(this),loadTemplate(this,'Timer/Pomodoro')" class="button">Pomodoro</a></li>-->
										<!--<li><a onclick="selectButton(this),loadTemplate(this,'Timer/Muse')" class="button">Muse</a></li>
										<li><a onclick="selectButton(this),loadTemplate(this,'Timer/Normal_Timer')" class="button">Normal Timer</a></li>
										<!--<li><a onclick="selectButton(this),loadTemplate(this,'Exam/actlinks')" class="button">IELTS</a></li>-->
										<!--<li><a onclick="selectButton(this),loadTemplate(this,'Exam/actlinks')" class="button">ACT</a></li>-->
									</ul>
									<?php
										include "static/Template/Timer/Pomodoro.php"
									?>
								</header>
								</div>
							</section>

						<!-- Useful links-->
							<section id="Links" class="main special">
								<header class="major">
									<h2>Wonderful Links</h2>
									<span class="icon major style2 fa-random"></span>
									<p>You can click one of the buttons below to access some interesting websites!</p>
									<ul class="actions">
										<li><a onclick="selectButton(this),loadTemplate(this,'Links/programmer')" class="button">Programmers</a></li>
										<li><a onclick="selectButton(this),loadTemplate(this,'Links/academic')" class="button">Academic</a></li>
										<li><a onclick="selectButton(this),loadTemplate(this,'Links/tools')" class="button">Tools</a></li>
										<li><a onclick="selectButton(this),loadTemplate(this,'Links/relativelinks')" class="button">Friendship</a></li>
									</ul>
								</header>
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


