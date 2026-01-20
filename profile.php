<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="script2.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<?php

session_start();

if (isset($_SESSION["a"])) {
    $email = $_SESSION["a"]["email"];
?>



    <body style="background-color: #121316;" onload="loadAdminDetail('<?php echo $email; ?>');">

        <section>
            <nav class="navbar navbar-expand-custom navbar-mainbg">
                <a class="navbar-brand navbar-logo" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars text-white"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <div class="hori-selector">
                            <div class="left"></div>
                            <div class="right"></div>
                        </div>
                        <li class="nav-item ">
                            <a class="nav-link" href="index2.php"><i class="bi-speedometer2" style="font-size: 1rem; color: rgb(149, 149, 149);"></i>Dashboard</a>
                        </li>
                        <li class="nav-item av">
                            <a class="nav-link" href="project.php"><i class="bi-book" style="font-size: 1rem; color: rgb(149, 149, 149);"></i>Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="teams.php"><i class="bi-speedometer2" style="font-size: 1rem; color: rgb(149, 149, 149);"></i>Teams</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="user.php"><i class="bi-speedometer2" style="font-size: 1rem; color: rgb(149, 149, 149);"></i>Users</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="profile.php"><i class="bi-speedometer2" style="font-size: 1rem; color: rgb(149, 149, 149);"></i>Profile</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>

        <div class="row pt-5">
            <div class="container-fluid">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 ps-4 pt-4">
                        <div class="row">
                            <div class="col-lg-10"> <span class="fs-4 pt-6" style="color: #ffffffbb;">Profile</span></div>
                            <div class="col-lg-2 d-grid"> <button class="btn pt-2 text-white pt-2 btn-sm rounded-4 fs-6" style="background-color: #191a1d;" onclick="adminLogout();">Log
                                    Out<i class="bi-box-arrow-right ps-2" style="font-size: 1rem; color: #ffffffbb;"></i></button>
                            </div>
                        </div>


                        <div class="container py-3 h-100" id="adDetail">

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>



        </div>
        </div>

        </div>
        </div>


        <script src="script1.js"></script>
    </body>
<?php

} else {
    header("Lacation:adminSignIn.php");
}

?>


</html>