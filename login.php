<?php
session_start();
error_reporting(0);
foreach (glob("application/*.php") as $filename){
    include $filename;
} ?>
<body class="signin">
<section>
    <div class="signinpanel">       
        <div class="row">  
            <div class="col-md-4"></div>
            <div class="col-md-5">
                <form method="post" action="index.php?m=login" id="l_form">
                    <h4 class="nomargin">Login</h4>
                    <p class="mt5 mb20">Silahkan Masukan Username dan Password anda.</p>
                
                    <input type="text" class="form-control uname" name="uname" placeholder="Username" required />
                    <input type="password" class="form-control pword" name="pwd" placeholder="Password" required />
                    <button class="btn btn-success btn-block" name="login">Masuk</button>
                </form>
            </div><!-- col-sm-5 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2014. All Rights Reserved.
            </div>
            <div class="pull-right">
                Created By: UIR Alumni Programer
            </div>
        </div>
    </div><!-- signin -->
</section>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/jquery.cookies.js"></script>

<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
