@extends('layouts.layout')
@section('header-links')

<style>
span .number{
display: none;
}
label{
text-align:left!important;
padding-left: 0px;
}
.padding-left-0{ padding-left:0;}
.padding-0{ padding:0;}
</style>
@stop

@extends('layouts.header-fixed')
@extends('layouts.sidebar')
@section('content')

<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
      <!-- BEGIN PAGE HEADER-->
      <div class="row">
        <div class="col-md-12"> <br>
          <div class="portlet light bordered" id="form_wizard_1">
            <div class="portlet-title">
              <div class="actions"> 
     		   <a class="btn btn-sm btn-success" href="info-submitted.php">Save & Continue <i class="fa fa-arrow-right"></i></a>  </div>
            </div>
             <div class="portlet-body form">
           
                <div class="form-wizard">
                  <div class="form-body">
                 
                    <div class="tab-content">
                      <div class="alert alert-danger display-none">
                        <button class="close" data-dismiss="alert"></button>
                        You have some form errors. Please check below. </div>
                      <div class="alert alert-success display-none">
                        <button class="close" data-dismiss="alert"></button>
                        Your form validation is successful! </div>
                        <div class="progress" style="padding: 0px;
  margin-bottom: 18px;">
<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
aria-valuenow="10" aria-valuemin="10" aria-valuemax="100" style="width:10% !important; min-width:10% !important" 
id="progress-1">10%</div>
</div>
                       <div>
<div class="col-md-12 div-totalproperties form-group">  
<div class="col-md-3">                                                              
<label class="control-label">How many properties are you purchasing?</label>
</div> 
 <div class="col-md-3">
     <input class="form-control" type="text" name="noofproperties" id="noofproperties" size="10" /> 
</div>
<div class="col-md-3">
  <label class="control-label ">Requested Loan Amount</label>
</div>
<div class="col-md-3">
  <input class="form-control" type="text" name="loanAmount" id="loanAmount" size="10" />
</div> 
</div>
<div class="col-md-12 form-group">
<div class="col-md-3">
  <label class="control-label ">Purchase Price</label>
</div>
<div class="col-md-3">
    <input class="form-control" type="text" name="purchaseprice" id="purchaseprice" size="10" />

</div>
  <div class="col-md-3">
       <label class="control-label" style="text-align: left;" >Loan to Purchase Price</label>
  </div>
  <div class="col-md-3">
       <input class="form-control" type="text" name="loanToValue" id="loanToValue" size="10" />
  </div>          
</div>  
<div class="col-md-12 form-group">
<div class="col-md-3">
      <label class="control-label"  style="text-align:left;">Requested Loan Term
       
      </label>
</div>
<div class="col-md-3">
        <input type="text" class="form-control" name="desiredloan" id="desiredloan" />
          <span class="help-block"> (Months) </span>
</div>
</div>
<div class="col-md-12 form-group">
  <div class="col-md-3">
           <label class="control-label">How will you use the loan proceeds? </label>
   </div>
    <div class="radio-list col-md-8" id="newcheck">
         <ul class="list-inline" style="padding-top:7px;">
            <li>
               <label>
                    <input type="radio" class="radio1" name="loanChoices" value="fixAndFlip" />
                Fix and flip</label>
            </li>
             <li>
                <label>
                    <input type="radio" class="radio3" name="loanChoices" value="rental"/>
                 Finance a Rental property</label>
             </li>
             <li>
                <label>
                    <input type="radio" class="radio2" name="loanChoices" value="wholesaling"/>
                 Wholesaling a property</label>
             </li>
             <li>
                <label>
                   <input type="radio" class="radio2" name="loanChoices" value="bespokefinancing"/>
                Other</label>
              </li>

           
          </ul>
      </div>
</div>
<div class="col-md-12 form-group">
  <div class="col-md-3">
           <label class="control-label">What type of property are you buying? </label>
   </div>
    <div class="radio-list col-md-8" id="newcheck">
         <ul class="list-inline" style="padding-top:7px;">
            <li>
               <label>
                    <input type="radio" class="radio5" name="loanChoices" value="fixAndFlip" />
                Single family residence</label>
            </li>
             <li>
                <label>
                    <input type="radio" class="radio6" name="loanChoices" value="rental"/>
                 2-4 unit single family residence</label>
             </li>
             <li>
                <label>
                    <input type="radio" class="radio5" name="loanChoices" value="wholesaling"/>
                 Condominium</label>
             </li>
             <li>
                <label>
                   <input type="radio" class="radio6" name="loanChoices" value="bespokefinancing"/>
                Multifamily</label>
              </li>

           
          </ul>
      </div>
</div>
<div class="col-md-12 form-group"  id="zz" style="display:none;">
                            <div class="col-md-3"  style="text-align: left;">
                              <label class="control-label">Rehab Budget</label>
                            </div>
                            <div class="col-md-3">
                              <input class="form-control " type="text" name="rehabBudget" id="rehabBudget" />
                            </div>
                            <div class="col-md-3" style="text-align: left;">
                              <label class="control-label">After Repair Value</label>
                            </div>

                            <div class="col-md-3">
                              <input class="form-control" type="text" name="afterRepair" id="afterRepair" />
                            </div>
</div> 
 <div class="col-md-12 form-group" style="display:none;" id="mm">
                            <div class="col-md-3"  style="text-align: left;">
                              <label class="control-label">Gross Monthly Rent</label>
                            </div>
                            <div class="col-md-3">
                              <input class="form-control input-medium" type="text" name="gross" id="gross" />
                            </div>
                            <div class="col-md-6"></div>
                          </div> 
<div class="col-md-12 form-group">
  <div class="col-md-3 ">
         <label class="control-label" style="text-align:left;">Close of Escrow Date</label>
  </div>
  <div class="col-md-3">
       <input class="form-control" type="date" name="escrow" id="escrow" placeholder="MM/DD/YYYY" />
   </div>
   <div class="col-md-12">
<span class="help-block error" style="color:black; font-size: 12px;"> * This will be an interest only loan</span>
</div>
</div>

<div class="col-md-12">
</div>
<div class="col-md-12">
</div>
<div class="col-md-12">
</div>
<div class="col-md-12">
</div>
<div class="col-md-12">
</div>
<div class="col-md-12">
</div>
<div class="col-md-12">
</div>
 <div class="col-md-12">
              </div>  
              
               <div class="col-md-12">
                            
                            </div> 
</div>
 </div>
            
                    
                  </div>
                </div>
              
            </div>


       <div class="portlet-title">
              <div class="actions" style="float: right;"> 
        <a class="btn btn-sm btn-success text-right" href="info-submitted.php">Save & Continue <i class="fa fa-arrow-right"></i></a>  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop
@extends('layouts.footer-content')
@extends('layouts.footer')
	
@section('footer-script')

<!-- END THEME LAYOUT SCRIPTS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="	/assets/pages/scripts/form-wizard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
      var j=0;
var num=0;

            $(".date").datepicker();
            $('.addAssests').on("click", function(){
                
                var assets = '<div class="form-group appnd"><div class="form-group"><label class="control-label col-md-3">Description : <span class="required" aria-required="true"> * </span></label><div class="col-md-4 "><input type="text" name="description" class="form-control date hasDatepicker" id="dp1473687848933"><span class="help-block"> </span></div></div><div class="form-group"><label class="control-label col-md-3">Amount :<span class="required" aria-required="true"> * </span></label><div class="col-md-4 "><input type="text" name="amount" class="form-control date hasDatepicker" id="dp1473687848934"><span class="help-block"> </span></div></div><div class="form-group"><label class="control-label col-md-3">Name Of Financial institution :<span class="required" aria-required="true"> * </span></label><div class="col-md-4 "><input type="text" name="nameFinancialInstitution" class="form-control date hasDatepicker" id="dp1473687848935"><span class="help-block"> </span></div></div><div class="form-group"><label class="control-label col-md-3">Address Of Financial institution :</label><div class="col-md-4"><textarea name="addressFinancialInstitution" rows="3" class="form-control"></textarea></div></div><div class="form-group"><label class="control-label col-md-3">Account Number :<span class="required" aria-required="true"> * </span></label><div class="col-md-4 "><input type="text" name="accountNumber" class="form-control date hasDatepicker" id="dp1473687848936"><span class="help-block"> </span></div><div class="col-md-4 "><a class="btn default assetsRemove"><i class="fa fa-minus"></i> Delete </a></div></div></div>';
                $('.appendAssets').append(assets);
            });
            
            $("#tab7").on("click", ".assetsRemove", function(event) {
                event.preventDefault();
                $(this).closest(".appnd").remove();
            });
            
            $(".addLiabilities").on("click", function(){
                var liabilities = '<div class="form-group appndLia"><div class="form-group"><label class="control-label col-md-3">Institution :<span class="required"> * </span></label><div class="col-md-4 "><input type="text" class="form-control date" name="institution" /><span class="help-block"> </span></div></div><div class="form-group"><label class="control-label col-md-3">Name Of company :<span class="required"> * </span></label><div class="col-md-4 "><input type="text" class="form-control date" name="nameCompany" /><span class="help-block"> </span></div></div><div class="form-group"><label class="control-label col-md-3">Address Of company :</label><div class="col-md-4"><textarea class="form-control" rows="3" name="addressCompany"></textarea></div></div><div class="form-group"><label class="control-label col-md-3">Monthly Payment :<span class="required"> * </span></label><div class="col-md-4 "><input type="text" class="form-control date" name="monthlyPayment" /><span class="help-block"> </span></div></div><div class="form-group"><label class="control-label col-md-3">Monthly Left to Pay :<span class="required"> * </span></label><div class="col-md-4 "><input type="text" class="form-control date" name="monthlyLeftToPay" /><span class="help-block"> </span></div></div><div class="form-group"><label class="control-label col-md-3">Unpaid Balance :<span class="required"> * </span></label><div class="col-md-4 "><input type="text" class="form-control date" name="unpaidBalance" /><span class="help-block"> </span></div></div><div class="form-group"><label class="control-label col-md-3">Account Number :<span class="required"> * </span></label><div class="col-md-4 "><input type="text" class="form-control date" name="accountNumber" /><span class="help-block"> </span></div><div class="col-md-4 "><a class="btn default liabilitiesRemove"><i class="fa fa-minus"></i> Delete </a></div></div></div>';
                $('.appendLiabilities').append(liabilities);
            });
            
            $("#tab7").on("click", ".liabilitiesRemove", function(event) {
                event.preventDefault();
                $(this).closest(".appndLia").remove();
            });
/*
$(".step").click(function(){
var a2=0;

if(a2==0)
{
var aa=1;
}
 nn=$('> .number', this).text();
console.log(nn);
//nn=nn.charAt(0);
var n2=parseInt(nn);
//console.log(nn);
//alert(nn);
if(n2>aa)
{
a2=1;
n2=n2-aa;

for(var i=1;i<=n2;i++)
{
$(".button-next").trigger("click");
aa=n2;
}
n2=0;
}
else
{
n2=aa-n2;
for(var i=1;i<=n2;i++)
{
$(".button-previous").trigger("click");
}
aa=n2;
}

});
*/
$(".loanapproval").click(function(){
  var lp=$(this).val();
  if(lp=="yes")
$("#div-loanapproval").css("display","block");
else
$("#div-loanapproval").css("display","none");

});


$("#nooflien").change(function(){
    var loopp=$(this).val();
    
var ii=1;
$(".lienno-div").html('');
for(ii=1;ii<=loopp;ii++)
{
    
    $(".lienno-div").append('<div class="col-md-6 padding-0"><div class="form-group">  <label class="control-label col-md-3">Beneficiary</label>  <div class="col-md-4">    <input type="text" name="lienbeneficiary[]" id="lienbeneficiary'+ii+'" class="form-control input-medium">  </div></div></div><div class="col-md-6 padding-0"><div class="form-group">  <label class="control-label col-md-3">Lien Position</label>  <div class="col-md-4">    <label class="radio-inline">    <input type="radio" name="lienposition[]" value="1">    1<sup>st</sup> </label>    <label class="radio-inline">    <input type="radio" name="lienposition[]" value="2">    2<sup>nd</sup> </label>    <label class="radio-inline">    <input type="radio" name="lienposition[]" value="other">    Other </label>  </div></div></div><div class="col-md-6 padding-0"><div class="form-group">  <label class="control-label col-md-3">Original Principal Balance</label>  <div class="col-md-4">    <input type="text" name="originalbalance[]" id="originalbalance'+ii+'" class="form-control input-medium">  </div></div></div><div class="col-md-6 padding-0"><div class="form-group">  <label class="control-label col-md-3">Current Principal Balance</label>  <div class="col-md-4">    <input type="text" name="currentbalance[]" id="currentbalance'+ii+'" class="form-control input-medium">  </div></div></div><div class="checkbox text-center">  <label>  <input type="checkbox" value="yes" class="loancurrent">  Check if the Loan is Current</label></div><div class="col-md-12 div-loancurrent">  <div class="form-group">    <label class="control-label col-md-3">Total Late Payments</label>    <div class="col-md-4">      <input type="text" name="paymentlate[]" id="paymentlate'+ii+'" class="form-control input-medium">    </div>  </div>  <div class="form-group">    <label class="col-md-5">Has the Borrower received a notice of Default</label>    <div class="col-md-4">      <label class="radio-inline">      <input type="radio" name="receivenotice[]" value="yes">      Yes</label>      <label class="radio-inline">      <input type="radio" name="receivenotice[]" value="no">      No</label>    </div>  </div>  <div class="form-group">    <label class="col-md-5">Has the Borrower received a notice of foreclosure</label>    <div class="col-md-4">      <label class="radio-inline">      <input type="radio" name="receiveforeclosure[]" value="yes">      Yes</label>      <label class="radio-inline">      <input type="radio" name="receiveforeclosure[]" value="no">      No</label>    </div>  </div></div><div class="form-group">  <label class="col-md-5">Has the loan ever been delinquent in the past?</label>  <div class="col-md-4">    <label class="radio-inline">    <input type="radio" name="loandeliquent[]" value="yes" class="btn-loandeliquent">    Yes</label>    <label class="radio-inline">    <input type="radio" name="loandeliquent[]" value="no" class="btn-loandeliquent">    No</label>  </div></div><div class="col-md-12 div-loandeliquent" style="display:none">  <div class="form-group">    <label class="control-label col-md-3">Loan past Due date</label>    <div class="col-md-4">      <input type="text" name="loanpast[]" id="loanpast" class="form-control input-medium">    </div>  </div></div><div class="form-group">  <label class="col-md-5">Notice of default received and cured?</label>  <div class="col-md-4">    <label class="radio-inline">    <input type="radio" name="noticeofdefault[]" value="yes">    Yes</label>    <label class="radio-inline">    <input type="radio" name="noticeofdefault[]" value="no">    No</label>  </div></div>');
}
$(".lienno-div").css("display","block");

});
// $(".loancurrent").click(function(){
// $(this).next(".div-loancurrent").toggle();
// });
// $( ".loancurrent" ).on( "click", function() {

//  $(this).next(".div-loancurrent").toggle();
// });
$(function(){
    $(document).on('click', '.loancurrent', function(){
          $(this).parent('label').parent(".checkbox").next(".div-loancurrent").toggle();
    });
  $(document).on('click', '.btn-loandeliquent', function(){
    var val1=$(this).val();
//alert(val1);
    if(val1=='yes'){
          $(this).parent('.radio-inline').parent('.col-md-4').parent('.form-group').next(".div-loandeliquent").css("display","block");
    }
    else
    {
         $(this).parent('.radio-inline').parent('.col-md-4').parent('.form-group').next(".div-loandeliquent").css("display","none");
    }
    });
      
})
$(".loanType").click(function(){
$nn=$(this).val();
if($nn=="Purchase")
{
    $(".tyu2").html('');
$(".tyu2").html('<lable class="control-label">Enter the Purchase Price</label>');
$(".tyu").html('');
$(".tyu").html('<input class=" form-control input-medium" type="text" name="price"/><lable style="color:red;">[This will be an interest/only loan.]</label>');
    $("#xx").css("display","block");
    $(".div-refinance").css("display","none");
    $(".div-remain").css("display","none");
    $(".lienno-div").css("display","none");
}
else if($nn=="Refinance-NoCashOut"||$nn=="Refinance-CashOut")
{

$(".tyu2").html('');
$(".tyu2").html('<lable class="control-label" >Enter the Estimated value of the Property</label>');
$(".tyu").html('');
$(".tyu").html('<input class="form-control input-medium" type="text" name="estimatedval"/><lable style="color:red;">[This will be an interest/only loan.]</label>');
$("#xx").css("display","block");
$(".div-refinance").css("display","block");
$(".div-remain").css("display","block");
//$("#xx .ppp").css("display","block");

}
else
{
$("#xx").css("display","none");
}




});


$(".btn-overide").click(function(){
    $(".override-div").toggle();

})

$(".radio1").click(function(){
$pp=$(this).attr('value');
//alert($pp);
if($pp=="fixAndFlip")
{
    $("#mm").css("display","none");

$("#zz").css("display", "block");

}
});
$(".radio3").click(function(){

$("#zz").css("display","none");
$("#mm").css("display","block");

}
);
$(".radio2").click(function(){

$("#zz").css("display","none");
$("#mm").css("display","none");
}
);



$(".identity").click(function(){
var ii=$(this).attr('value');

if(ii=="others")
{
    $(".other-div").css("display","block");
}
else
 {
$(".other-div").css("display", "none");

}
});

$(document).ready(function(){

$(".unitchoice").click(function(){
//alert("hello");
var choic=$(this).val();
//alert(choic);
if(choic=="unitSingle" || choic=="multifamily")
{
    //alert("yes");
$("#numberofunits").css("display","block");
}
else
{
    //alert("no");
 $("#numberofunits").css("display","none");   
}
});
 $("#checkoccupancy").change(function() {
                    var ischecked= $(this).is(':checked');
                    if(!ischecked)
                      $(".div-occupancy").css("display","none");
                      else
                      {
                      $(".div-occupancy").css("display","block");
                      }
                }); 
 $(".livetogether").change(function() {
                    var ischecked= $(this).is(':checked');
                    if(ischecked)
                    {
                      $(".div-nolivetogether").css("display","none");
                      $(".div-livetogether").css("display","block");
                      
                    }
                      else
                      {
                         var num3=$("#numberofborrowers").val();

                         for(i2=1;i2<=num3;i2++)
                         {
                      $(".div-nolivetogether").append('<div class="form-group ">                                                       <h5 class="block col-md-12">Borrower:</h5>                                                                <label class="control-label col-md-3">Total Monthly Housing Expenses:                                                                    <span class="required"> * </span>                                                                </label>                                                                <div class="col-md-4 ">                                                                    <input type="text" class="form-control date" name="borrowerexpense" />                                                                    <span class="help-block"> </span>                                                                </div>                                                            </div>');
                     }
                      $(".div-livetogether").css("display","none");
                      $(".div-nolivetogether").css("display","block");
                      }
                }); 

$("#add-borrower").click(function(){
var i=0;
 num=$("#numberofborrowers").val();

         $(".copy-dashboard-3").empty();
         for(i=1;i<=num;i++)
         {


            $(".copy-dashboard-3").append(' <div class="form-group">                                                                <label class="control-label col-md-3"> Name (include Jr. Or Sr. if applicable)                                                                    <span class="required"> * </span>                                                                </label>                                                                <div class="col-md-4">                                                                    <input type="text" class="form-control" name="borrowerName[]" id="borrowerName'+i+'"/>                                                                    <span class="help-block"> </span>                                                                </div>                                                            </div>                                                                                                                        <div class="form-group">                                                                <label class="control-label col-md-3"> Social Security Number                                                                    <span class="required"> * </span>                                                                </label>                                                                <div class="col-md-4">                                                                    <input type="text" class="form-control" name="borrowerSocialsecurityNumber[]" id="borrowerSocialsecurityNumber'+i+'" />                                                                    <span class="help-block"> </span>                                                                </div>                                                            </div>                                                                                                                        <div class="form-group">                                                                <label class="control-label col-md-3">Home Phone                                                                    <span class="required"> * </span>                                                              </label>                                                                <div class="col-md-4">                                                                    <input type="text" class="form-control" name="borrowerHomePhone[]" id="borrowerHomePhone'+i+'"/>                                                                    <span class="help-block"> </span>                                                                </div>                                                            </div>                                                                                                                       <div class="form-group">                                                                <label class="control-label col-md-3">DOB(mm/dd/YYYY)                                                                   <span class="required"> * </span>                                                                </label>                                                                <div class="col-md-4 ">                                                                    <input type="text" class="form-control date" name="borrowerDOB[]" id="borrowerDOB'+i+'"/>                                                                    <span class="help-block"> </span>                                                                </div>                                                            </div>                                                                                                                        <div class="form-group">                                                                <label class="control-label col-md-3">Yrs. School                                                                    <span class="required"> * </span>                                                                </label>                                                                <div class="col-md-4 ">                                                                    <input type="text" class="form-control date" name="borrowerYearSchool[]" id="borrowerYearSchool'+i+'"/>                                                                    <span class="help-block"> </span>                                                                </div>                                                            </div>                                                                                                                     <div class="form-group">                                                                <label class="control-label col-md-3">Marital Status                                                                    <span class="required"> * </span>                                                                </label>                                                                <div class="col-md-4">                                                                    <div class="radio-list">                                                                        <label>                                                                            <input type="radio" name="borrowerMaritalStatus[]" value="married" data-title="1" /> Married </label>                                                                        <label>                                                                            <input type="radio" name="borrowerMaritalStatus[]" value="unMarried" data-title="2" /> Unmarried </label>                                                                        <label>                                                                            <input type="radio" name="borrowerMaritalStatus[]" value="seprated" data-title="2" /> Seprated </label>                                                                        </div>                                                                    <div id="form_gender_error"> </div>                                                                </div>                                                            </div>                                                                                                                                                                                   <div class="form-group">                                                                <label class="control-label col-md-3">Dependents Number                                                                   <span class="required"> (Not listed by Co-Borrower) </span>                                                                </label>                                                                <div class="col-md-4 ">                                                                    <input type="text" class="form-control date" name="borrowerDependentsNumber[]" id="borrowerDependentsNumber'+i+'"/>                                                                    <span class="help-block"> </span>                                                                </div>                                                            </div>                                                                                                                       <div class="form-group">                                                                <label class="control-label col-md-3">Dependents Ages                                                                    <span class="required"> (Not listed by Co-Borrower) </span>                                                                </label>                                                                <div class="col-md-4 ">                                                                    <input type="text" class="form-control date" name="borrowerDependentsAges[]" id="borrowerDependentsAges'+i+'"/>                                                                    <span class="help-block"> </span>                                                                </div>                                                            </div>                                                                                                                        <div class="form-group">                                                                <label class="control-label col-md-3">Present Address Type                                                                    <span class="required"> * </span>                                                                </label>                                                                <div class="col-md-4">                                                                    <div class="radio-list">                                                                        <label>                                                                            <input type="radio" name="borrowerpresentAddressType[]" value="own" data-title="1" /> Own </label>                                                                        <label>                                                                            <input type="radio" name="borrowerpresentAddressType[]" value="rent" data-title="2" /> Rent </label>                                                                    </div>                                                                    <div id="form_gender_error"> </div>                                                                </div>                                                            </div>                                                                                                                        <div class="form-group">                                                                <label class="control-label col-md-3">Present Address Number Of Years                                                                    <span class="required"> * </span>                                                                </label>                                                                <div class="col-md-4 ">                                                                    <input type="text" class="form-control date" name="borrowerpresentAddressNumberOfYears[]" id="borrowerpresentAddressNumberOfYears'+i+'"/>                                                                    <span class="help-block"> </span>                                                                </div>                                                            </div>  <div class="form-group col-md-12"><label class="control-label">Check if Mailing Address is Same as Present Home Address</label><input type="checkbox" class="copysame" data-id="'+i+'"></div>                                                                                                                       <div class="form-group  col-md-6 text-center">                                                                <label class="control-label">Present Address</label> <div class="row"><div class="col-md-12 form-group"><label class="control-label col-md-4">Country</label><div class="col-md-8"><select class="form-control countryx" id="country'+i+'" name="borrowercountry[]" data-id="'+i+'"></select></div></div><div class="col-md-12 form-group"><label class="control-label  col-md-4">State</label><div class="col-md-8"><select class="form-control" name="borrowerstate[]" id ="state'+i+'" data-id="borrowerstate'+i+'"></select></div></div><div class="col-md-12 form-group"><label class="control-label  col-md-4">City</label><div class="col-md-8"><input type="text" name="borrowercity[]" class="form-control" id="borrowercity'+i+'"></div></div><div class="col-md-12 form-group"><label class="control-label  col-md-4">Zipcode</label><div class="col-md-8"><input type="text" name="borrowerzipcode[]" class="form-control" id="borrowerzipcode'+i+'"></div></div><div class="col-md-12 form-group"><label class="control-label  col-md-4">Street Address</label><div class="col-md-8"><input type="text" name="borrowerstreet[]" class="form-control" id="borrowerstreet'+i+'"></div></div></div>                                                                                                                       </div>                                                                                                                      <div class="form-group  col-md-6 text-center">                                                                <label class="control-label">Mailing Address                                                                    <span class="required"> (If Different From Present Address) </span>                                                                </label>      <div class="row"><div class="col-md-12 form-group"><label class="control-label col-md-4">Country</label><div class="col-md-8"><select class="form-control countryx2" id="country2'+i+'" name="borrowercountry2[]" data-id2="'+i+'"></select></div></div><div class="col-md-12 form-group"><label class="control-label  col-md-4">State</label><div class="col-md-8"><select class="form-control" name="borrowerstate2[]" id="state2'+i+'" data-id2="borrowerstate'+i+'"></select></div></div><div class="col-md-12 form-group"><label class="control-label  col-md-4">City</label><div class="col-md-8"><input type="text" name="borrowercity2[]" class="form-control" id="borrowercity2'+i+'"></div></div><div class="col-md-12 form-group"><label class="control-label  col-md-4">Zipcode</label><div class="col-md-8"><input type="text" name="borrowerzipcode2[]" class="form-control" id="borrowerzipcode2'+i+'"></div></div><div class="col-md-12 form-group"><label class="control-label  col-md-4">Street Address</label><div class="col-md-8"><input type="text" name="borrowerstreet2[]" class="form-control" id="borrowerstreet2'+i+'"></div></div></div></div><div col-md-12><hr></div>');
            $('.copy-dashboard-3').css("display","block");
            j++;
                $(".realestate-div").append(' <div class="form-group div-schedule"><div class="form-group">                                                                <label class="control-label col-md-3">Property Address                                                                    <span class="required"> * </span>                                                                </label>                                                                <div class="col-md-4">                                                                     <label class="control-label">Select Country (with states):</label></div><div class="col-md-6">   <select class="form-control input-medium" id="country" name ="country"></select></div> <div class="col-md-6"><label class="control-label">Select State:</label></div><div class="col-md-6"> <select class="form-control input-medium" name ="state" id ="state"></select></div> <div class="col-md-6"><label class="control-label">City</label></div>   <div class="col-md-6"><input type="text" name="city" id="city" class="form-control input-medium"></div>   <div class="col-md-6"><label class="control-label">Zip code</label></div>   <div class="col-md-6"><input type="text" name="zipcode" id="zipcode" class="form-control input-medium"></div>   <div class="col-md-6"><label  class="control-label">Street Address</label></div>   <div class="col-md-6"><input type="text" name="streetaddress" id="streetaddress" class="form-control input-medium"></div>                                                                </div>                                                                                                                    <div class="form-group">                                                             <div class="col-md-4" style="text-align: left;">                                                                <label class="control-label">Property Type</label></div>                                                                <div class="col-md-8 radio-list">                                                                        <label>                                                                            <input class="unitchoice1" type="radio" name="propertyType1" value="single" />Single family residence</label>                                                                        <label>                                                                            <input class="unitchoice1" type="radio" name="propertyType1" value="unitSingle"/>2-4 unit single family residence</label>                                                                            <label>                                                                            <input  class="unitchoice1" type="radio" name="propertyType1" value="condominium"/>Condominium</label>                                                                        <label>                                                                            <input class="unitchoice1" type="radio" name="propertyType1" value="multifamily" />Multifamily</label>                                                                        </div><div class="form-group div-units2"  style="display:none;">                                                                <label class="control-label col-md-3">No. Of Units</label>                                                                <div class="col-md-4">                                                                    <select name="numberOfUnits1" class="form-control">                                                                        <option value="0">0</option>                                                                        <option value="1">1</option>                                                                        <option value="2">2</option>                                                                        <option value="3">3</option>                                                                        <option value="4">4</option>                                                                        <option value="5">5</option>                                                                        <option value="6">6</option>                                                                        <option value="7">7</option>                                                                        <option value="8">8</option>                                                                        <option value="9">9</option>                                                                        <option value="10">10</option>                                                                    </select>                                                                </div>                                                            </div><div class="form-group">                                                                <label class="control-label col-md-3">Amount of mortgages outstanding </label>                                                                <div class="col-md-4">                                                                    <input type="text" class="form-control" name="amountmortgages1" />                                                            </div>                                                            </div>                                                         <div class="form-group " >                                                        <div class="col-md-4"  style="text-align: left;">                                                                <label class="control-label">Enter the Gross Monthly Rent</label></div>                                                                <div class="col-md-8">                                                                   <input class="form-control input-medium" type="text" name="gross1" id="gross1" />                                                                </div>            </div><div class="form-group">                                                                <label class="control-label col-md-3">Total Amount of mortgages  </label>                                                                <div class="col-md-4">                                                                    <input type="text" class="form-control" name="totalamountmortgages1" />                                                            </div>                                                            </div><div class="form-group">                                                                <label class="control-label col-md-3">Expenses </label>                                                                <div class="col-md-4">                                                                    <input type="text" class="form-control" name="expenses" />                                                            </div>                                                            </div>                      <div class="form-group">                                                                <label class="control-label col-md-3">Net Rental Income </label>                                                                <div class="col-md-4">                                                                    <input type="text" class="form-control" name="netrentalincome" />                                                            </div>                                                            </div>  ');
         }
         var ll;
          $('.div-borroweremployer').empty();
         for(ll=1;ll<=num;ll++)
         {
           // alert("div-borroweremployer");
            
            $('.div-borroweremployer').append('<div class="col-md-12 div-eachborrower"><div class="form-group"><div class="col-md-3"><label class="control-label">Position Title</label>  </div> <div class="col-md-8"> <input type="text" name="positiontitle[]" id="positiontitle'+ll+'" class="form-control input-medium">     </div></div> <div class="form-group">   <div class="col-md-3">          <label class="control-label">Employer Name</label>        </div>      <div class="col-md-8">       <input type="text" name="employername[]" id="employername'+ll+'" class="form-control input-medium">         </div>   </div>       <div class="form-group">      <div class="col-md-12">            <label class="control-label">Employer Address:</label>      </div>        <div class="col-md-3">             <label class="control-label">Country</label>         </div>          <div class="col-md-8">             <select class="form-control countryz input-medium" id="employercountry'+ll+'" name="employercountry[]" data-id="'+ll+'"></select>        </div>         </div>      <div class="form-group">           <div class="col-md-3">             <label class="control-label  col-md-4">State</label>          </div>          <div class="col-md-8">            <select class="form-control input-medium" name="employerstate[]" id ="state'+ll+'" data-id="employerstate'+ll+'"></select>             </div>         </div>      <div class="form-group">            <div class="col-md-3">              <label class="control-label">City</label>            </div>             <div class="col-md-8">              <input type="text" name="employercity[]" class="form-control input-medium" id="employercity'+ll+'">          </div>         </div>      <div class="form-group">           <div class="col-md-3">             <label class="control-label">Zipcode</label>          </div>          <div class="col-md-8">             <input type="text" name="employerzipcode[]" class="form-control input-medium" id="employrerzipcode'+ll+'">           </div>       </div>          <div class="form-group">           <div class="col-md-3">             <label class="control-label  col-md-4">Street Address</label>             </div>              <div class="col-md-8">                <input type="text" name="employerstreet[]" class="form-control input-medium" id="employerstreet'+ll+'">           </div>          </div>          <div class="form-group">           <div class="col-md-3">             <label class="control-label">Telephone Number</label>             </div>              <div class="col-md-8">                 <input type="text" name="telephonenumber[]" id="telephonenumber'+ll+'" class="form-control input-medium">             </div>          </div>          <div class="form-group">           <div class="col-md-3">                 <label class="control-label">Years employed with company</label>    </div>           <div class="col-md-8">                 <input type="text" name="yearsemployed[]" id="yearsemployed'+ll+'" class="form-control input-medium">            </div>            </div>          <div class="form-group">              <div class="col-md-3">                 <label class="control-label">Years employed in present line of work/profession</label>           </div>               <div class="col-md-8">                <input type="text" name="yearsemployedpresent[]" id="yearsemployedpresent'+ll+'" class="form-control input-medium">               </div> <div class="form-group">              <div class="col-md-3">                 <label class="control-label">Enter total gross monthly income in dollars</label>           </div>               <div class="col-md-8">                <input type="text" name="employergross[]" id="employergross'+ll+'" class="form-control input-medium">               </div>           </div></div><div col-md-12><hr></div>');
            $('.div-borroweremployer').css("display","block");
        }

});


$("#lienalone").change(function(){

 var ischecked2= $(this).is(':checked');
                    if(ischecked2){
          
// for(var jj=1;jj<=num;jj++){
// $(".lienno-div3").append('<div class="col-md-12 div-eachlien"><div class="form-group"><label class="control-label">Beneficiary</label><div class="col-md-4"><input type="text" name="titlelienbeneficiary[]" id="titlelienbeneficiary'+jj+'" class="form-control input-medium"></div></div><div class="form-group"><label class="control-label col-md-3">Lien Position</label><div class="col-md-4"><label class="radio-inline">     <input type="radio" name="titlelienposition[]" value="1">1<sup>st</sup>    </label>    <label class="radio-inline">    <input type="radio" name="titlelienposition[]" value="2">2<sup>nd</sup>    </label>    <label class="radio-inline">      <input type="radio" name="titlelienposition[]" value="other">Other   </label></div></div><div class="form-group"><label class="control-label col-md-3">Original Principal Balance</label><div class="col-md-4"><input type="text" name="titleoriginalbalance[]" id="titleoriginalbalance'+jj+'" class="form-control input-medium"></div> </div><div class="form-group"><label class="control-label col-md-3">Outstanding Principal Balance</label><div class="col-md-4"><input type="text" name="outstandingbalance[]" id="outstandingbalance'+jj+'" class="form-control input-medium"></div> </div></div>');
// }
var num2=$("#nooflien").val();

for(var jj=1;jj<=num2;jj++){

$(".lienno-div3").append('<div class="col-md-12 div-eachlien"><div class="form-group"><label class="control-label col-md-3">Beneficiary</label><div class="col-md-4"><input type="text" name="titlelienbeneficiary[]" id="titlelienbeneficiary'+jj+'" class="form-control input-medium"></div></div><div class="form-group"><label class="control-label col-md-3">Lien Position</label><div class="col-md-4"><label class="radio-inline"><input type="radio" name="titlelienposition[]" value="1">1<sup>st</sup></label><label class="radio-inline"><input type="radio" name="titlelienposition[]" value="2">2<sup>nd</sup></label><label class="radio-inline"><input type="radio" name="titlelienposition[]" value="other">Other</label></div></div><div class="form-group"><label class="control-label col-md-3">Original Principal Balance</label><div class="col-md-4"><input type="text" name="titleoriginalbalance[]" id="titleoriginalbalance'+jj+'" class="form-control input-medium"></div></div><div class="form-group"><label class="control-label col-md-3">Outstanding Principal Balance</label><div class="col-md-4"><input type="text" name="outstandingbalance[]" id="outstandingbalance'+jj+'" class="form-control input-medium"></div></div></div><div col-md-12><hr></div>');
}

}
else
{

$(".lienno-div3").html('');


}
});

$("#totalmember").change(function(){
var num3=$("#totalmember").val();
//alert("hello");

 $('.div-totalmember').empty();
if(num3==0)
{
$('.div-totalmember').css("display","none");

}
for(var kk=1;kk<=num3;kk++)
{
   
$('.div-totalmember').append('<div class="col-md-12 div-eachlien"><div class="form-group"><div class="col-md-4"><label class="control-label">Entity Name</label></div><div class="col-md-4"><input type="text" name="entityname[]" id="entityname'+kk+'" class="form-control input-medium"></div></div><div class="form-group"><div class="col-md-4"><label class="control-label">Entity Title</label></div><div class="col-md-4"><input type="text" name="entitytitle[]" id="entitytitle'+kk+'" class="form-control input-medium"></div></div><div class="form-group"><div class="col-md-4"><label class="control-label">The member has signing authority on behalf of the entity?</label></div><div class="col-md-4"><label class="radio-inline"><input type="radio" name="signingauthority[]" value="yes">yes</label>    <label class="radio-inline">    <input type="radio" name="signingauthority[]" value="no">no</label>  </div></div></div><div col-md-12><hr></div>');
$('.div-totalmember').css("display","block");
}
});

});


            
      </script>
<script language="javascript">
  
     $(document).ready(function(){
        $( "#identity-button" ).trigger( "click" );
$(document).on('click', '.unitchoice1', function(){
    var val11=$(this).val();
//alert(val1);
    if(val11=="unitSingle" || val11=="multifamily")
                {
                    //alert("yes");
                $(this).parent('label').parent('.radio-list').next('.div-units2').css("display","block");
                }
                else
                {
                $(this).parent('label').parent('.radio-list').next('.div-units2').css("display","none");

                }
    });
$(".authorize-signers").change(function(){
var authori=$(this).val();
for(var ll=1;ll<=authori;ll++)
{
    $(".authorize-div2").append('<div class="eachsigner"><div class="form-group"><div class="col-md-4"><label class="control-label">Name of Signer</label></div><div class="col-md-4"><input type="text" name="signertitle[]" id="signertitle'+ll+'" class="form-control input-medium"></div></div><div class="form-group"><div class="col-md-4"><label class="control-label">Title</label></div><div class="col-md-4"><input type="text" name="signertitle[]" id="signertitle'+ll+'" class="form-control input-medium"></div></div> <div class="form-group"><div class="col-md-4"> <label class="control-label">Address:</label></div> <div class="col-md-4"><label class="control-label">Country</label></div><div class="col-md-4"><select class="form-control countryz input-medium" id="signercountry'+ll+'" name="signercountry[]" data-id="'+ll+'"></select></div></div><div class="form-group"><div class="col-md-4"><label class="control-label  col-md-4">State</label></div><div class="col-md-4"><select class="form-control" name="signerstate[]" id ="state'+ll+'" data-id="signerstate'+ll+'"></select></div></div><div class="form-group"><div class="col-md-4"><label class="control-label">City</label></div><div class="col-md-4"><input type="text" name="signercity[]" class="form-control" id="signercity'+ll+'"></div></div><div class="form-group"><div class="col-md-4"><label class="control-label">Zipcode</label></div><div class="col-md-8"><input type="text" name="signerzipcode[]" class="form-control input-medium" id="signerzipcode'+ll+'"></div></div><div class="form-group"><div class="col-md-4"><label class="control-label  col-md-4">Street Address</label></div><div class="col-md-4"><input type="text" name="signerstreet[]" class="form-control" id="signerstreet'+ll+'"></div></div><div class="form-group"><div class="col-md-4"><label class="control-label">Telephone Number</label></div><div class="col-md-4"><input type="text" name="signertelephonenumber[]" id="signertelephonenumber'+ll+'" class="form-control input-medium"></div></div><div class="form-group">                                                                <label class="control-label col-md-3">Email Address:                                                                     <span class="required"> * </span>                                                                </label>                                                                <div class="input-icon col-md-4">                                                    <i class="fa fa-envelope" style="margin-left: 24px;"></i>                                                    <input class="form-control" id="emailsigner" type="email"> </div>                                                                    <span class="help-block"> Provide the email address</span>                                                                </div> </div><div col-md-12><hr></div>');
}
});
    });
</script>
@stop