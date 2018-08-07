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

$data = $db->get($_GET['q']);
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

        <h3 class="mt-5"><?php echo($data->title); ?></h3>
        <p class="text-muted">
          by fanitriastowo -
          Posted on : <?php echo($data->tanggal); ?>. -
          Kategori : <?php echo($data->kategory); ?>
        </p>
        <hr>
        <p class="text-justify"><?php echo($data->content); ?></p>

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
