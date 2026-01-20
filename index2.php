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

    <section class="container-fluid">
        <nav class="navbar navbar-expand-custom navbar-mainbg">
            <a class="navbar-brand navbar-logo" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector">
                        <div class="left"></div>
                        <div class="right"></div>
                    </div>
                    <li class="nav-item active">
                        <a class="nav-link" href="index2.php"><i class="bi-speedometer2" style="font-size: 1rem; color: rgb(149, 149, 149);"></i>Dashboard</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="project.php"><i class="bi-book" style="font-size: 1rem; color: rgb(149, 149, 149);"></i>Project</a>
                    </li>
                    <li class="nav-item">
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

    <section class="container">
        <div class="row pt-4 d-flex justify-content-center">
            <div class="col-lg-3  me-5 rounded" style="background-color: #202124;">
                <span class="fs-5 text-white">On Going projects</span><br>
                <?php
                require "connection.php";

                $projects_rs1 = Database::search("SELECT * FROM `project` INNER JOIN `status` 
                ON `status`.`status_id` = `project`.`status_status_id` WHERE `status`.`status_id`='1'");
                ?>
                <span class="justify-content-center text-white d-flex fs-2"><?php echo $projects_rs1->num_rows; ?></span>
            </div>
            <div class="col-lg-3 me-5 rounded" style="background-color: #202124;">
                <span class="fs-5 text-white">Pending Projects</span><br>

                <?php
                $projects_rs2 = Database::search("SELECT * FROM `project` INNER JOIN `status` 
                         ON `status`.`status_id` = `project`.`status_status_id` WHERE `status`.`status_id`='2'");
                ?>
                <span class="justify-content-center text-white d-flex fs-2"><?php echo $projects_rs2->num_rows;  ?></span>
            </div>
            <div class="col-lg-3 me-5 rounded" style="background-color: #202124;">
                <span class="fs-5 text-white">Completed Projects</span><br>

                <?php
                $projects_rs3 = Database::search("SELECT * FROM `project` INNER JOIN `status` 
                        ON `status`.`status_id` = `project`.`status_status_id` WHERE `status`.`status_id`='3'");
                ?>
                <span class="justify-content-center text-white d-flex fs-2"><?php echo $projects_rs3->num_rows;  ?></span>
            </div>

        </div>
        <div class="row pt-4 d-flex  justify-content-center">
            <div class="col-lg-3 me-5 rounded" style="background-color: #202124;">
                <span class="fs-5 text-white">Total Users</span><br>
                <?php
                $projects_rs4 = Database::search("SELECT * FROM `user`");
                $projects_num1 = $projects_rs4 -> num_rows;
                ?>
                <span class="justify-content-center text-white d-flex fs-2"><?php echo $projects_num1;  ?></span>
            </div>
            <div class="col-lg-3 me-5 rounded" style="background-color: #202124;">
                <span class="fs-5 text-white">Total Teams</span><br>
                <?php
                $projects_rs5 = Database::search("SELECT * FROM `teams`");
                $projects_num2 = $projects_rs5 -> num_rows;
                ?>
                <span class="justify-content-center text-white d-flex fs-2"><?php echo $projects_num2;  ?></span>
            </div>
            <div class="col-lg-3 me-5 rounded" style="background-color: #202124;">
                <span class="fs-5 text-white">Toal Projects</span><br>
                <?php
                $projects_rs6 = Database::search("SELECT * FROM `project`");
                $projects_num3 = $projects_rs6 -> num_rows;
                ?>
                <span class="justify-content-center text-white d-flex fs-2"><?php echo $projects_num3;  ?></span>
            </div>

        </div>
    </section>

    <section class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <div id="donutchart" style="width: 900px; height: 500px;"></div>

        </div>
    </section>


    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        var one = '<?php echo $projects_rs1->num_rows; ?>';
        var two = '<?php echo $projects_rs1->num_rows; ?>';
        var three = '<?php echo $projects_rs1->num_rows; ?>';
        function drawChart() {
            var text1 = parseInt(one);
            var text2 = parseInt(two);
            var text3 = parseInt(three);
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Projects', text1],
                ['Done', text2],
                ['To Do', text3],
                
            ]);

            var options = {
                pieHole: 0.4,
                backgroundColor: 'transparent',

            };
            options: {
                responsive: true
            }

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>

</body>


</html>