<html>
<head>
	<title>Lhuksub</title>
	{{ HTML::style('css/bootstrap.css'); }}
	{{ HTML::style('css/bootstrap.min.css'); }}
	{{ HTML::style('css/bootstrap-theme.css'); }}
	{{ HTML::style('css/bootstrap-theme.min.css'); }}
	{{ HTML::style('css/mybootstrap.css');}}
</head>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('.slideout-menu-toggle').on('click', function(event){
    	event.preventDefault();
    	// create menu variables
    	var slideoutMenu = $('.slideout-menu');
    	var slideoutMenuWidth = $('.slideout-menu').width();
    	
    	// toggle open class
    	slideoutMenu.toggleClass("open");
    	
    	// slide menu
    	if (slideoutMenu.hasClass("open")) {
	    	slideoutMenu.animate({
		    	left: "0px"
	    	});	
    	} else {
	    	slideoutMenu.animate({
		    	left: -slideoutMenuWidth-5
	    	}, 320);	
    	}
    });
});
</script>
<script type="text/javascript">
// $(document).ready(function () {
//     $('.slideout-menu-off').on('click', function(event){
//     	event.preventDefault();
//     	// create menu variables
//     	var slideoutMenu = $('.slideout-menu');
//     	var slideoutMenuWidth = $('.slideout-menu').width();
    	
//     	// slide menu
//     	if (!slideoutMenu.hasClass("open")) {
//     	} else {
//     	// toggle open class
//    			slideoutMenu.toggleClass("open");
//    	    	slideoutMenu.animate({
// 		    	left: -slideoutMenuWidth-5
// 	    	}, 320);	
//     	}
//     });
// });
</script>
<script type="text/javascript">
	$(document).ready(function () {
		$('.stock-menu li').click(function(e) {
		    $('.stock-menu li.active').removeClass('active');
		    var $this = $(this);
		    if (!$this.hasClass('active')) {
		        $this.addClass('active');
		    }
		    e.preventDefault();
		});
	});
</script>


<body>
	<div class="header">
		<navi>
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="col-md-2">
						<a href="#" class="nav-browse slideout-menu-toggle">BROWSE</a>
					</div>					
					<div class="col-md-3"></div>
					<div class="col-md-2">	
			        	<a href="#"><img class="nav-logo" src='img/weblogo2.jpg' /></a>
					</div>
					<div class="col-md-3"></div>
					<div class="col-md-2">
					     <a href="/FrontEnd/public/signin" class="nav-signin">SIGN IN</a>
					</div>
				</div>
			</div>
		</navi>
	</div>

	<div class="slideout-menu">
		<ul class="nav">
			<div class="member-panel">
				<div class="memberp-greet">
					<ul>
						<li><img class='userimg' src='img/b.tantikarun.jpg'/></li>
						<li><div class='hellomsg'>Hello, <div>
							<div class='membername'>Boom Tantikarun</div></li>
					</ul>
				</div>
			</div>
			<div class="member-menu">
				<ul>
					<li><a href='#'>SIGN IN</a></li>
				</ul>
			</div>
			<div class="input-group">
				<form method="get" action="/search" id="search">
					<input name="q" type="text" placeholder="Search Symbol" />
    		</div> 
    		<div class="nav-menu">
				<li role="presentation"><a href="#">NEWS</a></li>
				<li role="presentation"><a href="#">THAI MARKET</a></li>
				<li role="presentation"><a href="#">INDUSTRY</a></li>
				<li role="presentation"><a href="#">WORLD</a></li>
			</div>
		</ul>
	</div>

	<div class="body slideout-menu-off">
		<div class="body-middle-from-top">
			<div class="stock-header">
					<ul class="stock-menu">
					<li class="active"><a href="#">SUMMARY</a></li>
					<li><a href='#'>COMPANY</a></li>
					<li><a href='#'>FINANCIAL</a></li>
					<li><a href='#'>NEWS</a></li>
				</ul>
			</div>
			<div class="stock-detail-lefter">
				<h1 id="s0-symbol">SIRI</h1>
				<hr>
				<div class="stock-detail">
					<p id="s1-company"><object type="image/svg+xml" class="sx-img" data="img/icon_office.svg"></object>SANSIRI PUBLIC COMPANY LIMITED</p>
					<p id="s2-industry"><object type="image/svg+xml" class="sx-img" data="img/icon_tag.svg"></object>Property & Construction</p>
					<p id="s3-sector"><object type="image/svg+xml" class="sx-img-sub" data="img/icon_subset.svg"></object>Property Development</p>
					<p id="s4-time"><object type="image/svg+xml" class="sx-img" data="img/icon_clock.svg"></object>Since 19 JUL 1996</p>
				</div>	
				<hr>
				<div class="stock-trading-stat">
					<h1>Trading Statistics (17 FEB 2015)</h1>
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="col-md-3">
								P/E
							</div>
							<div class="col-md-3 value">
								8.67
							</div>
							<div class="col-md-3">
								P/BV
							</div>
							<div class="col-md-3 value">
								1.47
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="col-md-5">
								Dvd. Yield
							</div>
							<div class="col-md-7 value">
								3.42 <text>%</text>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="col-md-5">
								Market Cap.
							</div>
							<div class="col-md-7 value">
								27,964.08 <text>MB</text>
							</div>
						</div>
					</div>
				</div>
				<hr>
			</div>
			<div class="body-stock">
				<img class="graph" src='img/stock01.png'/>
			</div>

		</div>
	</div>

	<div class="footer">
		<div class="footer-text">
			<p1><p2>Lhuksub.com</p2> is a financial site providing trading information for educational purpose. You are not allowed to redistribute the information or make use of the information for business and pleasure.</p1><br>
			<p1>The site is developed as part of a senior project during academic year 2014/15. All copyrights are held to Department of Computer Engineering, Faculty of Engineering, Chulalongkorn University.</p1><br>
			<div class ="p3">Lhuksub.com - your professional trading buddy.</div>
		</div>
	</div>
</body>
</html>