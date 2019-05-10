
<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Zeta Beta Tau - Xi Chapter</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			

			<!-- Nav -->
				<nav id="nav">
					<img class="line" src="images/line.png" />
				<!-- Header -->
					<header id="header">
						<div class="logo">
							<object data="images/ZBTLogoResized.svg" type="image/svg+xml" width="12%" height="12%">
							  <img src="images/logo.jpg" />
							</object>
							<div id="title">
								<h1>Zeta Beta Tau</h1>
								<p>Xi Chapter</p>
								<p>at Georgia Tech</p>
							</div>
						</div>

						
					</header>

					<!-- Contact -->
					<ul class="contact">
						<li><a class="icon fa-facebook" href="#"></a></li>
						<li><a class="icon fa-twitter" href="#"></a></li>
					</ul>

					<ul class="nav">
						<li class="current"><a href="index.html">Home</a></li>
						<li><a href="rush.html">Rush ZBT</a></li>
						<li><a href="brothers.html">Brothers</a></li>
						<li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="http://www.gtzbt.org/">ZBT Alumni</a></li>
						<li><a href="http://www.zbt.org/">ZBT National</a></li>
					</ul>

					<img class="line" src="images/line.png" />

				</nav>
			
			<!-- Main -->

				<img id="desktop-header-background" src="images/desktopHeaderBackground.png">
				<img id="mobile-header-background" src="images/mobileHeaderBackground.png">

				<div id="main-wrapper">
					<div id="main" class="container">
						<div class="row 200%">
							<div class="12u">					
								<?php 
								if(!$_POST['first']) {
								?>
									<div class="singlecol">
										<h2>Scholarship Application</h2>
										<p>ZBT Xi Chapter believes that greek life and social activities are secondary to your education while at Georgia Tech. In recognition of this, ZBT Xi Chapter is offering a scholarship opportunity to <?php echo ' ' . date('Y') . ' - '; echo date('Y')+1 . ' '; ?> GT freshmen males. While we hope that you would consider joining ZBT Xi Chapter, this is not used as a factor in deciding the winner of the scholarship. Applications will be judged on academics, character, community service, and responses to the application questions.</p>

										<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

											<hr class="goldbar">

											<div class="surveybox">
												<h2>Contact Info</h2>
												First <input type="text" name="first"> Last <input type="text" name="last"><br>
												Email <input type="text" name="email"> Phone <input type="text" name="phone"><br>
												Address <input type="text" size="50" name="address"><br>
												City <input type="text" name="city"> State <input type="text" size="5" name="state"> Zip <input type="text" size="10" name="zip">
											</div>

											<hr class="goldbar">

											<div class="surveybox">
												<h2>Education</h2>
												Name of High School <input type="text" name="highschool"><br>
												Highschool GPA <input type="text" name="gpa" size="10"> on a <input type="text" name="maxgpa" value="4.0" size="10"> scale.<br>
												Highschool awards, athletics, activities, clubs:<br>
												<textarea name="hsinvolvement" rows="8" cols="40"></textarea><br>
												GT Undergraduate Major: <input type="text" name="major" /> *Put "Undecided" if not declared.
											</div>

											<hr class="goldbar">
											
											<h2>Short Response</h2>
											<div class="surveybox">
												<p>1. Part of the ZBT Credo (or a mission statement) is related to intellectual awareness and the persuit of scholastic excellence. <br>
												What studying resources would you think benefit your academic success?</p>
												<textarea name="essay1" rows="10" cols="60"></textarea>
											</div>
											<div class="surveybox">
												<p>2. How do you plan on improving your personal networking skills?</p>
												<textarea name="essay2" rows="10" cols="60"></textarea>
											</div>
											<div class="surveybox">
												<p>3. ZBT is an institution of good men doing good works and having good times. <br>
												In what ways do you consider yourself a gentleman, a philanthropist, and a socially adept member of society?</p>
												<textarea name="essay3" rows="10" cols="60"></textarea>
											</div>
											<div class="surveybox">
												<p>4. Do you desire to hold leadership positions while you are at Tech? What would they be?</p>
												<textarea name="essay4" rows="10" cols="60"></textarea>
											</div>
											<div class="surveybox">
												<p>5. Do you plan on continuing or changing your service work here at Tech? If so, why?</p>
												<textarea name="essay5" rows="10" cols="60"></textarea>
											</div>

											<br>
											<br>
											<input type="submit" value="Submit Application">
										</form>
									</div>
<?php
									}
									else {

										$msg = "SCHOLARSHIP APPLICATION\n";
										$msg .= "=======================\n";
										$msg .= "Name: " . $_POST['first'] . " " . $_POST['last'] . "\n";
										$msg .= "Phone: " . $_POST['phone'] . "\n";
										$msg .= "Email: " . $_POST['email'] . "\n";
										$msg .= "Address: \n" . $_POST['address'] . "\n" . $_POST['city'] . ", " . $_POST['state'] . " " . $_POST['zip'] . "\n\n";
										$msg .= "Highschool: " . $_POST['highschool'] . "\n";
										$msg .= "HS GPA: " . $_POST['gpa'] . " out of a possible " . $_POST['maxgpa'] . "\n";
										$msg .= "High school awards, athletics, activities, clubs:\n" . $_POST['hsinvolvement'] . "\n\n";
										$msg .= "GT Major: " . $_POST['major'] . "\n\n";
										$msg .= "Essay 1:\n" . $_POST['essay1'] . "\n\n";
										$msg .= "Essay 2:\n" . $_POST['essay2'] . "\n\n";
										$msg .= "Essay 3:\n" . $_POST['essay3'] . "\n\n";
										$msg .= "Essay 4:\n" . $_POST['essay4'] . "\n\n";
										$msg .= "Time of application submit: " . date("F j, Y - g:i a T");
										if(mail("president@techzbt.com,rush@techzbt.com,doug.bodner@gatech.edu","ZBT SCHOLARSHIP APP: " . $_POST['first'] . " " . $_POST['last'],$msg,"From:" . $_POST['email'])) {
											echo "<h1>Application Sent</h1><p>Thank you for your submission. We will notify you if you are selected.</p>";
											mail($_POST['email'],"ZBT Scholarship App Confirmation","Thank you for your application. We will notify you if you are selected. Make sure to stop by during Rush and let us know about your application submission so that we can get to better know you!\n\nSincerely,\nThe Brothers of ZBT Xi Chapter\n\n\n$msg","From: president@techzbt.com"); 
										}
										?>
									}
							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
			<footer id="footer" class="container">
					<!-- Copyright -->
						<div id="copyright">
							<ul class="menu">
								<li>&copy; Zeta Beta Tau Fraternity Xi Chapter. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>

				</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
