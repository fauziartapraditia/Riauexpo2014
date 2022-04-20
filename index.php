<?php
session_start();
error_reporting(0);
foreach (glob("application/*.php") as $filename){
    include $filename;
} 
if (empty($_SESSION['sess_login'])) {
  ?>  <script type="text/javascript">
        window.location='login.php'    
    </script> <?php
}else{ ?>
<body>
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

  <div class="leftpanel">

    <div class="logopanel">
        <h1 align="center"><span>[</span> Menu Pilihan <span>]</span></h1>
    </div><!-- logopanel -->

    <div class="leftpanelinner">

        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">
            <div class="media userlogged">
                <img alt="" src="images/photos/loggeduser.png" class="media-object">
                <div class="media-body">
                    <h4><?php if(!empty($_SESSION['sess_id'])){echo "$_SESSION[sess_id]";} ?></h4>
                    <span>Status : <?php if(!empty($_SESSION['sess_id'])){echo "$_SESSION[sess_level]";} ?></span>
                </div>
            </div>

        </div>

      <h5 class="sidebartitle">Navigasi</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
        <?php
            foreach (glob("template/menu/*.php") as $filename){
                include $filename;
            }
        ?>
      </ul>
    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->

  <div class="mainpanel">

    <div class="headerbar">
      <a class="menutoggle"><i class="fa fa-bars"></i></a>

      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="images/photos/loggeduser.png" alt="" />
                <?php if(!empty($_SESSION['sess_id'])){echo "$_SESSION[sess_id]";} ?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="index.php?m=logout"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div><!-- header-right -->

    </div><!-- headerbar -->

    <div class="pageheader">
      <h2><i class="glyphicon glyphicon-tags"></i> <?php if(!empty($_GET['m']) AND $_GET['m']!='home'){echo "DATA ";}elseif(empty($_GET['m'])){echo "HOME ";} echo strtoupper($_GET['m']);?>
    </div>

    <div class="contentpanel">
        <?php
            foreach (glob("template/*.php") as $filename){
                include $filename;
            }
        ?>
    </div>
  </div><!-- mainpanel -->
</section>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.cookies.js"></script>


<script src="js/jquery.datatables.min.js"></script>
<script src="js/select2.min.js"></script>

<script src="js/custom.js"></script>
<script>
  jQuery(document).ready(function() {
    
    "use strict";
    
    jQuery('#table1').dataTable();
    
    jQuery('#table2').dataTable({
      "sPaginationType": "full_numbers"
    });
    
    // Select2
    jQuery('select').select2({
        minimumResultsForSearch: -1
    });
    
    jQuery('select').removeClass('form-control');
    
    // Delete row in a table
    jQuery('.delete-row').click(function(){
      var c = confirm("Continue delete?");
      if(c)
        jQuery(this).closest('tr').fadeOut(function(){
          jQuery(this).remove();
        });
        
        return false;
    });
    
    // Show aciton upon row hover
    jQuery('.table-hidaction tbody tr').hover(function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 1});
    },function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 0});
    });
  
  
  });
</script>
</body>
</html>
<?php }