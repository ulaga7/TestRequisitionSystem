<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Test Order</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/bookOrder.css">
</head>
<body>
  <!-- top navbar -->
<div class="navs">
    <div class="top-nav pt-3">
        
        <a  href="home.php"><img src="uploads/logo.png" alt=""></a>   
        <h3 class="d-none d-md-block">Type Test Center Siemens Limited</h3>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              UserName
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
      </div>
    </div>
   <div class="next-nav pt-2">
    <ul class="nav justify-content-around">
        <li class="nav-item">
          <a  class="nav-link "  href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" id="link-border" href="BookTestOrder.php">Book Test Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="ViewTestOrders.php">View Test Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="contact.php">Contact Us</a>
        </li>
      </ul>
   </div>
   

</div>
   
<!-- remaining body -->
<div style="padding-top: 155px;" class="px-3 ">
  
  <div class="row">
    <div class="container py-3">
      <form action="" id="regForm" method="post">


<!-- user details tab -->
  <div class=" tab px-2">
    <h1>User Details</h1>
   <p class="d-flex justify-content-end text-danger">Note: Fields marked by * are mandatory.</p>
   <div class="form-group row">
    <label for="nameinput" class="col-sm-12 col-lg-3  col-form-label-lg pl-xl-5">Name <span> *</span></label>
    <div class="col-sm-12 col-lg-9">
      <input type="text" class="form-control form-control-lg" id="nameinput" title="required field"  required>
    </div>
  </div>

  <div class="form-group row">
    <label for="contactinput" class="col-sm-12 col-lg-3  col-form-label-lg  pl-xl-5">Contact No<span> *</span></label>
    <div class="col-sm-12 col-lg-9">
      <input type="text" class="form-control form-control-lg" id="contactinput" title="required field" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="emailinput" class="col-sm-12 col-lg-3  col-form-label-lg pl-xl-5">Email<span> *</span></label>
    <div class="col-sm-12 col-lg-9">
      <input type="email" class="form-control form-control-lg" id="emailinput" title="required field" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="orginput" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Organization<span> *</span></label>
    <div class="col-12 col-lg-9">
      <input type="text" class="form-control form-control-lg" id="orginput" title="required field" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="deptinput" class="col-sm-12 col-lg-3  col-form-label-lg  pl-xl-5">Department</label>
    <div class="col-sm-12 col-lg-9">
      <input type="text" class="form-control form-control-lg" id="deptinput" >
    </div>
  </div>
  <div class="form-group row">
    <label for="addrinput" class="col-sm-12 col-lg-3 col-form-label-lg  pl-xl-5">Address</label>
    <div class="col-sm-12 col-lg-9">
      <input type="text" class="form-control form-control-lg" id="addrinput" >
    </div>
  </div>
  <div class="form-group row">
    <label for="custcodeinput" class="col-sm-12 col-lg-3 col-form-label-lg  pl-xl-5">Customer Code</label>
    <div class="col-sm-12 col-lg-9">
      <input type="text" class="form-control form-control-lg" id="custcodeinput" >
    </div>
  </div>
  </div> 

<!-- product details tab -->
  <div class=" tab px-2">
    <h1>Product Details</h1>
   <p class="d-flex justify-content-end text-danger">Note: Fields marked by * are mandatory.</p>
   <div class="form-group row">
    <label for="prodname" class="col-sm-12 col-lg-3  col-form-label-lg pl-xl-5">Product Name <span> *</span></label>
    <div class="col-sm-12 col-lg-9">
      <input type="text" class="form-control form-control-lg" id="prodname" title="required field" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="prodtype" class="col-sm-12 col-lg-3  col-form-label-lg  pl-xl-5">Type References / MLFBs<span> *</span></label>
    <div class="col-sm-12 col-lg-9">
      <input type="text" class="form-control form-control-lg" id="prodtype" title="required field" required>
    </div>
  </div>
  
 
  <div class="form-group row">
    <label for="manufacturer" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Manufacturer<span> *</span></label>
    <div class="col-12 col-lg-9">
      <input type="text" class="form-control form-control-lg" id="manufacturer" title="required field" required>
    </div>
  </div>

  <!-- option to display additional product details -->
  <div class="form-group row addldetails">
    <label for="manufacturer" class="col-12  col-form-label-lg  pl-xl-5">Do you want to fill additional Product Technical Details?<span> *</span></label>
   
      <div class="form-check col-12">
        <input class="form-check-input" type="radio" name="chkaddl" id="chkYes" value="yes" required>
        <label class="form-check-label mr-5" for="chkYes">
          Yes
        </label>
        <input class="form-check-input" type="radio" name="chkaddl" id="chkNo" value="no" required >
        <label class="form-check-label" for="chkNo">
          No
        </label>
      </div>
    
  </div>

  <!-- additional product details -->
  <div id="additionaldetails" >
    <h1 class="mb-5">Additional Product Details</h1>
    <div class="form-group row">
      <label for="ratedvolt" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Rated Operational Voltage (Ue)<span> *</span></label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="ratedvolt" title="required field" >
      </div>
    </div>
  
    <div class="form-group row">
      <label for="duty" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Utilization Category / Duty<span> *</span></label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="duty" title="required field">
      </div>
    </div>
  
    <div class="form-group row">
      <label for="ratedcurrent" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Rated Operational Current (Ie)<span> *</span></label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="ratedcurrent" title="required field" >
      </div>
    </div>
    <div class="form-group row">
      <label for="supplysystem" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Supply system application </label>
      <div class="col-12 col-lg-9">
        <select class="form-control form-control-lg" id="supplysystem">
          <option>1ph</option>
          <option>3ph</option>
         
        </select>
      </div>
     
    </div>
    <div class="form-group row">
      <label for="poles" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">No. of poles </label>
      <div class="col-12 col-lg-9">
        <select class="form-control form-control-lg" id="poles">
          <option>1P</option>
          <option>1P+N</option>
          <option>2P</option>
          <option>3P</option>
          <option>3P+N</option>
          <option>4P</option>
         
        </select>
      </div>
     
    </div>
  
    <div class="form-group row">
      <label for="breaks" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">No. of breaks per pole</label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="breaks" >
      </div>
    </div>
  
    <div class="form-group row">
      <label for="ratedmaxvolt" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Rated Maximum Operational Voltage (Ue max)</label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="ratedmaxvolt" >
      </div>
    </div>

    <div class="form-group row">
      <label for="ratedthermalI" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Rated Thermal Current (Ith)</label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="ratedthermalI" >
      </div>
    </div>
    <div class="form-group row">
      <label for="ratedenclosedthermalI" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Rated Enclosed Thermal Current (Ithe)</label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="ratedenclosedthermalI" >
      </div>
    </div>
    <div class="form-group row">
      <label for="ratedimpulsevolt" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Rated Impulse Withstand Voltage (Uimp)</label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="ratedimpulsevolt" >
      </div>
    </div>
    <div class="form-group row">
      <label for="ratedinsulationvolt" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Rated Insulation Voltage (Ui)</label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="ratedinsulationvolt" >
      </div>
    </div>

    
    
     
        <div class="form-group d-block d-lg-flex  ">
          <label for="" class="col-12 col-lg-3  col-form-label-lg  pl-xl-3 mr-5">Suitable for Isolation </label>
          <div class="col-12 col-lg-9 pt-2 pl-5">
            <input class="form-check-input" type="radio" name="isolation" id="yes" required>
            <label class="form-check-label mr-5" for="yes">
              Yes
            </label>
            <input class="form-check-input" type="radio" name="isolation" id="no" required >
            <label class="form-check-label" for="no">
              No
            </label>
          </div>
         
        </div>
      
   
    <div class="form-group row">
      <label for="operationmode" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Mode of operation </label>
      <div class="col-12 col-lg-9">
        <select class="form-control form-control-lg" id="operationmode">
          <option>Manual</option>
          <option>Automatic</option>
         
        </select>
      </div>
     
    </div>
    <div class="form-group row">
      <label for="medium" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Interrupting medium </label>
      <div class="col-12 col-lg-9">
        <select class="form-control form-control-lg" id="medium">
          <option>Air</option>
          <option>Vacuum</option>
          <option>Oil</option>
          <option>Other</option>
         
        </select>
      </div>
     
    </div>
    <div class="form-group row">
      <label for="ratedsupplyvolt" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Rated Control Supply Voltage (Us)</label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="ratedsupplyvolt" >
      </div>
    </div>
    <div class="form-group row">
      <label for="enclosure" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Enclosure details</label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="enclosure" >
      </div>
    </div>
    <div class="form-group row">
      <label for="ipcode" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">IP code</label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="ipcode" >
      </div>
    </div>
    <div class="form-group row">
      <label for="coildetails" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Other coil details </label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="coildetails" >
      </div>
    </div>



  </div>


  </div>

  <!-- other product details tab -->
  <div class="tab">
    <h1 >Other Details</h1>
    <p class="d-flex justify-content-end text-danger">Note: Fields marked by * are mandatory.</p>
    <div class="form-group row">
      <label for="standard" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Applicable Standard<span> *</span></label>
      <div class="col-12 col-lg-9">
        <select class="form-control form-control-lg" id="standard" name="standard" title="required field" onchange='checkstd(this.value);' required>
          <option value="dummy">Select one</option>
          <option value="IEC 60947-1">IEC 60947-1</option>
          <option value="IS/IEC 60947-1">IS/IEC 60947-1</option>
          <option value="IEC 60947-2">IEC 60947-2</option>
          <option value="IS/IEC 60947-2">IS/IEC 60947-2</option>
          <option value="IEC 60947-3">IEC 60947-3</option>
          <option value="IEC 60947-4-1">IEC 60947-4-1</option>
          <option value="IS/IEC 60947-4-1">IS/IEC 60947-4-1</option>
          <option value="IEC 60947-5-1">IEC 60947-5-1</option>
          <option value="IS/IEC 60947-5-1">IS/IEC 60947-5-1</option>
          <option value="IEC 60898-1">IEC 60898-1</option>
          <option value="IS/IEC: 60898-1">IS/IEC: 60898-1</option>
          <option value="IEC 60077-2">IEC 60077-2</option>
          <option value="IEC 61008-1">IEC 61008-1</option>
          <option value="IEC 61009-1">IEC 61009-1</option>
          <option value="IS 12640-1">IS 12640-1</option>
          <option value="IS 12640-2">IS 12640-2</option>
          <option value="">any other</option>
        </select>
      </div>
    </div>
    <div style="display: none;" id="otherstd" class="form-group row">
      <label for="otherstandard" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Mention It<span> *</span></label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="otherstandard" name="otherstandard"  >
      </div>
    </div>
    <div class="form-group row">
      <label for="tests" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Fill required tests</label>
      <div class="col-12 col-lg-9">
        <textarea class="form-control" id="tests" rows="3" maxlength="300"></textarea>
      </div>
    </div>
  
  
  </div>
 
  <!-- reporting details tab -->
  <div class="tab">
    <h1 >Reporting Details</h1>
    <p class="d-flex justify-content-end text-danger">Note: Fields marked by * are mandatory.</p>
    <div class="form-group d-block d-lg-flex ml-3 ">
      <label for="" class="col-12 col-lg-3  col-form-label-lg  pl-0 pl-xl-3 mr-5">Test Report required ?<span> *</span></label>
      <div class="col-12 col-lg-9 pt-2 pl-5">
        <input class="form-check-input" type="radio" name="report" id="reportyes" required>
        <label class="form-check-label mr-5" for="reportyes">
          Yes
        </label>
        <input class="form-check-input" type="radio" name="report" id="reportno" required >
        <label class="form-check-label" for="reportno">
          No
        </label>
      </div>
    </div>
    <div class="form-group row">
      <label for="reportcount" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">One Test Report or Separate for each tests </label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="reportcount" >
      </div>
    </div>
    <div class="form-group row">
      <label for="reportrec" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Additional recipient for test report</label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="reportrec" >
      </div>
    </div>
  
  </div>


  <!-- terms and conditions tab -->
  <div class="tab">
    <h1 >Terms & Conditions</h1>
    <p >1. All customer information kept confidential unless required by law, regulators or authorized by contractual agreement.</p>
    <p>2. Samples are accepted with proper name plate only.	</p>
    <p>3. If any additional test required, kindly mention before authorizing final test requisition form.</p>
    <p>4. Testing of samples will be initiated after submission of authorized test requisition form & advance payment (in case of other than Siemens customers).</p>
    <p>5. Measurement uncertainty will be considered for decision rule at approximately confidence level of 95%.</p>
    <p>6. We provide the undertaking that the above-mentioned samples are manufactured by us and if not the NOC from the manufacturer will be submitted along with authorized test request.</p>
    <p>7. Type Test Center Siemens Limited Kalwa will take all possible care in handling the test samples, but the risk of damages in transit or during testing rests with the customer.</p>
    <p>8. Type Test Center Siemens Limited Kalwa will not be responsible for any damage to the samples during loading, unloading, shifting and testing or due to acts of God like fire, accidents, storms, earthquakes etc.</p>
    <p>9. Type Test Center Siemens Limited Kalwa will not be responsible if a test must be postponed because of non-availability of power, malfunctioning of the equipment etc.</p>
    <p>10. In case of any dispute, the decision of CEO of Type Test Center Siemens Limited Kalwa shall be final.</p>
    <p>11. Tested samples must be removed from Type Test Center Siemens Limited Kalwa premises within 30 days from date of issue of test report. In case of samples are not removed within 30 days, applicable demurrage will be charged for next 30 days and thereafter sample will be disposed off.</p>                  
  
    <div class="form-group form-check d-flex justify-content-around">
     
      <label class="form-check-label text-dark" for="terms"> <input type="checkbox" class="form-check-input" id="terms">
        I agree to the terms and conditions</label>
    </div>
  </div>
  

<!-- previous and next buttons -->

  <div class="d-flex justify-content-end">
    <button type="button" id="prevBtn"  class="btn btn-success mr-2" onclick="nextPrev(-1) ">Previous</button>
    <button type="button" id="nextBtn"  class="btn btn-success " onclick="nextPrev(1)">Next</button>
    </div>
 


<!-- step indicator  -->

    <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    </div>



  
  
     </form>
      </div>
     
    
  </div>

 </div>
 

 


 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

 <!-- condition to display additional details -->
 <script type="text/javascript">
  $(function () {
      $("input[name='chkaddl']").click(function () {
          if ($("#chkYes").is(":checked")) {
              $("#additionaldetails").show();
              $("#ratedvolt").attr("required", true);
              $("#duty").attr("required", true);
              $("#ratedcurrent").attr("required", true);
          } else {
              $("#additionaldetails").hide();
              $("#ratedvolt").attr("required", false);
              $("#duty").attr("required", false);
              $("#ratedcurrent").attr("required", false);
          }
      });
  });
</script>

<!-- condition to manually type applicable standard -->
<script type="text/javascript">
  function checkstd(val){
   var element=document.getElementById('otherstd');
   var others=document.querySelector('#otherstandard');
   if(val==''){
     element.style.display='flex';
     others.required=true;
   }
   else{  
     element.style.display='none';
     others.required=false;
   }
  }
  
  </script> 

  <!-- multi tab form validation -->
   <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        
      //condition to show current tab
        function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("tab");
          x[n].style.display = "block";
          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
            document.getElementById("nextBtn").classList.replace("btn-success","btn-danger");
          } else {
            document.getElementById("nextBtn").innerHTML = "Next";
            document.getElementById("nextBtn").classList.replace("btn-danger","btn-success");
          }
           //... and run a function that will display the correct step indicator:
           fixStepIndicator(n)
        }

        // condition to move to next tab
        function nextPrev(n) {
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("tab");
          // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
        }


        // validating all the required inputs in the tabs
        function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("tab");
          y = x[currentTab].getElementsByTagName("input");
          if(currentTab==1){
            var radioButtons = document.getElementsByName("chkaddl");
          for(var i = 0; i < radioButtons.length; i++)
          {
              if(radioButtons[i].checked == true)
              {
                 valid=true;
                 break;
              }
              else{
                valid=false;
              }
          }
           }
         if(currentTab==2){
           var select=document.getElementById("standard");
           if(select.value=="dummy"){
             valid=false;
             select.classList.add("invalid-select");
           }
           else{
             valid=true;
            select.classList.remove("invalid-select");
           }
         }
           if(currentTab==3){
            var radioButtons = document.getElementsByName("report");
          for(var i = 0; i < radioButtons.length; i++)
          {
              if(radioButtons[i].checked == true)
              {
                 valid=true;
                 break;
              }
              else{
                valid=false;
              }
          }
           }
           if(currentTab==4){
             let checkbox=document.getElementById("terms");
             if(checkbox.checked==true)
                  valid=true;
              else
                  valid=false;
           }
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == ""  && y[i].required==true) {
              
              // add an "invalid" class to the field:
              y[i].classList.add("invalid");
              y[i].placeholder="This field is mandatory";
              y[i].classList.add("holder");
              
      
              // and set the current valid status to false
              valid = false;
            }
            else{
              y[i].classList.remove("invalid","holder");
            }
          }
           // If the valid status is true, mark the step as finished and valid:
           if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
           
          }
         
           
          
          return valid; // return the valid status
        }

        // step indicator validation
        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("step");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }
        

</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>