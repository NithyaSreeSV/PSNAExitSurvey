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
                                    <a href="yearin_dashboard.php">
                                        <i class="fa fa-home"></i> Dashboard </a>
                                </li>
                                <li>
                                    <a href="prgm_outcome_yearin.php">
                                        <i class="fa fa-th-large"></i> Program Outcomes
                                    </a>
								</li>
								<li>
									<a href="question_analysis_yearin.php">
										<i class="fa fa-th-large"></i> Questionnaire Analysis
									</a>
								</li>
								<li>
									<a href="po_map_yearin.php">
										<i class="fa fa-th-large"></i> Program outcome Analysis
									</a>
								</li>
								<li>
									<a href="overall_yearin.php">
										<i class="fa fa-th-large"></i> Overall Analysis
									</a>
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
						<?php
							include('config.php'); // Include your database connection file

							// Fetch total feedbacks
							$totalFeedbackQuery = "SELECT COUNT(*) AS total FROM survey";
							$totalFeedbackResult = $conn->query($totalFeedbackQuery);
							$totalFeedback = $totalFeedbackResult->fetch_assoc()['total'];

							// Fetch average rating
							$averageRatingQuery = "SELECT AVG(QZ) AS average FROM survey";
							$averageRatingResult = $conn->query($averageRatingQuery);
							$averageRating = $averageRatingResult->fetch_assoc()['average'];

							// Fetch new feedbacks (assuming new feedbacks are those created in the last 7 days)
							$newFeedbackQuery = "SELECT COUNT(*) AS new FROM survey WHERE timestamp >= NOW() - INTERVAL 7 DAY";
							$newFeedbackResult = $conn->query($newFeedbackQuery);
							$newFeedback = $newFeedbackResult->fetch_assoc()['new'];

							// Fetch positive feedbacks (rating 4 and 5)
							$positiveFeedbackQuery = "SELECT COUNT(*) AS positive FROM survey WHERE QZ >= 4";
							$positiveFeedbackResult = $conn->query($positiveFeedbackQuery);
							$positiveFeedback = $positiveFeedbackResult->fetch_assoc()['positive'];

							// Fetch negative feedbacks (rating 1 and 2)
							$negativeFeedbackQuery = "SELECT COUNT(*) AS negative FROM survey WHERE QZ <= 2";
							$negativeFeedbackResult = $conn->query($negativeFeedbackQuery);
							$negativeFeedback = $negativeFeedbackResult->fetch_assoc()['negative'];

							// Fetch pending reviews (if you have a status column, otherwise adjust accordingly)
							$pendingReviewsQuery = "SELECT COUNT(*) AS Placement FROM survey WHERE CA = 'job'";
							$pendingReviewsResult = $conn->query($pendingReviewsQuery);
							$pendingReviews = $pendingReviewsResult->fetch_assoc()['Placement'];
						?>
						<div class='row'>
						<div class="col-xl-6">
                            <div class="card card-success">
                                <div class="card-header">
                                    <div class="header-block">
                                        <p class="title"> <h3>Total Feedback</h3> </p>
                                    </div>
                                </div>
								<div class="card-block">
									<p><h2><?php echo $totalFeedback; ?></h2></p>
								</div>
							</div>
							</div>
							<div class="col-xl-6">
							<div class="card card-success">
                                <div class="card-header">
                                    <div class="header-block">
                                        <p class="title"> <h3>Average Rating</h3> </p>
                                    </div>
                                </div>
								<div class="card-block">
									<p><h2><?php echo number_format($averageRating, 0); ?>/5</h2></p>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card card-success">
                                <div class="card-header">
                                    <div class="header-block">
                                        <p class="title"> <h3>New Feedbacks</h3> </p>
                                    </div>
                                </div>
								<div class="card-block">
									<p><h2><?php echo $newFeedback; ?></h2></p>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card card-success">
                                <div class="card-header">
                                    <div class="header-block">
                                        <p class="title"> <h3>Placements</h3> </p>
                                    </div>
                                </div>
								<div class="card-block">
									<p><h2><?php echo $pendingReviews; ?></h2></p>
								</div>
							</div>
						</div>
						</div>
	<script>
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
        </script>
	<script src="js/vendor.js"></script>
    <script src="js/app.js"></script>	
	</body>
</html>
