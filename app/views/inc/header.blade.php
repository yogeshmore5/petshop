<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<!-- BOOTSTRAP CORE STYLE  -->
    {{ HTML::style('assets/css/bootstrap.css'); }}

    <!-- FONT AWESOME ICONS  -->
	{{ HTML::style('assets/css/font-awesome.css'); }}
    <!-- CUSTOM STYLE  -->
    {{ HTML::style('assets/css/style.css'); }}
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
				<h1>Bunny's Pet Shower</h1></div>
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