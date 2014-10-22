<?php include 'parts/html-header.php' ?>
<?php include 'parts/header.php' ?>
	<main>
		<section>
			<?php
			require 'functions/sitefunctions.php';
				// Scans the directory and creates an array from all files that begin with "post-"
				$posts = postArray();
				// Pops every post found into article tags and outputs it
				foreach ($posts as $post){
					$post = "posts/" . $post;
					echo "<article class='post'>";
					include $post;
					echo "</article>";
				}
				?>
		</section>
	</main>
<?php include 'parts/footer.php' ?>