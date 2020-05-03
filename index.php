<?php
    require "lessphp/lessc.inc.php";
    $less = new lessc;
    $less->setFormatter("compressed");
    $less->checkedCompile("less_assets/home.less", "css/home.css");
    //$less->checkedCompile("less_assets/desktop/slick.less", "css/desktop_css/slick.css");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rishtey Indian - Home page--</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
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
<header>
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
<div class="banner">
	<ul class="fade slider">
		<li>
			<img src="images/banner-1.jpg" alt="Home banner">
			<div class="banner_head">
				<span class="head">Meet Big And Beautiful Love Here!</span>
				<a href="javascript:void(0);">Join Now <i class="fas fa-arrow-right"></i></a>
			</div>
		</li>
		<li>
			<img src="images/bg-1.jpg" alt="Home banner">
			<div class="banner_head">
				<span class="head">Meet Big And Beautiful Love Here!</span>
				<a href="javascript:void(0);">Join Now <i class="fas fa-arrow-right"></i></a>
			</div>
		</li>
	</ul>
</div>

<section class="blogs">
	<div class="wrapper">
		<ul>
			<li>
				<img src="images/blog.jpg">
				<p>Top 7 Signs To Know If He Is Your Soulmate</p>
				<span>March, 2017 by <strong>John Doe</strong></span>
			</li>

			<li>
				<img src="images/blog.jpg">
				<p>Top 7 Signs To Know If He Is Your Soulmate</p>
				<span>March, 2017 by <strong>John Doe</strong></span>
			</li>

			<li>
				<img src="images/blog.jpg">
				<p>Top 7 Signs To Know If He Is Your Soulmate</p>
				<span>March, 2017 by <strong>John Doe</strong></span>
			</li>

			<li>
				<img src="images/blog.jpg">
				<p>Top 7 Signs To Know If He Is Your Soulmate</p>
				<span>March, 2017 by <strong>John Doe</strong></span>
			</li>
		</ul>
	</div>
</section>

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
<script type="text/javascript" src="js/slick.min.js"></script>
</body>
</html>