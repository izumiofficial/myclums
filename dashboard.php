<?php
session_start();
include("dbconn.php");

$sqlUser = $_GET['pid'];

$sql = "SELECT * FROM participant WHERE pid='$sqlUser'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="styles/dashboard.css">

    <title>CLUMS::HOME</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Unit Jaringan Komuniti</a>
        <div class="btn-group ml-auto">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">Register Program</button>
                <button class="dropdown-item" type="button">Update Status</button>
                <div class="dropdown-divider"></div>
                <button class="dropdown-item text-danger" type="button">Log out</button>
            </div>
        </div>
    </nav>

    <div class="mx-auto col-md-7 mt-4">
        <div class="row row-cols-2 row-cols-md-2">
            <div class="col mb-4">
                <div class="card h-100 bg-info text-white">
                    <div class="card-body">
                        <h6 class="card-title">Profile</h6>
                        <h1 class="h4 card-title" style="font-size: 5vw;"><?php echo $row['fullname']; ?></h1>
                        <a href="profile.php?pid=<?php echo $row['pid']; ?>" class="stretched-link text-white"></a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100 bg-info text-white">
                    <div class="card-body">
                        <h6 class="card-title">Program Joined</h6>
                        <h1 class="card-title">0</h1>
                        <a href="program.html" class="stretched-link text-white disabled"></a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100 bg-primary text-white">
                    <div class="card-body">
                        <h6 class="card-title">Badges Collected</h6>
                        <h1 class="card-title">0</h1>
                        <a href="#" class="stretched-link text-white" data-toggle="modal" data-target="#badges"></a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100 bg-dark text-white">
                    <div class="card-body">
                        <h6 class="card-title">Certificate(s)</h6>
                        <h1 class="card-title">0</h1>
                        <a href="#" class="stretched-link text-white" data-toggle="modal" data-target="#cert"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto col-md-7">
        <div class="card bg-light mb-3">
            <div class="card-body">
                <h5 class="card-title">My Status</h5>
                <p class="card-text">See all your achevement here where it will be your story of success in the future.</p>
                <a href="status.php?pid=<?php echo $row['pid']; ?>" class="stretched-link">View</a>
            </div>
        </div>
    </div>

    <!-- Modal badges -->
    <div class="modal fade" id="badges" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="h5" style="text-align: center;">No badges were given or provided.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal cert -->
    <div class="modal fade" id="cert" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="h5" style="text-align: center;">No certifications were given or provided.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal cert -->
    <div class="modal fade" id="cert" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="h5" style="text-align: center;">No certification were issued.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- The actual snackbar -->
    <div id="snackbar"></div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <script>
        //function myFunction() {
            // Get the snackbar DIV
            //var x = document.getElementById("snackbar");

            // Add the "show" class to DIV
            //x.className = "show";

            // After 3 seconds, remove the show class from DIV
            //setTimeout(function() {
                //x.className = x.className.replace("show", "");
            //}, 3000);
        //}
        $(function() {
            $.snackbar({content: "Coming Soon", timeout: 5000});
        });
    </script>
</body>

</html>