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

				<div class="card"> <!-- 2018 -->
					<div class="card-header" id="heading2018">
						<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#2018" aria-expanded="true" aria-controls="2018">
								2018
							</button>
						</h5>
					</div>
					<div id="2018" class="collapse show" aria-labelledby="heading2018" data-parent="#accordion">
						<div class="card-body">
							<ul>
								<li><a href="#">article 1</a></li>
								<li><a href="#">article 2</a></li>
								<li><a href="#">article 3</a></li>
								<li><a href="#">article 4</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="heading2017">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#2017" aria-expanded="false" aria-controls="2017">
								2017
							</button>
						</h5>
					</div>
					<div id="2017" class="collapse" aria-labelledby="heading2017" data-parent="#accordion">
						<div class="card-body">
							<ul>
								<li><a href="#">article 1</a></li>
								<li><a href="#">article 2</a></li>
								<li><a href="#">article 3</a></li>
								<li><a href="#">article 4</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="heading2016">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#2016" aria-expanded="false" aria-controls="2016">
								2016
							</button>
						</h5>
					</div>
					<div id="2016" class="collapse" aria-labelledby="heading2016" data-parent="#accordion">
						<div class="card-body">
							<ul>
								<li><a href="#">article 1</a></li>
								<li><a href="#">article 2</a></li>
								<li><a href="#">article 3</a></li>
								<li><a href="#">article 4</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="heading2015">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#2015" aria-expanded="false" aria-controls="2015">
								2015
							</button>
						</h5>
					</div>
					<div id="2015" class="collapse" aria-labelledby="heading2015" data-parent="#accordion">
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
		</side>

	</div>
</main>

<!-- include footer -->
<?php include 'template/footer.html'; ?>

<!-- include js -->
<?php include 'template/js.html'; ?>
</body>
</html>
