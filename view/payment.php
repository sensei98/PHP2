<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT</title>
</head>
<body>
    <?php include 'inc/header.php'?>
    <section class="payment-container" data-router-wrapper>    
        <section class="form-container" data-router-view="payment">
        <h2>payment</h2>
            <form method="post" action="../controller/pay.php">
                <label for="amount">enter amount</label>
                <input type="text" id="amount" name="amount" placeholder="Amount €0.00" pattern="^\d+\.\d{2}$" required>
                <label for="description">description</label>
                <input type="text" placeholder="Description...." name="description" required>
                <section class="btn-payment">
                <button type="submit">make payment</button>
                </section>
            </form>
        </section>    
    </section>
    <script src = "../scripts/scripts.js"></script>
</body>
</html>