<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking Managament</title>
    <?php include 'link.php'; ?>
    <style>


body {
    background:  #f3f2f2; 
  }
  .row {
    height: 100vh;
  }
  .form {
    background:  #ffffff; 
    border-radius:  4px; 
    box-shadow:  0px 2px 6px -1px rgba(0,0,0,.12);
  }
  .image img {
    width: 220px;
    height: auto;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
  }
  .my-form {
    padding: 2.5rem;
  }
  .my-form h4 {
    color: #92aad0;
  }
  .my-form p {
    font-size: .875rem;
    font-weight: 400;
  }
  .btn {
    background-color: #92aad0;
    right: 0;
  }
  .btn:hover, .btn:active, .btn:focus {
    color: #fff;
  }
  a {
    bottom: 0;
  }
  .space {
  margin-top:35px;
    padding-bottom: 4rem;
  }
  .link {
    font-size: .875rem;
    float: right;
    color: #6582B0;
  }
  .link:hover, .link:active {
    color: #426193;
  }
  @-webkit-keyframes autofill {
    to {
      color: #666;
      background: transparent; } }
  
  @keyframes autofill {
    to {
      color: #666;
      background: transparent; } }
  
  input:-webkit-autofill {
    -webkit-animation-name: autofill;
    animation-name: autofill;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both; }

    </style>
</head>
<!--<body style="background-color: #82E0AA;">-->
<?php include 'navbar.php';?> 

<?php
        include 'db.php';
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $accountno=$_POST['accountno'];
            $balance=$_POST['balance'];
            $sql="insert into user_data(name,accountno,balance)values('{$name}','{$accountno}','{$balance}')";
           
            $result=mysqli_query($conn,$sql);
            if($result){
                echo "<script> alert('Hurray! User Created');
               
        
        
          header('location:viewuser.php');				
        }
      
        ?>
                </script>";
                
            }

        }

    ?>

    <div class="container">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-md-7">
      <div class="form d-flex justify-content-between">
        <div class="image">
          <img src="https://mdbootstrap.com/img/Photos/Others/sidenav2.jpg">
        </div>
     <form action=" " method="post" class="my-form">
          <h4 class="font-weight-bold mb-3">Creat Users</h4>
         
         
          <div class="md-form md-outline">
          <label for="name">Name</label>
          <input class="form-control" type="text" name="name" placeholder="NAME" required>
           
           
          </div>
          <div class="md-form md-outline">
          <label for="name">Account No</label>
          <input class="form-control" type="text" name="accountno" placeholder="ACCOUNT NO" required>
           
           
          </div>
   
          <div class="md-form md-outline">
          <label for="name">Balance</label>
          <input class="form-control" type="number" name="balance" placeholder="BALANCE" required>
           
           
          </div>
   
          <div class="space">
            <div class="float-right">
             
             <!-- <input class="btn btn-info" type="submit" value="Create" name="submit"></input> -->
             <a class="btn btn-success btn-xs" href="viewuser.php?id=<?php echo $row['id'];?> " 
					>Create</a> &nbsp;&nbsp;</td>

          
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div> 
 



   <?php include 'footer.php'; ?>
</body>
</html>