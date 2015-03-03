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
			</div>

		<div class="stock-header">
			<ul class="stock-menu">
				<li role="presentation"><a href="/FrontEnd/public/stock">SUMMARY</a></li>
				<li role="presentation" class="active"><a href='#'>COMPANY</a></li>
				<li role="presentation"><a href='/FrontEnd/public/financial'>FINANCIAL</a></li>					
				<li role="presentation"><a href='/FrontEnd/public/news'>NEWS</a></li>
			</ul>
		</div>

		<div class="body-middle-from-top">
			<div class="body-stock">			      	
					<div id="company-detail">
			      		<div class="headerlabel">COMPANY INFORMATION<p>( as of 19 Feb 2015 )</p></div>
			      		<div class="comp-detail-container">
			      			<div class="comp-detail-row">
						      	<div class="comp-subject">Company Name</div>
						      	<div class="comp-value highlighted">SANSIRI PUBLIC COMPANY LIMITED</div><br>
			      			</div>
			      			<div class="comp-detail-row">
						      	<div class="comp-subject">Address</div>
						      	<div class="comp-value">SIRIPINYO BLDG,FLOOR 16, 475 SI AYUTTHAYA ROAD, RATCHATHEWI Bangkok</div><br>
			      			</div>
			      			<div class="comp-detail-row">
						      	<div class="comp-subject">Telephone</div>
						      	<div class="comp-value">0-2201-3905, 0-2201-3906</div><br>
			      			</div>
			      			<div class="comp-detail-row">
						      	<div class="comp-subject">Fax</div>
						      	<div class="comp-value">0-2201-3904</div><br>
			      			</div>
			      			<div class="comp-detail-row">
						      	<div class="comp-subject">Website</div>
						      	<div class="comp-value">www.sansiri.com</div>
			      			</div>
			      			<div class="comp-detail-row">
						      	<div class="comp-subject">Detail</div>
						      	<div class="comp-value">The Company is principally engaged in the real estate development business focusing on developing residential projects in housing as well as after-sale maintenance services.</div>
			      			</div>
			      		</div>
			      	</div>
				    <div id="secondrow">
				      	<div id="latest-board">
				      		<div class="headerlabel">MANAGEMENT<p>( as of 19 Feb 2015 )</p></div>
				      		<div id="latest-board-container">
				      			<div id="latest-board-row" class="lb-header">
				      				<div class="latest-board-name lb-subject">Board of Directors</div>
				      				<div class="latest-board-position lb-subject">Position</div>
				      			</div>
				      			<div id="latest-board-row">
				      				<div class="latest-board-name lb-value">Mr. KOVIT POSHYANANDA</div>
				      				<div class="latest-board-position lb-value">CHAIRMAN OF THE BOARD</div>
				      			</div>
				      			<div id="latest-board-row">
				      				<div class="latest-board-name lb-value">Mr. APICHART CHUTRAKUL</div>
				      				<div class="latest-board-position lb-value">CHIEF EXECUTIVE OFFICER</div>
				      			</div>
				      			<div id="latest-board-row">
				      				<div class="latest-board-name lb-value">Mr. APICHART CHUTRAKUL</div>
				      				<div class="latest-board-position lb-value">VICE CHAIRMAN</div>
				      			</div>
				      			<div id="latest-board-row">
				      				<div class="latest-board-name lb-value">SRETTHA THAVISIN</div>
				      				<div class="latest-board-position lb-value">PRESIDENT</div>
				      			</div>
				      			<div id="latest-board-row">
				      				<div class="latest-board-name lb-value">Mr. WANCHAK BURANASIRI</div>
				      				<div class="latest-board-position lb-value">DIRECTOR</div>
				      			</div>
				      			<div id="latest-board-row">
				      				<div class="latest-board-name lb-value">Mr. KRIENGKRAI THIENNUKUL</div>
				      				<div class="latest-board-position lb-value">DIRECTOR</div>
				      			</div>
				      			<div id="latest-board-row">
				      				<div class="latest-board-name lb-value">Mr. THONGCHAI JIRA-ALONGKORN</div>
				      				<div class="latest-board-position lb-value">DIRECTOR</div>
				      			</div>
				      			<div id="latest-board-row">
				      				<div class="latest-board-name lb-value">Mr. KOVIT POSHYANANDA</div>
				      				<div class="latest-board-position lb-value">CHAIRMAN OF THE AUDIT COMMITTEE</div>
				      			</div>
				      		</div>
				      	</div>
				      	<div id="spacediv"></div>
				      	<div id="dividend-policy">
				      		<div class="headerlabel">DIVIDEND POLICY</div>
				      		<div id="div-policy-container">Approximately 50% of its consolidated net income after deduction of all reserves as required by laws and the Company (with additional conditions)
				      		</div>
				      	</div>
				    </div>
			      	<div id="major-shareholders">
			      		<div class="headerlabel">TOP TEN MAJOR SHAREHOLDERS<p>( as of 19 Feb 2015 )</p></div>
		     			<div id="major-shdrs-container">
		 					<div id="major-shdrs-row" class="ms-header">
		   						<div class="major-shdrs-rank ms-subject">Rank</div>
			   					<div class="major-shdrs-name ms-subject">Major Shareholders</div>
		      					<div class="major-shdrs-sshare ms-subject"># Shares</div>
		      					<div class="major-shdrs-pshare ms-subject">% Shares</div>
		      				</div>
		      	 				<div id="major-shdrs-row">
			      				<div class="major-shdrs-rank ms-value">1</div>
			      				<div class="major-shdrs-name ms-value">บริษัท วิริยะประกันภัย จำกัด (มหาชน)</div>
			      				<div class="major-shdrs-sshare ms-value">649,061,530	</div>
			   					<div class="major-shdrs-pshare ms-value">6.35</div>
			   				</div>
		       				<div id="major-shdrs-row">
			      					<div class="major-shdrs-rank ms-value">2</div>
			      					<div class="major-shdrs-name ms-value">บริษัท ไทยเอ็นวีดีอาร์ จำกัด</div>
			      					<div class="major-shdrs-sshare ms-value ms-value">640,613,896</div>
			   						<div class="major-shdrs-pshare ms-value">6.27</div>
		  					</div>
	     	 				<div id="major-shdrs-row">
			      					<div class="major-shdrs-rank ms-value">3</div>
			      					<div class="major-shdrs-name ms-value">UBS AG SINGAPORE BRANCH</div>
			      					<div class="major-shdrs-sshare ms-value">393,167,562	</div>
			   						<div class="major-shdrs-pshare ms-value">3.85</div>
			   				</div>
		      	 			<div id="major-shdrs-row">
			      					<div class="major-shdrs-rank ms-value">4</div>
			      					<div class="major-shdrs-name ms-value">CHASE NOMINEES LIMITED 47</div>
			      					<div class="major-shdrs-sshare ms-value">265,272,000	</div>
			   						<div class="major-shdrs-pshare ms-value">2.60</div>
			   				</div>
		   	 				<div id="major-shdrs-row">
			      					<div class="major-shdrs-rank ms-value">5</div>
			      					<div class="major-shdrs-name ms-value">นายวันจักร์ บุรณศิริ</div>
			      					<div class="major-shdrs-sshare ms-value">252,756,868	</div>
			   						<div class="major-shdrs-pshare ms-value">2.47</div>
			   				</div>
		      	 			<div id="major-shdrs-row">
			      					<div class="major-shdrs-rank ms-value">6</div>
			      					<div class="major-shdrs-name ms-value">นายวันชัย พันธุ์วิเชียร</div>
			      					<div class="major-shdrs-sshare ms-value">225,000,000	</div>
			   						<div class="major-shdrs-pshare ms-value">2.20</div>
			   				</div>
		       				<div id="major-shdrs-row">
			      				<div class="major-shdrs-rank ms-value">7</div>
			      				<div class="major-shdrs-name ms-value">น.ส.ชญาภา จูตระกูล</div>
			      				<div class="major-shdrs-sshare ms-value">205,837,140	</div>
			   					<div class="major-shdrs-pshare ms-value">2.01</div>
			   				</div>
		       				<div id="major-shdrs-row">
			      					<div class="major-shdrs-rank ms-value">8</div>
			      					<div class="major-shdrs-name ms-value">CHASE NOMINEES LIMITED 50</div>
			      					<div class="major-shdrs-sshare ms-value">202,959,300	</div>
			   						<div class="major-shdrs-pshare ms-value">1.99</div>
		 					</div>
		      				<div id="major-shdrs-row">
			      				<div class="major-shdrs-rank ms-value">9</div>
			      				<div class="major-shdrs-name ms-value">N.C.B.TRUST LIMITED-POHJOLA BANK PLC CLIENT A/C EUR</div>
			      				<div class="major-shdrs-sshare ms-value">190,000,000</div>
			   					<div class="major-shdrs-pshare ms-value">1.86</div>
			   				</div>
		   	 				<div id="major-shdrs-row">
			      				<div class="major-shdrs-rank ms-value">10</div>
			      				<div class="major-shdrs-name ms-value">บริษัท ฟิลลิปประกันชีวิต จำกัด(มหาชน)</div>
			      				<div class="major-shdrs-sshare ms-value">189,859,200</div>
			   					<div class="major-shdrs-pshare ms-value">1.86</div>
							</div>
	      				</div>
			      	</div>
			</div>
		</div>
	</div>
@stop