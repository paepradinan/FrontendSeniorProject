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
					<div class="col-md-2"></div>
					<div class="col-md-3">
						<ul class="nav-signin">
							<li><a href="#"><img class="nav-noti" src='img/notification.png'/></a></li>
							<li><a href="#"><img class='nav-userimg' src='img/b.tantikarun.jpg'/></a></li>
						</ul>
					</div>
				</div>
			</div>
		</navi>
	</div>

	<div class="slideout-menu">
		<ul class="nav">	
			<span class="navheaderpanel">MEMBER</span>		
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
					<li><a href='#'><object type="image/svg+xml" class="navicon" data="img/icon_list.svg"></object>WATCHLIST</a></li>
					<li><a href='#'><object type="image/svg+xml" class="navicon" data="img/icon_power.svg"></object>SIGN OUT</a></li>
				</ul>
			</div>
			<span class="navheaderpanel">SEARCH</span>	
			<div class="input-group">
				<form method="get" action="/search" id="search">
					<input name="q" type="text" placeholder="Search Symbol" />
    		</div> 
			<span class="navheaderpanel">MENU</span>	
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
		</div>
	</div>

	<div class="footer">
		<div class="footer-text">
			<p1><p2>Lhuksub.com</p2> is financial website providing trading information for educational purpose. You are not allowed to redistribute the information or make use of the information for business and pleasure.</p1><br>
			<p1>The site is developed as part of a senior project during academic year 2014/15. All copyrights are held to Department of Computer Engineering, Faculty of Engineering, Chulalongkorn University.</p1><br>
			<div class ="p3">Lhuksub.com - your professional trading buddy.</div>
		</div>
	</div>
</body>
</html>