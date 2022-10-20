<?php
	include APPSRC.'/templates/partials/head.tpl.php';
?>

	<body>
		<header>
			<h1>Profile</h1>
			<?php include APPSRC.'/templates/partials/user-profile-display.tpl.php'; ?>
		</header>
		<hr>
		<?php include APPSRC.'/templates/partials/nav.tpl.php'; ?>
		<div id="breadcrumbs">
			<ul>
				<li><a href="?url=home">Home</a></li>
				<li><a href="?url=dashboard">Dashboard</a></li>
				<li><a href="?url=userprofile">Profile</a></li>
			</ul>
		</div>
		<main>
			<div id="profile-settings-display-container">
				<table class="profile-display-table">
					<tr><th colspan='2'>Profile data</th></tr>
					<tr>
						<td>Full name:</td><td><?= $user->fullname;?></td>
					</tr>
					<tr>
						<td>Email:</td><td><?= $user->email;?></td>
					</tr>
					<tr>
						<td>Is a professor?:</td><td><?= boolval($user->isProf)?'YES':'NO';?></td>
					</tr>
				</table>
				<table class="profile-display-table">
					<tr><th colspan='2'>Profile settings</th></tr>
					<tr>
						<td>Last login:</td><td><?= $usersettings->lastLogin;?></td>
					</tr>
					<tr>
						<td>Language:</td><td><?= $usersettings->language;?></td>
					</tr>
					<tr>
						<td>Current visual theme:</td><td><?= $usersettings->colorTheme; ?></td>
					</tr>
				</table>
			</div>
			<button id="modify-user-settings-btn"><a href="?url=usersettings">MODIFY USER SETTINGS</a></button>
		</main>
		<footer>
			
		</footer>
	</body>
</html>