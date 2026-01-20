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
                        <a class="nav-link" href="index.php"><i class="bi-speedometer2" style="font-size: 1rem; color: rgb(149, 149, 149);"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="project.php"><i class="bi-book" style="font-size: 1rem; color: rgb(149, 149, 149);"></i>Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="teams.php"><i class="bi-speedometer2" style="font-size: 1rem; color: rgb(149, 149, 149);"></i>Teams</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="user.php"><i class="bi-speedometer2" style="font-size: 1rem; color: rgb(149, 149, 149);"></i>Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php"><i class="bi-speedometer2" style="font-size: 1rem; color: rgb(149, 149, 149);"></i>Profile</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <div class="row pt-5">
        <div class="col-lg-10 col-12 offset-lg-1">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">User Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require "connection.php";

                    $user_rs = Database::search("SELECT * FROM `user`");
                    $user_num = $user_rs->num_rows;

                    if ($user_num > 0) {
                        for ($x = 0; $x < $user_num; $x++) {
                            $user_data = $user_rs->fetch_assoc();
                    ?>
                            <tr>
                                <td scope="row"><?php echo $user_data["user_id"]; ?></td>
                                <td><?php echo $user_data["fname"]; ?></td>
                                <td><?php echo $user_data["lname"]; ?></td>
                                <td  id="userEmail"><?php echo $user_data["email"]; ?></td>
                                <td>
                                    <button  class="btn btn-danger col-12" onclick="blockUser('<?php echo $user_data['email']; ?>');">Block</button>
                                </td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <span>Oops! There is no users to show.</span>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>


</body>


</html>