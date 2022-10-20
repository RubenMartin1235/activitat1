<?php
	include APPSRC.'/templates/partials/head.tpl.php';
?>

	<body>
		<header>
			<h1>Login</h1>
			<hr>
		</header>
		<?php include APPSRC.'/templates/partials/nav.tpl.php'; ?>
		<div id="breadcrumbs">
			<ul>
				<li><a href="?url=home">Home</a></li>
				<li><a href="?url=rememberuser">Remember user</a></li>
			</ul>
		</div>
		<main>
			<form method="POST" action="?url=rememberuseraction">
				<p>Do you want to log in as <b><?= $fullname; ?></b>?</p>
				<p>Time of last login: <b>
					<?= (isset($lastLogin)) ? $lastLogin : "(not available)"; ?>
				</b></p>
				<button type="submit" name="rememberMeAction" value="1" class="rememberMeBtn">YES</button>
				<button type="submit" name="rememberMeAction" value="0" class="rememberMeBtn">NO</button>
			</form>
		</main>
		<footer>
			
		</footer>
	</body>
</html>
