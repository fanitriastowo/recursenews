<?php

$IS_NEEDED_READMORE = FALSE;
require 'config/db.php';

$data = $db->get($_GET['q']);
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

        <h3 class="mt-5"><?php echo($data->title); ?></h3>
        <p class="text-muted">
          by fanitriastowo -
          Posted on : <?php echo($data->tanggal); ?>. -
          Kategori : <a href="category?q=<?php echo $data->category; ?>">
            <?php echo $data->category; ?></a>
        </p>
        <hr>

        <?php if ($data->image != null): ?>
        <div class="text-center img-source">
            <img src="<?php echo $data->image; ?>" 
            class="img-thumbnail">
            <br>
            Source from 
            <a href="<?php echo $data->image; ?>" 
            target="_blank">link</a>
        </div>
        <?php endif ?>

        <?php // readfile ?>
        <p class="text-justify"><?php include $data->content; ?></p>

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
