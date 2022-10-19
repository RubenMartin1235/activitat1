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
			<form method="POST" action="?url=rememberuseraction">
				<p>Remember user <b><?= $fullname; ?></b>?</p>
				<button type="submit" name="rememberMeAction" value="1" class="rememberMeBtn">YES</button>
				<button type="submit" name="rememberMeAction" value="0" class="rememberMeBtn">NO</button>
			</form>
		</main>
		<footer>
			
		</footer>
	</body>
</html>