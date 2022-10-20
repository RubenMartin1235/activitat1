<?php
	include APPSRC.'/templates/partials/head.tpl.php';
?>

	<body>
		<header>
			<h1>Sign Up</h1>
		</header>
		<hr>
		<?php include APPSRC.'/templates/partials/nav.tpl.php'; ?>
		<div id="breadcrumbs">
			<ul>
				<li><a href="?url=home">Home</a></li>
				<li><a href="?url=signup">Sign up</a></li>
			</ul>
		</div>
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
				<br>
				<?php
					if ($cookie_consent = filter_input(INPUT_COOKIE, 'cookie-consent', FILTER_SANITIZE_STRING) == 'true') {
						include APPSRC.'/templates/partials/field-rememberuser.tpl.php';
					}
				?>
			</form>
		</main>
		<footer>
			
		</footer>
	</body>
</html>