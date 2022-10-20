<?php
	include APPSRC.'/templates/partials/head.tpl.php';
?>

	<body>
		<header>
			<h1>Modify profile settings</h1>
			<?php include APPSRC.'/templates/partials/user-profile-display.tpl.php'; ?>
		</header>
		<hr>
		<?php include APPSRC.'/templates/partials/nav.tpl.php'; ?>
		<div id="breadcrumbs">
			<ul>
				<li><a href="?url=home">Home</a></li>
				<li><a href="?url=dashboard">Dashboard</a></li>
				<li><a href="?url=userprofile">Profile</a></li>
				<li><a href="?url=usersettings">Modify profile settings</a></li>
			</ul>
		</div>
		<main>
			<form action="?url=usersettingsaction" method="post">
				<div id="profile-settings-display-container">
					<table class="profile-display-table">
						<tr><th colspan='2'>Profile settings</th></tr>
						<tr>
							<td>Language:</td>
							<td>
								<select id="language-field" name="language">
									<option value="en">English</option>
									<option value="es">Español</option>
									<option value="ca">Català</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Current visual theme:</td>
							<td>
								<select id="color-theme-field" name="colorTheme">
									<option value="light_default">Light theme</option>
									<option value="dark_default">Dark theme</option>
								</select>
							</td>
						</tr>
					</table>
				</div>
				<button id="modify-user-settings-btn" type="submit">APPLY CHANGES</button>
			</form>
		</main>
		<footer>
			
		</footer>
	</body>
	<script type="text/javascript">
		let languageSelect = document.querySelector("select#language-field");
		let colorThemeSelect = document.querySelector("select#color-theme-field");
		let defaultLanguageOption = document.querySelector("select#language-field option[value='<?= $usersettings->language; ?>']");
		let defaultColorThemeOption = document.querySelector("select#color-theme-field option[value='<?= $usersettings->colorTheme; ?>']");
		
		defaultLanguageOption.selected = "selected";
		defaultColorThemeOption.selected = "selected";
	</script>
</html>