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
			<form method="POST" action="?url=reminduseraction">
				<p>Remember user?</p>
				<button type="submit" id="true">YES</button>
				<button type="submit" id="false">NO</button>
			</form>
		</main>
		<footer>
			
		</footer>
	</body>
</html>