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
			<form method="POST" action="?url=logaction">
				<label for="email">Email:</label>
				<input id="email" name="email" type="email" placeholder="Email">
				<label for="passwd">Password:</label>
				<input id="passwd" name="passwd" type="password" placeholder="Password">
				<button type="submit">LOGIN</button>
			</form>
		</main>
		<footer>
			
		</footer>
	</body>
</html>