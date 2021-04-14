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
$qry="SELECT * FROM user_data";
$rs=mysqli_query($conn,$qry);
?>
<?php include 'navbar.php';?> 
<div class="container">
        <h2 class="text-center pt-4" style="color:black;">View User</h2>
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
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            while($rows=mysqli_fetch_assoc($rs)){
                                ?>
                                <tr style="color:black;">
                                    <td class="py-2"><?php echo $rows['id']?></td>
                                    <td class="py-2"><?php echo $rows['name']?></td>
                                    <td class="py-2"><?php echo $rows['accountno']?></td>
                                    <td class="py-2"><?php echo $rows['balance']?></td>
                                    

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

<br><br><br><br><br>
<?php include 'footer.php'; ?>
</body>
</html>