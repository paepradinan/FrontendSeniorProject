@extends('layouts.master')

@section('content')

<script>
$(document).ready(function () {
    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
    $('.tree li.parent_li > ul > li').hide();
    $('.tree li.parent_li > span > div > i').on('click', function (e) {
        var children = $(this).parent('div').parent('span').parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).attr('title', 'Expand this branch').removeClass('glyphicon glyphicon-chevron-right').addClass('glyphicon glyphicon-chevron-left');
        } else {
            children.show('fast');
            $(this).attr('title', 'Collapse this branch').removeClass('glyphicon glyphicon-chevron-left').addClass('glyphicon glyphicon-chevron-right');
        }
        e.stopPropagation();
    });
});
</script>


<div id="mainmenu-body">
	<div id="mainmenu-header">INDUSTRIES</div>
	<div class="triangle-down"></div>

	<div id="indusbody">
		<div id="induspanel">
			<div id="industable">
				<div class="indus-row indus-subject">
					<div class="indus-name"> Industry</div>
					<div class="indus-prior">Prior</div>
					<div class="indus-last">Last</div>
					<div class="indus-change">Change</div>
					<div class="indus-pchange">%Change</div>
					<div class="indus-volume">Volume M. Baht</div>
					<div class="indus-value">Value M. Baht</div>
				</div>
				<div class="tree">
				    <ul>
				        <li>
				            <span>
								<div class="indus-row indus-data">
									<i class="glyphicon glyphicon-chevron-left"></i>
									<div class="indus-name"><a href="#">Agro & Food Industry</a></div>
									<div class="indus-prior">419.86</div>
									<div class="indus-last">418.78</div>
									<div class="indus-change">-1.08</div>
									<div class="indus-pchange">-0.26</div>
									<div class="indus-volume"></div>
									<div class="indus-value"></div>
								</div>
							</span>
				            <ul>
				                <li>								
				                	<div class="indus-row indus-data">
										<div class="indus-name">Agro & Food Industry</div>
										<div class="indus-prior">419.86</div>
										<div class="indus-last">418.78</div>
										<div class="indus-change">-1.08</div>
										<div class="indus-pchange">-0.26</div>
										<div class="indus-volume"></div>
										<div class="indus-value"></div>
									</div>
				                </li>
				                <li>
				                  <span>Child</span> 
				                </li>
				                <li>
				                  <span>Child</span> 
				                </li>
				                <li>
				                  <span>Child</span> 
				                </li>
				            </ul>
				        </li>
				        <li>
				            <span>
								<div class="indus-row indus-data">
									<i class="glyphicon glyphicon-chevron-left"></i>
									<div class="indus-name"><a href="#">Agro & Food Industry</a></div>
									<div class="indus-prior">419.86</div>
									<div class="indus-last">418.78</div>
									<div class="indus-change">-1.08</div>
									<div class="indus-pchange">-0.26</div>
									<div class="indus-volume"></div>
									<div class="indus-value"></div>
								</div>
							</span>
				            <ul>
				                <li>
				                  <span>Child</span> 
				            </li>
				        </ul>
				        </li>
				    </ul>
				</div>

			</div> 
		</div>
	</div>
</div>


@stop