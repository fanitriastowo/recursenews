<?php

$IS_INDEX = TRUE;
require 'config/db.php';

$data = $db->query()->limit(3)->results();
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
			<h1>Latest Articles</h1>

      <?php // loop through articles ?>
      <?php foreach ($data as $key => $value): ?>

        <?php // linked title ?>
        <a href='<?php echo "article?q={$value['slug']}"; ?>'><h3 class="mt-5"><?php echo($value['title']); ?></h3></a>
        <p class="text-muted">
          by fanitriastowo -
          Posted on : <?php echo($value['tanggal']); ?>. -
          Kategori : <?php echo($value['kategory']); ?>
        </p>
        <hr>

        <?php // check image ?>
        <?php if ($value['image'] != null): ?>
        <div class="text-center img-source">
            <img src="<?php echo $value['image']; ?>" 
            class="img-thumbnail">
            <br>
        </div>
        <?php endif ?>

        <?php // readfile ?>
        <p class="text-justify"><?php include $value['content']; ?></p>

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
