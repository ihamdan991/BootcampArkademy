<?php
require_once "fungsi.php";

@$page 		= $_GET['page']; 
if ($page != "") {
	$post 	= $fungsi->sql("SELECT posts.title, posts.content, users.username, posts.id FROM posts LEFT JOIN users ON posts.createdBy=users.id WHERE posts.id='$page'","one");
	$judul	= $post->title. " - Blog Arkademy";
}else{
	$judul 	= "Blog Arkademy";
}



?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$judul?></title>
	<link rel="stylesheet" type="text/css" href="<?=base('css/bootstrap.css')?>">
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?=base()?>">Blog Arkademy</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
			<li class="active"><a href="<?=base()?>">Beranda</a></li>
			<li><a onclick="alert('Hamdan Ibrahim')">Tentang</a></li>
			<li><a onclick="alert('Dikasih juga ngga ngechat :v')">Kontak</a></li>
			</ul>
		</div><!-- /.nav-collapse -->
	</div><!-- /.container -->
</nav><!-- /.navbar -->

<div class="container" style="margin-top: 100px">
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-md-9">
			<div class="row">
				<?php if ($page != ""): ?>
					<div class="col-md-12">
						<h2><?=$post->title?></h2>
						<p><?=$post->content ?></p>
						<div style="float: right;">Penulis : <?=$post->username?></div>
						<div style="clear: both;"></div>
					</div>
					<div class="col-md-12">
						
	        			<div class="media" style="border: 1px solid #ccc;border-radius: 5px;padding: 10px;margin-top: 20px;">
	        				<?php 
	        				$komentar = $fungsi->sql("SELECT comments.comment FROM comments LEFT JOIN posts ON posts.id=comments.postId WHERE postId='$post->id'","all"); 
	        				$cek_komentar = count($komentar);
	        				?>
	        				<?php if ($cek_komentar != '0') { ?>
	        				<p><h2><?=$cek_komentar;?> Komentar</h2></p>
	        				<?php foreach ($komentar as $komentar) {?>
							<div class="media-left media-middle">
								<img class="media-object" src="<?=base('img/user.png')?>" alt="Pengunjung" width='75px'>
							</div>
							<div class="media-body">
								<h3 class="media-heading">Pengunjung</h3>
								<p><?=$komentar->comment?></p>
							</div>
							<hr>	
	        				<?php } } else{ echo "<p><h2>Tidak Ada Komentar<h2></p>"; }?>
	        				
						</div>
        			</div>
				<?php 
				endif;
				if ($page == ""): 
				$posts = $fungsi->sql("SELECT * FROM posts ORDER BY id DESC","all");
				foreach ($posts as $post) {
				?>
				<div class="col-md-12">
					<h2><?=$post->title?></h2>
					<p><?=substr($post->content, 0,300) ?>....</p>
					<p><a class="btn btn-default" href="<?=base('artikel-').$post->id?>.html" role="button">Baca Selengkapnya &raquo;</a></p>
        		</div>
				<?php } endif ?>

			</div>
		</div>
		<div class="col-md-3">
			<div class="list-group">
	            <a href="#" class="list-group-item active"><center>Postingan Terbaru</center></a>
	            <?php
				$posts = $fungsi->sql("SELECT * FROM posts ORDER BY id DESC LIMIT 0,3","all");
				foreach ($posts as $post) {
					echo "<a href='".base('artikel-').$post->id.".html' class='list-group-item'>".$post->title."</a>";
				}?>
          	</div>
		</div>
        
	</div>
	<hr>
	<footer>
        <p>&copy; 2018 Hamdan Ibrahim</p>
     </footer>
</div>	
</body>
<script type="text/javascript" src="<?=base('js/bootstrap.js')?>"></script>
</html>

