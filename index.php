<?php include 'parts/html-header.php' ?>
<?php include 'parts/header.php' ?>
	<main>
		<section>
			<?php
			require 'functions/sitefunctions.php';
				// Scans the directory and creates an array from all files that begin with "post-"
				//$posts = postArray();
				$masterpostlist = getMasterpostList();
				$postarray = masterPostExplode($masterpostlist);
				foreach ($postarray as &$post){
					$post = explode('~',$post);
				}
				$new = [];
				foreach ($postarray as $inner) {
				    $new[] = [
				        "date" => $inner[0],
				        "title" => $inner[1],
				        "filepath" => $inner[2]
				    ];
				}
				$postarray = $new;
				usort($postarray, "sortFunction");
				foreach ($postarray as $innerarray) {

					$pathname = "posts/post-" . $innerarray['filepath'] . ".html";
					$postExcerpt = getTheExcerpt($pathname);
					$postTitle = getTheTitle($pathname);
					$postDate = getTheDate($pathname);

					echo "<article class='post'>";
					echo "<h2 class='post-title'>" . $postTitle . "</p>";
					echo "<h3 class='publish-date'>" . $postDate . "</h3>";
					echo "<p class='content'>" . $postExcerpt . "</p>";
					echo "</article>";
				}
				?>
		</section>
	</main>
<?php include 'parts/footer.php' ?>