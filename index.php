<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
<?php include 'link.php'; ?>
</head>
<?php include 'navbar.php';?> 
<body>
  
    <!--banner section-->
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="promo-title">Basic Banking System</p>
                    <p class="p">A basic banking system for making transctionsbetween users</p>
                    <a href="#services" class="btn btn-primary">Get Started</a>
                </div>
           
                    <div class="col-md-6 text-center">
                        <img src="img/img.jpg" class="img-fluid">
                    </div>
                </div>
        </div>
    </section> 
<div id="about">
    <section id="about-us">
       <div class="container">
        <h1 class="title text-center">WHY CHOOSE US?</h1>
        <br><br>
            <div class="row">
              
                <div class="col-md-6">
                  <img src="img/aboutimg.jpg" class="img-fluid">
                 </div>   
                    <div class="col-md-6">
                      
                      <p class="promo-title">TSF Bank</p>
                      <p class="p">It is a basic banking system for making transctions between users.
                        It can transfer money between multiple accounts,View all customer's date
                      and view all the past transctions happed between multiple accounts </p>
                     
             
                    </div>
                </div>
        </div>
    </section> 
  </div>
    <!------Services section------>
 <br><br>
    <div id="services">
     <div class="container text-center">
     <h1 class="title">WHAT WE CAN DO?</h1>
     <br><br><br>
     
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <img src="img/user_1.webp" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">View Customers</h5>
              <p class="card-text">View all customers data</p>
              <a href="viewuser.php" class="btn btn-primary">View Customers</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="img/sh.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">View Transctions</h5>
              <p class="card-text">View all past transctions happend between two users</p>
              <a href="trans_history.php" class="btn btn-primary">View Transctions</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="img/money1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Transfer Money</h5>
              <p class="card-text">Transfer Money between multiple accounts</p>
              <a href="trans_money.php" class="btn btn-primary">Transfer Money</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
  </div> 
  <div id="contact">
    <div class="container text-center">
      <h1 class="title">CONTACT</h1>
      <br><br>
      <div class="container"></div>
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
         
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
         
          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      
      <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
  </div>
</div>
</div>
<br><br><br>
<?php include 'footer.php'; ?>
</div>
</body>
</html>