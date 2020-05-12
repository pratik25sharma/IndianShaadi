<?php
	include_once('./admin/connection/connection.php');
    require "lessphp/lessc.inc.php";
    $less = new lessc;
    $less->setFormatter("compressed");
	$less->checkedCompile("less_assets/login.less", "css/login.css");
	
	include_once('./utils/fn.utils.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rishtey Indian - Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"> -->
</head>
<body>


<?php 
	include_once('./components/header/topHead.php');
?>
<header class="head_variations">
	<div class="wrapper">
		<span class="logo">
			<a href="index.php">
				<img src="images/logo.png" alt="Rishety Indian logo" width="100">
			</a>
		</span>
		<nav>
			<a class="mob_menu"><i class="fas fa-bars"></i></a>
			<ul>
				<a class="close"><i class="fas fa-times"></i></a>
				<li>
                    <a href="javascript:void(0);"  class="open_model" data-target="registerpopup"><i class="fas fa-user-tie"></i> New Member</a>
                </li>
                <li>
                    <a href="javascript:void(0);"  class="open_model" data-target="loginpopup"><i class="fas fa-sign-in-alt"></i> Login</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="open_modelf" data-target="rishteyindian_video"><i class="fas fa-video"></i> Video</a>
                </li>
			</ul>
		</nav>
	</div>
</header>

<section class="login_details">
	<div class="wrapper">
		<div class="lft_pnl">
			<div class="google_add">
				Google Adds
			</div>
		</div>
		<div class="rgt_pnl">
			<div class="login_form">
				<form class="default_form" id="register_form1" style="display: none;">
					<div class="form_group">
						<div class="formBlock_heading">
		                    <span>Basic Information</span>
		                </div>
						<div class="form_details">
							<div class="s_row">
		                        <input list="profile_created" class="label_jump">
		                        <datalist id="profile_created">
		                        	<option>Selft</option>
		                        	<option>Parents</option>
		                        	<option>Sibling</option>
		                        	<option>Friends</option>
		                        	<option>Other</option>
		                        </datalist>
		                        <label>Profile created by <i>**</i></label>
		                    </div>
		                    <div class="s_row field_head">
		                    	<div>Gender <i>**</i></div>
		                    	<span>
		                    		<input type="radio" name="" id="male">
		                    		<label for="male">Male</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Female</label>
		                    	</span>
		                    </div>
		                    <div class="s_row">
		                    	<input type="text" name="" class="label_jump">
		                    	<label>Name <i>**</i></label>
		                    </div>
		                    <div class="s_row">
		                    	<input type="date" name="" class="label_jump">
		                    	<label class="label-valid">Date Of Birth <i>**</i></label>
		                    </div>
		                    <div class="s_row select">
		                    	<select class="label_jump">
		                    		<option></option>
		                    		<option>Never Married</option>
		                    		<option>Divorced</option>
		                    		<option>Awaiting Divorced</option>
		                    		<option>Widower</option>
		                    	</select>
		                    	<label>Marital Status <i>**</i></label>
		                    </div>
		                    <div class="s_row">
		                        <input list="height" class="label_jump">
		                        <datalist id="height">
		                        	<option>4ft 5in - 134cm</option>
		                        	<option>4ft 6in - 137cm</option>
		                        	<option>4ft 7in - 139cm</option>
		                        	<option>4ft 8in - 142cm</option>
		                        	<option>4ft 9in - 144cm</option>
		                        </datalist>
		                        <label>Height <i>*</i></label>
		                    </div>
		                    <div class="s_row field_head">
		                    	<div>Body type <i>*</i></div>
		                    	<span>
		                    		<input type="radio" name="" id="Slim">
		                    		<label for="Slim">Slim</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="Average">
		                    		<label for="Average">Average</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="Atheltic">
		                    		<label for="Atheltic">Atheltic</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="Heavy">
		                    		<label for="Heavy">Heavy</label>
		                    	</span>
		                    </div>
		                    <div class="s_row">
		                    	<input type="text" name="" class="label_jump">
		                    	<label>Body Weight (in kgs)</label>
		                    </div>
		                    <div class="s_row">
		                        <input list="health" class="label_jump">
		                        <datalist id="health">
		                        	<option>No Halth Problem</option>
		                        	<option>HIV positive</option>
		                        	<option>Diabetes</option>
		                        	<option>Low BP</option>
		                        	<option>High BP</option>
		                        	<option>Heart Ailments</option>
		                        	<option>Other</option>
		                        </datalist>
		                        <label>Health Information</label>
		                    </div>
		                    <div class="s_row field_head">
		                    	<div>Skin tone <i>*</i></div>
		                    	<span>
		                    		<input type="radio" name="" id="vfair">
		                    		<label for="vfair">Very Fair</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="fair">
		                    		<label for="fair">Fair</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="wheatish">
		                    		<label for="wheatish">Wheatish</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="dark">
		                    		<label for="dark">Dark</label>
		                    	</span>
		                    </div>
		                    <div class="s_row field_head">
		                    	<div>Any Disability?</div>
		                    	<span>
		                    		<input type="radio" name="" id="disability_none">
		                    		<label for="disability_none">None</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="disability_physical">
		                    		<label for="disability_physical">Physical Disability</label>
		                    	</span>
		                    </div>
		                    <div class="s_row">
		                        <input list="blood_grp" class="label_jump">
		                        <datalist id="blood_grp">
		                        	<option>Don't Know</option>
		                        	<option>A+</option>
		                        	<option>A-</option>
		                        	<option>B+</option>
		                        	<option>B-</option>
		                        	<option>AB+</option>
		                        	<option>AB-</option>
		                        	<option>O+</option>
		                        	<option>O-</option>
		                        </datalist>
		                        <label>Blood Group</label>
		                    </div>
						</div>
					</div>

	                <div class="form_group">
						<div class="formBlock_heading">
		                    <span>Your Religious Information</span>
		                </div>
	                	<div class="form_details">
	                		<div class="s_row">
		                        <input list="religion" class="label_jump">
		                        <datalist id="religion">
		                        	<option>Hindu</option>
		                        	<option>Muslim</option>
		                        	<option>Sikh</option>
		                        	<option>Christian</option>
		                        	<option>Parsi</option>
		                        	<option>Jain</option>
		                        	<option>Buddhist</option>
		                        	<option>Jewish</option>
		                        	<option>No Religion</option>
		                        	<option>Spiritual</option>
		                        	<option>Other</option>
		                        </datalist>
		                        <label>Religion <i>**</i></label>
		                    </div>

		                    <div class="s_row">
		                        <input list="mother_tongue" class="label_jump">
		                        <datalist id="mother_tongue">
		                        	<option>Hindu</option>
		                        	<option>Muslim</option>
		                        	<option>Sikh</option>
		                        	<option>Christian</option>
		                        	<option>Parsi</option>
		                        	<option>Jain</option>
		                        	<option>Buddhist</option>
		                        	<option>Jewish</option>
		                        	<option>No Religion</option>
		                        	<option>Spiritual</option>
		                        	<option>Other</option>
		                        </datalist>
		                        <label>Mother Tongue <i>*</i></label>
		                    </div>

		                    <div class="s_row">
		                        <input list="Community" class="label_jump">
		                        <datalist id="Community">
		                        	<option>Other</option>
		                        </datalist>
		                        <label>Community</label>
		                    </div>

		                    <div class="s_row">
		                    	<input type="text" class="label_jump" name="">
		                    	<label>Sub-Community</label>
		                    </div>

		                    <div class="s_row">
		                        <input list="goth" class="label_jump">
		                        <datalist id="goth">
		                        	<option>Other</option>
		                        	<option>Don't Know</option>
		                        </datalist>
		                        <label>Gothra/Gothram</label>
		                    </div>
	                	</div>
	                </div>

	                <div class="form_group">
						<div class="formBlock_heading">
		                    <span>Your Educational Information</span>
		                </div>
	                	<div class="form_details">
	                		<div class="s_row">
		                        <input list="edu" class="label_jump">
		                        <datalist id="edu">
		                        	<option>Doctorate</option>
		                        	<option>Masters</option>
		                        </datalist>
		                        <label>Education <i>*</i></label>
		                    </div>

		                    <div class="s_row">
		                        <input list="edu_field" class="label_jump">
		                        <datalist id="edu_field">
		                        	<option>Arts</option>
		                        	<option>Commerce</option>
		                        </datalist>
		                        <label>Education Field</label>
		                    </div>

		                    <div class="s_row">
		                        <input list="working-with" class="label_jump">
		                        <datalist id="working-with">
		                        	<option>MNC</option>
		                        </datalist>
		                        <label>Working With <i>*</i></label>
		                    </div>

		                    <div class="s_row">
		                    	<input list="working-as" class="label_jump">
		                        <datalist id="working-as">
		                        	<option>Other</option>
		                        	<option>Don't Know</option>
		                        </datalist>
		                    	<label>Working As</label>
		                    </div>

		                    <div class="s_row">
		                        <input list="goth" class="label_jump">
		                        <datalist id="goth">
		                        	<option>upto 1 Lakh</option>
		                        	<option>2 Lakh To 4 Lakh</option>
		                        </datalist>
		                        <label>Annual Income <i>*</i></label>
		                    </div>
	                	</div>
	                </div>

	                <div class="form_group">
						<div class="formBlock_heading">
		                    <span>Your Location</span>
		                </div>
	                	<div class="form_details">
	                		<div class="s_row select">
		                    	<select class="label_jump" disabled="disabled">
		                    		<option>India</option>
		                    	</select>
		                    	<label class="label-valid">Country Living In</label>
		                    </div>

		                    <div class="s_row field_head">
		                    	<div>Do you want advertise on your page <i>*</i></div>
		                    	<span>
		                    		<input type="radio" name="" id="yes" checked="checked">
		                    		<label for="yes">Yes</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="no">
		                    		<label for="no">No</label>
		                    	</span>
		                    </div>

		                    <div class="s_row">
		                        <input list="state-living" class="label_jump">
		                        <datalist id="state-living">
		                        	<option>Delhi</option>
		                        </datalist>
		                        <label>State Living In <i>*</i></label>
		                    </div>

		                    <div class="s_row">
		                    	<input list="district" class="label_jump">
		                        <datalist id="district">
		                        	<option>Azadpur</option>
		                        	<option>Rohini</option>
		                        </datalist>
		                    	<label>District <i>*</i></label>
		                    	<span class="loader"></span>
		                    </div>

		                    <div class="s_row">
		                        <input list="pincode" class="label_jump">
		                        <datalist id="pincode">
		                        	<option>Adarsh nagar - 110033</option>
		                        	<option>Shatri Nagar - 110026</option>
		                        </datalist>
		                        <label>Pincode <i>*</i></label>
		                    </div>
	                	</div>
	                </div>

	                <div class="form_group">
						<div class="formBlock_heading">
		                    <span>Contact and OTP</span>
		                </div>
	                	<div class="form_details">
	                		<div class="s_row f_width">
		                    	<input type="tel" class="label_jump" name="">
		                    	<label>Contact Us</label>
		                    </div>
		                    <div class="s_row f_width">
		                    	<input type="tel" class="label_jump" name="">
		                    	<label>OTP</label>
		                    </div>
	                	</div>
	                </div>

	                <div class="s_row submission">
	                	<div class="note">Note : *Mandatory Field ** Non Editable Mandatory Field</div>
	                	<span>
                            <input type="checkbox" id="agree" name="">
                            <label for="agree">I have agreed to the Terms & Conditions & have read & understood the Privacy Policy.</label>
                        </span>
	                </div>
	                <div class="s_row submission">
	                	<button class="btn clr_fill">Submit</button>
	                </div>
				</form>

				<form class="default_form" id="register_form2">
					<div class="form_group">
						<div class="formBlock_heading">
		                    <span>Family Information</span>
		                </div>
						<div class="form_details">
							<div class="s_row">
		                        <input list="f_status" class="label_jump">
		                        <datalist id="f_status">
		                        	<option>Bussiness Man</option>
		                        </datalist>
		                        <label>Father's Status</label>
		                    </div>
		                    <div class="s_row">
		                        <input list="m_status" class="label_jump">
		                        <datalist id="m_status">
		                        	<option>House Wife</option>
		                        </datalist>
		                        <label>Mother's Status</label>
		                    </div>
		                    <div class="s_row field_head hlf_input">
		                    	<div>No. of Male Siblings</div>
		                    	<input type="number" name="" placeholder="Not Married">
		                    	<input type="number" name="" placeholder="Married">
		                    </div>
		                    <div class="s_row field_head hlf_input">
		                    	<div>No. of Female Siblings</div>
		                    	<input type="number" placeholder="Not Married" name="">
		                    	<input type="number" placeholder="Married" name="">
		                    </div>
		                    <div class="s_row field_head">
		                    	<div>Family Type</div>
		                    	<span>
		                    		<input type="radio" name="" id="male">
		                    		<label for="male">Joint</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Nuclear</label>
		                    	</span>
		                    </div>
		                    <div class="s_row field_head">
		                    	<div>Family values</div>
		                    	<span>
		                    		<input type="radio" name="" id="male">
		                    		<label for="male">Traditional</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Moderate</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Liberal</label>
		                    	</span>
		                    </div>
		                    <div class="s_row">
		                        <input list="family-affluence" class="label_jump">
		                        <datalist id="family-affluence">
		                        	<option>Upper Class</option>
		                        </datalist>
		                        <label>Family Affluence</label>
		                    </div>

		                    <div class="s_row field_head">
		                    	<div>She lives with her family</div>
		                    	<span>
		                    		<input type="radio" name="" id="male">
		                    		<label for="male">yes</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">No</label>
		                    	</span>
		                    </div>
		                    <div class="s_row field_head">
		                    	<div>He lives with his family</div>
		                    	<span>
		                    		<input type="radio" name="" id="male">
		                    		<label for="male">yes</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">No</label>
		                    	</span>
		                    </div>
						</div>
					</div>
					<div class="form_group">
						<div class="formBlock_heading">
							<span>Click Here To Fill your Astro Detail?</span>
						</div>
						<div class="form_details">
							<div class="s_row field_head">
		                    	<div>Astrology</div>
		                    	<span>
		                    		<input type="radio" name="" id="male">
		                    		<label for="male">yes</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">No</label>
		                    	</span>
		                    </div>
	                    	<div class="s_row field_head">
		                    	<div>Astrology Match</div>
		                    	<span>
		                    		<input type="radio" name="" id="male">
		                    		<label for="male">ashtakoot</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">dashakoot</label>
		                    	</span>
		                    </div>
		                    <div class="s_row field_head">
		                    	<div>Manglik</div>
		                    	<span>
		                    		<input type="radio" name="" id="Manglik">
		                    		<label for="Manglik">Manglik</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Anshik manglik</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Not Manglik</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Don't Know</label>
		                    	</span>
		                    </div>
		                    <div class="s_row field_head hlf_input">
		                    	<div>Birth Timmings(in 24 hours)</div>
		                    	<input type="number" name="" placeholder="Birth Hour">
		                    	<input type="number" name="" placeholder="Birth Minutes">
		                    </div>
		                    <div class="s_row">
		                        <input list="nakshatra" class="label_jump">
		                        <datalist id="nakshatra">
		                        	<option>Ashwini</option>
		                        </datalist>
		                        <label>Nakshatra</label>
		                    </div>
		                    <div class="s_row">
		                    	<input type="text" name="" class="label_jump">
		                    	<label>Birth Place</label>
		                    </div>
						</div>
					</div>
					<div class="form_group">
						<div class="formBlock_heading">
							<span>Lifestyle</span>
						</div>
						<div class="form_details">
							<div class="s_row field_head f_width">
		                    	<div>Diet</div>
		                    	<span>
		                    		<input type="radio" name="" id="male">
		                    		<label for="male">Veg</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Non-Veg</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Occasionally NonVeg</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Eggetarian</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Jain</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Vegan</label>
		                    	</span>
		                    </div>
		                    <div class="s_row field_head">
		                    	<div>Drink</div>
		                    	<span>
		                    		<input type="radio" name="" id="male">
		                    		<label for="male">Yes</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">No</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Occasionally</label>
		                    	</span>
		                    </div>
		                    <div class="s_row field_head">
		                    	<div>Smoke</div>
		                    	<span>
		                    		<input type="radio" name="" id="male">
		                    		<label for="male">Yes</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">No</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Occasionally</label>
		                    	</span>
		                    </div>
						</div>
					</div>
					<div class="form_group">
						<div class="formBlock_heading">
							<span>Special Information</span>
						</div>
						<div class="form_details">
							<div class="s_row field_head f_width">
		                    	<div>Work Place</div>
		                    	<span>
		                    		<input type="radio" name="" id="male">
		                    		<label for="male">Own</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Rented</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Lease</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Work From Home</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Other</label>
		                    	</span>
		                    </div>
		                    <div class="s_row field_head">
		                    	<div>House</div>
		                    	<span>
		                    		<input type="radio" name="" id="male">
		                    		<label for="male">Own</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Rented</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Lease</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">Other</label>
		                    	</span>
		                    </div>
		                    <div class="s_row field_head">
		                    	<div>Four Wheeler Maintain</div>
		                    	<span>
		                    		<input type="radio" name="" id="male">
		                    		<label for="male">Yes</label>
		                    	</span>
		                    	<span>
		                    		<input type="radio" name="" id="female">
		                    		<label for="female">No</label>
		                    	</span>
		                    </div>
						</div>
					</div>
					<div class="form_group">
						<div class="formBlock_heading">
							<span>Description</span>
						</div>
						<div class="form_group">
							<div class="form_details">
								<div class="s_row f_width">
									<textarea maxlength="30"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="s_row submission">
	                	<button class="btn clr_fill">Submit</button>
	                </div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php include_once('./components/footer/footerInfo.php') ?>
</body>
</html>