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
</head>

<body>

	<!-- End preloader-->
  <header>
      <nav class="navbar navbar-default navigation-clean-search">
          <div class="container">
              <div class="navbar-header"><a class="navbar-brand navbar-link" href="https://kennyseo.github.io/koreanClock">한글 시계</a>
                  <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              </div>
              <div class="collapse navbar-collapse" id="navcol-1">
                  <ul class="nav navbar-nav navbar-right">
                      <li role="presentation"><a href="https://kennyseo.github.io/koreanClock">Home</a></li>
											<li role="presentation"><a href="https://kennyseo.github.io/engClock">Eng. Clock</a></li>
											<li role="presentation"><a class="navbar-link login" href="https://github.com/kennyseo/koreanClock">Github</a></li>
											<li role="presentation"><a class="btn btn-default action-button" role="button" href="#download">DOWNLOAD</a></li>
                  </ul>
              </div>
          </div>
      </nav>
      <div class="container hero">
          <div class="row">
              <div class="col-lg-5 col-md-5 col-lg-offset-1 col-md-offset-1">
                  <h1></h1>
                  <p>한글로 만들어진 시계를 보고 영어버전으로 만들기전 PHP로 연습해본 베타 버전입니다. 영어 시계를 한글 시계처럼 하기에는 반복되는 알파벳이 너무 많아서 레터가 아님 단어 X 단어 조합으로 만들어야 할 거 같습니다. 달력과 초를 포함한 시계는 계발중입니다. </p>
                  <a class="btn btn-default btn-lg action-button" href="#donwload">&emsp;다운로드&emsp;</a>
              </div>

              <div class="col-lg-6 col-md-6">
								<?php
								$background = "";
								date_default_timezone_set('America/Chicago');
								$hour = date('h', time());
								$min  = date('i', time());

								if (class_exists("clock-light")) {
									$color = "#bb0f33";
								} else {
									$color = "#eaeaea";
								}


								echo "<style>.hour, .min {color: " ."". $color ."". ";}";
								if ($hour == "01") {
									echo ".one {color: " ."". $color ."". ";}";
								} elseif ($hour == "02") {
									echo ".two {color: " ."". $color ."". ";}";
								} elseif ($hour == "03") {
									echo ".three {color: " ."". $color ."". ";}";
								} elseif ($hour == "04") {
									echo ".four {color: " ."". $color ."". ";}";
								} elseif ($hour == "05") {
									echo ".five {color: " ."". $color ."". ";}";
								} elseif ($hour == "06") {
									echo ".six {color: " ."". $color ."". ";}";
								} elseif ($hour == "07") {
									echo ".seven {color: " ."". $color ."". ";}";
								} elseif ($hour == "08") {
									echo ".eight1, .eight2 {color: " ."". $color ."". ";}";
								} elseif ($hour == "09") {
									echo ".nine1, .nine2 {color: " ."". $color ."". ";}";
								} elseif ($hour == "10") {
									echo ".ten {color: " ."". $color ."". ";}";
								} elseif ($hour == "11") {
									echo ".ten, .one {color: " ."". $color ."". ";}";
								} elseif ($hour == "12") {
									echo ".ten, .two {color: " ."". $color ."". ";}";
								}


								// Minutes Starts
								if ($min{0} == "1") {
									echo ".tenm {color: " ."". $color ."". ";}";
								} elseif ($min{0} == "2") {
									echo ".twentym, .tenm {color: " ."". $color ."". ";}";
								} elseif ($min{0} == "3") {
									echo ".thirtym, .tenm {color: " ."". $color ."". ";}";
								} elseif ($min{0} == "4") {
									echo ".fourtym, .tenm {color: " ."". $color ."". ";}";
								} elseif ($min{0} == "5") {
									echo ".fiftym, .tenm {color: " ."". $color ."". ";}";
								}
								if ($min{1} == "1") {
									echo ".onem {color: " ."". $color ."". ";}";
								} elseif ($min{1} == "2") {
									echo ".twom {color: " ."". $color ."". ";}";
								} elseif ($min{1} == "3") {
									echo ".threem {color: " ."". $color ."". ";}";
								} elseif ($min{1} == "4") {
									echo ".fourm {color: " ."". $color ."". ";}";
								} elseif ($min{1} == "5") {
									echo ".fivem {color: " ."". $color ."". ";}";
								} elseif ($min{1} == "6") {
									echo ".sixm {color: " ."". $color ."". ";}";
								} elseif ($min{1} == "7") {
									echo ".sevenm {color: " ."". $color ."". ";}";
								} elseif ($min{1} == "8") {
									echo ".eightm {color: " ."". $color ."". ";}";
								} elseif ($min{1} == "9") {
									echo ".nightm {color: " ."". $color ."". ";}";
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


	<div id="download" class="container"><!-- skill set container starts -->
		<h1 class="box mt-5 mb-2 col-md-offset-1 ">CLOCKS</h1><!-- EXPERIENCES starts -->
		<div class="row"><!-- row starts -->
      <div class="col-md-5 col-md-offset-1 dark"><!-- col 10 starts -->
				<table class="clock-dark">
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

			<div class="col-md-5 col-md-offset-1 light">
				<table class="clock-light">
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


  <div class="container mt-4"><!-- about me starts -->
    <div class="row"><!-- row starts -->
      <div class="col-md-10 col-md-offset-1 "><!-- col 10 starts -->
        <div class="row mb-4">
          <div class="col-md-6">
            <h1 class="box">DEVELOPER</h1>
            <h1>Kenny Seo</h1>
            <h3>Full Stack Developer</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="col-md-5 col-md-offset-1 mt-5">
            <h3><a href="mailto:kenny.seo@websitedevteam.com">kenny.seo@websitedevteam.com</a></h3>
            <h3><a href="http://websitedevteam.com" target="_blank">http://websitedevteam.com</a></h3>
            <h3><a href="https://github.com/kennyseo" target="_blank">https://github.com/kennyseo</a></h3>
          </div>
        </div><!-- row ends -->
      </div><!-- col 10 ends -->
    </div><!-- row ends -->
  </div><!-- about me ends -->


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</body>

</html>
