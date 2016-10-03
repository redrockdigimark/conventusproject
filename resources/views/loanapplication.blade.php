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
        <a class="btn btn-sm btn-success" href="welcome-after-register.php"> Next <i class="fa fa-arrow-right"></i></a>  </div>
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


                        <div class="progress">
<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
aria-valuenow="20" aria-valuemin="20" aria-valuemax="100" style="width:20% !important; min-width:20% !important" 
id="progress-1">20%</div>
</div>
 <div >
                        <h3 class="block text-center">Provide your Property details</h3>
                        <div class="col-md-12">
                         
                          <div class="form-group col-md-12">
                            <div class="row">
                              <div class="col-md-6 col-sm-12">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label class="control-label">Select Country :</label>
                                  </div>
                                  <div class="col-md-8">
                                    <select class="form-control input-medium" id="country" name ="country">
                  <option>US</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label class="control-label">State:</label>
                                  </div>
                                  <div class="col-md-8">
                                    <input type="text" class="form-control input-medium" name ="state" id ="state">
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group col-md-12">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label class="control-label">City</label>
                                  </div>
                                  <div class="col-md-8">
                                    <input type="text" name="city" id="city" class="form-control input-medium">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label class="control-label">Zip code</label>
                                  </div>
                                  <div class="col-md-8">
                                    <input type="text" name="zipcode" id="zipcode" class="form-control input-medium">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group col-md-12">
              <div class="row">
                           <div class="col-md-6"> 
              <div class="row">
                              <div class="col-md-4">
                                <label  class="control-label">Street Address</label>
                              </div>
                              <div class="col-md-8">
                                <textarea name="streetaddress" id="streetaddress" class="form-control input-medium" rows="4"></textarea>
                              </div>
                            </div>
              </div>
              
              
               <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-12">
                
                                <div class="row">
                                  <div class="col-md-4">
                                    <label class="control-label">Current Occupancy<span class="required"> * </span></label>
                                  </div>
                                  <div class="col-md-8">
                                    <div class="radio-list">
                  <ul class="list-inline" style="padding-top:7px;">
                  <li>
                                      <label>
                                      <input type="radio" name="currentOccupancy" value="ownerOccupied" data-title="1" />
                                      Owner Occupied </label>
                                      </li><li><label>
                                      <input type="radio" name="currentOccupancy" value="tenant" data-title="2" />
                                      Tenant </label>
                                      </li><li><label>
                                      <input type="radio" name="currentOccupancy" value="vacant" data-title="2" />
                                      Vacant </label></li></ul>
                                    </div>
                                  </div>
                                </div>
                               <div class="row">
                                  <div class="col-md-12">
                                    <label  class="control-label">
                                    <input type="checkbox" name="checkoccupancy" id="checkoccupancy">
                                    Check if occupancy is to change after closing, </label>
                                  </div>
                                </div>
                </div>
                              <div class="col-md-12 div-occupancy" style="display:none;">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label class="control-label "> Select Occupancy <span class="required"> * </span></label>
                                  </div>
                                  <div class="col-md-8">
                                    <div class="radio-list">
                  <ul class="list-inline" style="padding-top:7px;">
                  <li>
                                      <label>
                                      <input type="radio" name="proposedOccupancy" value="ownerOccupied" data-title="1" />
                                      Owner Occupied </label>
                                      </li><li><label>
                                      <input type="radio" name="proposedOccupancy" value="tenant" data-title="2" />
                                      Tenant </label>
                                      </li><li><label>
                                      <input type="radio" name="proposedOccupancy" value="vacant" data-title="2" />
                                      Vacant </label></li></ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
              
              
              </div>
                          </div>
                           <div class=" col-md-12 form-group">
                            <div class="row">
                              
                              <div class="col-md-6  div-refinance" style="display:none;">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label class="control-label">Year Built</label>
                                  </div>
                                  <div class="col-md-8">
                                    <select name="yearBuilt" class="form-control">
                                      <option value=""></option>
                                      <option value="2016">2016</option>
                                      <option value="2015">2015</option>
                                      <option value="2014">2014</option>
                                      <option value="2013">2013</option>
                                      <option value="2012">2012</option>
                                      <option value="2011">2011</option>
                                      <option value="2010">2010</option>
                                      <option value="2009">2009</option>
                                      <option value="2008">2008</option>
                                      <option value="2007">2007</option>
                                      <option value="2006">2006</option>
                                      <option value="2005">2005</option>
                                      <option value="2004">2004</option>
                                      <option value="2003">2003</option>
                                      <option value="2002">2002</option>
                                      <option value="2001">2001</option>
                                      <option value="2000">2000</option>
                                      <option value="1999">1999</option>
                                      <option value="1998">1998</option>
                                      <option value="1997">1997</option>
                                      <option value="1996">1996</option>
                                      <option value="1995">1995</option>
                                      <option value="1994">1994</option>
                                      <option value="1993">1993</option>
                                      <option value="1992">1992</option>
                                      <option value="1991">1991</option>
                                      <option value="1990">1990</option>
                                      <option value="1989">1989</option>
                                      <option value="1988">1988</option>
                                      <option value="1987">1987</option>
                                      <option value="1986">1986</option>
                                      <option value="1985">1985</option>
                                      <option value="1984">1984</option>
                                      <option value="1983">1983</option>
                                      <option value="1982">1982</option>
                                      <option value="1981">1981</option>
                                      <option value="1980">1980</option>
                                      <option value="1979">1979</option>
                                      <option value="1978">1978</option>
                                      <option value="1977">1977</option>
                                      <option value="1976">1976</option>
                                      <option value="1975">1975</option>
                                      <option value="1974">1974</option>
                                      <option value="1973">1973</option>
                                      <option value="1972">1972</option>
                                      <option value="1971">1971</option>
                                      <option value="1970">1970</option>
                                      <option value="1969">1969</option>
                                      <option value="1968">1968</option>
                                      <option value="1967">1967</option>
                                      <option value="1966">1966</option>
                                      <option value="1965">1965</option>
                                      <option value="1964">1964</option>
                                      <option value="1963">1963</option>
                                      <option value="1962">1962</option>
                                      <option value="1961">1961</option>
                                      <option value="1960">1960</option>
                                      <option value="1959">1959</option>
                                      <option value="1958">1958</option>
                                      <option value="1957">1957</option>
                                      <option value="1956">1956</option>
                                      <option value="1955">1955</option>
                                      <option value="1954">1954</option>
                                      <option value="1953">1953</option>
                                      <option value="1952">1952</option>
                                      <option value="1951">1951</option>
                                      <option value="1950">1950</option>
                                      <option value="1949">1949</option>
                                      <option value="1948">1948</option>
                                      <option value="1947">1947</option>
                                      <option value="1946">1946</option>
                                      <option value="1945">1945</option>
                                      <option value="1944">1944</option>
                                      <option value="1943">1943</option>
                                      <option value="1942">1942</option>
                                      <option value="1941">1941</option>
                                      <option value="1940">1940</option>
                                      <option value="1939">1939</option>
                                      <option value="1938">1938</option>
                                      <option value="1937">1937</option>
                                      <option value="1936">1936</option>
                                      <option value="1935">1935</option>
                                      <option value="1934">1934</option>
                                      <option value="1933">1933</option>
                                      <option value="1932">1932</option>
                                      <option value="1931">1931</option>
                                      <option value="1930">1930</option>
                                      <option value="1929">1929</option>
                                      <option value="1928">1928</option>
                                      <option value="1927">1927</option>
                                      <option value="1926">1926</option>
                                      <option value="1925">1925</option>
                                      <option value="1924">1924</option>
                                      <option value="1923">1923</option>
                                      <option value="1922">1922</option>
                                      <option value="1921">1921</option>
                                      <option value="1920">1920</option>
                                      <option value="1919">1919</option>
                                      <option value="1918">1918</option>
                                      <option value="1917">1917</option>
                                      <option value="1916">1916</option>
                                      <option value="1915">1915</option>
                                      <option value="1914">1914</option>
                                      <option value="1913">1913</option>
                                      <option value="1912">1912</option>
                                      <option value="1911">1911</option>
                                      <option value="1910">1910</option>
                                      <option value="1909">1909</option>
                                      <option value="1908">1908</option>
                                      <option value="1907">1907</option>
                                      <option value="1906">1906</option>
                                      <option value="1905">1905</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 form-group div-refinance" style="display:none;">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label class="control-label"> Year Acquired <span class="required"> * </span> </label>
                                  </div>
                                  <div class="col-md-8">
                                    <input type="text" class="form-control" name="yearAcquired" />
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 div-refinance" style="display:none">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label  class="control-label">No. of Liens to be Re-financed</label>
                                  </div>
                                  <div class="col-md-8">
                                    <select name="nooflien" id="nooflien" class="form-control">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10">10</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group col-md-12">
                            <hr>
                          </div>
                          <div class="form-group col-md-12" id="numberofunits" style="display:none;">
                            <div class="row">
                              <div class="col-md-2">
                                <label class="control-label" style="text-align: right;">No. Of Units</label>
                              </div>
                              <div class="col-md-4">
                                <select name="numberOfUnits" class="form-control input-medium">
                                  <option value="0">0</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                </select>
                              </div>
                            </div>
                          </div>
                         
                         
                          <div class="col-md-12 lienno-div form-group" style="display:none;" > </div>
                          <div class="form-group lienno-div2 form-group col-md-12" style="display:none;" > </div>
                          <div class="form-group div-remain col-md-12" style="display:none;">
                            <label class=" control-label">
                            <input type="checkbox" name="lienalone" id="lienalone">
                            Check if any Lien other Then Alone from Conventus Remain on Title? </label>
                          </div>
                          <div class="form-group lienno-div3 col-md-12"> </div>
                        </div>
                      </div>
                                         
           <div >
                        <h3 class="block">Credit Requested & Property Info</h3>
                        <div class="form-group col-md-12">
                          <label class="control-label col-md-3" style="text-align: left;" >Loan Type</label>
                          <div class="col-md-9 radio-list" >
                            <ul class="list-inline nav nav-pills" style="padding-top:7px;"><li><label>
                            <input type="radio" class="loanType" name="loanChoices1" value="Purchase" />
                            Purchase</label></li>
                            <li><label>
                            <input type="radio" class="loanType" name="loanChoices1" value="Refinance-CashOut"/>
                            Refinance - CashOut</label>
                  </li><li>          <label>
                            <input type="radio" class="loanType" name="loanChoices1" value="Refinance-NoCashOut"/>
                            Refinance - NoCashOut</label></li></ul>
                            <span class="help-block"> Provide your Loan Type. </span> </div>
                        </div>
                        <div class="form-group" id="xx" style="display:none;">
                          <div class="col-md-12">
                            <div class="col-md-3 x tyu2" style="text-align: left;">
                              <label class="control-label ">Enter the Purchase price</label>
                            </div>
                            <div class="col-md-3 tyu">
                              <input class="form-control input-medium" type="text" name="price" id="price" />
                              <span class="help-block" style="color: red"> [* This will be an interest/only amount]</span> </div>
                            <!-- <div class="col-md-4" style="text-align: left;">      

 <label class="control-label" >Enter the requested Loan Amount</label>
 </div>
                                                                <div class="col-md-8">
                                                                   <input class="form-control input-medium" type="text" name="loanAmt" id="loanAmt" />
                                                                   </div> -->
                            <div class="col-md-3" style="text-align: left;">
                              <label class="control-label" >Provide interest Rate in %</label>
                            </div>
                            <div class="col-md-2">
                              <input class="form-control input-medium" type="text" name="interestrate" id="interestrate" maxsize="2"/>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label class="control-label col-md-3" style="text-align: left;" >Loan to Value</label>
                            <div class="col-md-3">
                              <input class="form-control input-medium" type="text" name="loanToValue" id="loanToValue" size="10" />
                            </div>
                          </div>
                          <div class="col-md-12">
                            <hr>
                          </div>
                          <div class="col-md-12">
                            <div class="col-md-6 text-left">
                              <h4>Standard Loan Processing fee</h4>
                            </div>
                            <div class="col-md-6" style="line-height: 1.3; text-align: right; margin-left: -50px;">
                              <button class="btn btn-success">Export</button>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-11 col-xs-11 col-md-11 col-lg-11" style="border: 1px solid #000; margin-left: 15px;">
                              <div class="table-responsive">
                                <table class="table">
                                  <tr>
                                    <th>Option</th>
                                    <th>Amount</th>
                                    <th>Rate</th>
                                  </tr>
                                  <tr>
                                    <td><input type="radio" name="loanprocessing" id="loanprocessing" class="form-control"></td>
                                    <td><input type="text" name="loanpamount" id="loanpamount" class="form-control input-medium" value="0-100k"></td>
                                    <td><input type="text" name="loanprate"  class="form-control loanprate input-medium" value="5%"></td>
                                  </tr>
                                  <tr>
                                    <td><input type="radio" name="loanprocessing" id="loanprocessing" class="form-control"></td>
                                    <td><input type="text" name="loanpamount" id="loanpamount" class="form-control input-medium"  value="100-200k"></td>
                                    <td><input type="text" name="loanpamount"  class="form-control loanprate input-medium" value="7%"></td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <button class="btn btn-success btn-overide">Override</button>
                            </div>
                            <div class="col-md-12 override-div" style="display:none;" >
                              <div class="row">
                                <div class="col-md-12">
                                  <h4>Enter Short and to the point comments about the Custom Pricing</h4>
                                  <label class="control-label col-md-3" style="text-align: left;">Custom Price</label>
                                  <div class="col-md-3">
                                    <input type="text" name="custompricing" id="custompricing" class="form-control input-medium">
                                  </div>
                                  <label class="control-label col-md-3" style="text-align: left;">Exit Fee/Pre payment Penalty</label>
                                  <div class="col-md-3">
                                    <input type="text" name="exitpenalty" id="exitpenalty" class="form-control input-medium">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <hr>
                          </div>
                          <div class="col-md-12">
                            <div class="col-md-3">
                              <label class="control-label">Use Of Loan: </label>
                            </div>
                            <div class="col-md-3 radio-list" id="newcheck">
                              <label>
                              <input type="radio" class="radio1" name="loanChoices" value="fixAndFlip" />
                              Fix and Flip</label>
                              <label>
                              <input type="radio" class="radio3" name="loanChoices" value="rental"/>
                              Finance a rental Property</label>
                              <label>
                              <input type="radio" class="radio2" name="loanChoices" value="wholesaling"/>
                              Wholesaling a Property</label>
                              <label>
                              <input type="radio" class="radio2" name="loanChoices" value="bespokefinancing"/>
                              Bespoke Financing</label>
                              <label>
                              <input type="radio" class="radio2" name="loanChoices" value="others" />
                              Others </label>
                            </div>
                            <div class="col-md-3">
                              <label class="control-label">Property Type: </label>
                            </div>
                            <div class="col-md-3 radio-list">
                              <label>
                              <input class="unitchoice" type="radio" name="propertyType" value="single" />
                              Single family residence</label>
                              <label>
                              <input class="unitchoice" type="radio" name="propertyType" value="unitSingle"/>
                              2-4 unit single family residence</label>
                              <label>
                              <input  class="unitchoice" type="radio" name="propertyType" value="condominium"/>
                              Condominium</label>
                              <label>
                              <input class="unitchoice" type="radio" name="propertyType" value="multifamily" />
                              Multifamily</label>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <hr>
                          </div>
                          <div class="form-group col-md-12" style="display:none;" id="mm">
                            <div class="col-md-3"  style="text-align: left;">
                              <label class="control-label">Enter the Gross Monthly Rent</label>
                            </div>
                            <div class="col-md-3">
                              <input class="form-control input-medium" type="text" name="gross" id="gross" />
                            </div>
                            <div class="col-md-6"></div>
                          </div>
                          <div class="form-group col-md-12" style="display:none;" id="zz">
                            <div class="col-md-3"  style="text-align: left;">
                              <label class="control-label">Enter the Rehab Budget</label>
                            </div>
                            <div class="col-md-3">
                              <input class="form-control input-medium" type="text" name="rehabBudget" id="rehabBudget" />
                            </div>
                            <div class="col-md-3" style="text-align: left;">
                              <label class="control-label">Enter the after Repair Value</label>
                            </div>
                            <div class="col-md-3">
                              <input class="form-control input-medium" type="text" name="afterRepair" id="afterRepair" />
                            </div>
                          </div>
                          <div class="col-md-6" style="text-align: left;">
                            <label class="control-label">Affirm the property being financed is not owner occupied. </label>
                          </div>
                          <div class="col-md-6">
                            <div class="checkbox-list">
                              <label>
                              <input type="checkbox" name="affirm" value="affirmFinance" />
                              </label>
                            </div>
                          </div>
                          <div class="form-group col-md-12">
                            <div class="col-md-3 ">
                              <label class="control-label" style="text-align:left;">Close of escrow Date</label>
                            </div>
                            <div class="col-md-3">
                              <input class="form-control date input-medium" type="date" name="escrow" id="escrow" />
                            </div>
                            <div class="col-md-3"  >
                              <label class="control-label" style="text-align:left;">Escrow Officer information</label>
                            </div>
                            <div class="col-md-3">
                              <select name="escrowofficer" id="escrowofficer" class="form-control input-medium">
                                <option value="o1">Officer 1</option>
                                <option value="o2">Officer 2</option>
                                <option value="o3">Officer 3</option>
                                <option value="o4">Officer 4</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-12"> </div>
                          <div class="col-md-12"> </div>
                          <div class="form-group col-md-12">
                            <div class="col-md-3" >
                              <label class="control-label" style="text-align:left;">Due Date for Documents</label>
                            </div>
                            <div class="col-md-3">
                              <input class="form-control date input-medium" type="date" name="duedate" id="duedate" />
                            </div>
                          </div>
                        </div>
                        <div col-md-12>
                          <hr>
                        </div>
                        <div class="form-group col-md-12">
                          <div class="col-md-3">
                            <label class="control-label"  style="text-align:left;">Borrower's Desired Loan Term <span class="required"> * </span> </label>
                          </div>
                          <div class="col-md-3">
                            <input type="text" class="form-control input-medium" name="desiredloan" id="desiredloan" />
                            <span class="help-block"> (in months) </span> </div>
                         
                        </div>
                        <div class="form-group col-md-12">
                          <label class="control-label col-md-3"  style="text-align:left;">Amortization Type <span class="required"> * </span> </label>
                          <div class="col-md-4">
                            <div class="checkbox-list">
                              <label>
                              <input type="checkbox" name="amortizationType" value="1" data-title="Auto-Pay with this Credit Card." />
                              Balloon </label>
                            </div>
                            <div id="form_payment_error"> </div>
                          </div>
                          <div class="col-md-5"></div>
                        </div>
                        <div class="form-group col-md-12">
                          <label class="control-label col-md-3"  style="text-align:left;">Proposed Exit Strategy for Requested Loan <span class="required"> * </span> </label>
                          <div class="col-md-3">
                            <div class="radio-list">
                              <label>
                              <input type="radio" name="proposedExit" value="1" data-title="1" />
                              Resale </label>
                              <label>
                              <input type="radio" name="proposedExit" value="2" data-title="2" />
                              Refinance </label>
                              <label>
                              <input type="radio" name="proposedExit" value="3" data-title="3" />
                              Principal Pay Down </label>
                              <label>
                              <input type="radio" name="proposedExit" value="others" data-title="2" />
                              Others </label>
                            </div>
                            <div id="form_gender_error"> </div>
                          </div>
                          <label class="control-label col-md-3"  style="text-align:left;">Loan Purpose and Real Property Loan Security Declaration</label>
                          <div class="col-md-3">
                            <textarea class="form-control" rows="3" name="securityDeclaration"></textarea>
                          </div>
                        </div>
                        <div class="form-group col-md-12">
                          <label class="control-label col-md-3"  style="text-align:left;">Vesting (Manner in which title will be held)</label>
                          <div class="col-md-3">
                            <textarea class="form-control" rows="3" name="vesting"></textarea>
                          </div>
                          <label class="control-label col-md-3"  style="text-align:left;">Will additional property be given as collateral by a guarantor, or any person who will not be a Borrower or co-Borrower <span class="required"> * </span> </label>
                          <div class="col-md-3">
                            <div class="radio-list">
                              <label>
                              <input type="radio" name="additionalProperty" value="1" data-title="1" />
                              Yes </label>
                              <label>
                              <input type="radio" name="additionalProperty" value="2" data-title="2" />
                              No </label>
                            </div>
                            <div id="form_gender_error"> </div>
                          </div>
                        </div>
                      </div>
                <div class="col-md-12">     
  <div class="col-md-3">
                    <label class="control-label">Do You need a Loan Approval letter?</label></div>
                     <div class="radio-list col-md-3">
                     <ul class="list-inline" style="padding-top:7px;"><li>
                              <label>
                              <input name="loanapproval" class="loanapproval" value="yes" data-title="1" type="radio">
                              Yes </label></li>
                              <li><label>
                              <input name="loanapproval" class="loanapproval" value="no" data-title="2" type="radio">
                              No </label></li></ul>
                            </div>
                    
                     </div>
 <div class="col-md-12" id="div-loanapproval" style="display: none;">  <em><label style="color: red">"Conventus Representative will contact you to provide a Loan-Approval letter"</label></em></div>
                  </div>
            
                    
                  </div>
                </div>
              </form>
            </div>


       <div class="portlet-title">
              <div class="actions"> 
        <a class="btn btn-sm btn-success" href="welcome-after-register.php"> Next <i class="fa fa-arrow-right"></i></a>  </div>
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
<!-- END THEME LAYOUT SCRIPTS -->
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