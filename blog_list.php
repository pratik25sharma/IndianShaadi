<?php
    require "lessphp/lessc.inc.php";
    $less = new lessc;
    $less->setFormatter("compressed");
	$less->checkedCompile("less_assets/blog.less", "css/blog.css");
	include_once('./admin/connection/connection.php');

	// fetch all blog data
	$active = 1;
	$stmt = $conn->prepare("SELECT id, blog_image, posted_by, blog_heading, posted_on FROM blogs WHERE blog_status = ? ");
	$stmt->bind_param('i', $active);
	$stmt->execute();
	$blogResult = $stmt->get_result();
	
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


<?php include_once('./components/header/topHead.php');  ?>

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

<section class="blogs_lp">
	<div class="wrapper">
		<div class="pg_heading blogs">
			<span class="pg_headings">Blogs</span>
		</div>
		<ul>
			<?php 
			while( $blogData = $blogResult->fetch_assoc()){
				$time=strtotime($blogData['posted_on']); 
				echo '<li>
						<a href="blog_detail?id='.$blogData['id'].'">
						<div class="item_image">
							<img src="images/blogs/'.$blogData['blog_image'].'">
						</div>
						<div class="info">
							<p>'.$blogData['blog_heading'].'</p>
							<i>'.date("F",$time).', '.date("Y",$time).' by <strong>'.$blogData['posted_by'].'</strong></i>
							<span class="btn clr_fill">Read More</span>
						</div>
						</a>
					</li>';
				};?>
		</ul>
	</div>
</section>

<?php include_once('./components/footer/footerInfo.php') ?>
</body>
</html>