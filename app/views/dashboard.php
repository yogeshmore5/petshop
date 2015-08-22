<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
				<h1>Bunny's Pet Shower</h1>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="/petshop/public">Dashboard</a></li>
                            <li><a href="/petshop/public/pet">Pets</a></li>
                            <li><a href="/petshop/public/service">Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Dashboard</h4>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-3">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <a href="/petshop/public/pet"><i  class="fa fa-github-alt dashboard-div-icon" ></i></a>
                        <h5>View Pets</h5>
                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <a href="/petshop/public/service"><i  class="fa fa-table dashboard-div-icon" ></i></a>
                        <h5>View Services</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <a href="/petshop/public/service/assign"><i  class="fa fa-cogs dashboard-div-icon" ></i></a>
                        <h5>Manage Services</h5>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>

            </div>
        </div>
    </footer>
	<script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>