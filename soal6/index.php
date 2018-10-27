<?php
require_once "fungsi.php";
$posts 	= $fungsi->sql("SELECT posts.title, posts.content, users.username, posts.id FROM posts LEFT JOIN users ON posts.createdBy=users.id","all");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog Arkademi</title>
	<style type="text/css">
		ul li {list-style: none;}
	</style>
</head>
<body>
	<?php foreach ($posts as $post) { ?>
	<ul>
		<li>- posts.title: <?=$post->title?></li>
		<li>- posts.users.username: dibuat oleh <?=$post->username?></li>
		<li>- Comments: 
			<ul>
				<?php 
				$comments	= $fungsi->sql("SELECT comments.comment FROM comments LEFT JOIN posts ON posts.id=comments.postId WHERE comments.postId='$post->id'","all");
				foreach ($comments as $key => $comment) {
					echo "<li>- ".$comment->comment."</li>";
				} ?>
			</ul>
		</li>
	</ul>
	<?php } ?>
</body>
</html>