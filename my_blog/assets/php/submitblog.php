<html>
	<body>

	The city name is: <?php echo $_POST["city"]; ?><br>
	The country name is: <?php echo $_POST["country"]; ?><br>

	<!--the nl2br function allows fomatting such as breaks to be kept -->
	Blog Post: <?php echo nl2br($_POST["blogPost"]); ?>

	</body>
</html>