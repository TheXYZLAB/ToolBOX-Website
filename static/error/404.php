<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Oops! 404 NOT FOUND</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="/static/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>404 NOT FOUND</h1>
                        <p><a href="http://thetoolbox.online">Clcik to return</a></p>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								
								<h2>Why 404</h2>
								<p>Usually the cause is that the file you want to access is not uploaded yet or the url you want to visit is not available.</p>
								<h2>How to improve</h2>
                                <p>You can give me feedback through e-mail (right under this section) or you can post the issue you met on <a href="https://github.com/William-An/ToolBOX-Website">Github</a><br/>
                                    It will be nice if you could submit with the error message!</p>

					</div>

				<!-- Footer -->
					<?php
						// echo file_get_contents("../Template/footer.html");
						include '../Template/footer.php';
					?>
					

			</div>

		<!-- Scripts -->
			<?php
				include '../Template/scripts.php'
			?>



	</body>
</html>