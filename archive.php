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

			<h1>Archive:</h1>

	  	<div id="accordion">
			  <div class="card">
			    <div class="card-header" id="headingThree">
			      <h5 class="mb-0">
			        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			          <h3 class="text-dark">2015</h3>
			        </button>
			      </h5>
			    </div>
			    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
			      <div class="card-body">
			        <ul>
								<li><a href="#">Janji Programmer</a></li>
							</ul>
			      </div>
			    </div>
			  </div>
			</div>
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
