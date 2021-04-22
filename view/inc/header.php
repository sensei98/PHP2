<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="../../PHP-2/public/css/style.css">
    <link rel="stylesheet" href="../../PHP-1//view//css/style.css">
    <title>Header</title>
</head>
<body>
    <section class= "nav-container">
        <ul>
            <li><a href ="../../PHP-2/view/gallery.php">Gallery</a></li>
            <li><a href ="../../PHP-1/view/home.php">Users</a></li>
            <li><a href ="../../PHP-2/view/pdf.php">PDF</a></li>
            <li><a href ="../../PHP-2/view/payment.php">Payment</a></li>
            <li><a href ="../../PHP-2/view/socialMediaFeed.php">Twitter Feed</a></li>
            
            <input class="logout-btn " type="button" onClick="location.href = '../../PHP-1/controller/logout.php';" value="Logout">
        </ul>
    </section>
    <script src = "../scripts/scripts.js"></script>
</body>
</html>