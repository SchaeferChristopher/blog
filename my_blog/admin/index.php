<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic Page - Massively by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="my_blog/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo">ADMIN</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.php">Upload</a></li>
							<li ><a href="edit.php">Edit</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
								<header class="major">Fill out form below for New Post To Blog</header>
								<p>Photo upload on second page, after this one.</p>
								<form method="post" action="../assets/php/submitblog.php" class="alt" onsubmit="image-upload.php">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<label for="city">City</label>
											<input type="text" name="city" id="demo-name" value="" placeholder="City" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<label for="country">Country</label>
											<input type="text" name="country" id="demo-email" value="" placeholder="Country" />
										</div>
										<!--
										<div class="field">
											<input type="checkbox" id="subscribe" name="subscribe">
											<label for="subscribe">Subscribe</label>
										</div>
										-->
										<div></div>
										<div class="12u$">
											<label for="message">Blog Post</label>
												<textarea name="blogPost" id="demo-message" placeholder="This is your blog post" rows="6"></textarea>
											</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Submit Blog" class="special" /></li>
										</ul>
									</div>
								</form>
							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">

					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>