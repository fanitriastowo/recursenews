<?php

require 'config/db.php';

$data = $db->findAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Recursenews | Programming Blog</title>

	<?php include 'template/css.html'; ?>
</head>
<body>

<!-- include navbar -->
<?php include 'template/navbar.html' ?>;

<!-- Begin page content -->
<main role="main" class="container">

	<div class="row">

		<article class="col-9">

			<h1>Archive:</h1>

			<div class="accordion" id="accordion_archive">
			  
			  <div class="card">
			    <div class="card-header" id="heading2018">
			      <h5 class="mb-0">
			        <button class="btn btn-link" type="button" data-toggle="collapse" 
				        data-target="#collapse2018" aria-expanded="true" aria-controls="collapse2018">
			          2018
			        </button>
			      </h5>
			    </div>
			    <div id="collapse2018" class="collapse show" aria-labelledby="heading2018" 
			    	data-parent="#accordion_archive">
			      <div class="card-body">
			        test
			      </div>
			    </div>
			  </div>

			  <div class="card">
			    <div class="card-header" id="heading2017">
			      <h5 class="mb-0">
			        <button class="btn btn-link" type="button" data-toggle="collapse" 
				        data-target="#collapse2017" aria-expanded="true" aria-controls="collapse2017">
			          2017
			        </button>
			      </h5>
			    </div>
			    <div id="collapse2017" class="collapse" aria-labelledby="heading2017" 
			    	data-parent="#accordion_archive">
			      <div class="card-body">
			        test
			      </div>
			    </div>
			  </div>

			  <div class="card">
			    <div class="card-header" id="heading2016">
			      <h5 class="mb-0">
			        <button class="btn btn-link" type="button" data-toggle="collapse" 
				        data-target="#collapse2016" aria-expanded="true" aria-controls="collapse2016">
			          2016
			        </button>
			      </h5>
			    </div>
			    <div id="collapse2016" class="collapse" aria-labelledby="heading2016" 
			    	data-parent="#accordion_archive">
			      <div class="card-body">
			        test
			      </div>
			    </div>
			  </div>

			  <div class="card">
			    <div class="card-header" id="heading2015">
			      <h5 class="mb-0">
			        <button class="btn btn-link" type="button" data-toggle="collapse" 
				        data-target="#collapse2015" aria-expanded="true" aria-controls="collapse2015">
			          2015
			        </button>
			      </h5>
			    </div>
			    <div id="collapse2015" class="collapse" aria-labelledby="heading2015" 
			    	data-parent="#accordion_archive">
			      <div class="card-body">
			        <ul>
			        	<?php foreach ($data as $key => $value): ?>
			        		<?php if (substr($value->tanggal, -4) == '2015'): ?>
			        			<li><a href="<?php echo("article?q=") . $value->slug; ?>">
				        			<?php echo $value->title; ?></a></li>
			        		<?php endif ?>
			        	<?php endforeach ?>
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
