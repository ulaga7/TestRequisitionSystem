<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <style>
      .navs{
          position: fixed;
          width: 100%;
         
      }
       .top-nav{
         background-color: white;
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
              <a class="dropdown-item" href="#">My profile</a>
              <a class="dropdown-item" href="#">Logout</a>
              <a class="dropdown-item" href="#">Another Action</a>
            </div>
      </div>
    </div>
   <div class="next-nav pt-2">
    <ul class="nav justify-content-around">
        <li class="nav-item">
          <a  class="nav-link "  href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="BookTestOrder.php">Book Test Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="link-border"  href="ViewTestOrders.php">View Test Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="contact.php">Contact Us</a>
        </li>
      </ul>
   </div>
   

</div>
   


    
   
   
       
     
        

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>