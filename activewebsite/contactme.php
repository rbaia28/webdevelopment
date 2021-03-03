<!DOCTYPE html>
<html>
<head>
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Connect with Us!</title>
</head>

<body>
<header class="header-outer">
		<div class="header-inner">
		  <div class="header-logo">.</div> <!--add logo here-->
		  <nav class="header-navigation">...</nav>
		</div>
	  </header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
			aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarToggler">
			<a class="navbar-brand" href="index.html">Hi! I'm Becca </a>
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="index.html">Home </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="madlib2.php"> Madlib Dumpster Fire</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Rebecca_Baia.html">Continual Dumpster Fire Content</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="aboutme.html">A Lil More 'Bout Me!</a>
                <li class="nav-item">
                     <a class="nav-link"  href="contactme.php">Connect, Don't Creep </a>
                    </li>  
				</li>
			</ul>
		</div>
	</nav>
    <main>
        <h1> Connect with Us! </h1></br>
        <p>Send E-mail</p>
        <form class = "contact-form" action= "contactus.php" method="post">
            <input type="text" name="name" placeholder="Full Name">
            <input type="text" name="mail" placeholder="Your Email">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name= "message" placeholder="Message"></textarea>
            <button type="submit" name="submit">Send Mail</button>
        </form>

</body>
</html>