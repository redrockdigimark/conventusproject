@extends('layouts.layout')
@section('header-links')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="/conventus/public/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="/conventus/public/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<style>

.padding-left-0{ padding-left:0;}
.padding-0{ padding:0;}

/*
.btn11{
  background-color: #4A7F00;
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
@-webkit-keyframes glowing {
  0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #4A7F00; -webkit-box-shadow: 0 0 40px #4A7F00; }
  100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
}

@-moz-keyframes glowing {
  0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #4A7F00; -moz-box-shadow: 0 0 40px #4A7F00; }
  100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
}

@-o-keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #4A7F00; box-shadow: 0 0 40px #4A7F00; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}

@keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #4A7F00; box-shadow: 0 0 40px #4A7F00; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}

.btn11 {
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}*/
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
        <a class="btn btn-sm btn-success" href="#">Save & Continue <i class="fa fa-arrow-right"></i></a> 
        <a class="btn btn-sm btn-success" href="javascript:;">
                                                <i class="fa fa-floppy-o"></i> Save & Exit
                                            </a> </div>
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
aria-valuenow="100" aria-valuemin="100" aria-valuemax="100" style="width:100% !important; min-width:100% !important" 
id="progress-1">100%</div>
</div>

 <div class="col-md-12" id="tab11">  


 <div class="col-md-12 form-group " style="margin-bottom: 0px;">                                                             
 <div class="col-md-12 form-group"> <h3>DECLARATIONS</h3></div>
                                                          
                                                              
                                                               <div class="col-md-9 form-group" ><label class="check1" >In the last three years, have you had an ownership interest in real estate?
                                                                  </label>
                                                                </div>



<div class="radio-list col-md-3">



                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="11" value="yes" />&nbsp;Yes </label>
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="11" value="no"  />&nbsp; No </label>
                                                                    </div>
                                                                    </div>
                                                                      
<div class="form-group col-md-12" style="margin-bottom:-12px;">
                                                  <em><h5>If you answered Yes, please answer the following questions:</h5></em>            
                                                            

                                                               <div class="col-md-9 form-group" ><label class="check1" style="padding-left:15px;" >Was the real estate is principle residence (PR), second home (SH), or investment property (IP)? <em>Check all that apply</em> 
                                                                  </label>
                                                                </div>
                                                                    <div class="radio-list col-md-3">
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="22" value="pr" />&nbsp;PR</label>
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="222" value="sh"  />&nbsp;SH</label>
                                                                            <label style="display:inline;">
                                                                            <input type="radio" name="2222" value="ip"  />&nbsp;IP</label>
                                                                    </div>
                                                                   
                                                                    </div>
                                                           
                                                                    <div class="form-group col-md-12" style="margin-bottom:-12px;">
                                                                   
                                                               <div class="col-md-9 form-group">
                                                                   <label class="check1"  style="padding-left:15px;" >Did you hold title to the real estate solely by yourself (S), jointly with your spouse (SP) or jointly with another person (O)? <em>Check all that apply</em> 
                                                                  </label>    </div>
                                                                    <div class="radio-list col-md-3">
                                                       
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="33" value="s" />&nbsp;S</label>
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="333" value="sp"  /> &nbsp;SP</label>
                                                                            <label style="display:inline;">
                                                                            <input type="radio" name="3333" value="o"  />&nbsp;O</label>
                                                                    </div>
                                                                
                  
                                                                  
                                                               
                                                             

                                                                    </div>
                                                                           
                                                                       <div class="form-group col-md-12" style="margin-bottom:-12px;">
                                                                   
                                                               <div class="col-md-9 form-group">
                                                               <label class="check1"  style="padding-left:15px;" >Are there any outstanding judgements against you? 
                                                                  </label>    
                                                               </div>  
                                                                   <div class="radio-list col-md-3">
                                                                    <label style="display:inline;">
                                                                            <input type="radio" name="44" value="yes" />&nbsp;Yes </label>
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="44" value="no"  /> &nbsp;No </label>
                                                                    </div>    

                                                                 </div>
                                                                  <div class="form-group col-md-12" style="margin-bottom:-12px;">
                                                                   
                                                               <div class="col-md-9 form-group">
                                                               <label class="check1"  style="padding-left:15px;" >Have you been declared bankrupt within the past 7 years? 
                                                                  </label>    
                                                               </div>  
                                                                   <div class="radio-list col-md-3">
                                                                    <label style="display:inline;">
                                                                            <input type="radio" name="55" value="yes" />&nbsp;Yes </label>
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="55" value="no"  /> &nbsp;No </label>
                                                                    </div>    

                                                                 </div>
                                                                     <div class="form-group col-md-12" style="margin-bottom:-12px;">
                                                                   
                                                               <div class="col-md-9 form-group">
                                                               <label class="check1"  style="padding-left:15px;" >Are you a party to a lawsuit? 
                                                                  </label>    
                                                               </div>  
                                                                   <div class="radio-list col-md-3">
                                                                    <label style="display:inline;">
                                                                            <input type="radio" name="66" value="yes" />&nbsp;Yes </label>
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="66" value="no"  />&nbsp; No </label>
                                                                    </div>    

                                                                 </div>
                                                                     <div class="form-group col-md-12" style="margin-bottom:-12px;">
                                                                   
                                                               <div class="col-md-9 form-group">
                                                               <label class="check1"  style="padding-left:15px;" >Have you directly or indirectly been obligated or any loan which resulted in foreclosure, transfer of title in lieu for foreclosure or judgement? 
                                                                  </label>    
                                                               </div>  
                                                                   <div class="radio-list col-md-3">
                                                                    <label style="display:inline;">
                                                                            <input type="radio" name="77" value="yes" />&nbsp;Yes </label>
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="77" value="no"  />&nbsp; No </label>
                                                                    </div>    

                                                                 </div>
                                                                     <div class="form-group col-md-12" style="margin-bottom:-12px;">
                                                                   
                                                               <div class="col-md-9 form-group">
                                                               <label class="check1"  style="padding-left:15px;" >Are you presently delinquent or in default on any federal debt or any other loan, mortgage, financial obligation, bond, or loan guarantee? 
                                                                  </label>    
                                                               </div>  
                                                                   <div class="radio-list col-md-3">
                                                                    <label style="display:inline;">
                                                                            <input type="radio" name="88" value="yes" />&nbsp;Yes </label>
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="88" value="no"  />&nbsp; No </label>
                                                                    </div>    

                                                                 </div>
                                                                     <div class="form-group col-md-12" style="margin-bottom:-12px;">
                                                                   
                                                               <div class="col-md-9 form-group">
                                                               <label class="check1"  style="padding-left:15px;" >Are you obligated to pay alimony, child support, or seperate maintenance? 
                                                                  </label>    
                                                               </div>  
                                                                   <div class="radio-list col-md-3">
                                                                    <label style="display:inline;">
                                                                            <input type="radio" name="99" value="yes" />&nbsp;Yes </label>
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="99" value="no"  />&nbsp; No </label>
                                                                    </div>    

                                                                 </div>
                                                                     <div class="form-group col-md-12" style="margin-bottom:-12px;">
                                                                   
                                                               <div class="col-md-9 form-group">
                                                               <label class="check1"  style="padding-left:15px;" >Is any part of the down payment borrowed? 
                                                                  </label>    
                                                               </div>  
                                                                   <div class="radio-list col-md-3">
                                                                    <label style="display:inline;">
                                                                            <input type="radio" name="100" value="yes" />&nbsp;Yes </label>
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="100" value="no"  />&nbsp; No </label>
                                                                    </div>    

                                                                 </div>
                                                                     <div class="form-group col-md-12" style="margin-bottom:-12px;">
                                                                   
                                                               <div class="col-md-9 form-group">
                                                               <label class="check1"  style="padding-left:15px;" >Are you a co-maker or endorser on a note? 
                                                                  </label>    
                                                               </div>  
                                                                   <div class="radio-list col-md-3">
                                                                    <label style="display:inline;">
                                                                            <input type="radio" name="101" value="yes" />&nbsp;Yes </label>
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="101" value="no"  />&nbsp; No </label>
                                                                    </div>    

                                                                 </div>
                                                                     <div class="form-group col-md-12" style="margin-bottom:-12px;">
                                                                   
                                                               <div class="col-md-9 form-group">
                                                               <label class="check1"  style="padding-left:15px;" >Are you a U.S. citizen? 
                                                                  </label>    
                                                               </div>  
                                                                   <div class="radio-list col-md-3">
                                                                    <label style="display:inline;">
                                                                            <input type="radio" name="102" value="yes" />&nbsp;Yes </label>
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="102" value="no"  />&nbsp; No </label>
                                                                    </div>    

                                                                 </div>
                                                                      <div class="form-group col-md-12" style="margin-bottom:-12px;">
                                                                   
                                                               <div class="col-md-9 form-group">
                                                               <label class="check1"  style="padding-left:15px;" >Are you a permanent resident alien? 
                                                                  </label>    
                                                               </div>  
                                                                   <div class="radio-list col-md-3">
                                                                    <label style="display:inline;">
                                                                            <input type="radio" name="103" value="yes" />&nbsp;Yes </label>
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="103" value="no"  /> &nbsp;No </label>
                                                                    </div>    

                                                                 </div>

 <div class="form-group col-md-12" style="margin-bottom:-12px;">
                                                                   
                                                               <div class="col-md-9 form-group">
                                                               <label class="check1"  style="padding-left:15px;" >Do you intend to occupy the property as your primary residence? 
                                                                  </label>    
                                                               </div>  
                                                                   <div class="radio-list col-md-3">
                                                                    <label style="display:inline;">
                                                                            <input type="radio" name="104" value="yes" />&nbsp;Yes </label>
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="104" value="no"  />&nbsp; No </label>
                                                                    </div>    

                                                                 </div>

 <div class="form-group col-md-12" style="margin-bottom:-12px;">
                                                                   
                                                               <div class="col-md-9 form-group">
                                                               <label class="check1"  style="padding-left:15px;" >Have you ever had a Notice of Default or Notice of Rescission filed against you, any entity of yours, or any property in which you had ownership interest? 
                                                                  </label>    
                                                               </div>  
                                                                   <div class="radio-list col-md-3">
                                                                    <label style="display:inline;">
                                                                            <input type="radio" name="105" value="yes" />&nbsp;Yes </label>
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="105" value="no"  />&nbsp; No </label>
                                                                    </div>    

                                                                 </div>

 <div class="form-group col-md-12" style="margin-bottom:-12px;">
                                                                   
                                                               <div class="col-md-9 form-group">
                                                               <label class="check1"  style="padding-left:15px;" >Have you had property foreclosed upon or given title or dead in lieu thereof in the last seven years? 
                                                                  </label>    
                                                               </div>  
                                                                   <div class="radio-list col-md-3">
                                                                    <label style="display:inline;">
                                                                            <input type="radio" name="106" value="yes" />&nbsp;Yes </label>
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="106" value="no"  />&nbsp; No </label>
                                                                    </div>    

                                                                 </div>
                                                                 </div>
                                                  <div class="form-group col-md-12"><hr></div>  
<div class="form-group col-md-12"><h3 class="block" style="padding: 0px; margin-top: -7px;">ACKNOWLEDGEMENT & AGREEMENT</h3>
                                                           <h5 class="block">If completing the Acknowledgement and Agreement, the Loan Applicant must sign below.</h5></div>
                                                        <div class="col-md-12 form-group" id="tab12">

                                                            <div class="form-group">
                                                                <label class="control-label col-md-12" style="text-align:justify;">Each of the undersigned specifically represents to Lender and to Lender's actual or potential agents, brokers, processors, attorneys, insurers, servicers, successors and assigns and agrees and acknowledges that: (1) the information provided in this application is true and correct as of the date set forth opposite my signature and that any intentional or negligent misrepresentation of this information contained in this application may result in civil liability, including monetary damages, to any person who may
suffer any loss due to reliance upon any misrepresentation that I have made on this application, and/or in criminal penalties including, but not limited to, fine or imprisonment or both under the provisions of Title 18, United States Code, Sec. 1001, et seq.; (2) the loan requested pursuant to this application (the "Loan") will be secured by a mortgage or deed of trust on the property described in this application; (3) the property will not be used for any illegal or prohibited purpose or use; (4) all statements made in this application are made for the purpose of obtaining a residential mortgage loan; (5) the property will be occupied as indicated in this application; (6) the Lender, its servicers, successors or assigns may retain the original and/or an electronic record of this application, whether or not the loan is approved; (7) the Lender and its agents, brokers, insurers, servicers, successors and assigns may continuously rely on the information contained in the application, and I am obligated to amend and/or supplement the information provided in this application if any of the material facts that I have represented herein should change prior to closing of the Loan; (8) in the event that my payments on the Loan become delinquent, the Lender, its servicers, successors, or assigns may, in addition to any other rights and remedies that it may have relating to such delinquency, report my name and account information to one or more consumer credit reporting agencies; (9) ownership of the Loan and/or administration of the Loan account may be transferred with such notice as may be required by law; (10) neither Lender nor its agents, brokers, insurers, servicers, successors or assigns has made any representation or warranty, express or implied, to me regarding the property or the condition or value of the property; (11) my transmission of this application as an "electronic record" containing my "electronic signature," as those terms are defined in applicable federal and/or state laws (excluding audio and video recordings), or my facsimile transmission of this application containing a facsimile of my signature, shall be as effective, enforceable and valid as if a paper version of this application were delivered containing my original written signature; (12) Lender will retain this application and any other credit information Lender receives, even if no loan or credit is granted; (13) Lender is authorized by to provide any insurer, lender, or investor, or their successors, with any information and documentation they may request with respect to my/our application, credit or loan; and (14) Lender may rely on the representations set forth herein without verifying the information provided by the borrower.
                                                                   
                                                                </label>
                                                            </div>
                                                          
                                                       </div>
 <div class="form-group col-md-12"><hr></div> 
                                                        <div class="col-md-12 form-group" id="tab13">
                                                            <h3 class="block"  style="padding: 0px; margin-top: -7px;">Information for Government Monitoring Purposes</h3>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-12" style="text-align: justify;">The following information is requested by the Federal Government for certain types of loans related to a dwelling in order to monitor the lender's compliance with equal credit opportunity, fair housing and home mortgage disclosure laws. You are not required to furnish this information, but are encouraged to do so. The law provides that a Lender may not discriminate either on the basis of this information, or on whether you choose to furnish it. If you furnish the information, please provide both ethnicity and race. For race, you may check more than one designation. If you do not furnish ethnicity, race, or sex, under Federal regulations, this lender is required to note the information on the basis of visual observation and surname if you have made this application in person. If you do not wish to furnish the information, please check the box below. (Lender must review the above material to assure that the disclosures satisfy all requirements to which the lender is subject under applicable state law for the particular type of loan applied for.)
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"><b>BORROWER/Guarantor</b>
                                                                 
                                                                </label>
                                                               <div class="checkbox-list" style="padding-left: 13px;" >
                                                                        <label style="display:inline;">
                                                                            <input type="checkbox" name="5" value="iDonnotWish" />&nbsp;I do not wish to furnish this information</label>
                                                            </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3">Ethenticity
                                                                  
                                                                </label>
                                                               <div class="radio-list" style="padding-left: 13px;" >
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="6" value="hispanic" />&nbsp;Hispanic or Latino</label>
                                                                            <label style="display:inline;">
                                                                            <input type="radio" name="6" value="notHispanic" />&nbsp;Not Hispanic or Latino</label>
                                                            </div>
                                                            </div>
                                                           <div class="form-group">
                                                                <label class="control-label col-md-3">Race:
                                                                 
                                                                </label>
                                                               <div class="radio-list" style="padding-left: 13px;" >
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="7" value="american" />&nbsp;American Indian or Asian Alaska Native</label>
                                                                            <label style="display:inline;">
                                                                            <input type="radio" name="7" value="black" />&nbsp;Black or African American</label>
                                                                             <label style="display:inline;">
                                                                            <input type="radio" name="7" value="native" />&nbsp;Native Hawalian or other Pacific</label>
                                                                            <label style="display:inline;">
                                                                            <input type="radio" name="7" value="white" />&nbsp;White</label>
                                                            </div>
                                                            </div>
                                                           <div class="form-group">
                                                                <label class="control-label col-md-3">Sex:
                                                                   
                                                                </label>
                                                               <div class="radio-list" style="padding-left: 13px;" >
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="8" value="male" />&nbsp;Male</label>
                                                                            <label style="display:inline;">
                                                                            <input type="radio" name="8" value="female" />&nbsp;Female</label>
                                                            </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"><b>&nbsp;Co-BORROWER/Guarantor</b>
                                                                    
                                                                </label>
                                                               <div class="radio-list" style="padding-left: 13px;" >
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="9" value="iDonnotWish" />&nbsp;I do not wish to furnish this information</label>
                                                            </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3">Ethenticity
                                                                 
                                                                </label>
                                                               <div class="radio-list" style="padding-left: 13px;" >
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="10" value="hispanic" />Hispanic or Latino</label>
                                                                            <label style="display:inline;">
                                                                            <input type="radio" name="10" value="notHispanic" />Not Hispanic or Latino</label>
                                                            </div>
                                                            </div>
                                                           <div class="form-group">
                                                                <label class="control-label col-md-3">Race:
                                                                   
                                                                </label>
                                                               <div class="radio-list" style="padding-left: 13px;" >
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="11" value="american" />&nbsp;American Indian or Asian Alaska Native</label>
                                                                            <label style="display:inline;">
                                                                            <input type="radio" name="11" value="black" />&nbsp;Black or African American</label>
                                                                             <label style="display:inline;">
                                                                            <input type="radio" name="11" value="native" />&nbsp;Native Hawalian or other Pacific</label>
                                                                            <label style="display:inline;">
                                                                            <input type="radio" name="11" value="white" />&nbsp;White</label>
                                                            </div>
                                                            </div>
                                                           <div class="form-group">
                                                                <label class="control-label col-md-3">Sex:
                                                                   
                                                                </label>
                                                               <div class="radio-list" style="padding-left: 13px;" >
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="12" value="male" />&nbsp;Male</label>
                                                                            <label style="display:inline;">
                                                                            <input type="radio" name="12" value="female" />&nbsp;Female</label>
                                                            </div>
                                                            </div>
                                                            <!-- <div class="form-group">
                                                                <label class="control-label col-md-3" style="padding-left: 8px;">To be completed by loan organizer
                                                                <br/>
                                                                    This information was provided:
                                                                </label>
                                                                <br/>
                                                               <div class="radio-list" style="padding-left: 13px;" >
                                                                        <label style="display:inline;">
                                                                            <input type="radio" name="13" value="face" />In a face-to-face interview</label>
                                                                            <label style="display:inline;">
                                                                            <input type="radio" name="13" value="fax" />By the applicant and submitted by fax or email</label>
                                                                            <label style="display:inline;">
                                                                            <input type="radio" name="13" value="telephone" />In a telephone interview</label>
                                                                            <label style="display:inline;">
                                                                            <input type="radio" name="13" value="emailOrInternet" checked/>By the applicant and submitted via e-mail or the internet</label>
                                                            </div>
                                                            </div>
                                                            <div class="form-group">
 <div class="col-md-6">
                                                                <label class="">Loan Originator's Signature
                                                                   
                                                                </label>

                                                               
                                                                    <input type="text" class="form-control" name="loanOriginator'sSign" style="width: 50%; display:inline; "  />
                                                                  
                                                                </div>
                                                                <div class="col-md-6">
                                                                <label class="">Date:
                                                                   
                                                                </label>

                                                               
                                                                    <input type="text" class="form-control" name="date" style="width: 50%; display:inline; "  />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                                </div>
                                                      
                                                             <div class="form-group">
 <div class="col-md-4">
                                                                <label class="">Loan Originator's Name(print or type)<br/>
                                                                Keith M. Tomao
                                                                   
                                                                </label>

                                                               
                                                                    <input type="text" class="form-control" name="loanOriginator'sName" style="width: 50%; display:inline; "  />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                                <div class="col-md-4">
                                                                <label class="">BRE/CFL Number:
                                                                <br/>60DBO-43745
                                                                    <span class="required"> * </span>
                                                                </label>

                                                               
                                                                    <input type="text" class="form-control" name="bre/cfl" style="width: 50%; display:inline; "  />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                                 <div class="col-md-4">
                                                                <label class="">Loan Originator's Phone Number (including area code)
415-723-0701 / keith@cvlending.com:
                                                                   
                                                                </label>

                                                               
                                                                    <input type="text" class="form-control" name="loanOrgPHNO" style="width: 50%; ""  />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                                </div>

                                                                  <div class="form-group">
 <div class="col-md-4">
                                                                <label class="">Loan Originator's Company's Name<br/>
                                                               Conventus LLC
                                                                   
                                                                </label>

                                                               
                                                                    <input type="text" class="form-control" name="loanOriginator'sName" style="width: 50%;  "  />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                                <div class="col-md-4">
                                                                <label class="">BRE/CFL Number:
                                                                <br/>60DBO-43745
                                                                    
                                                                </label>

                                                               
                                                                    <input type="text" class="form-control" name="bre/cfl" style="width: 50%; display:inline; "  />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                                 <div class="col-md-4">
                                                                <label class="">Loan Origination Company's Address<br/>735 Montgomery Street, Suite 330 <br/>San Francisco, CA 94111
                                                                    
                                                                </label>

                                                               
                                                                    <input type="text" class="form-control" name="loanOrgCompAddr" style="width: 50%; "  />
                                                                   
                                                                </div>
                                                                </div> -->

                                                            
                                                        </div>
                                                         <div class="form-group col-md-12"><hr></div>  
 <div class="col-md-12 form-group" id="tab14">
                                                            <h3 class="block" style="padding: 0px; margin-top: -7px;">THREE DAY APPRAISAL WAIVER</h3>
                                                            </div>
                                                            <div class="col-md-12 form-group" style="border-top: 1px solid #000;border-bottom: 1px solid #000; padding-bottom:5px;" id="tab15">
                                                            <div class="col-md-6" style="border-right: 1px solid #000;">
                                                                <label class="control-label" style="text-align: left;">
                                                                <b>Borrower Name and Address("I", "My")</b>
                                                                </label><br/>
                                                                <textarea class="form-control" rows="2" name="vesting" placeholder="Click or tap here to enter text."></textarea>

                                                                </div>
                                                            <div class="col-md-6" style="padding-left: 50px;">
                                                                <label class="control-label" style="text-align: left;">
                                                                <b>Lender Name and Address</b>
                                                                
                                                                <br/>Conventus LLC<br/>
                                                                735 Montgomery Ave., Suite 330
                                                                <br/>San Francisco, CA 94111</label>
                                                                </div>
                                                               </div>
                                                               <div class="col-md-12 form-group" >

                                                                <label class="control-label" style="text-align: left;">
                                                                <b>Property Address</b>
                                                                </label>
                                                               </div>
                                                               <div class="col-md-12 form-group">

                                                                <textarea class="form-control" rows="2" name="" placeholder="Click or tap here to enter text."></textarea>
                                                               </div>
                                                                <div class="form-group col-md-12">
                                                                <label class="control-label" style="text-align: justify;">By Signing below, I waive my right to receive a copy of the appraisal report for the above-referenced property promptly upon completion or at least three (3) business days prior to the closing of the mortgage, whichever is earlier. This waiver does not affect my right to receive a copy of the appraisal report under the Equal Credit Opportunity Act or other law.
                                                                   
                                                                </label>
                                                                
                                                            </div>





</div>
 </div>
            
                    
              
                </div>
              </form>
            </div>


       <div class="portlet-title">
              <div class="actions" style="float: right;"> 
        <a class="btn btn-sm btn-success text-right" href="#">Save & Continue <i class="fa fa-arrow-right"></i></a> 
        <a class="btn btn-sm btn-success" href="javascript:;">
                                                <i class="fa fa-floppy-o"></i> Save  & Exit
                                            </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- END CONTENT BODY -->
  </div>
  <!-- END CONTENT -->
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
@stop