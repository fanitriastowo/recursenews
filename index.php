<!DOCTYPE html>
<html lang="en">
<head>
	<title>Recursenews | Programming Blog</title>

	<?php include 'template/css.html'; ?>

	<!-- custom stylesheet here -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<!-- include navbar --> 
<?php include 'template/navbar.html' ?>;

<!-- Begin page content -->
<main role="main" class="container">

	<div class="row">


		<article class="col-9">
			<h1>Latest News:</h1>
	  	<?php include 'articles/1-helloworld.html'; ?>
	  	<?php include 'articles/2-loremipsum.html'; ?>
	  	<?php include 'articles/3-dolorisamet.html'; ?>
	  	<?php include 'articles/4-bubbaluba.html'; ?>
		</article>

		<side class="col-3">

			<div class="sidebar">
				<?php include 'template/sidebar.html'; ?>
			</div>

			<div class="ads">
				<?php include 'template/ads.html'; ?>
			</div>
		</side>

	</div>
</main>

<!-- include footer -->
<?php include 'template/footer.html'; ?>

<!-- include js -->
<?php include 'template/js.html'; ?>
</body>
</html>