@extends('layouts.master')

<script>
$(document).ready(function () {
	<?php $symbol="SIQ"; ?>
});
</script>

<script>
$(document).ready(function () {
	$('tab-radio').on('click', function(event){
		if(document.getElementById("tab-1").checked){
			if(document.getElementById("tab-6").checked){
				if(document.getElementById("tab-3").checked){
					//STAND-ALONE + INCOME STATEMENT + QUARTERLY
					<?php $symbol="SIQ"; ?>
				}
				else if(document.getElementById("tab-4").checked){
					//STAND-ALONE + CASH FLOW + QUARTERLY
					<?php $symbol="SCQ"; ?>
				}
				else if(document.getElementById("tab-5").checked){
					//STAND-ALONE + FINANCIAL POSITION + QUARTERLY
					<?php $symbol="SFQ"; ?>
					<?php header('Location: http://localhost/lhuksub/public/quote/stock/TRUE/news.php'); ?>
				}
			}
			else if(document.getElementById("tab-7").checked){
				if(document.getElementById("tab-3").checked){
					//STAND-ALONE + INCOME STATEMENT + ANNUAL
					<?php $symbol="SIA"; ?>
				}
				else if(document.getElementById("tab-4").checked){
					//STAND-ALONE + CASH FLOW + ANNUAL
					<?php $symbol="SCA"; ?>
				}
				else if(document.getElementById("tab-5").checked){
					//STAND-ALONE + FINANCIAL POSITION + ANNUAL
					<?php $symbol="SFA"; ?>
				}
			}
		}
		else if(document.getElementById("tab-2").checked){
			if(document.getElementById("tab-6").checked){
				if(document.getElementById("tab-3").checked){
					//CONSOLIDATED + INCOME STATEMENT + QUARTERLY
					<?php $symbol="CIQ"; ?>
				}
				else if(document.getElementById("tab-4").checked){
					//CONSOLIDATED + CASH FLOW + QUARTERLY
					<?php $symbol="CCQ"; ?>
				}
				else if(document.getElementById("tab-5").checked){
					//CONSOLIDATED + FINANCIAL POSITION + QUARTERLY
					<?php $symbol="CFQ"; ?>
				}
			}
			else if(document.getElementById("tab-7").checked){
				if(document.getElementById("tab-3").checked){
					//CONSOLIDATED + INCOME STATEMENT + ANNUAL
					<?php $symbol="CIA"; ?>
				}
				else if(document.getElementById("tab-4").checked){
					//CONSOLIDATED + CASH FLOW + ANNUAL
					<?php $symbol="CCA"; ?>
				}
				else if(document.getElementById("tab-5").checked){
					//CONSOLIDATED + FINANCIAL POSITION + ANNUAL
					<?php $symbol="CFA"; ?>
				}
			}
	}
});
</script>

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
				<li role="presentation"><a href='/FrontEnd/public/company'>COMPANY</a></li>
				<li role="presentation" class="active"><a href='#'>FINANCIAL</a></li>					
				<li role="presentation"><a href='/FrontEnd/public/news'>NEWS</a></li>
			</ul>
		</div>


		<div class="body-middle-from-top">
			<div class="body-stock">
				<div class="body-tabs">
					<ul id="type-tab" class="tab-list">
						<li>
							<input class="tab-radio" type="radio" id="tab-1" name="tab-group-1" checked>
							<label class="tab-label" for="tab-1">STAND ALONE</label>
						</li>
						<li>
							<input class="tab-radio" type="radio" id="tab-2" name="tab-group-1">
							<label class="tab-label" for="tab-2">CONSOLIDATED</label>
						</li>
					</ul>
					<ul id="sheet-tab" class="tab-list">
						<li>
							<input class="tab-radio" type="radio" id="tab-3" name="tab-group-2" checked>
							<label class="tab-label" for="tab-3">INCOME STATEMENT</label>
						</li>
						<li>
							<input class="tab-radio" type="radio" id="tab-4" name="tab-group-2">
							<label class="tab-label" for="tab-4">CASH FLOW</label>
						</li>
						<li>
							<input class="tab-radio" type="radio" id="tab-5" name="tab-group-2">
							<label class="tab-label" for="tab-5">FINANCIAL POSITION</label>
						</li>
					</ul>
					<ul id="duration-tab" class="tab-list">
						<li>
							<input class="tab-radio" type="radio" id="tab-6" name="tab-group-3" checked>
							<label class="tab-label" for="tab-6">QUARTERLY</label>
						</li>
						<li>
							<input class="tab-radio" type="radio" id="tab-7" name="tab-group-3">
							<label class="tab-label" for="tab-7">ANNUAL</label>
						</li>
					</ul>
				</div>
				<div class="tab-pane">
					<div id="colorbar"></div>
					<div class="tabpane-row">
						<div class="tp-header tp-field">Field</div>
						<div class="tp-header tp-value">31 DEC 2013</div>
						<div class="tp-header tp-change">%change</div>
						<div class="tp-header tp-value">31 DEC 2012</div>
						<div class="tp-header tp-change">%change</div>
						<div class="tp-header tp-value">31 DEC 2011</div>
						<div class="tp-header tp-change">%change</div>
						<div class="tp-header tp-value">31 Dec 2010</div>
					</div>
					<div class="tabpane-row">
						<div class="tp-data tp-field">PERIOD NET PROFIT (LOSS)/ATTRIBUTABLE TO EQUITY HOLDERS OF PARENT</div>
						<div class="tp-data tp-value">63,988,240.61</div>
						<div class="tp-data tp-change">-14.34</div>
						<div class="tp-data tp-value">74,697,027.18</div>
						<div class="tp-data tp-change">1.72</div>
						<div class="tp-data tp-value">73,434,002.90</div>
						<div class="tp-data tp-change">34.55</div>
						<div class="tp-data tp-value">54,576,942.00</div>
					</div>
					<div class="tabpane-row">
						<div class="tp-data tp-field">DEPRECIATION AND AMORTISATION</div>
						<div class="tp-data tp-value">63,988,240.61</div>
						<div class="tp-data tp-change">-14.34</div>
						<div class="tp-data tp-value">74,697,027.18</div>
						<div class="tp-data tp-change">1.72</div>
						<div class="tp-data tp-value">73,434,002.90</div>
						<div class="tp-data tp-change">-1,908.05</div>
						<div class="tp-data tp-value">54,576,942.00</div>
					</div>
					<div class="tabpane-row">
						<div class="tp-data tp-field">DEPRECIATION AND AMORTISATION</div>
						<div class="tp-data tp-value">63,988,240.61</div>
						<div class="tp-data tp-change">-14.34</div>
						<div class="tp-data tp-value">74,697,027.18</div>
						<div class="tp-data tp-change">1.72</div>
						<div class="tp-data tp-value">73,434,002.90</div>
						<div class="tp-data tp-change">-1,908.05</div>
						<div class="tp-data tp-value">54,576,942.00</div>
					</div>
				</div>
			</div>
		</div>

	</div>

@stop