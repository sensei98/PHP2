<?php include './inc/header.php';
      include '../model/confirm_model.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>
    <main data-router-wrapper>
        <section class="confirmation-container" data-router-view="confirm">
            <h2>confirmation page</h2>
            <span>Thank you for shopping with us</span>

            <section class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Status</th>
                            <th>Timestamp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $contr = new ConfirmContr();
                        $data = $contr->getAllPayments(); 
                        
                        foreach($data as $row){ ?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['status']?></td>
                            <td><?php echo $row['timestamp']?></td>
                        </tr>

                        <?php } ?>
                        
                    </tbody>
                </table>
            </section>
        </section>
    </main>
    <script src = "../scripts/scripts.js"></script>
    
</body>
</html>