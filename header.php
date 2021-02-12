<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				<h1 class="logo">Skyline Petroleum</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="signup.php">Signup</a></li>
						<li><a href="account.php">Client Login </a></li>
						<!-- <li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li> -->
					</ul>
					
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
								<li><a href="message_admin.php">Message Admin</a></li>
							</ul>
					<a href="includes/Logout.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>