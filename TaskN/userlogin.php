
<!DOCTYPE HTML>
<html>
<head>
<title>Task Notification-5999</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
	<div id="main">
		<div id="header">
			<div id="logo">
				<div id="logo_text">
					<!-- class="logo_colour", allows you to change the colour of the text -->
					<h1>
						<a href="index.php">Task Notification-<span class="logo_colour">5999</span></a>
					</h1>
					<h2>
						Register. Log in. Task Away!
						<h2>
				</div>
			</div>
			<div id="menubar">
				<ul id="menu">
					<!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
					<li class="selected"><a href="index.php">Home</a></li>
					<li id="menuTask" class="hide"><a  href="">Tasks</a></li>
					<li id="menuMTask" class="hide"><a href="">My Tasks</a></li>
					<li id="menuReg" class="selected"><a  href="signup.php">Register</a></li>
					<li id="menuLogin" class="selected"><a  href="userlogin.php">Login</a></li>
					<li id="menuLoguit" class="hide"><a href="index.html" id="loguit">Loguit</a></li>
				</ul>
			</div>
		</div>

		<div id="site_content">
			<div id="content">

				<h1>Welcome to our Task Notification App</h1>
				<div class="container__child signup__form">
				<form action="Login.php" method="POST">
					<div class="form-group">
						<label for="username">Username</label>
						<input class="form-control" type="text" name="uname" id="username" placeholder="Username" required />
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input class="form-control" type="password" name="psw" id="password" placeholder="Password" required />
					</div>
					<div class="m-t-lg">
						<ul class="list-inline">
							<li>
								<input class="btn btn--form" type="submit" name ="login" value="Login" />
							</li>
							<li>
								<a class="signup__link" href="signup.php">Not a member yet ?</a>
							</li>
						</ul>
					</div>
				</form>
			</div>

			</div>
		</div>





		<div id="footer">
			<p>
				<a href="index.php">Home</a> | Task Notification - 5999
			</p>
		</div>
	</div>
</body>

</html>
