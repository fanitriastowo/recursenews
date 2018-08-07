<?php

require 'config/db.php';

use \Filebase\Database;
use \Filebase\Query;
use \Filebase\QueryLogic;
use \Filebase\Format\Json;

// setting the access and configration to your database
$db = new Database([
    'dir'            => 'config/db',
    'backupLocation' => 'config/db/backup',
    'format'         => Json::class,
    'cache'          => false,
    'cache_expires'  => 1800,
    'pretty'         => true,
    'safe_filename'  => true,
    'read_only'      => false
]);
$data = $db->query()->limit(3)->results();
?>


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
			<h1>Latest Articles</h1>

      <?php foreach ($data as $key => $value): ?>

        <a href="#"><h3 class="mt-5"><?php echo($value['title']); ?></h3></a>
        <p class="text-muted">
          by fanitriastowo -
          Posted on : <?php echo($value['tanggal']); ?>. -
          Kategori : <?php echo($value['kategory']); ?>
        </p>
        <hr>
        <p class="text-justify"><?php echo($value['content']); ?></p>

      <?php endforeach; ?>
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
