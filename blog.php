<?php
	include_once('./admin/connection/connection.php');
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
		$userData = !empty($_POST['userProfile']) ? $_POST['userProfile'] : array();
		$blogData = !empty($_POST['blog']) ? $_POST['blog'] : array();
		$userUploadeFile = !empty($_FILES['blog']) ? $_FILES['blog'] : array();
		$tnc = !empty($_POST['tnc']) ? $_POST['tnc'] : '';

		// check for validity of username, useremail, number, 
		if(	checkForTNC($tnc, 'Terms And Conditions') && 
			checkIsValidName($userData['username'], 'Username') && 
			checkIsValidEmail($userData['email'], 'Email') && 
			checkIsValidName($userData['name'], 'Name') && 
			checkIsValidNumber($userData['number'], 'Number') && 
			checkIsValidFile($userUploadeFile, 'Image') && 
			checkIsValidName($blogData['heading'], 'Heading') &&
			!empty($blogData['body'])
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

			// throw the message to user
			echo '<div class="form_messages success active" id="removeNotification">Congrats!! Your Blog have been submitted for Approval !
					<i></i></div>';

		} else {
			
			// throw the message to user
			echo '<div class="form_messages error active" id="removeNotification">'.$_SESSION['error']['msg'].' 
					<i></i></div>';
		}
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
					<a href="javascript:void(0);" class="open_model" data-target="registerpopup"><i class="fas fa-user-tie"></i> New Member</a>
				</li>
				<li>
					<a href="javascript:void(0);" class="open_model" data-target="loginpopup"><i class="fas fa-sign-in-alt"></i> Login</a>
				</li>
				<li>
					<a href="javascript:void(0);" class="open_modelf" data-target="rishteyindian_video"><i class="fas fa-video"></i> Video</a>
				</li>
			</ul>
		</nav>
	</div>
</header>

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
	                    <input type="text" class="label_jump" required="required" name="userProfile[name]" value="<?php echo ($userData['name'])?? ''; ?>">
	                    <label <?php echo (!empty($userData['name']))? 'class="label-valid"' : ''; ?> >Enter your Name*</label>
	                </div>
					<div class="s_row">
	                    <input type="email" class="label_jump" required="required"  name="userProfile[email]" value="<?php echo ($userData['email'])?? ''; ?>">
	                    <label <?php echo (!empty($userData['email'])) ? 'class="label-valid"' : ''; ?>>Enter your Email ID*</label>
	                </div>
	                <div class="s_row">
	                    <input type="tel" class="label_jump" required="required"  name="userProfile[number]" value="<?php echo ($userData['number'])?? ''; ?>">
	                    <label <?php echo (!empty($userData['number']))? 'class="label-valid"' : ''; ?>>Enter your Phone number*</label>
	                </div>
	                <div class="secondary_title">
			            <span>BLOG PROFILE DETAILS</span>
			        </div>
			        <div class="s_row">
	                    <input type="text" class="label_jump" required="required"  name="userProfile[username]" value="<?php echo ($userData['username'])?? ''; ?>">
	                    <label <?php echo (!empty($userData['username']))? 'class="label-valid"' : ''; ?>>Profile Name*</label>
	                </div>
	                <div class="s_row">
	                    <input type="text" class="label_jump" required="required"  name="blog[heading]" value="<?php echo ($blogData['heading']) ?? ''; ?>">
	                    <label <?php echo (!empty($blogData['heading'])) ? 'class="label-valid"' : ''; ?>>Blog Heading*</label>
	                </div>
	                <div class="s_row">
	                    <input type="file" class="label_jump" required="required"  name="blog[image]">
	                    <label class="label-valid">Profile Photo*</label>
	                </div>
	                <div class="secondary_title">
			            <span>WRITE YOUR BLOG</span>
			        </div>
	                <div class="s_row">
	                    <textarea name="blog[body]">
							<?= ($blogData['body']) ?? ''; ?>
						</textarea>
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

<?php include_once('./components/footer/footerInfo.php') ?>
</body>
</html>