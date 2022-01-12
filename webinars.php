<?php
    session_start();
        // tracks user session
    include 'includes/header.php';
        // extends header file
?>
	<header>
		<link rel="stylesheet" type="text/css" href="includes/style.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<style type="text/css">
      li a.webinar-active{
          color: red !important;
          background-color: #064c67;
      }
	a.side-bar-item11{
		background-color: #ddd !important;
		text-decoration: underline 1px solid #222;
		color: #405580;
	}
     .left_sctn{
            width: 78%;
            float: left;
            padding: 2% 1%;
            height: auto;
            border-left: 1px solid #ccc;
          }
      .right_sctn{
            width: 20%;
            min-height: 120px;
            float: left;
            margin: 1% .5%;
            padding: .2% 1% 1%;
            /* border-left: 1px solid #444; */
            overflow-y: scroll;
          }
      .left_sctn h1{
            color: maroon;
          }
        .info_sctn{
            width: 100%;
            height: auto;
            margin: 1% 2% 1% 0%;
            padding: 2% 1%;
            overflow: hidden;
          }
        .slide_sctn{
                width: 100%;
                height: auto;
                /* background: #4e7390; */
                overflow: hidden;
                color: darkred;
          }
        label.list-group-item:hover{
          cursor: pointer;
          background-color: #ddd !important;
        }
        h3.admin_notice_info_ttl{
            font-family: Helvetica, Tahoma;
            font-size: 124.5%;
            margin: 2% 1%;
            padding: 4% 4%;
            color: #fff;
            background-color: #4e7390;
            border-left: 5px solid #222;
            font-weight: bold;
          }
          h3#left-section-ttl{
            font-size: 124.5% !important;
          }
        .admin_notice_info{
            width: 100%;
            height: auto;
            background-color: #f8f9fa;
            border: 1px solid #777;
            padding: 2% 3%;
            border: 5px;
          }
        .admin_msg_sctn{
            width: 100%;
            height: auto;
            margin: 1% 2%;
            padding: 1% 2%;
            background-color: #fff;
            border-bottom: 2px solid #555;
            border-radius: 8px 8px 8px 8px;
          }
      section.intro_info{
         color: #444;
         font-size: 116.4%;
         padding: 1% .5%;
      }
      #webinar1_sctn,
      #webinar_item1_hide{
        display: none;
      }
       @media (max-width: 576px) {
           .right_sctn,
           .left_sctn{
             width: 100%;
           }
           .right_sctn{
             max-height: 80px !important;
           }
         }
         @media (max-width: 769px) {
             .right_sctn,
             .left_sctn{
               width: 100%;
             }
             .right_sctn{
               max-height: 80px !important;
             }
           }
		</style>
	</header>
		<div class="section-ttl">
				<h2 class="h-title">Project Development Webinars</h2>
		</div>
		<!-- <div class="container intro-section"> -->

          <div class="right_sctn">
            <h3 class="admin_notice_info_ttl">Webinars</h3>
            <div class="list-group list-group-flush">
              <label type="button" class="list-group-item list-group-item-action bg-light" id="webinar_item1_display" onclick="webinar1_sctn_display();" style="border-bottom: 1px solid #ccc;" title="June 11th 2021">Webinar 1</label>
              <label type="button" class="list-group-item list-group-item-action bg-light" id="webinar_item1_hide" onclick="webinar1_sctn_hide();" style="border-bottom: 1px solid #ccc;" title="Hide document">Webinar 1</label>
            </div>
          </div>
          <div class="left_sctn">
          <div class="info_sctn">
              <section class="intro_info">
                Project development webinar presentation series' <br>
                <small><i>(Use the <b>Webinars</b> menu to view the documents)</i></small>
              </section>
          </div>
          <div class="webinar1_sctn" id="webinar1_sctn">
            <div class="slide_sctn">
                <h3 id="left-section-ttl"> <b>Date</b> <span class="special_seperator">|</span><span class="active_link"> June 11<sup>th</sup> 2021 </span></h3>
            </div><br>
              <object type="application/pdf" data="static/Webinars/Webinar_RF_SAR_PPT_June11_2021.pdf" width="100%" height="600px">
              </object>
              <br>
          </div>
          </div>
			<div class="container">
			</div>
		<!-- </div> -->
        </div>
      </div>
    <!-- /#page-content-wrapper -->
  </div>
        <script>

            function webinar1_sctn_display(){
              document.getElementById("webinar1_sctn").style.display = "block";
              document.getElementById("webinar_item1_hide").style.display = "block";
              document.getElementById("webinar_item1_display").style.display = "none";
            } //displays document section
            function webinar1_sctn_hide(){
              document.getElementById("webinar1_sctn").style.display = "none";
              document.getElementById("webinar_item1_hide").style.display = "none";
              document.getElementById("webinar_item1_display").style.display = "block";
            } //hides document section

      					//navbar script handler
      			$("#menu-toggle").click(function(e) {
      			e.preventDefault();
      			$("#wrapper").toggleClass("toggled");
      			});
        </script>
    <!-- /#wrapper -->
  <!-- footer -->
  <?php
    include 'includes/footer.php'
  ?>
</body>

</html>
