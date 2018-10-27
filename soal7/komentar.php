<?php 
require_once "fungsi.php";
if (isset($_POST['komentar'])) {
 	$comment 	= input($_POST['comment']);
 	$postId 	= input($_POST['postId']);
 	$komentar 	= $fungsi->sql("INSERT INTO comments(comment, postId) VALUES ('$comment','$postId')","run");
 	if ($komentar) {
 		header("location:".base('artikel-').$postId.".html");
 	}
} ?>