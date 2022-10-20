<?php
	include APPSRC.'/templates/partials/head.tpl.php';
?>

	<body>
		<header>
			<h1>Login</h1>
		</header>
		<hr>
		<?php include APPSRC.'/templates/partials/nav.tpl.php'; ?>
		<div id="breadcrumbs">
			<ul>
				<li><a href="?url=home">Home</a></li>
				<li><a href="?url=login">Login</a></li>
			</ul>
		</div>
		<main>
			<form method="POST" action="?url=loginaction">
				<label for="email">Email:</label>
				<input id="email" name="email" type="email" placeholder="Email">
				<label for="passwd">Password:</label>
				<input id="passwd" name="passwd" type="password" placeholder="Password">
				<button type="submit">LOGIN</button>
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