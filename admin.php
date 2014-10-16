<?php include 'parts/html-header.php' ?>
<main class="admin">
		<aside>
				<h1><span>Blog</span>Cube <i class="fa fa-cube"></i></h1>
					<a><i class="fa fa-plus"></i>Add new post</i></a><br />
					<a><i class="fa fa-chain"></i>Get a post link</i></a><br />
					<a><i class="fa fa-photo"></i>Add to picture library</a><br />
					<a><i class="fa fa-tags"></i>Create new post tags</a><br />
					<a><i class="fa fa-home"></i>See your blog</a><br />
		</aside>
		<section>
			<h2><i class="fa fa-dashboard"></i>Dashboard</h2>
				<article class="postlist">
					<h3 class="admintitle">Recent Posts</h3>
					<table border="0">
						<tr>
							<td><p>My First Post</p></td>
							<td><span><a><i class="fa fa-pencil"></i>Edit</span></a></td>
							<td><span><a><i class="fa fa-eye"></i>View</span></a></td>
						</tr>
						<tr>
							<td><p>My Second Post</p></td>
							<td><span><a><i class="fa fa-pencil"></i>Edit</span></a></td>
							<td><span><a><i class="fa fa-eye"></i>View</span></a></td>
						</tr>
						<tr>
							<td><p>My Third Post</p></td>
							<td><span><a><i class="fa fa-pencil"></i>Edit</span></a></td>
							<td><span><a><i class="fa fa-eye"></i>View</span></a></td>
						</tr>
						<tr>
							<td><p>My Fourth Post</p></td>
							<td><span><a><i class="fa fa-pencil"></i>Edit</span></a></td>
							<td><span><a><i class="fa fa-eye"></i>View</span></a></td>
						</tr>
						<tr>
							<td><p>My Fifth Post</p></td>
							<td><span><a><i class="fa fa-pencil"></i>Edit</span></a></td>
							<td><span><a><i class="fa fa-eye"></i>View</span></a></td>
						</tr>
					</table>
					<p><a><i class="fa fa-list"></i> See all posts</a></p>
				</article>
				<article class="admin">
					<h3 class="admintitle">Site Settings <span><a><i class="fa fa-pencil"></i>Edit</span></a></h3>
					<p><i class="fa fa-user"></i><strong>Site title:</strong> Francesca's Development Blog</p>
					<p><i class="fa fa-ellipsis-h"></i><strong>Site subtitle:</strong> Lorem ipsum dolor sit amet.</p>
					<p><i class="fa fa-folder-open"></i><strong>Posts directory:</strong> posts/</p>
					<p></p>
				</article>
		</section>
</main>

<style>
	<?php include 'css/admin.css' ?>
</style>

<?php include 'parts/footer.php' ?>