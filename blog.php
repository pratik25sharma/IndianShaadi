<?php
    require "lessphp/lessc.inc.php";
    $less = new lessc;
    $less->setFormatter("compressed");
    $less->checkedCompile("less_assets/blog.less", "css/blog.css");
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


<div class="top_head">
	<div id="example-1">
		<span>Get 21 Contacts Free On Being A New Member</span>
		<span>Get 7 Contacts Free On Liking Our Facebook Page</span>
		<span>Only For Indians</span>
		<span>No Mediator</span>
		<span>Nominal Package</span>
		<span>Start Conversation</span>
		<span>Every Profile Is Phone Verified</span>
		<span>Niswarth Sewa</span>
	</div>
</div>
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
			<form class="default_form">
				<fieldset>
					<div class="s_row">
	                    <input type="text" class="label_jump" required="required">
	                    <label>Enter your Name*</label>
	                </div>
					<div class="s_row">
	                    <input type="email" class="label_jump" required="required">
	                    <label>Enter your Email ID*</label>
	                </div>
	                <div class="s_row">
	                    <input type="tel" class="label_jump" required="required">
	                    <label>Enter your Phone number*</label>
	                </div>
	                <div class="secondary_title">
			            <span>BLOG PROFILE DETAILS</span>
			        </div>
			        <div class="s_row">
	                    <input type="text" class="label_jump" required="required">
	                    <label>Profile Name*</label>
	                </div>
	                <div class="s_row">
	                    <input type="text" class="label_jump" required="required">
	                    <label>Profile Heading*</label>
	                </div>
	                <div class="s_row">
	                    <input type="file" class="label_jump" required="required">
	                    <label class="label-valid">Profile Photo*</label>
	                </div>
	                <div class="secondary_title">
			            <span>WRITE YOUR BLOG</span>
			        </div>
	                <div class="s_row">
	                    <textarea></textarea>
	                </div>
	                <div class="s_row">
	                	<span>
		                	<input type="checkbox" id="term_condition" name="">
		                	<label for="term_condition">I agree to <a href="#!">terms and conditions</a></label>
		                </span>
	                </div>
	                <div class="s_row">
	                	<button class="btn clr_fill">Continue</button>
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