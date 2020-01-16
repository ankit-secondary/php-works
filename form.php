<html>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_server["PHP_SELF"]); ?>">
		<form method="post" action="form.php/&quot;&gt;&lt;script&gt;alert('hacked')&lt;/script&gt;">
<center>welcome <?php echo $_POST["name"]; ?> <br>
Your email adress is <?php echo $_POST["email"]; ?><br>
your Mobile N0.is <?php echo $_POST["number"]; ?></center>
</body>
</html>