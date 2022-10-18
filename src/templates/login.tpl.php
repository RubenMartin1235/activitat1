<?php
	include APPSRC.'/templates/partials/head.tpl.php';
?>

	<body>
		<header>
			<h1>Login</h1>
			<hr>
		</header>
		<?php include APPSRC.'/templates/partials/nav.tpl.php'; ?>
		<main>
			<form method="POST" action="?url=loginaction">
				<label for="email">Email:</label>
				<input id="email" name="email" type="email" placeholder="Email">
				<label for="passwd">Password:</label>
				<input id="passwd" name="passwd" type="password" placeholder="Password">
				<button type="submit">LOGIN</button>
				<br>
				<label for="rememberMe">Remember me on this computer:</label>
				<input id="rememberMe" name="rememberMe" type="checkbox">
			</form>
		</main>
		<footer>
			
		</footer>
	</body>
</html>