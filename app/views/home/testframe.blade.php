<html>
<head>
  <title> {{ $title }} </title>
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
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.actual.js"></script>
<script src="js/bootstrap.js" type="text/bootstrapjs"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function () {
    $('.tabs #tab-graph').on('click', function(event){
      $('.body').height($('#tab-content1').actual('height'));
    });
});
</script>

<script>
$(document).ready(function () {
    $('.tabs #tab-list').on('click', function(event){
      $('.body').height($('#tab-content2').actual('height'));
    });
});
</script>



<body>
 
        <div class="market-row">
          <div class="market-panel">
            <div class="market-panel-inside">
              <h1>SETTRADE</h1>
              <div class="mnews-channel" id="settrade">
                <div class="mnews-item">
                  <div class="mnews-date">Mon, 02 Mar 2015 14:24:07</div>
                  <div class="mnews-title">คาดสินเชื่อไตรมาส 1/2558 โตชะลอลง หลังตัวเลขเดือนมกราคมออกมาแย่กว่าคาด</div>
                  <div class="mnews-desc"></div>
                  <div class="mnews-author">K-Research</div>
                </div>
                <div class="mnews-item">
                  <div class="mnews-date">Mon, 02 Mar 2015 14:24:07</div>
                  <div class="mnews-title">คาดสินเชื่อไตรมาส 1/2558 โตชะลอลง หลังตัวเลขเดือนมกราคมออกมาแย่กว่าคาด</div>
                  <div class="mnews-desc"></div>
                  <div class="mnews-author">K-Research</div>
                </div>
                <div class="mnews-item">
                  <div class="mnews-date">Mon, 02 Mar 2015 14:24:07</div>
                  <div class="mnews-title">คาดสินเชื่อไตรมาส 1/2558 โตชะลอลง หลังตัวเลขเดือนมกราคมออกมาแย่กว่าคาด</div>
                  <div class="mnews-desc"></div>
                  <div class="mnews-author">K-Research</div>
                </div>
                <div class="mnews-item">
                  <div class="mnews-date">Mon, 02 Mar 2015 14:24:07</div>
                  <div class="mnews-title">คาดสินเชื่อไตรมาส 1/2558 โตชะลอลง หลังตัวเลขเดือนมกราคมออกมาแย่กว่าคาด</div>
                  <div class="mnews-desc"></div>
                  <div class="mnews-author">K-Research</div>
                </div>
                <div class="mnews-item">
                  <div class="mnews-date">Mon, 02 Mar 2015 14:24:07</div>
                  <div class="mnews-title">คาดสินเชื่อไตรมาส 1/2558 โตชะลอลง หลังตัวเลขเดือนมกราคมออกมาแย่กว่าคาด</div>
                  <div class="mnews-desc"></div>
                  <div class="mnews-author">K-Research</div>
                </div>
              </div>
            </div>
          </div>
</body>
</html>