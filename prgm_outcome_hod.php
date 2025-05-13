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
	if($_SESSION['role'] <> 'hod'){
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
                                    <a href="hod_dashboard.php">
                                        <i class="fa fa-home"></i> Dashboard </a>
                                </li>
                                <li>
                                    <a href="prgm_outcome_hod.php">
                                        <i class="fa fa-th-large"></i> Program Outcomes
                                    </a>
								</li>
								<li>
									<a href="viewanalysis.php">
										<i class="fa fa-th-large"></i> View analysis
									</a>
								</li>
								<li>
                                    <a href="reset.html">
									<i class="fa fa-th-large"></i> Change Password </a>
                                </li>
								<li>
                                    <a href="index.html">
									<i class="fa fa-th-large"></i> logout </a>
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
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
        <thead>
            <tr><th style='text-align:center'>PO.No</th><th><center>Program Outcomes</center></th></tr>
        </thead>
        <tbody>               
<?php
include('config.php');

// Fetch all Program Outcomes from postt
$sqla = mysqli_query($conn, "SELECT * FROM postt");

// Loop through the PO data
while ($row = mysqli_fetch_assoc($sqla)) {
    $po_id = $row['po_id'];
    $desc = $row['desc'];

    echo "<tr>
            <td style='text-align:center'>$po_id</td>
            <td>$desc</td>
          </tr>";
}

echo "</tbody></table></div>";

mysqli_close($conn);
?>
</section>
</article>


	<script src="js/vendor.js"></script>
    <script src="js/app.js"></script>
	<?php	}	?>
</body>
</html>