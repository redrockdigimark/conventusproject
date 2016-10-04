@extends('layout')
@section('header-links')
 <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="/conventus/public/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="/conventus/public/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN PAGE LEVEL STYLES -->
        <link href="/conventus/public/assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
<link id="wsite-base-style" rel="stylesheet" type="text/css" href="../cdn2.editmysite.com/css/sitesecc4.css?buildTime=1470330605" />
<link rel="stylesheet" type="text/css" href="../cdn1.editmysite.com/editor/libraries/fancybox/fancyboxbca5.css?1470330605" />
<link rel="stylesheet" type="text/css" href="../cdn2.editmysite.com/css/social-icons8b2b.css?buildtime=1470330605" media="screen,projection" />
<link rel="stylesheet" type="text/css" href="files/main_stylea2be.css?1470349246" title="wsite-theme-css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,400italic,700italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' />

<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,300,300italic,700,400italic,700italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Dosis:400,300,200,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<style type='text/css'>
body, h1, h2, h3, h4, h5, h6 {
    font-family: Quicksand;
}
.btn {
  background-color:rgb(174,8,40);
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
   font-family: Quicksand;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
}
body{ background: #333 url("http://marvellouswebsites.com/assets/pages/img/login/bg1.jpg") no-repeat scroll 0 center;}
</style>
@stop
@section('content')
<div class=" login">
        <!-- BEGIN : LOGIN PAGE 5-1 -->
        <div class="user-login-5">
            
    <div class="" style="position: absolute; z-index: 9999; width: 100%;"> 

	 <div class="pull-right text-align:center" style="color:#fff; padding:20px; font-size:25px; position:absolute; right:0px;"><span>Returning User ?</span>
    <br />
   <a style="-moz-outline-radius: 0px; padding: 6px 31px; border-radius: 5px ! important;" class="btn-default btn" href="/laravel/blog/public/login?p=returning-user">Click Here</a>
  </div>
	
        <div style=" color: #fff;
    margin: 0 auto;
    position: relative;
    text-align: center;
    top: 10em;">        
                <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="/index">
                <img src="images/conventuslogo2.png" width="200" height="40" alt="Welcome to Conventus" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="/index" method="post">
                <div class="form-title">
                    <h2 class="text-center"  style="font-size: 60px; line-height: 2em;" >Welcome To Conventus</h2>
                   
                </div>
               
                <div class="create-account">
                     <div class="form-title">
                    <span class="form-title" style="font-size: 24px;">Let's Start the Loan Application   <a href="sign-up.php" class="btn-default btn" style="-moz-outline-radius: 0px; padding: 6px 31px; border-radius: 5px ! important; ">Start 
</a></span>
                </div>
        <br /><br /><br />  
       
                </div>
            </form>
          
        </div>
        </div>      
    </div>          
                
                    <div class="login-bg"></div>
              
        </div>
        <!-- END : LOGIN PAGE 5-1 -->
</div>
@stop
@section('footer-script')
 <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="/conventus/public/assets/global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
        <script src="/conventus/public/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="/conventus/public/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="/conventus/public/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="/conventus/public/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
		
<!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="/conventus/public/assets/pages/scripts/login-5.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
@stop