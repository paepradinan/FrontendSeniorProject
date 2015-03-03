@extends('layouts.master')

@section('content')


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="css/examples.css" />
	<script type="text/javascript" src="js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="js/examples.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#market-body').fullpage({
				anchors: ['firstPage', 'secondPage', 'thirdPage'],
				sectionsColor: ['#2c2f34', '#2c2f34', '#2c2f34'],
				css3: true,
				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['First page', 'Second page', 'Third page']
			});
		});
	</script>

<div id="mainmenu-body">
	<div id="mainmenu-header">MARKET NEWS</div>
	<div class="triangle-down"></div>
	<div id="market-body">
		<div class="section" id="section0">
			<div class="intro">
				<div class="market-row">
					<div class="market-panel">
						<div class="market-panel-inside">
							<h1>SETTRADE</h1>
							<div class="mnews-channel">
								<div class="mnews-item">
									<div class="mnews-date">Mon, 02 Mar 2015 14:24:07</div>
									<div class="mnews-title">คาดสินเชื่อไตรมาส 1/2558 โตชะลอลง หลังตัวเลขเดือนมกราคมออกมาแย่กว่าคาด</div>
									<div class="mnews-desc"></div>
									<div class="mnews-author">K-Research</div>
								</div>
							</div>
						</div>
					</div>
					<div class="market-panel">
						<div class="market-panel-inside">
							<h1>PRACHACHAT</h1>
							<div class="mnews-channel">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section" id="section1">
			<div class="intro">
				<div class="market-row">
					<div class="market-panel">
						<div class="market-panel-inside">
							<h1>MAYBANK</h1>
							<div class="mnews-channel">
							</div>
						</div>
					</div>
					<div class="market-panel">
						<div class="market-panel-inside">
							<h1>MAYBANK</h1>
							<div class="mnews-channel">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section" id="section2">
			<div class="intro">
				<div class="market-row">
					<div class="market-panel">
						<div class="market-panel-inside">
							<h1>IAA</h1>
							<div class="mnews-channel">
							</div>
						</div>
					</div>
					<div class="market-panel">
						<div class="market-panel-inside">
							<h1>SET</h1>
							<div class="mnews-channel">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop