<?php include 'parts/html-header.php' ?>
<?php include 'parts/header.php' ?>
	<main>
		<section>
			<?php
			require 'functions/sitefunctions.php';
				// Scans the directory and creates an array from all files that begin with "post-"
				$posts = postArray();
				var_dump($posts);
				// Pops every post found into article tags and outputs it
				/*foreach ($posts as $post){
					$post = "posts/" . $post;
					$postExcerpt = getTheExcerpt($post);
					$postTitle = getTheTitle($post);
					$postDate = getTheDate($post);

					echo "<article class='post'>";
					echo "<h2 class='post-title'>" . $postTitle . "</p>";
					echo "<h3 class='publish-date'>" . $postDate . "</h3>";
					echo "<p class='content'>" . $postExcerpt . "</p>";
					echo "</article>";
				}*/
				?>
		</section>
	</main>
<?php include 'parts/footer.php' ?>