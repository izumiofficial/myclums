<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="styles/index.css" rel="stylesheet">
    <title>CLMS</title>
</head>

<body>
    <form class="form-signin" action="login.php" method="post">
        <div class="text-center mb-4">
            <img class="mb-4" src="icon.png" alt="" width="150" height="150">
            <h1 class="h3 mb-1 font-weight-bold">MyCLUMS</h1>
            <h1 class="h4 mb-1 font-weight-bold">UiTM Cawangan Sarawak</h1>
        </div>

        <div class="form-label-group">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputEmail">Email address</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <label for="inputPassword">Password</label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
        <a class="btn btn-lg btn-info btn-block" href="regpart.php">Register</a>
        <a class="btn btn-sm btn-link btn-block" style="" href="staff/login.php" target="_blank">Staff Site</a>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2022</p>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>