<!DOCTYPE html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="mainstyle.css" type="text/css" rel="stylesheet">
</head>
<html> 
    <body>
    <header class="header-outer">
		<div class="header-inner">
		  <div class="header-logo">...</div> <!--add logo here-->
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
				</li>
			</ul>
		</div>
	</nav>
</body>

    <h1> Mad Libs </h1>

        <?php 
        echo "my first PHP script!";
        ?>
<!--is this a note?-->

<div> 
<form>
<!-- Madlib  -->
 <form action="site.php" method="GET"> 
    <label for="adj"> adjective</label><br/>
    <input type="text" id="adj" name="adj"><br/>
    <label for="noun"> noun </label><br/>
    <input type="text" id="noun" name="noun">
    <label for="person"> person </label><br/>
    <input type="text" id="person" name="person">
</form>
</div>      
    </body>
</html>