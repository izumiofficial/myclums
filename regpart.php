<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="styles/index.css" rel="stylesheet">
    <title>CLUMS</title>
</head>

<body>
    <form class="form-signin" action="reg.php" method="post">
        <div class="text-center mb-4">
            <h1 class="h3 mb-1 font-weight-bold">MyCLUMS</h1>
            <h1 class="h4 mb-1 font-weight-bold">UiTM Cawangan Sarawak</h1>
        </div>
        
        <div class="form-label-group">
            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Fullname" required autofocus>
            <label for="fullname">Fullname</label>
        </div>
        
        <div class="form-label-group">
            <input type="number" id="nric" name="nric" class="form-control" placeholder="IC Number" required autofocus>
            <label for="nric">IC Number</label>
        </div>
        
        <div class="form-label-group">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
            <label for="email">Email Address</label>
        </div>

        <div class="form-label-group">
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number" required autofocus>
            <label for="phone">Phone Number</label>
        </div>

        <div class="form-label-group">
            <input type="text" id="address" name="address" class="form-control" placeholder="Address" required>
            <label for="address">Address</label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Register</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2022</p>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>