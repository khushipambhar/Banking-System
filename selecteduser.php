<?php

include 'db.php';
var_dump($_GET);
if(isset($_POST['submit']))
{
    $from=$_GET['id'];
    $to=$_POST['to'];
    $amount=$_POST['amount'];

    $sql="SELECT * FROM user_data where id=$from";
    $query=mysqli_query($conn,$sql);
    $sql1=mysqli_fetch_assoc($query);

    $sql="SELECT * FROM user_data where id=$to";
    $query=mysqli_query($conn,$sql);
    $sql2=mysqli_fetch_assoc($query);

    if(($amount)<0)
    {
        echo '<script type="text/javascript">';
        echo 'alert("Oops! Negative values cannot be trannsfered")';
        echo '</script>';

    }
    else if($amount>$sql1['balance'])
    {
        echo '<script type="text/javascript">';
        echo 'alert("Bad Luck! Insufficent Balanace")';
        echo '</script>';

    }
    else if($amount==0)
    {
        echo '<script type="text/javascript">';
        echo 'alert("Oops!Zero value cannot be transfered")';
        echo '</script>';

    }
    else{
        $newbalance=$sql1['balance']-$amount;
        $sql="UPDATE user_data set balance=$newbalance where id=$from";
        mysqli_query($conn,$sql);

        $newbalance=$sql2['balance']+$amount;
        $sql="UPDATE user_data set balance=$newbalance where id=$to";
        mysqli_query($conn,$sql);

        $sender=$sql1['name'];
        $reciver=$sql2['name'];
        $sql="INSERT INTO transfer('sender','reciver','balance')VALUES('$sender','$reciver','$newbalance)";
        $query=mysqli_query($conn,$sql);
        
        if($query){
            echo "<script> alert('Transction successful');
                window.location='trans_history.php';
                </script>";
        }
        $newbalance=0;
        $amount=0;

    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'link.php';?> 
    <style>
       button{
           border:none;
            background:#d9d9d9;
    } 
    button:hover{
        background-color:#777E88;
        transfrom:scale(1.1);
        color:white;
    }

    </style>
</head>
<body style="background-color:#8DC3C7;">
    <?php include 'navbar.php'?>

    <div class="container">
        <h2 class="text-center pt-4" style="color:black;">Transaction</h2>
        <?php
            include 'db.php';
            $sid=$_GET['id'];
            $sql="SELECT * FROM user_data where id=$sid";
            $result=mysqli_query($conn,$sql);
            if(!$result)
            {
                echo "Error :".$sql."<br>" .mysqli_error($conn);

            }
            $rows=mysqli_fetch_assoc($result);
?>
<form name="tcredit" class="tabletext" method="post"><br>
<div>
<table class="table table-striped table-condensed table-bordered">
            <tr style="color:black;">
            <th  class="text-center ">Id</th>
            <th class="text-center ">Name</th>
            <th  class="text-center ">AccountNo</th>
            <th  class="text-center ">Balance</th>
            </tr>
            <tr style="color:black;">
            <td class="py-2"><?php echo $rows['id']?></td>
            <td class="py-2"><?php echo $rows['name']?></td>
            <td class="py-2"><?php echo $rows['accountno']?></td>
            <td class="py-2"><?php echo $rows['balance']?></td>
            
            </tr>
        </table>
    </div> 
    <br><br><br>
    <lable style="color:black;"><b>Transfer To:</b></lable>
    <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'db.php';
                $sid=$_GET['id'];
                $sql="Select * from user_data where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error" .$sql. "<br>" .mysqli_error($conn);
                    
                    
                }
                while($rows=mysqli_fetch_assoc($result)){
            ?>
                    <option class="table" value="<?php echo $rows['id'];?>">
                    <?php echo $rows['name'];?>(Balance:
                    <?php echo $rows['balance'];?>)
                </option>
                <?php 
                }
                ?>
                <div>
                </select>
                <br>
                <br>
                <label style="color:black;"><b>Amount</b></label>
                <input type="number" class="form-control" name="amount" required>
                <br><br>
                <div class="text-center">
                    <button class="btn mt-3" name="submit" type="submit" id="myBtn">Transfer</button>
                </div>
                </form>
                </div>       
<?php include 'footer.php';?>
  
</body>
</html>

?>