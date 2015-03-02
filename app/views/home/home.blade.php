<html>
<head>
	<title>Lhuksub</title>
	{{ HTML::style('css/bootstrap.css'); }}
	{{ HTML::style('css/bootstrap.min.css'); }}
	{{ HTML::style('css/bootstrap-theme.css'); }}
	{{ HTML::style('css/bootstrap-theme.min.css'); }}
	{{ HTML::style('css/mybootstrap.css');}}
</head>

<script src="js/jquery.min.js" type="text/javascript"></script>
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
<script src="js/bootstrap.js" type="text/bootstrapjs"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="css/animate.min.css"></script>
<link href='css/animate.min.css' rel='stylesheet' type='text/css'>


<body id="bd00">
	<div class="header">
		<navi>
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="col-md-2">
						<a href="#" class="nav-browse slideout-menu-toggle">BROWSE</a>
					</div>					
					<div class="col-md-3"></div>
					<div class="col-md-2">	
			        	<a href="/FrontEnd/public/"><img class="nav-logo" src='img/weblogo2.jpg' /></a>
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
					<li><a href='#'><object type="image/svg+xml" class="navicon" data="img/icon_signin.svg"></object>SIGN IN</a></li>
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
				<li role="presentation"><a href="#">MARKET OVERVIEW</a></li>
				<li role="presentation"><a href="#">BY SECTORS</a></li>
				<li role="presentation"><a href="#">WORLD MARKETS</a></li>
			</div>
		</ul>
	</div>

	<div class="body slideout-menu-off">

			<div class="stock-detail-lefter">
				<h1 id="s0-symbol">SIRI</h1>
				<hr>
				<div class="stock-detail">
					<p id="s1-company"><object type="image/svg+xml" class="sx-img" data="img/icon_office.svg"></object>SANSIRI PUBLIC COMPANY LIMITED</p>
					<p id="s2-industry"><object type="image/svg+xml" class="sx-img" data="img/icon_tag.svg"></object>Property & Construction</p>
					<p id="s3-sector"><object type="image/svg+xml" class="sx-img-sub" data="img/icon_subset.svg"></object>Property Development</p>				
					<p id="s4-market"><object type="image/svg+xml" class="sx-img" data="img/icon_market.svg"></object>SET</p>
					<p id="s5-time"><object type="image/svg+xml" class="sx-img" data="img/icon_clock.svg"></object>Since 19 JUL 1996</p>
				</div>	
				<hr>
				<div class="stock-trading-stat">
					<h1>Trading Statistics (17 FEB 2015)</h1>

					<div class="container-fluid">
						<div class="row-fluid">
							<div class="col-md-5">
								Last Price
							</div>
							<div class="col-md-7 value">
								345.00
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="col-md-5">
								Change
							</div>
							<div class="col-md-7 value">
								-11.00
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="col-md-5">
								%Change
							</div>
							<div class="col-md-7 value">
								0.00
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="col-md-5">
								Prior
							</div>
							<div class="col-md-7 value">
								354.00
							</div>
						</div>
					</div>
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
				<div class="max-min">
					<h1>Max-Min Price during the last year</h1>
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="col-md-4 mm-subject">Max Close</div>
							<div class="col-md-5 value2">25 SEP 2014</div>
							<div class="col-md-3 value2">397.00</div>
						</div>
						<div class="row-fluid">
							<div class="col-md-4 mm-subject">Min Close</div>
							<div class="col-md-5 value2">21 FEB 2014</div>
							<div class="col-md-3 value2">286.00</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="capital-share">
					<h1>Capital-Share Detail</h1>
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="col-md-5 cs-subject">Par Value</div>
							<div class="col-md-7 value">1.07 Baht</div>
						</div>
						<div class="row-fluid">
							<div class="col-md-5 cs-subject">Listed Share</div>
							<div class="col-md-7 value">14,267,389,012 Shares</div>
						</div>
					</div>
				</div>
			</div>

<!--  		<div class="stock-header">
			<ul class="stock-menu" id="myTab">
				<li role="presentation" class="active"><a href="#summary" data-toggle="tab">SUMMARY</a></li>
				<li role="presentation"><a href='#company' data-toggle="tab">COMPANY</a></li>
				<li role="presentation"><a href='#financial' data-toggle="tab">FINANCIAL</a></li>					
				<li role="presentation"><a href='#news' data-toggle="tab">NEWS</a></li>
			</ul>
		</div> -->

		<div class="stock-header">
			<ul class="stock-menu">
				<li>
			        <input type="radio" checked name="tabs" id="tab0">
			        <label for="tab0">NEWS</label>
			    </li>
			          <input type="radio" checked name="tabs" id="tab1">
			          <label for="tab1">FINANCIAL</label>
				</li>
				<li>
			          <input type="radio" name="tabs" id="tab2">
			          <label for="tab2">COMPANY</label>
			    </li>
			    <li>
			          <input type="radio" name="tabs" id="tab3">
			          <label for="tab3">OVERVIEW</label>
			          <div id="tab-content3" class="tab-content">
			            <div class="animated  fadeInRight ">
			              "But I must explain to you how all this m

							<img class="graph" src='img/graph1.png'/>
							<img class="graph" src='img/graph2.png'/>
			            </div>
			          </div>
			        </li>
			   	</li>
			</ul>
			
			          <div id="tab-content0" class="tab-content">
			            <div class="animated  fadeInRight">
			              "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
			            </div>
			          </div>
		</div>

		<div class="body-middle-from-top">
			<div class="main">
	        	<ul class="tabs">
			        <li>
			          <input type="radio" checked name="tabs" id="tab0">
			          <label for="tab0">NEWS</label>
			        </li>
			        <li>
			          <input type="radio" checked name="tabs" id="tab1">
			          <label for="tab1">FINANCIAL</label>
			          <div id="tab-content1" class="tab-content">
			            <div class="animated  fadeInRight">
			              "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
			            </div>
			          </div>
			        </li>
			        <li>
			          <input type="radio" name="tabs" id="tab2">
			          <label for="tab2">COMPANY</label>
			          <div id="tab-content2" class="tab-content">
			            <div class="animated  fadeInRight">
			              "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
			            </div>
			          </div>
			        </li>
			        <li>
			          <input type="radio" name="tabs" id="tab3">
			          <label for="tab3">OVERVIEW</label>
			          <div id="tab-content3" class="tab-content">
			            <div class="animated  fadeInRight ">
			              "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"

							<img class="graph" src='img/graph1.png'/>
							<img class="graph" src='img/graph2.png'/>
			            </div>
			          </div>
			        </li>
			    </ul>
			    </div>

		</div>
	</div>

<!-- 	<div class="footer">
		<div class="footer-text">
			<p1><p2>Lhuksub.com</p2> is a financial site providing trading information for educational purpose. You are not allowed to redistribute the information or make use of the information for business and pleasure.</p1><br>
			<p1>The site is developed as part of a senior project during academic year 2014/15. All copyrights are held to Department of Computer Engineering, Faculty of Engineering, Chulalongkorn University.</p1><br>
			<div class ="p3">Lhuksub.com - your professional trading buddy.</div>
		</div>
	</div>  -->
</body>
</html>