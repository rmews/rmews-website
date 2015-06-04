<!DOCTYPE html>
<?php require_once("inc/config.php"); ?>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Digital Strategist, Web Developer and Social Media Influencer">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Robert Mews | Digital Marketing Strategist &amp; Web Developer</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/2.3.1/picturefill.min.js" async></script>
</head>

<body>
	<!-- NAVIGATION -->
	<nav class="light-blue darken-2" role="navigation">
		<div class="nav-wrapper container">
			<a class="brand-logo"></a>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="#about" class="white-text">About</a></li>
				<li><a href="#experience" class="white-text">Experience</a></li>
				<li><a href="#modal1" class="white-text modal-trigger">Contact</a></li>
			</ul>
			<ul id="nav-mobile" class="side-nav light-blue darken-2" style="left: -250px;">
				<li><a href="#about" class="white-text">About</a></li>
				<li><a href="#experience" class="white-text">Experience</a></li>
				<li><a href="#modal1" class="white-text modal-trigger">Contact</a></li>
			</ul>
		</div>
	</nav>
	<!-- JUMBOTRON -->
	<div id="index-banner" class="parallax-container">
		<div class="section no-pad-bot">
			<div class="container">
				<br>
				<br>
				<h2 class="uppercase center white-text">Robert Mews</h2>
				<div class="row center">
					<h5 class="uppercase col s12 white-text thin">Digital Strategist. Web Developer. YouTube Partner.</h5>
				</div>
				<div class="row center">
					<!-- Modal Trigger -->
					<!-- <a href="#modal1" id="download-button" class="btn-large waves-effect waves-light blue darken-2 modal-trigger">Contact Me</a> -->
					<button data-target="modal1" class="btn-large waves-effect waves-light blue accent-2 modal-trigger">Contact Me</button>
					<?php include(ROOT_PATH . "inc/contact.php"); ?>
				</div>
				<br>
				<br>
			</div>
		</div>
		<div class="parallax">
			<img class="responsive-img"
				 src="img/jumbotron-large-@2x.jpg" 
				 alt="Robert Mews Digital Strategist and Web Developer" 
				 style="display: -webkit-transform: translate3d(-50%, 405px, 0px);">
		</div>
	</div>
	<!-- COMPANIES -->
	<div class="section center grey lighten-1">
		<div class="container">
			<h6 class="uppercase grey-text text-darken-1">Some Companies I've Worked With</h6>
		</div>
		<div class="container row">
			<div class="col s12 m2">
				<div class="icon-block">
					<h4 class="center"><img class="olson-logo"></i></h4>
				</div>
			</div>
			<div class="col s12 m2">
				<div class="icon-block">
					<h4 class="center"><img class="fullscreen-logo"></i></h4>
				</div>
			</div>
			<div class="col s12 m2">
				<div class="icon-block">
					<h4 class="center"><img class="twitch-logo"></i></h4>
				</div>
			</div>
			<div class="col s12 m2">
				<div class="icon-block">
					<h4 class="center"><img class="youtube-logo"></i></h4>
				</div>
			</div>
			<div class="col s12 m2">
				<div class="icon-block">
					<h4 class="center"><img class="bauer-logo"></i></h4>
				</div>
			</div>
			<div class="col s12 m2">
				<div class="icon-block">
					<h4 class="center"><img class="bettycrocker-logo"></i></h4>
				</div>
			</div>
		</div>
	</div>
	<!-- ABOUT SECTION -->
	<div class="container">
		<div class="section" id="about">
			<div class="row">
				<div class="col s12 center">
					<h5 class="heading uppercase black-text">About Robert Mews</h5>
				</div>
				<div class="col s12 center">
					<p class="left-align light">Robert Mews is a digital marketing strategist, user acquisition manager, web developer and YouTube partner. He's been a lead digital strategist at some of the leading digital advertising agencies in the US, including MRM Worldwide and OLSON. He's also worked for a SaaS startup, Grocery Shopping Network. His accomplishments include driving record user acquisition growth for Bettycrocker.com, making it a top-5 recipe destination on the web. He also worked with Spectracide Brands to increase mobile application downloads 1,000&#37; over a six-month period.</p>
					<p class="left-align light">During Robert's free time, he develops websites for clients and friends. He's also built a YouTube following of 35,000 subscribers on a channel that's accumulated more than 8 million views to date. For his work in the social media space, he continues to work with multiple brands on sponsorship packages and community building activites.</p>
					<p class="left-align light">For fun and enjoyment, Robert is all about competitive video games, traveling, and playing around with new technology. He's current side project is developing an application that allows Twitch streamers understand the best time to stream and their most loyal followers.</p>
				</div>
			</div>
		</div>
		<div class="divider"></div>
	</div>
	<!-- SOCIAL MEDIA EXPERIENCE -->
	<div class="section white">
		<div class="container">
			<div class="section" id="experience">
				<div class="row">
					<div class="col s12 m2 left">
						<h1 class="center grey-text text-darken-1"><i class="large mdi-action-question-answer"></i></h1>
					</div>
					<div class="col s12 m10 left">
						<h4 class="uppercase black-text">Social Media Marketing</h4>
						<p class="left-align light">Robert is well versed in creating dynamic and impactful social media strategies and content plans. As an official YouTube partner, Robert brings a unique perspective that most social media strategist don't offer in this space. During his career, he worked with General Mills and the BettyCrocker.com team to generate one of the first food related brand pages on Facebook and one of the first communities to reach more than one million fans. As a content creator, he's engaged thousands of followers and accumulated more than 8 million views. A pretty impressive hobby, to say the least. Robert currently provides clients with in-depth competitive audits, community insights, content planning and creation services.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- SEARCH ENGINE EXPERIENCE -->
	<div class="section white">
		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col s12 m2 right">
						<h1 class="center grey-text text-darken-1"><i class="large mdi-action-find-in-page"></i></h1>
					</div>
					<div class="col s12 m10 left">
						<h4 class="uppercase black-text">Search Engine Marketing</h4>
						<p class="left-align light">Today's search strategist needs a sound foundation of social media and content creation in order to be successful at driving traffic. Having accumulated more than 8 million views on YouTube and having managed thousand dollar paid search campaigns during his agency days, Robert has a vast understanding of how to tap into the very lucrative search channel to drive substantial traffic. He has experience conducting competitive audits, rank monitoring, setup and management of Google AdWords accounts and creating content plans that generate substantial traffic through SEO.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- USER ACQUISITION EXPERIENCE -->
	<div class="section white">
		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col s12 m2 left">
						<h1 class="center grey-text text-darken-1"><i class="large mdi-social-group-add"></i></h1>
					</div>
					<div class="col s12 m10 left">
						<h4 class="uppercase black-text">User Acquisition Strategy</h4>
						<p class="left-align light">For 10-plus years, Robert has created digital strategies that resulted in significant user growth. His media knowledge, ability take community insights and build engaging media plans that drive results are unheralded. He has experience managing multiple user acquisition channels resulting in monthly budgets upwards of $1 million. He's created record traffic for BettyCrocker.com, making it a top-5 recipe destination and created a mobile user acquisition plan for Spectracide that resulted in a 1,000&#37; increase of mobile app installs in six months. Robert has experience creating A/B messaging channel's, conducting cohort analysis and calculating media spend ROI through data analysis.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- WEB DEVELOPMENT EXPERIENCE -->
	<div class="section white">
		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col s12 m2 right">
						<h1 class="center grey-text text-darken-1"><i class="large mdi-device-dvr"></i></h1>
					</div>
					<div class="col s12 m10 right">
						<h4 class="uppercase black-text">Website Development</h4>
						<p class="left-align light">Robert's developed many website's and applications over the course of his career. His primary focus is on front-end web development, with knowledge of HTML, CSS, Javascript and available frameworks such as Bootstrap and JQuery. He also has experience working with the LAMP stack, running SSH commands, creating PHP scripts and MySQL in phpMyAdmin. From a workflow perspective, he uses Git and GitHub to manage code version control. This entire website is built using all the mentioned languages and tools.</p> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="page-footer  light-blue darken-2">
		<div class="footer-copyright">
			<div class="container">Copyright &copy; Mews Media LLC 2015</div>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
	<script src="js/init.js"></script>
	<script>
		(function(i,s,o,g,r,a,m) { i['GoogleAnalyticsObject']=r;i[r]=i[r]||function() { (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-63744140-1', 'auto'); ga('send', 'pageview');
	</script>
</body>

</html>