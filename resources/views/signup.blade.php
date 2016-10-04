@extends('layouts.layout')
@section('header-links')
<link href="/assets/pages/css/login.min.css" media="screen" rel="stylesheet" type="text/css">
<style type="text/css">
.login .content .hint {
    color: #999;
    margin: 7px 0;
    padding: 0;
}
padding-left-0{ padding-left:0 !important;}
padding-0{ padding:0 !important;}
.md-radio-inline .md-radio {
    display: inline-block;
    margin-right: 4px !important;
}
.md-radio label {
    cursor: pointer;
    padding-left: 30px !important;
}
</style>                   
@stop
@section('content')

<div class=" login">
        <!-- BEGIN LOGO -->
            <div class="logo">
                <a href="index.html" style="color:#fff;">
                  <img src="images/conventuslogo2.png" width="200" height="40" alt="Conventus logo" class="logo-default" style="margin-top:7px;"></a>
            </div>
            <!-- END LOGO -->
            
            <div class="content" style="width: 40%;">
          `   <!-- BEGIN LOGIN FORM -->
<div class="row" id="yyy" >
<form method="POST" class="login-form" enctype="multipart&#x2F;form-data" action="{{(!empty($_REQUEST['p'])) ? '/'.$_REQUEST['p'] : '/purchase'}}">
    <h3 class="form-title font-green">Sign In</h3>
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        <span>  </span>
    </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <input type="text" name="username" class="form-control&#x20;form-control-solid&#x20;placeholder-no-fix" autocomplete="off" placeholder="Username" value="">    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <input type="password" name="password" class="form-control&#x20;form-control-solid&#x20;placeholder-no-fix" autocomplete="off" placeholder="Password" value="">    </div>
    <div class="form-actions">
      <button type="submit" name="loginSubmit" class="btn&#x20;green&#x20;uppercase" value="">Login</button>        <a href="javascript:;" id="forget-password" class="forget-password1">Forgot Password?</a>
    </div>
</form> 





<div class="create-account" >
                    <p>
                        <a href="sign-up" id="register-btn" class="uppercase">Create an account</a>
                    </p>
                </div>


</div>
<form style="display: none;" novalidate="novalidate" class="forget-form" id="xxx" sction="login-html" method="post">
                <h3 class="font-green">Forgot Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" autocomplete="off" placeholder="Email" name="email" type="text"> </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                    <button type="submit" id="success-btn" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </form>
</div>
            
			
			<div class="copyright"> 2016 &copy; Conventus. </div>
</div>                   
@stop

@extends('layouts.footer')
@section('footer-script')
<script>
$("#forget-password").click(function(){
$("#xxx").css("display","block");
$("#yyy").css("display","none");
$(".create-account").css("display","none");

});
$("#back-btn").click(function(){
$("#xxx").css("display","none");
$(".create-account").css("display","block");
$("#yyy").css("display","block");
});

$("#success-btn").click(function(){
$("#xxx").css("display","none");
$(".create-account").css("display","block");
$("#yyy").css("display","block");
});
$(".userType").click(function(){
var userval=$(this).val();
if(userval=="representingborrower")
{
$(".div-userType").css("display","block");
}
else
{
$(".div-userType").css("display","none");    
}
});

$(".loanapproval").click(function(){
  var lp=$(this).val();
  if(lp=="yes")
$("#div-loanapproval").css("display","block");
else
$("#div-loanapproval").css("display","none");

});
</script>
@stop