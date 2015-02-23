<!DOCTYPE html>
<html>
<head>
   <title>Try v1.2 Bootstrap Online</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   {{ HTML::style('css/mybootstrap.css');}}
</head>
<body>

   <div class="body slideout-menu-off">
      <div class="body-middle-from-top">
         <div class="stock-header">
            <ul class="stock-menu" id="myTab">
               <li role="presentation"><a href="#summary" data-toggle="tab">SUMMARY</a></li>
               <li role="presentation" class="active"><a href='#company' data-toggle="tab">COMPANY</a></li>
               <li role="presentation"><a href='#financial' data-toggle="tab">FINANCIAL</a></li>
               <li role="presentation"><a href='#news' data-toggle="tab">NEWS</a></li>

            </ul>
         </div>
         <div class="stock-detail-lefter">
         </div>

         <div class="body-stock">           
            <hr> 
            <div role="tabpanel" class="tab-pane fade in active" id="company">
               
                  <div id="company-detail">
                     <div class="comp-detail-container">
                        <div class="comp-detail-row">
                           <div class="comp-subject">Company Name</div>
                           <div class="comp-value">SANSIRI PUBLIC COMPANY LIMITED</div><br>
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
                     </div>
                  </div>
                  <div id="latest-board">
                  </div>
            </div>
         </div>
      </div>
   </div>

</body>
</html>

