<?php
	include APPSRC.'/templates/partials/head.tpl.php';
?>

	<body>
		<header>
			<h1>Sign Up</h1>
			<hr>
		</header>
		<?php include APPSRC.'/templates/partials/nav.tpl.php'; ?>
		<main>
			<form method="POST" action="?url=signupaction">
				<label for="fullname">Full name:</label>
				<input id="fullname" name="fullname" type="fullname" placeholder="Full name">
				<br>
				<label for="email">Email:</label>
				<input id="email" name="email" type="email" placeholder="Email">
				<br>
				<label for="passwd">Password:</label>
				<input id="passwd" name="passwd" type="password" placeholder="Password">
				<br>
				<label for="passwdConfirm">Password confirmation:</label>
				<input id="passwdConfirm" name="passwdConfirm" type="password" placeholder="Password Confirmation">
				<br>
				<label for="isProf">Are you a professor?:</label>
				<input id="isProf" name="isProf" type="checkbox">
				<br>
				<button type="submit">SIGN UP</button>
			</form>
		</main>
		<footer>
			
		</footer>
	</body>
</html>