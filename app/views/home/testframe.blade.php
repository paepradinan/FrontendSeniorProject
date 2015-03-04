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
    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
    $('.tree li.parent_li > span').on('click', function (e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).attr('title', 'Expand this branch').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
        } else {
            children.show('fast');
            $(this).attr('title', 'Collapse this branch').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
        }
        e.stopPropagation();
    });
});
</script>




<body>
<div class="tree">
    <ul>
        <li>
            <span><i class="icon-folder-open"></i> Parent</span> <a href="">Goes somewhere</a>
            <ul>
                <li>
                  <span><i class="icon-minus-sign"></i> Child</span> <a href="">Goes somewhere</a>
                    <ul>
                        <li>
                          <span><i class="icon-leaf"></i> Grand Child</span> <a href="">Goes somewhere</a>
                        </li>
                    </ul>
                </li>
                <li>
                  <span><i class="icon-minus-sign"></i> Child</span> <a href="">Goes somewhere</a>
                </li>
            </ul>
        </li>
        <li>
            <span><i class="icon-folder-open"></i> Parent2</span> <a href="">Goes somewhere</a>
            <ul>
                <li>
                  <span><i class="icon-leaf"></i> Child</span> <a href="">Goes somewhere</a>
            </li>
        </ul>
        </li>
    </ul>
</div>


</body>
</html>