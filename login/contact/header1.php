<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> -->
        <a class="navbar-brand" href="#">
            <img src="https://minakoumpas.gr/wp-content/uploads/2020/07/minakoumpas-logo.png" width="50" height="50" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Αρχική <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Υπηρεσίες</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  onClick="window.location.href=window.location.href">Επικοινωνία</a>
                </li>
            </ul>
            <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link"  onclick="window.location.href='../login.php'">login</a>
            </li>
            <li class="nav-item">
                <!-- <button  onclick="window.location.href='logout.php'">Logout</button>   -->
                <a class="nav-link"  onclick="window.location.href='../register.php'">Register</a>
                <!-- <a class="nav-link" href="#logout.php">logout</a> -->
            </li>
        </ul>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>