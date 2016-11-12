

<html><head><title>Erik Strauss - Contact</title>
<link rel="stylesheet" type="text/css" href="homepage.css" /></head>

<body>
<div class = "titleImg">
<center><h1>Contact Me</h1></center>

<center><h3>Feel free to contact me. Just enter your info in the fields below.</h3></center>
</div>

<div class = "mainContent">
<form action = "validate.php" method = "POST">

	<!--Setting up all the fields-->
	<label>Name <input type = "text" name = "userName" id = "userName" maxlength= "30"/></label><br><br>

	<label>Email <input type = "text" name = "userEmail" id = "userEmail" maxLength = "40"/></label><br><br>

	<label>Subject <input type = "text" name = "userSubject" id = "userSubject"/></label><br><br>

	<label>Message <br><textarea name = "userMessage" id = "userMessage" cols = "30" rows = "10"></textarea></label><br>

	<select name = "category">
		<option value = "comlaint" id = "complaint">Complaint</option>
		<option value = "question" id = "question">Question</option>
		<option value = "suggestion" id = "suggestion">Suggestion</option>
		<option value = "praise" id = "praise">Praise</option>
		<option value = "other" id = "other">Other</option>
	</select>

	<input type = "submit" value = "Send"><input type = "Reset" value = "Clear">

</form></div>

<div class = "leftSidebar">
	<form action="logout.php">
	<button type="submit">Logout</button>
	</form></div>

<!-- The footer that is consisten with all my pages -->
<footer>
<h3>
	&#8226<a href="index.html">Home</a>
	&#8226<b>Contact Me</b>
	&#8226<a href="about.html">About Me</a>
	&#8226<a href="resume.html">My Resume</a>
</h3>
ems394@nau.edu
</footer>