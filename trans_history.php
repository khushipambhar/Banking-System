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
    <link rel="stylesheet" href="style.css">
    <?php include 'link.php';?> 
</head>
<body style="background-color:#8DC3C7;">
<?php
    include 'db.php';

?>

<?php include 'navbar.php';?> 
<div class="container">
        <h2 class="text-center pt-4" style="color:black;">Transction history</h2>
        <br>
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead style="color:black;">
                            <tr>
                                <th  class="text-center ">S.No</th>
                                <th class="text-center ">Sender</th>
                                <th  class="text-center ">Reciver</th>
                                <th  class="text-center ">Amount</th>
                                <th class="text-center ">Date & Time</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        include 'db.php';
                        $sql="Select * from transfer";
                        $query=mysqli_query($conn,$sql);
                            while($rows=mysqli_fetch_assoc($query))
                            {
                                ?>
                                <tr style="color:black;">
                                    <td class="py-2"><?php echo $rows['sno']?></td>
                                    <td class="py-2"><?php echo $rows['sender']?></td>
                                    <td class="py-2"><?php echo $rows['reciver']?></td>
                                    <td class="py-2"><?php echo $rows['balance']?></td>
                                    <td class="py-2"><?php echo $rows['datetime']?></td>
                                   
                                </tr>
                                <?php
                            }
                        ?>
                        </tbody>
                    </table>
                    </div>
        </div>
</div>

<br><br><br><br>
<?php include 'footer.php'; ?>
</html>