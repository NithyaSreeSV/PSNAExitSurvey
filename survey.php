<html class="no-js" lang="en">
    
<!--<meta http-equiv="content-type" content="text/html;charset=utf-8" />-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Dashboard </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/vendor.css">
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
            }
        </script>
    </head>
	<body>
	<?php
	session_start();
	$username = $_SESSION['username'];
	if($_SESSION['role'] <> 'student'){
		header('refresh:3;url=index.html');
		echo "<center><h2>Sorry. Login first... </h2></center>";
	}else {
		
	?>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse d-lg-none d-xl-none">
                        <button class="collapse-btn" id="sidebar-collapse-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="header-block header-block-search">
                        <form role="search">
                            <div class="input-container">
                                <i class="fa fa-search"></i>
                                <input type="search" placeholder="Search">
                                <div class="underline"></div>
                            </div>
                        </form>
                    </div>
					<div class="header-block header-block-nav">
                        <ul class="nav-profile">
						<li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url('https://avatars3.githubusercontent.com/u/3959008?v=3&amp;s=40')"> </div>
                                    <span class="name"> <?php echo $username; ?> </span>
                                </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <!--<a class="dropdown-item" href="#">
                                        <i class="fa fa-user icon"></i> Profile </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-bell icon"></i> Notifications </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-gear icon"></i> Settings </a>
                                    <div class="dropdown-divider"></div>-->
                                    <a class="dropdown-item" href="index.html">
                                        <i class="fa fa-power-off icon"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                    </div>
				</header>
				<aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <div class="logo">
                                    <img src="assests/psna.jpg" style="height:40px" alt="logo">
                            </div> Insight Hub </h1>
						</div>
                        <nav class="menu">
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                <li class="active">
                                    <a href="student_dashboard.php">
                                        <i class="fa fa-home"></i> Dashboard </a>
                                </li>
                                <li>
                                    <a href="prgm_outcome.php">
                                        <i class="fa fa-th-large"></i> Program Outcomes
                                    </a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-th-large"></i> Submit Feedback
									</a>
								</li>
								<li>
                                    <a href="#">
                                        <i class="fa fa-th-large"></i> Students NameList
										<i class="fa arrow"></i>
                                    </a>
									<ul class="sidebar-nav">
										<li>
                                            <a href="items-list.html"> 2021 - 25 </a>
                                        </li>
                                        <li>
                                            <a href="items-list.html"> 2022 - 26 </a>
                                        </li>
                                        <li>
                                            <a href="items-list.html"> 2023 - 27 </a>
                                        </li>
										<li>
                                            <a href="items-list.html"> 2024 - 28 </a>
                                        </li>
                                    </ul>
								</li>
								<li>
                                    <a href="reset.html">
									<i class="fa fa-th-large"></i> Change Password </a>
                                </li>
							</ul>
						</nav>
                    </div>
				</aside>
				<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
				
<article class="content dashboard-page">
<section class="section">                
<form action='survey_store.php' method='POST'>
<div class='form-container'>
<div><p> </p><h2>Personal Details</h2><hr>
</div>
<div class='row'>
<div class='col-md-4'><label for x><strong>Register Number</strong> </label><input name = 'regno' id = 'regno' class='form-control' required></div>
<div class='col-md-4'><label for x> <strong>Student Name</strong> </label><input name = 'sname' class='form-control' required></div>
<div class='col-md-4'><label for x><strong> Section</strong> </label><input name = 'section' class='form-control' required></div>
<div class='col-md-4'><label for x><strong> Permanent Address</strong> </label><input name = 'address' class='form-control' required></div>
<div class='col-md-4'><label for x><strong> Mobile/Phone Number</strong> </label><input name = 'mobile' class='form-control' required></div>
<div class='col-md-4'><label for x><strong> E-Mail Address</strong> </label><input name = 'email' class='form-control' required></div>
<div class='col-md-4'><label for x><strong> Date of Birth</strong> </label><input name = 'dob' class='form-control' required></div>
<div class='col-md-4'><label for x><strong> Nationality / Country</strong> </label><input name = 'country' class='form-control' required></div>
<div class='col-md-4'><label for x><strong> Your option after this course</strong> </label> <input name = 'afcourse' class='form-control' required></div>

<div class='col-md-12'><hr>
<h2>Answer all the Questions</h2><hr>
<span class="font-weight-bold">
To apply the mathematics knowledge in analyzing and solving real world problem</span><br>
<input type='radio' name='QA' value='5' required> Excellent<br>
<input type='radio' name='QA' value='4' required> Strongly Agree<br>
<input type='radio' name='QA' value='3' required> Agree<br>
<input type='radio' name='QA' value='2' required> Disagree<br>
<input type='radio' name='QA' value='1' required> Strongly Disagree<br>
<hr> </div> 
<div class='col-md-12'><span class="font-weight-bold">
Identify processes / modules / methods of a computer-based system and parameters to solve a problem</span><br>
<input type='radio' name='QB' value='5' required> Excellent<br>
<input type='radio' name='QB' value='4' required> Strongly Agree<br>
<input type='radio' name='QB' value='3' required> Agree<br>
<input type='radio' name='QB' value='2' required> Disagree<br>
<input type='radio' name='QB' value='1' required> Strongly Disagree<br>
<hr> </div> 
<div class='col-md-12'><span class="font-weight-bold">
Able to apply engineering-standard figures and reports to produce clear, well-constructed, and well-supported written engineering documents</span><br>
<input type='radio' name='QC' value='5' required> Excellent<br>
<input type='radio' name='QC' value='4' required> Strongly Agree<br>
<input type='radio' name='QC' value='3' required> Agree<br>
<input type='radio' name='QC' value='2' required> Disagree<br>
<input type='radio' name='QC' value='1' required> Strongly Disagree<br>
<hr> </div> 
<div class='col-md-12'><span class="font-weight-bold">
Deliver effective oral presentations to technical and non-technical audiences</span><br>
<input type='radio' name='QD' value='5' required> Excellent<br>
<input type='radio' name='QD' value='4' required> Strongly Agree<br>
<input type='radio' name='QD' value='3' required> Agree<br>
<input type='radio' name='QD' value='2' required> Disagree<br>
<input type='radio' name='QD' value='1' required> Strongly Disagree<br>
<hr> </div> 
<div class='col-md-12'><span class="font-weight-bold">
Use project management tools to schedule an engineering project to complete on time and on budget</span><br>
<input type='radio' name='QE' value='5' required> Excellent<br>
<input type='radio' name='QE' value='4' required> Strongly Agree<br>
<input type='radio' name='QE' value='3' required> Agree<br>
<input type='radio' name='QE' value='2' required> Disagree<br>
<input type='radio' name='QE' value='1' required> Strongly Disagree<br>
<hr> </div> 
<div class='col-md-12'><span class="font-weight-bold">
ability to identify and access sources for new information</span><br>
<input type='radio' name='QF' value='5' required> Excellent<br>
<input type='radio' name='QF' value='4' required> Strongly Agree<br>
<input type='radio' name='QF' value='3' required> Agree<br>
<input type='radio' name='QF' value='2' required> Disagree<br>
<input type='radio' name='QF' value='1' required> Strongly Disagree<br>
<hr> </div> 
<div class='col-md-12'><span class="font-weight-bold">
Developed the skills and knowledge to plan, organize, market, and manage conventions, meetings, and events effectively and efficiently</span><br>
<input type='radio' name='QG' value='5' required> Excellent<br>
<input type='radio' name='QG' value='4' required> Strongly Agree<br>
<input type='radio' name='QG' value='3' required> Agree<br>
<input type='radio' name='QG' value='2' required> Disagree<br>
<input type='radio' name='QG' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
Have variety of instructional strategies to encourage critical thinking skills</span><br>
<input type='radio' name='QH' value='5' required> Excellent<br>
<input type='radio' name='QH' value='4' required> Strongly Agree<br>
<input type='radio' name='QH' value='3' required> Agree<br>
<input type='radio' name='QH' value='2' required> Disagree<br>
<input type='radio' name='QH' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
To apply the principles of sustainable design in the dimensions of technical, socio-economic and environmental contexts</span><br>
<input type='radio' name='QI' value='5' required> Excellent<br>
<input type='radio' name='QI' value='4' required> Strongly Agree<br>
<input type='radio' name='QI' value='3' required> Agree<br>
<input type='radio' name='QI' value='2' required> Disagree<br>
<input type='radio' name='QI' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
use individual and group motivation to create an effective learning environment</span><br>
<input type='radio' name='QJ' value='5' required> Excellent<br>
<input type='radio' name='QJ' value='4' required> Strongly Agree<br>
<input type='radio' name='QJ' value='3' required> Agree<br>
<input type='radio' name='QJ' value='2' required> Disagree<br>
<input type='radio' name='QJ' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
For creating a learning environment that encourages positive social interaction</span><br>
<input type='radio' name='QK' value='5' required> Excellent<br>
<input type='radio' name='QK' value='4' required> Strongly Agree<br>
<input type='radio' name='QK' value='3' required> Agree<br>
<input type='radio' name='QK' value='2' required> Disagree<br>
<input type='radio' name='QK' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
To participate in opportunities to grow professionally</span><br>
<input type='radio' name='QL' value='5' required> Excellent<br>
<input type='radio' name='QL' value='4' required> Strongly Agree<br>
<input type='radio' name='QL' value='3' required> Agree<br>
<input type='radio' name='QL' value='2' required> Disagree<br>
<input type='radio' name='QL' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
To apply latest programming languages and technologies to develop software</span><br>
<input type='radio' name='QM' value='5' required> Excellent<br>
<input type='radio' name='QM' value='4' required> Strongly Agree<br>
<input type='radio' name='QM' value='3' required> Agree<br>
<input type='radio' name='QM' value='2' required> Disagree<br>
<input type='radio' name='QM' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
Have the skills necessary to develop professional relationships with parents and community agencies</span><br>
<input type='radio' name='QN' value='5' required> Excellent<br>
<input type='radio' name='QN' value='4' required> Strongly Agree<br>
<input type='radio' name='QN' value='3' required> Agree<br>
<input type='radio' name='QN' value='2' required> Disagree<br>
<input type='radio' name='QN' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
Have learnt how to apply moral & ethical principles in my profession</span><br>
<input type='radio' name='QO' value='5' required> Excellent<br>
<input type='radio' name='QO' value='4' required> Strongly Agree<br>
<input type='radio' name='QO' value='3' required> Agree<br>
<input type='radio' name='QO' value='2' required> Disagree<br>
<input type='radio' name='QO' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
Demonstrate an ability to describe engineering roles in pertaining to the environment, health, safety, legal and public welfare</span><br>
<input type='radio' name='QP' value='5' required> Excellent<br>
<input type='radio' name='QP' value='4' required> Strongly Agree<br>
<input type='radio' name='QP' value='3' required> Agree<br>
<input type='radio' name='QP' value='2' required> Disagree<br>
<input type='radio' name='QP' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
Able to solve real time problems technically using recent open source tools</span><br>
<input type='radio' name='QQ' value='5' required> Excellent<br>
<input type='radio' name='QQ' value='4' required> Strongly Agree<br>
<input type='radio' name='QQ' value='3' required> Agree<br>
<input type='radio' name='QQ' value='2' required> Disagree<br>
<input type='radio' name='QQ' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
To choose appropriate hardware/software tools and appropriate procedures to implement a software system</span><br>
<input type='radio' name='QR' value='5' required> Excellent<br>
<input type='radio' name='QR' value='4' required> Strongly Agree<br>
<input type='radio' name='QR' value='3' required> Agree<br>
<input type='radio' name='QR' value='2' required> Disagree<br>
<input type='radio' name='QR' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
Able to develop a business and scientific software based on software engineering principles</span><br>
<input type='radio' name='QS' value='5' required> Excellent<br>
<input type='radio' name='QS' value='4' required> Strongly Agree<br>
<input type='radio' name='QS' value='3' required> Agree<br>
<input type='radio' name='QS' value='2' required> Disagree<br>
<input type='radio' name='QS' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
Departmental office of Student and Professional Services</span><br>
<input type='radio' name='QT' value='5' required> Excellent<br>
<input type='radio' name='QT' value='4' required> Strongly Agree<br>
<input type='radio' name='QT' value='3' required> Agree<br>
<input type='radio' name='QT' value='2' required> Disagree<br>
<input type='radio' name='QT' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
opportunities to learn through practical experiences</span><br>
<input type='radio' name='QU' value='5' required> Excellent<br>
<input type='radio' name='QU' value='4' required> Strongly Agree<br>
<input type='radio' name='QU' value='3' required> Agree<br>
<input type='radio' name='QU' value='2' required> Disagree<br>
<input type='radio' name='QU' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
hospitality management program</span><br>
<input type='radio' name='QV' value='5' required> Excellent<br>
<input type='radio' name='QV' value='4' required> Strongly Agree<br>
<input type='radio' name='QV' value='3' required> Agree<br>
<input type='radio' name='QV' value='2' required> Disagree<br>
<input type='radio' name='QV' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
Had adequate facilities and equipment to support learning</span><br>
<input type='radio' name='QW' value='5' required> Excellent<br>
<input type='radio' name='QW' value='4' required> Strongly Agree<br>
<input type='radio' name='QW' value='3' required> Agree<br>
<input type='radio' name='QW' value='2' required> Disagree<br>
<input type='radio' name='QW' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
Career opportunities</span><br>
<input type='radio' name='QX' value='5' required> Excellent<br>
<input type='radio' name='QX' value='4' required> Strongly Agree<br>
<input type='radio' name='QX' value='3' required> Agree<br>
<input type='radio' name='QX' value='2' required> Disagree<br>
<input type='radio' name='QX' value='1' required> Strongly Disagree<br>
<hr> </div>  
<div class='col-md-12'><span class="font-weight-bold">
CSE Block and Other Amenities</span><br>
<input type='radio' name='QY' value='5' required> Excellent<br>
<input type='radio' name='QY' value='4' required> Strongly Agree<br>
<input type='radio' name='QY' value='3' required> Agree<br>
<input type='radio' name='QY' value='2' required> Disagree<br>
<input type='radio' name='QY' value='1' required> Strongly Disagree<br>
<hr> </div> 

<div class='col-md-12'><span class='font-weight-bold'>In what way, CSE Programme education was helpful? Please check all of the ones below that may apply.</span><br>
<input type='checkbox' name='CA' value='Placement'>Placement<br>
<input type='checkbox' name='CB' value='International Experience'>International Experience<br>
<input type='checkbox' name='CC' value='Administration'>Administration<br>
<input type='checkbox' name='CD' value='Multidisciplinary'>Multidisciplinary<br>
<input type='checkbox' name='CE' value='Business'>Business<br>
<hr>
</div>

<div class='col-md-12'><span class='font-weight-bold'>Have you ever participated in any international education experiences and/or services</span>
<br>
<input type='radio' name='DA' value='Yes'>Yes<br>
<input type='radio' name='DA' value='No'>No<br>
<hr>
</div>
<div class='col-md-12'><span class='font-weight-bold'>Would you be interested in forming or participating in an alumni group in your area?</span>
<br>
<input type='radio' name='DB' value='Yes'>Yes<br>
<input type='radio' name='DB' value='No'>No<br>
<hr>
</div>
<div class='col-md-12'><span class='font-weight-bold'>May we use your name and address for prospective student referrals?</span>
<br>
<input type='radio' name='DC' value='Yes'>Yes<br>
<input type='radio' name='DC' value='No'>No<br>
<hr>
</div>
<div class='col-md-12'><span class='font-weight-bold'>
<label for='Strength'>
Strength of CSE department</label>
<textarea class="form-control" rows="5" name="strength"></textarea>
</div>
<div class='col-md-12'><span class='font-weight-bold'>
<label for='weakness'>
Weakness of CSE department</label>
<textarea class="form-control" rows="5" name="weakness"></textarea>
<hr>
</div>
<div class='col-md-12'><span class='font-weight-bold'>Overall, I was satisfied with my study experiences in CSE department
</span><br>
<input type='radio' name='QZ' value='5' required> Excellent<br>
<input type='radio' name='QZ' value='4' required> Strongly Agree<br>
<input type='radio' name='QZ' value='3' required> Agree<br>
<input type='radio' name='QZ' value='2' required> Disagree<br>
<input type='radio' name='QZ' value='1' required> Strongly Disagree<br>
<hr> </div> 
<div class="container">
<div class="row">
<div class="col text-center">
<button id='submit' class='btn btn-primary form-control' style='width:150px;' align='center' type='submit'> Submit </button></div></div></div>
</div>
</div>
</form>
</section>
</article>

<script>
$(document).ready(function(){
$('#regno').change(function(){
var regno = $('#regno').val();
$.post('checkreg.php',{regno:regno},function(result){
if(result == 'True'){
alert('Sorry, Feedback already submitted. Retry');
$('#regno').val('');
$('#regno').focus();
}
});
});
});
</script>
	<!--<script>
            (function(i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function()
                {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-80463319-4', 'auto');
            ga('send', 'pageview');
        </script>-->
	<script src="js/vendor.js"></script>
    <script src="js/app.js"></script>
	<?php	}	?>
</body>
</html>