<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Test Order</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <style>
      .navs{
        z-index: 10!important;
      
          position: fixed;
          width: 100%;
         
      }
       .top-nav{
        background: white;
         display: flex;
         flex-direction: row;
         justify-content: space-between;
         padding-left: 4%;
         padding-right: 4%;
        
      }
      .next-nav{
         
          background-color: #008a99;
          height: 60px;
      }
      .nav a{
         color: white;
     }
      .btn-secondary {
    color: #fff;
    background-color: #007d99;
    border-color: #6c757d;
    font-weight: bolder;
     }
      body{
         
          color: #009999;
      }
     #link-border{
        border: white 2px solid;border-radius: 10px 0 10px 0;background-color: white;color: #007d99;font-weight: bolder;
     }
     .list-group-item {
    border: none;
  
}
.list-group-item-action {

    color: #009999;
    text-align: center;
   
   
    
}
.list-group-item.active {
   
    background-color: #008a99;
    border-color: #008a99;
}
.border {
    border: 3px solid  #008a99!important;
    border-radius: 2px;
}

    .container{
      box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      border: 1px solid white;
      font-weight: bolder;

    }
    .form-group span{
      color: red;
    }
    .form-control {
      border: 1.5px solid #009999;
      
    }
    h1{
      color: #007d99;
      text-align: center;
    }
    .btn{
     
      font-weight: bolder;

    }

    ::placeholder{
    color: #85c8cf !important;
   
    opacity: 1;
  }
    .addldetails{
    text-align: center;
  }
  #additionaldetails{
    display: none;
  }


 
    
  </style>
</head>
<body>
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
   
<div style="padding-top: 155px;" class="px-3 ">
  
  <div class="row">
    <div class="container py-3">
      <form action="testt.php" id="regForm" method="post">



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

  <div id="additionaldetails" >
    <h1 class="mb-5">Additional Product Details</h1>
    <div class="form-group row">
      <label for="ratedvolt" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Rated Operational Voltage (Ue)<span> *</span></label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="ratedvolt" title="required field" required>
      </div>
    </div>
  
    <div class="form-group row">
      <label for="duty" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Utilization Category / Duty<span> *</span></label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="duty" title="required field" required>
      </div>
    </div>
  
    <div class="form-group row">
      <label for="ratedcurrent" class="col-12 col-lg-3 col-form-label-lg  pl-xl-5">Rated Operational Current (Ie)<span> *</span></label>
      <div class="col-12 col-lg-9">
        <input type="text" class="form-control form-control-lg" id="ratedcurrent" title="required field" required>
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


 





  <div class="d-flex justify-content-end">
    <button type="button" id="prevBtn"  class="btn btn-success mr-2" onclick="nextPrev(-1) ">Previous</button>
    <button type="button" id="nextBtn"  class="btn btn-success " onclick="nextPrev(1)">Next</button>
    </div>
 




  
   
  




  




     </form>
      </div>
     
    
  </div>

 </div>
 

 


 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 <script type="text/javascript">
  $(function () {
      $("input[name='chkaddl']").click(function () {
          if ($("#chkYes").is(":checked")) {
              $("#additionaldetails").show();
             
          } else {
              $("#additionaldetails").hide();
              $('#ratedvolt').removeAttr('required');
              $('#duty').removeAttr('required');
              $('#ratedcurrent').removeAttr('required');
          }
      });
  });
</script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>