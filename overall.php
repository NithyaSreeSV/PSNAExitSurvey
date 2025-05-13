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
									<a href="question_analysis.php">
										<i class="fa fa-th-large"></i> Questionnaire Analysis
									</a>
								</li>
								<li>
									<a href="po_map.php">
										<i class="fa fa-th-large"></i> Program outcome Analysis
									</a>
								</li>
								<li>
									<a href="overall.php">
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
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>PO.No</th>
                <th>Program Outcomes</th>
                <th>Excellent (%)</th>
                <th>Strongly Agree (%)</th>
                <th>Agree (%)</th>
                <th>Disagree (%)</th>
                <th>Strongly Disagree (%)</th>
            </tr>
        </thead>
        <tbody>            
<?php
include('config.php');

// Query to fetch PO details mapped from poquesmap
$sqla = mysqli_query($conn, "
    SELECT po.po_id, po.desc, pq.QName
    FROM postt po
    JOIN poquesmap pq ON po.po_id = pq.PO
");

// Get total number of rows in the survey table
$totalSurveyQuery = mysqli_query($conn, "SELECT COUNT(*) AS total FROM survey");
$totalSurveyData = mysqli_fetch_assoc($totalSurveyQuery);
$totalResponses = $totalSurveyData['total'];

// Initialize an array to store summed-up values per PO
$po_scores = [];

while ($row = mysqli_fetch_assoc($sqla)) {
    $po_id = $row['po_id'];
    $QName = $row['QName'];

    // SQL Query to calculate total responses for the given QName
    $surveyQuery = mysqli_query($conn, "
        SELECT 
            SUM(CASE WHEN $QName = 5 THEN 1 ELSE 0 END) AS Excellent,
            SUM(CASE WHEN $QName = 4 THEN 1 ELSE 0 END) AS StronglyAgree,
            SUM(CASE WHEN $QName = 3 THEN 1 ELSE 0 END) AS Agree,
            SUM(CASE WHEN $QName = 2 THEN 1 ELSE 0 END) AS Disagree,
            SUM(CASE WHEN $QName = 1 THEN 1 ELSE 0 END) AS StronglyDisagree
        FROM survey
    ");

    $surveyData = mysqli_fetch_assoc($surveyQuery);

    if (!isset($po_scores[$po_id])) {
        $po_scores[$po_id] = [
            'desc' => $row['desc'],
            'Excellent' => 0,
            'StronglyAgree' => 0,
            'Agree' => 0,
            'Disagree' => 0,
            'StronglyDisagree' => 0
        ];
    }

    // Add up the responses if PO appears multiple times
    $po_scores[$po_id]['Excellent'] += $surveyData['Excellent'];
    $po_scores[$po_id]['StronglyAgree'] += $surveyData['StronglyAgree'];
    $po_scores[$po_id]['Agree'] += $surveyData['Agree'];
    $po_scores[$po_id]['Disagree'] += $surveyData['Disagree'];
    $po_scores[$po_id]['StronglyDisagree'] += $surveyData['StronglyDisagree'];
}

// Initialize total counts for each column
$totalExcellent = 0;
$totalStronglyAgree = 0;
$totalAgree = 0;
$totalDisagree = 0;
$totalStronglyDisagree = 0;

foreach ($po_scores as $po_id => $data) {
    echo "<tr>
            <td style='text-align:center'>{$po_id}</td>
            <td>{$data['desc']}</td>
            <td>" . ($totalResponses > 0 ? round(($data['Excellent'] / $totalResponses) * 100, 2) : 0) . "</td>
            <td>" . ($totalResponses > 0 ? round(($data['StronglyAgree'] / $totalResponses) * 100, 2) : 0) . "</td>
            <td>" . ($totalResponses > 0 ? round(($data['Agree'] / $totalResponses) * 100, 2) : 0) . "</td>
            <td>" . ($totalResponses > 0 ? round(($data['Disagree'] / $totalResponses) * 100, 2) : 0) . "</td>
            <td>" . ($totalResponses > 0 ? round(($data['StronglyDisagree'] / $totalResponses) * 100, 2) : 0) . "</td>
        </tr>";

    // Sum up totals for the columns
    $totalExcellent += $data['Excellent'];
    $totalStronglyAgree += $data['StronglyAgree'];
    $totalAgree += $data['Agree'];
    $totalDisagree += $data['Disagree'];
    $totalStronglyDisagree += $data['StronglyDisagree'];
}

echo "<tr style='font-weight: bold;'>
        <td colspan='2' style='text-align:center'>Total (%)</td>
        <td>" . ($totalResponses > 0 ? round(($totalExcellent / 1500) * 100, 2) : 0) . "</td>
        <td>" . ($totalResponses > 0 ? round(($totalStronglyAgree / 1500) * 100, 2) : 0) . "</td>
        <td>" . ($totalResponses > 0 ? round(($totalAgree / 1500) * 100, 2) : 0) . "</td>
        <td>" . ($totalResponses > 0 ? round(($totalDisagree / 1500) * 100, 2) : 0) . "</td>
        <td>" . ($totalResponses > 0 ? round(($totalStronglyDisagree / 1500) * 100, 2) : 0) . "</td>
    </tr>";
?>
</tbody></table></div>

<?php 
// Include Chart.js
echo '<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>';
echo '<div class="surveyChart" style="display: flex; justify-content: center;">
        <canvas id="surveyChart"></canvas>
      </div>';
echo '<script>
    var ctx = document.getElementById("surveyChart").getContext("2d");
    var surveyChart = new Chart(ctx, {
        type: "pie",
        data: {
            labels: ["Excellent", "Strongly Agree", "Agree", "Disagree", "Strongly Disagree"],
            datasets: [{
                data: [' . $totalExcellent . ', ' . $totalStronglyAgree . ', ' . $totalAgree . ', ' . $totalDisagree . ', ' . $totalStronglyDisagree . '],
                backgroundColor: ["#4CAF50", "#2196F3", "#FFC107", "#9C27B0", "#FF5722"]
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: "top",
                }
            }
        }
    });
</script>';

?>

</section>
</article>


	<script src="js/vendor.js"></script>
    <script src="js/app.js"></script>
	<?php }
	mysqli_close($conn);	?>
</body>
</html>