@extends('layouts.master')

@section('content')

<script>
$(document).ready(function () {
    $('.mk-tree li:has(ul)').addClass('parent_li');
    $('.mk-tree li.parent_li > ul > li').hide();
    $('.mk-tree li.active > ul > li').show();
});
</script>

<div class="body slideout-menu-off">
	<div id="mainmenu-header">MARKET OVERVIEW</div>
	<div class="triangle-down"></div>
	<div id="mk-menu">
				<div class="mk-tree">
				    <ul>
				        <li id="mk-set" role="presentation" class="active">
				            <span>
								<div class="mk-row" >
									<div class="mk-name"><a href="#">SET</a></div>
								</div>
							</span>
				            <ul>
				                <li>								
				                	<div class="mk-detail"> 
				                		<table>
				                			<tr>
				                				<td class="mk-subject">Prior</td>
				                				<td class="mk-data">1,039.47</td>
				                			</tr>
				                			<tr>
				                				<td class="mk-subject">Price</td>
				                				<td class="mk-data">1,027.89</td>
				                			</tr>
				                			<tr>
				                				<td class="mk-subject">Change</td>
				                				<td class="mk-data">-11.58</td>
				                			</tr>
				                			<tr>
				                				<td class="mk-subject">%Change</td>
				                				<td class="mk-data">-1.11</td>
				                			</tr>
				                			<tr>
				                				<td class="mk-subject">Total Volume</td>
				                				<td class="mk-data">105.33 MB</td>
				                			</tr>
				                			<tr>
				                				<td class="mk-subject">Total Value</td>
				                				<td class="mk-data">23,561 MB</td>
				                			</tr>
				                		</table>
				  				    </div>
				                </li>
				            </ul>
				        </li>
				        <li id="mk-set50" role="presentation">
				            <span>
								<div class="mk-row">
									<div class="mk-name"><a href="#">SET50</a></div>
								</div>
							</span>
				            <ul>
				                <li>					
				                	<div class="mk-detail"> 
				                		<table>
				                			<tr>
				                				<td>Prior</td>
				                				<td>1,039.47</td>
				                			</tr>
				                			<tr>
				                				<td>Price</td>
				                				<td>1,027.89</td>
				                			</tr>
				                			<tr>
				                				<td>Change</td>
				                				<td>-11.58</td>
				                			</tr>
				                			<tr>
				                				<td>%Change</td>
				                				<td>-1.11</td>
				                			</tr>
				                			<tr>
				                				<td>Total Volume</td>
				                				<td>105.33 MB</td>
				                			</tr>
				                			<tr>
				                				<td>Total Value</td>
				                				<td>23,561 MB</td>
				                			</tr>
				                		</table>
				  				    </div>
				            	</li>
				        	</ul>
				        </li>
				        <li id="mk-set100" role="presentation">
				            <span>
								<div class="mk-row">
									<div class="mk-name"><a href="#">SET100</a></div>
								</div>
							</span>
				            <ul>
				                <li>					
				                	<div class="mk-detail"> 
				                		<table>
				                			<tr>
				                				<td>Prior</td>
				                				<td>1,039.47</td>
				                			</tr>
				                			<tr>
				                				<td>Price</td>
				                				<td>1,027.89</td>
				                			</tr>
				                			<tr>
				                				<td>Change</td>
				                				<td>-11.58</td>
				                			</tr>
				                			<tr>
				                				<td>%Change</td>
				                				<td>-1.11</td>
				                			</tr>
				                			<tr>
				                				<td>Total Volume</td>
				                				<td>105.33 MB</td>
				                			</tr>
				                			<tr>
				                				<td>Total Value</td>
				                				<td>23,561 MB</td>
				                			</tr>
				                		</table>
				  				    </div>
				            	</li>
				        	</ul>
				        </li>
				        <li id="mk-sethd" role="presentation">
				            <span>
								<div class="mk-row">
									<div class="mk-name"><a href="#">SETHD</a></div>
								</div>
							</span>
				            <ul>
				                <li>					
				                	<div class="mk-detail"> 
				                		<table>
				                			<tr>
				                				<td>Prior</td>
				                				<td>1,039.47</td>
				                			</tr>
				                			<tr>
				                				<td>Price</td>
				                				<td>1,027.89</td>
				                			</tr>
				                			<tr>
				                				<td>Change</td>
				                				<td>-11.58</td>
				                			</tr>
				                			<tr>
				                				<td>%Change</td>
				                				<td>-1.11</td>
				                			</tr>
				                			<tr>
				                				<td>Total Volume</td>
				                				<td>105.33 MB</td>
				                			</tr>
				                			<tr>
				                				<td>Total Value</td>
				                				<td>23,561 MB</td>
				                			</tr>
				                		</table>
				  				    </div>
				            	</li>
				        	</ul>
				        </li>
				        <li id="mk-mai" role="presentation">
				            <span>
								<div class="mk-row">
									<div class="mk-name"><a href="#">MAI</a></div>
								</div>
							</span>
				            <ul>
				                <li>					
				                	<div class="mk-detail"> 
				                		<table>
				                			<tr>
				                				<td>Prior</td>
				                				<td>1,039.47</td>
				                			</tr>
				                			<tr>
				                				<td>Price</td>
				                				<td>1,027.89</td>
				                			</tr>
				                			<tr>
				                				<td>Change</td>
				                				<td>-11.58</td>
				                			</tr>
				                			<tr>
				                				<td>%Change</td>
				                				<td>-1.11</td>
				                			</tr>
				                			<tr>
				                				<td>Total Volume</td>
				                				<td>105.33 MB</td>
				                			</tr>
				                			<tr>
				                				<td>Total Value</td>
				                				<td>23,561 MB</td>
				                			</tr>
				                		</table>
				  				    </div>
				            	</li>
				        	</ul>
				        </li>
				    </ul>
				</div>
	</div>


		<div class="body-middle-from-top">
			<div class="body-stock">
				<div class="indust-row indust-subject">
						<div class="mk-symbol">Symbol</div>
						<div class="mk-prior">Prior</div>
						<div class="mk-last">Last</div>
						<div class="mk-change">Change</div>
						<div class="mk-pchange">%Change</div>
						<div class="mk-volume">Volume (MB)</div>
						<div class="mk-value">Value (MB)</div>
						<div class="mk-pe">P/E</div>
						<div class="mk-pbv">P/BV</div>
						<div class="mk-dvdyield">Dvd. Yield</div>
						<div class="mk-sign">Sign</div>
				</div>
				<div class="indust-list">
					<div class="indust-table">
						<div class="indust-row indust-data">
							<div class="mk-symbol">CFRESH</div>
							<div class="mk-prior">36.50</div>
							<div class="mk-last">160.00</div>
							<div class="mk-change">-5.50</div>
							<div class="mk-pchange">-0.82</div>
							<div class="mk-volume">13.99</div>
							<div class="mk-value">127.56</div>
							<div class="mk-pe">27.85</div>
							<div class="mk-pbv">4.91</div>
							<div class="mk-dvdyield">4.96</div>
							<div class="mk-sign"></div>
						</div>
						<div class="indust-row indust-data">
							<div class="mk-symbol">CFRESH</div>
							<div class="mk-prior">36.50</div>
							<div class="mk-last">160.00</div>
							<div class="mk-change">-5.50</div>
							<div class="mk-pchange">-0.82</div>
							<div class="mk-volume">13.99</div>
							<div class="mk-value">127.56</div>
							<div class="mk-pe">27.85</div>
							<div class="mk-pbv">4.91</div>
							<div class="mk-dvdyield">4.96</div>
							<div class="mk-sign">XD</div>
						</div>
					@for ($i = 0; $i < 50; $i++)
						<div class="indust-row indust-data">
							<div class="mk-symbol">CFRESH</div>
							<div class="mk-prior">36.50</div>
							<div class="mk-last">160.00</div>
							<div class="mk-change">-5.50</div>
							<div class="mk-pchange">-0.82</div>
							<div class="mk-volume">13.99</div>
							<div class="mk-value">127.56</div>
							<div class="mk-pe">27.85</div>
							<div class="mk-pbv">4.91</div>
							<div class="mk-dvdyield">4.96</div>
							<div class="mk-sign"></div>
						</div>
					@endfor
					</div>
				</div>
				<table class="linear-table">
					<tr>
						<td><div class="graph-scorebox">EMA1<span class="score">15</span></div></td>
						<td><div class="graph-scorebox">EMA2<span class="score">45</span></div></td>
						<td><div class="graph-scorebox">EMA3<span class="score">100</span></div></td>
						<td><div class="graph-scorebox">MACD1<span class="score">12</span></div></td>
						<td><div class="graph-scorebox">MACD2<span class="score">26</span></div></td>
						<td><div class="graph-scorebox">SIGNAL<span class="score">9</span></div></td>
						<td><div class="graph-scorebox">STO<span class="score">140</span></div></td>
						<td><div class="graph-scorebox">%K<span class="score">3</span></div></td>
						<td><div class="graph-scorebox">%D<span class="score">3</span></div></td>
						<td><div class="graph-scorebox">RSI<span class="score">14</span></div></td>
						<td><div class="graph-scorebox">MAV<span class="score">9</span></div></td>
						<td><div class="styled-select">
							TIME FRAME
							<select name="mydropdown">
								<option value="day">Day</option>
								<option value="week">Week</option>
								<option value="month">Month</option>
								<option value="year">Year</option>
							</select>
						</div></td>
						<td><input type="submit" value="UPDATE" class="typicalbtn"></td>
					</tr>
				</table>
				<img class="graph" src='img/graph1.png'/>
				<img class="graph" src='img/graph2.png'/>
				<div id="newstable">
					<div class="newssubjectrow">
						<div class="news-subject news-date">Time</div>
						<div class="news-subject news-data">Topic</div>
					</div>
					<div class="newsrow">
						<div class="news-date">03 Mar 2015 17:25:00</div>
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