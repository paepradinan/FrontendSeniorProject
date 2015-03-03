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
				<hr>
				<div class="graphnav-panel">
					<div class="graphnav-menu">
						<input type="submit" value="RESET ZOOM" class="typicalbtn">
					</div>
				</div>
			</div>

		<div class="stock-header">
			<ul class="stock-menu">
				<li role="presentation" class="active"><a href="#">OVERVIEW</a></li>
				<li role="presentation"><a href='/FrontEnd/public/company'>COMPANY</a></li>
				<li role="presentation"><a href='/FrontEnd/public/financial'>FINANCIAL</a></li>					
				<li role="presentation"><a href='/FrontEnd/public/news'>NEWS</a></li>
			</ul>
		</div>
		<div class="body-middle-from-top">
			<div class="body-stock">	
	       		<ul class="tabs">
			        <li>
			          <input type="radio" checked name="tabs" id="tab1">
			          <label id="tab-graph" for="tab1">GRAPH</label>
			          <div id="tab-content1" class="tab-content">
					    <div class="animated  fadeInRight">
					    	<ul id="scorelist">
					    		<li><input type="submit" value="UPDATE" class="typicalbtn"></li>
						    	<li class="styled-select">
						    		TIME FRAME
									<select name="mydropdown">
										<option value="day">Day</option>
										<option value="week">Week</option>
										<option value="month">Month</option>
										<option value="year">Year</option>
									</select>
								</li>
					    		<li class="graph-scorebox">EMA1<span class="score">15</span></li>
					    		<li class="graph-scorebox">EMA2<span class="score">45</span></li>
					    		<li class="graph-scorebox">EMA3<span class="score">100</span></li>
					    		<li class="graph-scorebox">MACD1<span class="score">12</span></li>
					    		<li class="graph-scorebox">MACD2<span class="score">26</span></li>
					    		<li class="graph-scorebox">SIGNAL<span class="score">9</span></li>
					    		<li class="graph-scorebox">STO<span class="score">14</span></li>
					    		<li class="graph-scorebox">%K<span class="score">3</span></li>
					    		<li class="graph-scorebox">%D<span class="score">3</span></li>
					    		<li class="graph-scorebox">RSI<span class="score">14</span></li>
					    		<li class="graph-scorebox">MAV<span class="score">9</span></li>
							</ul>
							<img class="graph" src='img/graph1.png'/>
							<img class="graph" src='img/graph2.png'/>
							<img class="graph" src='img/graph1.png'/>
							<img class="graph" src='img/graph2.png'/>
			            </div>
			          </div>
			        </li>
			        <li>
			          <input type="radio" name="tabs" id="tab2">
			          <label id="tab-list" for="tab2">LIST</label>
			          <div id="tab-content2" class="tab-content">
			            <div class="animated  fadeInRight">
			              "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
			            </div>
			          </div>
			        </li>
			    </ul>
			</div>
		</div>
	</div>
@stop