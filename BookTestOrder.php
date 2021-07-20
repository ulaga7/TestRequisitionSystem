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
      border: 1px solid #009999;
      
    }
    h2{
      color: #007d99;
      text-align: center;
    }
    .btn{
     
      font-weight: bolder;

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
      <form action="" id="regForm" method="post">



  <div class=" tab">
    <h2>User Details</h2>
   <p class="d-flex justify-content-end text-danger">Note: Fields marked by * are mandatory.</p>
   <div class="form-group row">
    <label for="nameinput" class="col-sm-12 col-lg-3  col-form-label-lg pl-xl-5">Name <span> *</span></label>
    <div class="col-sm-12 col-lg-9">
      <input type="text" class="form-control form-control-lg" id="nameinput" title="required field">
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




  



  





  <div class="d-flex justify-content-end">
    <button type="button" id="prevBtn"  class="btn btn-success mr-2" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn"  class="btn btn-success " onclick="nextPrev(1)">Next</button>
    </div>
 




 





  




     </form>
      </div>
     
    
  </div>

 </div>
 

    
   
   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>