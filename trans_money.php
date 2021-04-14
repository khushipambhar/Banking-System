<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'link.php';?> 
    
</head>
<body style="background-color:#8DC3C7;">
<?php
include 'db.php';
$sql="SELECT * FROM user_data";
$result=mysqli_query($conn,$sql);
?>

<?php include 'navbar.php';?> 
<div class="container">
        <h2 class="text-center pt-4" style="color:black;">Transfer Money</h2>
        <hr>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead style="color:black;">
                            <tr>
                                <th scope="col" class="text-center py-2">Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">Account No</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                <th scope="col" class="text-center py-2">Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            while($rows=mysqli_fetch_assoc($result)){
                                ?>
                                <tr style="color:black;">
                                    <td class="py-2"><?php echo $rows['id']?></td>
                                    <td class="py-2"><?php echo $rows['name']?></td>
                                    <td class="py-2"><?php echo $rows['accountno']?></td>
                                    <td class="py-2"><?php echo $rows['balance']?></td>
                                    
                                    <td><a href="select_user.php>?id=<?php echo $rows['id'];?>" class="btn btn-info">Transfer</a></td>
                                  
                                </tr>
                                <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

<br><br><br><br>
<?php include 'footer.php'; ?>
</body>
</html>