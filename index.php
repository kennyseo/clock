<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>Kenny Seo</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />

	<link href="css/font.css" rel="stylesheet" type="text/css" media="all">
	<!--[if gte IE 9]> <link rel="stylesheet" type="text/css" href="css/ie9.css" /> <![endif]-->



</head>

<body>
  <div id="loader">
		<!-- Preloader inner -->
		<div id="loaderInner">
			<div class="spinner"></div>
		</div>
		<!-- End preloader inner -->
	</div>
	<!-- End preloader-->
  <header>
      <nav class="navbar navbar-default navigation-clean-search">
          <div class="container">
              <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Company Name</a>
                  <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              </div>
              <div class="collapse navbar-collapse" id="navcol-1">
                  <ul class="nav navbar-nav">
                      <li class="active" role="presentation"><a href="#">Link</a></li>
                      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                              <li role="presentation"><a href="#">First Item</a></li>
                              <li role="presentation"><a href="#">Second Item</a></li>
                              <li role="presentation"><a href="#">Third Item</a></li>
                          </ul>
                      </li>
                  </ul>
                  <form class="navbar-form navbar-left" target="_self">
                      <div class="form-group">
                          <label class="control-label" for="search-field"><i class="glyphicon glyphicon-search"></i></label>
                          <input class="form-control search-field" type="search" name="search" id="search-field">
                      </div>
                  </form>
                  <p class="navbar-text navbar-right"><a class="navbar-link login" href="#">Log In</a> <a class="btn btn-default action-button" role="button" href="#">Sign Up</a></p>
              </div>
          </div>
      </nav>
      <div class="container hero">
          <div class="row">
              <div class="col-lg-6 col-md-6">
                  <h1>한글 시계</h1>
                  <p>Mauris egestas tellus non ex condimentum, ac ullamcorper sapien dictum. Nam consequat neque quis sapien viverra convallis. In non tempus lorem. </p>
                  <button class="btn btn-default btn-lg action-button" type="button">&emsp;다운로드&emsp;</button>
              </div>

              <div class="col-lg-6 col-md-6">
								<?php
								$background = "";
								date_default_timezone_set('America/Chicago');
								$hour = date('h', time());
								$min  = date('i', time());

								echo "<style>.hour, .min {color: #172a74;}";
								if ($hour == "01") {
									echo ".one {color: #172a74;}";
								} elseif ($hour == "02") {
									echo ".two {color: #172a74;}";
								} elseif ($hour == "03") {
									echo ".three {color: #172a74;}";
								} elseif ($hour == "04") {
									echo ".four {color: #172a74;}";
								} elseif ($hour == "05") {
									echo ".five {color: #172a74;}";
								} elseif ($hour == "06") {
									echo ".six {color: #172a74;}";
								} elseif ($hour == "07") {
									echo ".seven {color: #172a74;}";
								} elseif ($hour == "08") {
									echo ".eight {color: #172a74;}";
								} elseif ($hour == "09") {
									echo ".nine1, .nine2 {color: #172a74;}";
								} elseif ($hour == "10") {
									echo ".ten {color: #172a74;}";
								} elseif ($hour == "11") {
									echo ".ten, .one {color: #172a74;}";
								} elseif ($hour == "12") {
									echo ".ten, .two {color: #172a74;}";
								}


								// Minutes Starts
								if ($min{0} == "1") {
									echo ".tenm {color: #172a74;}";
								} elseif ($min{0} == "2") {
									echo ".twentym, .tenm {color: #172a74;}";
								} elseif ($min{0} == "3") {
									echo ".thirtym, .tenm {color: #172a74;}";
								} elseif ($min{0} == "4") {
									echo ".fourtym, .tenm {color: #172a74;}";
								} elseif ($min{0} == "5") {
									echo ".fiftym, .tenm {color: #172a74;}";
								}
								if ($min{1} == "1") {
									echo ".onem {color: #172a74;}";
								} elseif ($min{1} == "2") {
									echo ".twom {color: #172a74;}";
								} elseif ($min{1} == "3") {
									echo ".threem {color: #172a74;}";
								} elseif ($min{1} == "4") {
									echo ".fourm {color: #172a74;}";
								} elseif ($min{1} == "5") {
									echo ".fivem {color: #172a74;}";
								} elseif ($min{1} == "6") {
									echo ".sixm {color: #172a74;}";
								} elseif ($min{1} == "7") {
									echo ".sevenm {color: #172a74;}";
								} elseif ($min{1} == "8") {
									echo ".eightm {color: #172a74;}";
								} elseif ($min{1} == "9") {
									echo ".nightm {color: #172a74;}";
								} elseif ($min{1} == "0") {
									echo "";
								}
								echo "</style>";
								?>
									<table class="clock">
								    <tr>
								      <td class="ten">열</td>
								      <td class="one">한</td>
								      <td class="two">두</td>
								      <td class="three">세</td>
								      <td class="four">네</td>
								    </tr>
								    <tr>
								      <td class="five">다</td>
								      <td class="six">여</td>
								      <td class="fivesix">섯</td>
								      <td class="seven1">일</td>
								      <td class="seven2">곱</td>
								    </tr>
								    <tr>
								      <td class="eight1">여</td>
								      <td class="eight2">덟</td>
								      <td class="nine1">아</td>
								      <td class="nine2">홉</td>
								      <td class="hour">시</td>
								    </tr>
								    <tr>
								      <td class="twentym">이</td>
								      <td class="thirtym">삼</td>
								      <td class="fourtym">사</td>
								      <td class="fiftym">오</td>
								      <td class="tenm">십</td>
								    </tr>
								    <tr>
								      <td class="onem">일</td>
								      <td class="twom">이</td>
								      <td class="threem">삼</td>
								      <td class="fourm">사</td>
								      <td class="fivem">오</td>
								    </tr>
								    <tr>
								      <td class="sixm">육</td>
								      <td class="sevenm">칠</td>
								      <td class="eightm">팔</td>
								      <td class="nightm">구</td>
								      <td class="min">분</td>
								    </tr>
								  </table>
              </div>
          </div>
      </div>
  </header>



  <div class="container mt-4"><!-- about me starts -->
    <div class="row"><!-- row starts -->
      <div class="col-md-10 col-md-offset-1 "><!-- col 10 starts -->
        <div class="row mb-4">
          <div class="col-md-6">
            <h1 class="box">ABOUT ME</h1>
            <h1>Kenny KwanSeok Seo</h1>
            <h3>Full Stack Developer</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="col-md-5 col-md-offset-1 mt-5">
            <h3><a href="mailto:kenny.seo@websitedevteam.com">kenny.seo@websitedevteam.com</a></h3>
            <h3><a href="http://websitedevteam.com" target="_blank">http://websitedevteam.com</a></h3>
            <h3><a href="https://github.com/kennyseo" target="_blank">https://github.com/kennyseo</a></h3>
          </div>
        </div><!-- row ends -->
          <span class="divider"></span>
      </div><!-- col 10 ends -->
    </div><!-- row ends -->
  </div><!-- about me ends -->



	<div class="container"><!-- skill set container starts -->
    <div class="row"><!-- row starts -->
      <div class="col-md-10 col-md-offset-1 "><!-- col 10 starts -->

					<div class="divider mt-5"></div>

					<h1 class="box mt-5 mb-2">EXPERIENCES</h1><!-- EXPERIENCES starts -->
			</div>
		</div>
	</div>






    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</body>

</html>
