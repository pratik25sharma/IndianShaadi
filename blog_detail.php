<?php
    require "lessphp/lessc.inc.php";
    $less = new lessc;
    $less->setFormatter("compressed");
	$less->checkedCompile("less_assets/blog.less", "css/blog.css");
	include_once('./admin/connection/connection.php');	

	// get blog info
	$active = 1;
	$blogId = $_GET['id'] ?? 0 ;

	if(!empty($blogId)){
		$stmt = $conn->prepare("SELECT id, blog_image, posted_by, blog_heading, blog_text, posted_on FROM blogs WHERE blog_status = ? AND id = ? LIMIT 1");
		$stmt->bind_param('ii', $active, $blogId);
		$stmt->execute();
		$result = $stmt->get_result();
		$blogData = $result->fetch_assoc();
	} else {
		// redirect the user to index page on error
		header('location:index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rishtey Indian - Home page--</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/blog.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
</head>
<body>


<?php 
	include_once('./components/header/topHead.php'); 
?>

<header class="head_variations">
	<div class="wrapper">
		<span class="logo">
			<a href="javascript:void(0);">
				<img src="images/logo.png" alt="Rishety Indian logo" width="100">
			</a>
		</span>
		<nav>
			<a class="mob_menu"><i class="fas fa-bars"></i></a>
			<ul>
				<a class="close"><i class="fas fa-times"></i></a>
				<li>
					<a href="javascript:void(0);"><i class="fas fa-user-tie"></i> New Member</a>
				</li>
				<li>
					<a href="javascript:void(0);"><i class="fas fa-sign-in-alt"></i> Login</a>
				</li>
				<li>
					<a href="javascript:void(0);"><i class="fas fa-video"></i> Video</a>
				</li>
			</ul>
		</nav>
	</div>
</header>

<section class="blogs_detail">
	<div class="wrapper">
		<div class="pg_heading blogs">
			<span class="pg_headings"><?= $blogData['posted_by'] ?></span>
		</div>
		<div class="item_detail">
			<span>
				<img src="images/blogs/<?= $blogData['blog_image'] ?>" alt="">
			</span>
			<h1>
				<?= $blogData['blog_heading'] ?>
				<i><?php $time=strtotime($blogData['posted_on']); echo date("F",$time).', '.date("Y",$time); ?> by <strong><?= $blogData['posted_by'] ?></strong></i>
			</h1>
		</div>
		<div class="item_content">
			<?= $blogData['blog_text']; ?>
		</div>
	</div>
</section>

<?php include_once('./components/footer/footerInfo.php'); ?>

</body>
</html>