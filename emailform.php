<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial=scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/stylesheet.css">
	<title>Email Form</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg">
	  <a class="navbar-brand" href="index.html">JSTestZone</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.html">Home</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	<!-- <nav class="navbar"><h1>JSTestZone</h1></nav> -->

	<div class="container">

		<section>

		<form action="/php/contactform.php" method="post">
		  <label for="name">Name:</label><br>
		  	<input type="text" id="name" name="name" value="" placeholder="Name"><br>
		  <label for="fname">Email:</label><br>
		  	<input type="text" id="mail" name="mail" value="" placeholder="Your Email Address"><br>
		  <label for="lname">Message</label><br>
		  	<input type="textarea" id="message" name="message" value="" placeholder="Message"><br><br>
		  <button type="submit" name="submit">Submit</button>
		</form>

		</section>

	</div>
</body>