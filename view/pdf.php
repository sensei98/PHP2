<?php include 'inc/header.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS(bootstrap) only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
            crossorigin="anonymous">
    <title>PDF FORM</title>

</head>
<body>
    <main data-router-wrapper>
        <section class="container mt-5" data-router-view="pdf">

            <form action="../../PHP-2/controller/generatePDF.php" method="post" class="offset-md-3 col-md-6">
                <h2>Create your own PDF</h2>  
                <p>Fill out details below and PDF will be downloaded</p>   

                <section class="row mb-2">
                    <div class="col-md-6"><input type="text" name="fname" placeholder="First Name" class="form-control" required></div>
                    <div class="col-md-6"><input type="text" name="lname" placeholder="Last Name" class="form-control" required></div>
                </section>
                
                
                <section class="mb-2"><input type="email" name="email" placeholder="Email" class="form-control" required></section>
                <section class="mb-2"><input type="tel" name="phone" placeholder="Phone" class="form-control" required></section>
                <section class="mb-2"><textarea name="message" placeholder="Your Message" class="form-control"></textarea></section>
                <button type="submit" class="btn btn-success btn-lg btn-block">Create PDF</button>
            </form>
        </section>
    </main>
    <script src = "../scripts/scripts.js"></script>


</body>
</html>