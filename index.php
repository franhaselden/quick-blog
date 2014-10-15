<?php include 'header.php' ?>
	<main>
		<section>
			<?php
				// Scans the directory and creates an array from all files that begin with "post-"
				$posts = postArray();

				// Pops every post found into article tags and outputs
				foreach ($posts as $post){
					$post = "posts/" . $post;
					echo "<article>";
					include $post;
					echo "</article>";
				}


				function postArray(){
				// Scans the "posts" directory
				$dir    = 'posts';
				// Brings back an array of all files found there
				$files = scandir($dir);
				// Filters out the array to only include files that begin with "post-"
				$posts = array_filter(
				    $files,
				    function($value) {
				        return (strpos($value, 'post-') === 0);
				    }
				);
				// Returns the array
				return $posts;
				}
				?>
		</section>
	</main>
<?php include 'footer.php' ?>