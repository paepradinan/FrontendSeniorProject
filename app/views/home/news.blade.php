@extends('layouts.master')

@section('content')
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
							<div class="">
								P/E
							</div>
							<div class=" value">
								8.67
							</div>
							<div class="">
								P/BV
							</div>
							<div class=" value">
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
							<div class=" value2">397.00</div>
						</div>
						<div class="row-fluid">
							<div class="col-md-4 mm-subject">Min Close</div>
							<div class="col-md-5 value2">21 FEB 2014</div>
							<div class=" value2">286.00</div>
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

		<div class="stock-header">
			<ul class="stock-menu">
				<li role="presentation"><a href="/FrontEnd/public/stock">SUMMARY</a></li>
				<li role="presentation"><a href='/FrontEnd/public/company'>COMPANY</a></li>
				<li role="presentation"><a href='/FrontEnd/public/financial'>FINANCIAL</a></li>					
				<li role="presentation" class="active"><a href='#'>NEWS</a></li>
			</ul>
		</div>


		<div class="body-middle-from-top">
			<div class="body-stock">
				<div id="newstable">
					<div class="newssubjectrow">
						<div class="news-subject news-date">Time</div>
						<div class="news-subject news-data">Topic</div>
					</div>
					<div class="newsrow">
						<div class="news-date">17 Feb 2015 08:48:00</div>
						<a href="#"><img class="readicon" src="img/icon_readmore.png" /></a>
						<div class="news-data">Report of changing of major shareholders</div>
					</div>
					<hr>
					<div class="newsrow">
						<div class="news-date">06 Feb 2015 12:51:00</div>
						<a href="#"><img class="readicon" src="img/icon_readmore.png" /></a>
						<div class="news-data">Financial Statement Yearly 2014 (Edit Type of F/S)</div>
					</div>
					<hr>
					<div class="newsrow">
						<div class="news-date">05 Feb 2015 19:16:00</div>
						<a href="#"><img class="readicon" src="img/icon_readmore.png" /></a>
						<div class="news-data">Management Discussion and Analysis Yearly Ending 31-Dec-2014</div>
					</div>
					<hr>
					<div class="newsrow">
						<div class="news-date">06 Nov 2014 18:58:00</div>
						<a href="#"><img class="readicon" src="img/icon_readmore.png" /></a>
						<div class="news-data">Financial Statement Quarter 3/2014</div>
					</div>
					<hr>
					<div class="newsrow">
						<div class="news-date">06 Nov 2014 18:57:00</div>
						<a href="#"><img class="readicon" src="img/icon_readmore.png" /></a>
						<div class="news-data">Management Discussion and Analysis Quarter 3 Ending 30-Sep-2014</div>
					</div>
				</div>
			</div>
		</div>
 </div>
@stop