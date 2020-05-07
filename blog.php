<?php
	include_once('./admin/connection/con.php');
    require "lessphp/lessc.inc.php";
    $less = new lessc;
    $less->setFormatter("compressed");
	$less->checkedCompile("less_assets/blog.less", "css/blog.css");
	
	include_once('./utils/fn.utils.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rishtey Indian - Home page--</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/blog.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>tinymce.init({selector:'textarea', mode : "exact",});</script>
</head>
<body>


<?php 
	include_once('./components/header/topHead.php');
	
	if($_POST){

		// validate the profile data
		$userData = $_POST['userProfile'];
		$blogData = $_POST['blog'];
		$userUploadeFile = $_FILES['blog'];
		
		// check for validity of username, useremail, number, 
		if(checkIsValidName($userData['username']) && 
			checkIsValidEmail($userData['email']) && 
			checkIsValidName($userData['name']) && 
			checkIsValidNumber($userData['number']) && 
			checkIsValidFile($userUploadeFile) && 
			checkIsValidName($blogData['heading'])
		){
			// save user data
			$blogHeading = $bannerHeader = $blogData['heading'];
			$blogData = $blogData['body'];
			$postedBy = 1234;

			// get file extension
			$extension = explode('.', $userUploadeFile['name']['image']);
			$extension = array_pop($extension);

			$uploadDir = './images/blogs/';
			$fileName = (time() .'-'. $postedBy.'.'.$extension);
			$uploadFile = $uploadDir.$fileName;
			move_uploaded_file($userUploadeFile["tmp_name"]['image'], $uploadFile);

			$sql = 'INSERT INTO blogs (posted_by, blog_image, blog_heading, blog_text, banner_header) VALUES ( ?, ?, ?, ?, ?)';
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("issss", $postedBy, $fileName, $blogHeading, $blogData, $bannerHeader);
			$stmt->execute();

		} else {
			// throw the message to user
			echo '<div class="form_messages error">
				'.$_SESSION['error']['msg'].'
				<i></i>
				<a href="#!" class="del"></a>
				</div>';
		} 

		// die('outside');
		// echo "<pre>";
		// print_r($_POST);
		// print_r($_SESSION);
		// die;
	}
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
<div class="form_messages error active">
				<?= $_SESSION['error']['msg'] ?>
				<i></i>
				<a href="#!" class="del"></a>
				</div>
<section class="blogs_admin">
	<div class="wrapper">
		<div class="head">
			<span>Welcome To RishteyIndian Blogs</span>
		</div>
		<div class="info">
			<p>Confirm your Profile</p>
			<span>If Member please write the blog after login</span>
		</div>
		<div class="jumbo_card">
			<form class="default_form" action="" method="POST" enctype="multipart/form-data">
				<fieldset>
					<div class="s_row">
	                    <input type="text" class="label_jump" required="required" name="userProfile[name]">
	                    <label>Enter your Name*</label>
	                </div>
					<div class="s_row">
	                    <input type="email" class="label_jump" required="required"  name="userProfile[email]">
	                    <label>Enter your Email ID*</label>
	                </div>
	                <div class="s_row">
	                    <input type="tel" class="label_jump" required="required"  name="userProfile[number]">
	                    <label>Enter your Phone number*</label>
	                </div>
	                <div class="secondary_title">
			            <span>BLOG PROFILE DETAILS</span>
			        </div>
			        <div class="s_row">
	                    <input type="text" class="label_jump" required="required"  name="userProfile[username]">
	                    <label>Profile Name*</label>
	                </div>
	                <div class="s_row">
	                    <input type="text" class="label_jump" required="required"  name="blog[heading]">
	                    <label>Blog Heading*</label>
	                </div>
	                <div class="s_row">
	                    <input type="file" class="label_jump" required="required"  name="blog[image]">
	                    <label class="label-valid">Profile Photo*</label>
	                </div>
	                <div class="secondary_title">
			            <span>WRITE YOUR BLOG</span>
			        </div>
	                <div class="s_row">
	                    <textarea name="blog[body]"></textarea>
	                </div>
	                <div class="s_row">
	                	<span>
		                	<input type="checkbox" id="term_condition" name="tnc">
		                	<label for="term_condition">I agree to <a href="#!">terms and conditions</a></label>
		                </span>
	                </div>
	                <div class="s_row">
	                	<button class="btn clr_fill">Post</button>
	                </div>
				</fieldset>
			</form>
		</div>
	</div>
</section>

<footer>
	<div class="wrapper">
		<div class="footer">
			<div class="callouts">
				<ul>
					<span>Need Help</span>
	                <li><a href="javascrip:void(0);">Contact Us</a></li>
					<li><a href="javascrip:void(0);"> Need Help</a></li>
	                <li><a href="javascrip:void(0);">Customer Support</a></li>
	                <li><a href="javascrip:void(0);">FAQ</a></li>
	            </ul>
			</div>
			<div class="callouts">
				<ul>
	                <span>Company Details</span>
	                <li><a href="javascrip:void(0);">About Us</a></li>
					<li><a href="javascrip:void(0);">Terms &amp; Conditon</a></li>
					<li><a href="javascrip:void(0);">Privacy policy</a></li>
					<li><a href="javascrip:void(0);">Refund and Cancellation</a></li>
	            </ul>
			</div>
			<div class="callouts">
				<ul>
	                <span>Information</span>
	                <li><a href="javascrip:void(0);">Disclaimers</a></li>
	                <li><a href="javascrip:void(0);">report misuse</a></li>
					<li><a href="javascrip:void(0);">Blog</a></li>
					<li><a href="javascrip:void(0);"> Advertise With Us</a></li>
	            </ul>
			</div>
			<div class="callouts">
				<ul>
	                <span>More</span>
					<li><a href="javascrip:void(0);">Add Your Sucess Story</a></li>
	                <li><a href="javascrip:void(0);">Success Stories</a></li>
	                <li><a href="javascrip:void(0);">Packages</a></li>
					<li><a href="javascrip:void(0);">Reviews and Ratings</a></li>
	            </ul>
			</div>
		</div>
		<div class="sub_footer">
			<span><img src="images/logo.png" width="70" alt=""> Rishtey Indian is the trade mark Of NISWARTH SEWA-110014</span>
			<ul>
				<li>
					<a href="javascript:void(0);">
						<i class="fab fa-facebook-f"></i>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<i class="fab fa-twitter"></i>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<i class="fab fa-youtube"></i>
					</a>
				</li>
				<p>© 2018 - 2020 rishteyindian.com</p>
			</ul>
		</div>
	</div>
</footer>


<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/globalSite.js"></script>
</body>
</html>