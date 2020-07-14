<?php
    require "lessphp/lessc.inc.php";
    $less = new lessc;
    $less->setFormatter("compressed");
	$less->checkedCompile("less_assets/home.less", "css/home.css");
	include_once('./admin/connection/connection.php');
    //$less->checkedCompile("less_assets/desktop/slick.less", "css/desktop_css/slick.css");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Rishtey Indian -Home page--</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
</head>
<body>
<!-- POPUPS -->
<div id="myModal" class="popup_box">
	<div class="model_box">
		<div class="model_box_child" id="loginpopup">
			<span class="close_model">×</span>
			<div class="login_data form_section">
				<div class="title">
		            <h3>Login to Rishteyindian.com</h3>
		            <p>Not Registered? <a href="javascript:void(0);"class="open_model" data-target="registerpopup">CREATE AN ACCOUNT</a></p>
		        </div>
		        <div class="secondary_title">
		            <span>Get yourself login</span>
		        </div>

		        <form class="default_form">
		            <fieldset> 
		                <div class="s_row">
		                    <input type="text" class="label_jump">
		                    <span></span>
		                    <label>Enter your Email ID</label>
		                </div>
		                <div class="s_row">
		                    <input type="text" class="label_jump">
		                    <span></span>
		                    <label>Enter your Pasword</label>
		                </div>
		                <span class="forgot_password">
		                	<span>
		                		<input type="checkbox" id="stay_signed" name="">
		                		<label for="stay_signed">Stay Signed in</label>
		                	</span>
		                	<a href="javascript:void(0);">Forgot Password?</a>
		                </span>
		                <div class="btn_container">
		                    <a class="btn clr_fill " href="javascript:void(0);">Login</a>
		                </div>
		            </fieldset>
		        </form>
			</div>	
		</div>

		<div class="model_box_child" id="registerpopup">
			<span class="close_model">×</span>
			<div class="login_data form_section">
				<div class="title">
		            <h3>Register to Rishteyindian.com</h3>
		            <p>Click here for <a href="javascript:void(0);"class="open_model" data-target="loginpopup">LOGIN</a></p>
		        </div>
		        <div class="secondary_title">
		            <span>Get yourself Registered</span>
		        </div>

		        <form class="default_form">
		            <fieldset> 
		                <div class="s_row">
		                    <input type="text" class="label_jump">
		                    <span></span>
		                    <label>Enter your Email ID</label>
		                </div>
		                <div class="s_row">
		                    <input type="Pasword" class="label_jump">
		                    <span></span>
		                    <label>Enter your Pasword</label>
		                </div>
		                <div class="s_row">
		                    <input type="Pasword" class="label_jump">
		                    <span></span>
		                    <label>Confirm Pasword</label>
		                </div>
		                <div class="btn_container">
		                    <a class="btn clr_fill " href="javascript:void(0);">Sign In</a>
		                </div>
		            </fieldset>
		        </form>
			</div>	
		</div>

		<div class="model_box_child video_sc" id="rishteyindian_video">
			<span class="close_model">×</span>
			<iframe width="100%" class="video_iframe" src="https://www.youtube.com/embed/NsMdeAZvUAo"></iframe>
		</div>
	</div>
</div>

<!-- top header -->
<?php 
	include('./components/header/topHead.php'); 
	include_once('./components/header/loginSection.php');
	include_once('./components/header/bigBanner.php'); 
?>


<!-- Blog Section  -->
<?php include_once('./components/blogs/blogs.php');?>

<section class="search_profile">
	<div class="wrapper">
		<div class="heading">
			<span>Profile Search</span>
			<p>
				<i class="fas fa-heart"></i>
				<i class="fas fa-heart"></i>
				<i class="fas fa-heart"></i>
			</p>
		</div>
		<div class="form_section_srch">
			<div class="form_group">
				<p>I am looking for</p>
				<select>
					<option>Man</option>
					<option>Women</option>
					<option>Others</option>
				</select>
			</div>
			<div class="form_group age">
				<p>person age</p>
				<select>
					<option>25</option>
					<option>26</option>
					<option>27</option>
				</select>
				<span>to</span>
				<select>
					<option>35</option>
					<option>36</option>
					<option>37</option>
				</select>
			</div>
			<div class="form_group">
				<p>of religion</p>
				<select>
					<option>Select</option>
					<option>Hindu</option>
					<option>Punjabi</option>
				</select>
			</div>
			<div class="form_group">
				<p>and mother tounge</p>
				<select>
					<option>Select</option>
					<option>Hindi</option>
					<option>Punjabi</option>
				</select>
			</div>
			<div class="form_group">
				<p>&nbsp;</p>
				<button class="btn clr_fill">Let's Begin</button>
			</div>
		</div>
	</div>
</section>

<section class="recommended_Profile">
	<div class="wrapper">
		<ul class="slider responsive">
			<li>
				<img src="images/prf_1.jpg" alt="">
				<p>Steve Roger</p>
				<span>Age: 28yrs old</span>
			</li>
			<li>
				<img src="images/prf_1.jpg" alt="">
				<p>Steve Roger</p>
				<span>Age: 28yrs old</span>
			</li>
			<li>
				<img src="images/prf_1.jpg" alt="">
				<p>Steve Roger</p>
				<span>Age: 28yrs old</span>
			</li>
			<li>
				<img src="images/prf_1.jpg" alt="">
				<p>Steve Roger</p>
				<span>Age: 28yrs old</span>
			</li>
			<li>
				<img src="images/prf_1.jpg" alt="">
				<p>Steve Roger</p>
				<span>Age: 28yrs old</span>
			</li>
			<li>
				<img src="images/prf_1.jpg" alt="">
				<p>Steve Roger</p>
				<span>Age: 28yrs old</span>
			</li>
			<li>
				<img src="images/prf_1.jpg" alt="">
				<p>Steve Roger</p>
				<span>Age: 28yrs old</span>
			</li>
			<li>
				<img src="images/prf_1.jpg" alt="">
				<p>Steve Roger</p>
				<span>Age: 28yrs old</span>
			</li>
			<li>
				<img src="images/prf_1.jpg" alt="">
				<p>Steve Roger</p>
				<span>Age: 28yrs old</span>
			</li>
			<li>
				<img src="images/prf_1.jpg" alt="">
				<p>Steve Roger</p>
				<span>Age: 28yrs old</span>
			</li>
			<li>
				<img src="images/prf_1.jpg" alt="">
				<p>Steve Roger</p>
				<span>Age: 28yrs old</span>
			</li>
		</ul>
	</div>
</section>

<section class="find_prtnr">
	<div class="wrapper">
		<div class="heading">
			<span>Find Your life Partner</span>
			<p>
				<i class="fas fa-heart"></i>
				<i class="fas fa-heart"></i>
				<i class="fas fa-heart"></i>
			</p>
		</div>
		<ul>
			<li class="lft_ani">
				<img src="images/signin.png">
				<span>Free Register Your Profile & Get 21 Contact Free</span>
			</li>
			<li class="lft_ani">
				<img src="images/fblike.png">
				<span>Like Our Facebook Page & Get 7 Contact Free</span>
			</li>
			<li class="lft_ani">
				<img src="images/verified.png">
				<span>Every Profile Is Phone Verified.</span>
			</li>

			<li class="rgt_ani">
				<img src="images/privacy.png">
				<span>Select Your Privacy By Filling Your Profile</span>
			</li>
			<li class="rgt_ani">
				<img src="images/price.png">
				<span>Package Started By 5 Contact Pack</span>
			</li>
			<li class="rgt_ani">
				<img src="images/mediator.png">
				<span>Start Your Conversation Directly</span>
			</li>
		</ul>
	</div>
</section>

<div class="adversiser">
	<div class="wrapper">
		<span>Advertise Your Products/Brand/Shop/Service On Our Website.</span>
		<a href="javascript:void(0);">New Advertiser</a>
		<a href="javascript:void(0);">Login Advertiser</a>
		<a href="javascript:void(0);">Video</a>
	</div>
</div>

<?php include_once('./components/footer/footerInfo.php'); ?>
</body>
</html>