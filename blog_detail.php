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

<section class="blogs_detail">
	<div class="wrapper">
		<div class="pg_heading blogs">
			<span class="pg_headings">John Doe</span>
		</div>
		<div class="item_detail">
			<span>
				<img src="https://images.unsplash.com/photo-1551540827-6c8ae1aaedbb?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjExNzczfQ" alt="">
			</span>
			<h1>
				Top 7 Signs To Know If He Is Your Soulmate
				<i>March, 2017 by <strong>John Doe</strong></i>
			</h1>
		</div>
		<div class="item_content">
			<p>Ut eget sodales eros, vel sagittis est. Ut ultricies nulla odio, a accumsan purus consequat facilisis. Vivamus malesuada dui vel convallis interdum. Maecenas ornare, ex et sodales rutrum, nulla quam dignissim lectus, sit amet blandit sapien erat at sapien. Morbi mollis aliquet blandit. Pellentesque congue ornare varius. Proin in justo sodales, luctus nibh non, sagittis lectus. Ut ac hendrerit libero. Maecenas dignissim erat pharetra luctus dictum. Suspendisse at lectus eu leo dapibus sagittis sit amet tincidunt dolor. Fusce ornare arcu et felis condimentum, nec pellentesque odio ullamcorper. Vestibulum ut massa ultrices, congue metus et, malesuada odio. Duis faucibus vehicula ligula at gravida. Mauris faucibus et lorem imperdiet ullamcorper. Pellentesque blandit porttitor accumsan. Suspendisse aliquet ligula vitae tellus auctor finibus.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget mauris et nibh tincidunt elementum in vel felis. Ut iaculis, libero feugiat dapibus consectetur, nulla purus aliquam justo, nec venenatis sem dui a erat. Praesent ut neque risus. Ut eleifend mattis cursus. In interdum libero sed dignissim aliquet. Quisque sodales feugiat dapibus. Cras id risus faucibus ante efficitur mollis. Cras a felis mauris. Morbi ac mi ut lorem rutrum lacinia.</p>

			<p>Ut eget sodales eros, vel sagittis est. Ut ultricies nulla odio, a accumsan purus consequat facilisis. Vivamus malesuada dui vel convallis interdum. Maecenas ornare, ex et sodales rutrum, nulla quam dignissim lectus, sit amet blandit sapien erat at sapien. Morbi mollis aliquet blandit. Pellentesque congue ornare varius. Proin in justo sodales, luctus nibh non, sagittis lectus. Ut ac hendrerit libero. Maecenas dignissim erat pharetra luctus dictum. Suspendisse at lectus eu leo dapibus sagittis sit amet tincidunt dolor. Fusce ornare arcu et felis condimentum, nec pellentesque odio ullamcorper. Vestibulum ut massa ultrices, congue metus et, malesuada odio. Duis faucibus vehicula ligula at gravida. Mauris faucibus et lorem imperdiet ullamcorper. Pellentesque blandit porttitor accumsan. Suspendisse aliquet ligula vitae tellus auctor finibus.</p>
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