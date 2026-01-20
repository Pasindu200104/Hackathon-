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

<body style="background-color: #121316;">

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
                    <li class="nav-item ">
                        <a class="nav-link" href="project.php"><i class="bi-book" style="font-size: 1rem; color: rgb(149, 149, 149);"></i>Project</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="teams.php"><i class="bi-speedometer2" style="font-size: 1rem; color: rgb(149, 149, 149);"></i>Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user.php"><i class="bi-speedometer2" style="font-size: 1rem; color: rgb(149, 149, 149);"></i>Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php"><i class="bi-speedometer2" style="font-size: 1rem; color: rgb(149, 149, 149);"></i>Profile</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>


    <div style="background-color: #121316;">
        <div class="row container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-sm-flex align-items-baseline report-summary-header">
                        <h5 class="fs-5 fw-bold text-white">Projects</h5>
                        <button id="reloadButton" class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                    </div>
                </div>
            </div>

            <div class="container mt-3">
                <div class="row">
                    <?php
                    require "connection.php";

                    $team_rs = Database::search("SELECT * FROM `teams`");
                    $team_num = $team_rs->num_rows;
                    if ($team_num > 0) {
                        for ($x = 0; $x < $team_num; $x++) {
                            $team_data = $team_rs->fetch_assoc();
                    ?>
                            <div class="col-lg-4 ">
                                <div class="card card-margin" style="background-color: #272727;">
                                    <div class="card-header no-border">
                                        <h5 class="card-title text-white"><?php echo $team_data["team_name"]; ?></h5>
                                    </div>
                                    <!-- <div class="card-body pt-0">
                                        <div class="widget-49">
                                            <div class="widget-49-title-wrapper">
                                                <div class="widget-49-meeting-info">
                                                    <span class="widget-49-pro-title">Deadline</span>
                                                    <span class="widget-49-meeting-time text-white"><?php echo $team_data["deadline"]; ?></span>
                                                </div>
                                            </div>
                                            <div class="widget-49-meeting-action">
                                                <a href="#" class="btn btn-sm btn-flash-border-primary text-white-50">View Status</a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        <?php
                        }
                        ?> 
                        <?php
                        }else{
                            ?>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center align-items-start">
                                    <img src="IMG/web yasi.png" class="col-5">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <span class="fw-bold fs-5 text-white">Oops! There is no teams to show.</span>
                                </div>
                            </div>
                            <?php
                        }
                            ?>

</body>


</html>