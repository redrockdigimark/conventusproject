@extends('layouts.layout')
@section('header-links')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="/conventus/public/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="/conventus/public/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
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
<!-- BEGIN CONTENT -->
  <div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
      <!-- BEGIN PAGE HEADER-->
      <div class="row">
        <div class="col-md-12"> <br>
          <div class="portlet light bordered" id="form_wizard_1">
            <div class="portlet-title">
              <div class="actions"> 
            <a class="btn btn-sm btn-success text-right" href="schedule-of-real-state.php">Save &amp; Continue <i class="fa fa-arrow-right"></i></a> <a class="btn btn-sm btn-success text-right" href="#"> Save &amp; Exit <i class="fa fa-arrow-right"></i></a> 
        </div>
            </div>
             <div class="portlet-body form">
              <form class="form-horizontal" action="#" id="submit_form" method="POST">
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
aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width:50% !important; min-width:50% !important" 
id="progress-1">50%</div>
</div>
                        <div class="col-md-12 form-group">
                     <!--     <h3 class="block text-center" style="margin-top:0;">Refinance </h3> -->
                        </div>
                         <div>
                        
<strong class="block text-left"><u style="margin-left: 13px;">Borrower Employment</u></strong>
<div class="col-md-12 form-group">
<div class="col-md-3">
  <label class="control-label ">Employer</label>
</div>
<div class="col-md-3">
    <input class="form-control input-medium" type="text" name="employer" id="employer"  />
</div>
  <div class="col-md-3">
  <label class="control-label ">Title</label>
</div>
<div class="col-md-3">
  <input class="form-control input-medium" type="text" name="employertitle" id="employertitle"  />
    
</div>


</div>
<div class="col-md-12  form-group">
<div class="col-md-3">
  <label class="control-label ">Employer Street Address</label>
</div>
<div class="col-md-3">
    <input class="form-control input-medium" type="text" name="employerstreet" id="employerstreet"  />
</div>
  <div class="col-md-3">
  <label class="control-label ">Suite</label>
</div>
<div class="col-md-3">
 <input class="form-control input-medium" type="text" name="employersuite" id="employersuite"  />
    
</div>


</div>
<div class="col-md-12  form-group">
<div class="col-md-3">
  <label class="control-label ">City</label>
</div>
<div class="col-md-3">
    <input class="form-control input-medium" type="text" name="employercity" id="employercity"  />
</div>
  <div class="col-md-3">
  <label class="control-label ">State</label>
</div>
<div class="col-md-3">
 <select class="form-control input-medium" id="state" name ="state">
										<option value="alabama">Alabama</option>
										<option value="alaska">Alaska</option>
										<option value="arizona">Arizona </option>
										<option value="arkansas">Arkansas</option>
										<option value="california">California</option>
										<option value="colorado">Colorado</option>
										<option value="connecticut">Connecticut</option>
										<option value="delaware">Delaware</option>
										<option value="florida">Florida</option>
										<option value="georgia">Georgia</option>
										<option value="hawaii">Hawaii</option>
										<option value="idaho">Idaho</option>
										<option value="illinois">Illinois</option>
										<option value="indiana">Indiana</option>
										<option value="iowa">Iowa</option>
										<option value="kansas"> Kansas</option>
										<option value="kentucky">Kentucky</option>
										<option value="louisiana">Louisiana</option>
										<option value="maine">Maine</option>
										<option value="maryland">Maryland</option>
										<option value="massachusetts">Massachusetts</option>
										<option value="michigan">Michigan</option>
										<option value="minnesota">Minnesota</option>
										<option value="mississippi">Mississippi</option>
										<option value="missouri">Missouri</option>
										<option value="montana">Montana</option>
										<option value="nebraska">Nebraska</option>
										<option value="nevada">Nevada</option>
										<option value="new_hampshire">New Hampshire</option>
										<option value="new_hampshire">New Hampshire</option>
										<option value="new_mexico">New Mexico</option>
										<option value="new_york">New york</option>
										<option value="north_carolina">North Carolina</option>
										<option value="north_dakota">North Dakota</option>
										<option value="ohio">Ohio</option>
										<option value="oklahoma">Oklahoma</option>
										<option value=""oregon">Oregon</option>
										<option value="pennsylvania">Pennsylvania</option>
										<option value="rhode_island">Rhode Island </option>
										<option value="south_carolina">South Carolina</option>
										<option value="south_dakota">South Dakota</option>
										<option value="tennessee">Tennessee</option>
										<option value="texas">Texas</option>
										<option value="utah">Utah</option>
										<option value="vermont">Vermont</option>
										<option value="Virginia">Virginia</option>
										<option value="washington">Washington</option>
										<option value="west_virginia">West Virginia</option>
										<option value="wisconsin">Wisconsin</option>
										<option value="wyoming">Wyoming</option>
										</select>
    
</div>


</div>
<div class="col-md-12  form-group">
<div class="col-md-3">
  <label class="control-label ">Zip Code</label>
</div>
<div class="col-md-3">
    <input class="form-control input-medium" type="text" name="employerzipcode" id="employerzipcode"  />
</div>
  <div class="col-md-3">
  <label class="control-label ">Telephone</label>
</div>
<div class="col-md-3 form-inline">
      <input class="form-control" name="employertelephone1" id="employertelephone1" style="width: 23%;display: inline;" type="text"> <span style=" width: 11%; line-height: 30px;display: inline;">-</span>
    <input class="form-control" name="employertelephone2" id="employertelephone2" style="width: 23%;display: inline;" type="text"> <span style=" width: 11%; line-height: 30px;display: inline;">-</span>
    <input class="form-control" name="employertelephone3" id="employertelephone3" style="width: 23%;display: inline;" type="text">
  
  </div>


</div>
<div class="col-md-12  form-group">
<div class="col-md-3">
  <label class="control-label ">Years with Employer</label>
</div>
<div class="col-md-3">
    <input class="form-control input-medium" type="text" name="employeryear" id="employeryear"  />
</div>
  <div class="col-md-3">
  <label class="control-label ">Years in Industry</label>
</div>
<div class="col-md-3">
 <input class="form-control input-medium" type="text" name="employerindustry" id="employerindustry"  />
    
</div>


</div>
<div class="col-md-12">
  <hr>
</div>

<div class="col-md-12 form-group" style="margin-top: 25px;">
<div class="col-md-12">
  <strong class="block text-left"><u >Income & Expenses</u></strong>
</div>
<div class="col-md-3">

  <label class="control-label ">Monthly Income from Employment</label>
</div>
<div class="col-md-3">
    <input class="form-control input-medium" type="text" name="employermonthly" id="employermonthly"  />
</div>
</div>
<div class="col-md-12 form-group">
  
  <div class="col-md-3">
  <label class="control-label ">Total Monthly Income</label>
</div>
<div class="col-md-3">
  <input class="form-control input-medium" type="text" name="employerincome" id="employerincome"  />
    
</div>


</div>
<div class="col-md-12 form-group">
  
  <div class="col-md-3">
  <label class="control-label ">Monthly Housing Expense</label>
</div>
<div class="col-md-3">
  <input class="form-control input-medium" type="text" name="employerexpense" id="employerexpense"  />
    
</div>


</div>

<!-- <div class="col-md-12 form-group">
<div class="col-md-3">
    <label class="control-label"  style="text-align:left;">Is the loan current?</label>
</div>
<div class="col-md-3">
  <ul class="list-inline nav nav-pills" style="padding-top:7px;">
            <li>
               <label>
                    <input class="loancurrent" name="loanChoices" value="yes" type="radio">
                Yes</label>
            </li>
             <li>
                <label>
                    <input class="loancurrent" name="loanChoices" value="no" type="radio" checked="checked">
                 No</label>
             </li>
             
                       
          </ul>
</div>

</div> -->
<!-- <div class="col-md-12 div-loancurrent form-group">
<div class="col-md-4">
    <label class="control-label"  style="text-align:left;">If no, how many payments are late?</label>
</div>
<div class="col-md-3">
  <ul class="list-inline nav nav-pills" style="padding-top:7px;">
            <li>
               <label>
                    <input class="paymentlate" name="loanChoices" value="1" type="radio">
                1</label>
            </li>
             <li>
                <label>
                    <input class="paymentlate" name="loanChoices" value="2" type="radio" >
                 2</label>
             </li>
             <li>
                <label>
                    <input class="paymentlate" name="loanChoices" value="3plus" type="radio" >
                 3+</label>
             </li>
             
                       
          </ul>
</div>

</div> -->
<!-- <div class="col-md-12  form-group">
<div class="col-md-4">
    <label class="control-label"  style="text-align:left;">Has the loan ever been delinquent?</label>
</div>
<div class="col-md-3">
  <ul class="list-inline nav nav-pills" style="padding-top:7px;">
            <li>
               <label>
                    <input class="loandelinquent" name="loandelinquent" value="yes" type="radio">
                Yes</label>
            </li>
             <li>
                <label>
                    <input class="loandelinquent" name="loandelinquent" value="no" type="radio" >
                 No</label>
             </li>
             
                       
          </ul>
</div>

</div> -->
<!-- <div class="col-md-12  form-group">
<div class="col-md-4">
    <label class="control-label"  style="text-align:left;">Have you received notice of default on this loan?</label>
</div>
<div class="col-md-8">
  <ul class="list-inline nav nav-pills" style="padding-top:7px;">
            <li>
               <label>
                    <input class="loandefault" name="loandefault" value="yes" type="radio">
                Yes</label>
            </li>
             <li>
                <label>
                    <input class="loandefault" name="loandefault" value="no" type="radio" >
                 No</label>
             </li>
             
                       
          </ul>
</div>

</div> -->
<!-- <div class="col-md-12  form-group">
<div class="col-md-4">
    <label class="control-label"  style="text-align:left;">Has this loan ever been in foreclosure?</label>
</div>
<div class="col-md-8">
  <ul class="list-inline nav nav-pills" style="padding-top:7px;">
            <li>
               <label>
                    <input class="loanclosure" name="loanclosure" value="yes" type="radio">
                Yes</label>
            </li>
             <li>
                <label>
                    <input class="loanclosure" name="loanclosure" value="no" type="radio" >
                 No</label>
             </li>
             
                       
          </ul>
</div>

</div> -->
<!-- <div class="col-md-12  form-group">
<div class="col-md-4">
    <label class="control-label"  style="text-align:left;">Other than the loan from Conventus, will any loans be on title?</label>
</div>
<div class="col-md-8">
  <ul class="list-inline nav nav-pills" style="padding-top:7px;">
            <li>
               <label>
                    <input class="loantitle" name="loantitle" value="yes" type="radio">
                Yes</label>
            </li>
             <li>
                <label>
                    <input class="loantitle" name="loantitle" value="no" type="radio" >
                 No</label>
             </li>
             
                       
          </ul>
</div>

</div> -->
<!-- <div class="col-md-12 div-beneficiary form-group">
<div class="col-md-3">
  <label class="control-label ">Beneficiary</label>
</div>
<div class="col-md-3">
    <input class="form-control input-medium" type="text" name="benificiary" id="benificiary"  />
</div>
  <div class="col-md-3">
  <label class="control-label ">Lien Position</label>
</div>
<div class="col-md-3">
 <ul class="list-inline nav nav-pills" style="padding-top:7px;">
            <li>
               <label>
                    <input class="lienposition" name="loanChoices" value="first" type="radio">
                1<sup>st</sup></label>
            </li>
             <li>
                <label>
                    <input class="lienposition" name="loanChoices" value="junior" type="radio">
                 Junior</label>
             </li>
             
                       
          </ul>
    
</div>


</div> -->
<!-- <div class="col-md-12 div-balance form-group">
<div class="col-md-3">
  <label class="control-label ">Original Balance</label>
</div>
<div class="col-md-3">
    <input class="form-control input-medium" type="text" name="originalbalance" id="originalbalance"  />
</div>
  <div class="col-md-3">
  <label class="control-label ">Current Balance</label>
</div>
<div class="col-md-3">
 <input class="form-control input-medium" type="text" name="currentbalance" id="currentbalance"  />
    
</div>


</div> -->

<div class="col-md-12">
</div>
<div class="col-md-12">
</div>
 <div class="col-md-12 form-group">
                          
                         
                        
                      
              </div>  
              <!-- <div class="col-md-12 form-group">
                          <div class="col-md-3">
                            <label class="control-label"  style="text-align:left;">Do you want to take cash out? </label>
                          </div>
                          
                            <div class="radio-list col-md-3">
                             <ul class="list-inline" style="padding-top:7px;"><li>
                              <label>
                              <input class="doyou" type="radio" name="doyou" value="yes" />
                              Y</label></li><li>
                              <label>
                              <input class="doyou" type="radio" name="doyou" value="no"/>
                             N</label></li>
                              </ul>
                              </div>
                         
                        
                        <div class="col-md-3 div-doyou" style="display: none">
                            <label class="control-label" style="text-align: left;" >Amount</label><span> (if yes)</span>
                            </div><div class="col-md-3 div-doyou" style="display: none;">
                              <input class="form-control input-medium" type="text" name="amt" id="amt" size="10" />
                            </div>
              </div>  -->
              <!--  <div class="col-md-12 form-group">
                          <div class="col-md-3">
                            <label class="control-label"  style="text-align:left;">How much will be refinanced?</label>
                          </div>
                          <div class="col-md-3">
                            <input type="text" class="form-control input-medium" name="refinancedamt" id="refinancedamt" />
                            </div>
                            </div> -->
                            <!--  <div class="col-md-12 form-group">
                            <div class="col-md-3">
                              <label class="control-label">Property Type: </label>
                            </div>
                            <div class="radio-list">
                             <ul class="list-inline" style="padding-top:7px;"><li>
                              <label>
                              <input class="unitchoice1" type="radio" name="propertyType" value="single" />
                              Single family residence</label></li><li>
                              <label>
                              <input class="unitchoice1" type="radio" name="propertyType" value="unitSingle"/>
                              2-4 unit single family residence</label></li>
                              <li><label>
                              <input  class="unitchoice1" type="radio" name="propertyType" value="condominium"/>
                              Condominium</label></li>
                              <li>
                              <label>
                              <input class="unitchoice1" type="radio" name="propertyType" value="multifamily" />
                              Multifamily</label>
                            </li></ul></div>
                          </div> -->
         <!--       <div class="col-md-12 form-group">
                            <div class="col-md-3">
                              <label class="control-label">Use Of Funds: </label>
                            </div>
                            <div class="radio-list" id="newcheck">
                            <ul class="list-inline" style="padding-top:7px;"><li>
                              <label>
                              <input type="radio" class="radio1" name="loanChoices" value="fixAndFlip" />
                              Fix and flip</label></li>
                              <li>
                              <label>
                              <input type="radio" class="radio3" name="loanChoices" value="rental"/>
                              Finance a rental property</label></li>
                              <li><label>
                              <input type="radio" class="radio2" name="loanChoices" value="wholesaling"/>
                              Wholesaling a property</label></li>
                              <li><label>
                              <input type="radio" class="radio2" name="loanChoices" value="others" />
                              Others </label></li></ul>
                            </div>
                            </div>  -->
                          <!--    <div class="col-md-12 form-group" style="display:none;" id="zz">
                            <div class="col-md-3"  style="text-align: left;">
                              <label class="control-label">Rehab Budget</label>
                            </div>
                            <div class="col-md-3">
                              <input class="form-control input-medium" type="text" name="rehabBudget" id="rehabBudget" />
                            </div>
                            <div class="col-md-3" style="text-align: left;">
                              <label class="control-label">After Repair Value</label>
                            </div>

                            <div class="col-md-3">
                              <input class="form-control input-medium" type="text" name="afterRepair" id="afterRepair" />
                            </div>
                          </div>   -->
                         <!--  <div class="col-md-12 form-group" style="display:none;" id="mm">
                            <div class="col-md-3"  style="text-align: left;">
                              <label class="control-label">Gross Monthly Rent</label>
                            </div>
                            <div class="col-md-3">
                              <input class="form-control input-medium" type="text" name="gross" id="gross" />
                            </div>
                            <div class="col-md-6"></div>
                          </div> -->
                             
                          <div class="div-units2"  style="display:none;">                                                                <label class="control-label col-md-3">No. Of Units</label>                                                                <div class="col-md-4">                                                                    <select name="numberOfUnits1" class="form-control">                                                                        <option value=""></option>                                                                        <option value="1">1</option>                                                                        <option value="2">2</option>                                                                        <option value="3">3</option>                                                                        <option value="4">4</option>                                                                        <option value="5">5</option>                                                                        <option value="6">6</option>                                                                        <option value="7">7</option>                                                                        <option value="8">8</option>                                                                        <option value="9">9</option>                                                                                                                                           </select>                                                                </div>                                                            </div>
                          
                          <!--  <div class="col-md-12 form-group">
                            <div class="col-md-3 ">
                              <label class="control-label" style="text-align:left;">Close of escrow Date</label>
                            </div>
                            <div class="col-md-3">
                              <input class="form-control date input-medium" type="date" name="escrow" id="escrow" />
                            </div>
                            <div class="col-md-12">
<span class="help-block error" style="color:black; font-size: 12px;"> * This will be an interest only loan</span>
</div> -->
                            <!-- <div class="col-md-3"  >
                              <label class="control-label" style="text-align:left;">Escrow Officer information</label>
                            </div>
                            <div class="col-md-3">
                              <select name="escrowofficer" id="escrowofficer" class="form-control input-medium">
                                <option value="o1">Officer 1</option>
                                <option value="o2">Officer 2</option>
                                <option value="o3">Officer 3</option>
                                <option value="o4">Officer 4</option>
                              </select>
                            </div> -->
                         <!--  </div>   -->
                          
                         

</div>
 </div>
            
                    
                  </div>
                </div>
              </form>
            </div>


       <div class="portlet-title">
              <div class="actions"> 
            <a class="btn btn-sm btn-success text-right" href="schedule-of-real-state.php">Save &amp; Continue <i class="fa fa-arrow-right"></i></a> <a class="btn btn-sm btn-success text-right" href="#"> Save &amp; Exit <i class="fa fa-arrow-right"></i></a> 
        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END CONTENT BODY -->
  </div>
  <!-- END CONTENT -->
  <!-- END CONTAINER -->
  <!-- BEGIN FOOTER -->
@stop
@extends('layouts.footer-content')
@extends('layouts.footer')
@section('footer-script')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/conventus/public/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="/conventus/public/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/conventus/public/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="/conventus/public/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/conventus/public/assets/pages/scripts/form-wizard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
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
$(".doyou").click(function(){
 $ppp=$(this).attr('value');
//alert($pp);
 if($ppp=="yes")
 {
    

 $(".div-doyou").css("display", "block");

}
 else
 {
 $(".div-doyou").css("display", "none");
 }
});
$(".radio1").click(function(){
$pp=$(this).attr('value');
//alert($pp);
if($pp=="fixAndFlip")
{
    $("#mm").css("display","none");

$("#zz").css("display", "block");

}
});
$(".radio2").click(function(){

$("#zz").css("display","none");
$("#mm").css("display","none");
}
);
$(".radio3").click(function(){

$("#zz").css("display","none");
$("#mm").css("display","block");

}
);
// $(document).on('click', '.unitchoice1', function(){
//     var val11=$(this).val();
// //alert(val1);
//     if(val11=="unitSingle" || val11=="multifamily")
//                 {
//                     //alert("yes");
//                 $('.div-units2').css("display","block");
//                 }
//                 else
//                 {
//                 $('.div-units2').css("display","none");
//                 }
//     });
});
</script>

@stop