<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="IMG/web logo 5.png">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class=" vw-100" style="background-color: #121316;">
                <div class="row col-12 vh-100 d-flex justify-content-center align-items-center">
                    <div class="col-10 border border-1 rounded shadow back-img">
                        <div class="row p-3  d-flex justify-content-center">
                            <div class="row ">
                                <div class="col-lg-4 col-12">
                                    <span class="fw-bold fs-1 text-white"> <img src="IMG/web logo 5.png" class="col-2"> Task<b class="text-info">Master</b></span>
                                </div>
                                <div class="col-lg-3"></div>

                                <div class="col-lg-5 col-12">
                                    <div class="row mt-4 text-white d-flex justify-content-center align-items-center">
                                        <span class="col-lg-4 cus col-12" onclick="changeView1();">Home</span>
                                        <span class="col-lg-4 cus col-12" onclick="changeView2();">About Us</span>
                                        <span class="col-lg-4 cus col-12" onclick="changeView3();">Contact Us</span>
                                    </div>

                                </div>

                            </div>
                            <div class="col-lg-6 col-12">
                                <img src="IMG/hackothon2.png" class="col-10">
                            </div>

                            <!-- Home -->

                            <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center" id="home">
                                <div class="col-12">
                                    <div class="row text-center">
                                        <span class="fs-1 fw-bold text-white mt-3">Welcome</span>
                                    </div><br>
                                    <div class="row">
                                        <span class="fs-6 text-white">We're thrilled to have you here and embark on a journey towards greater
                                            productivity and organization. TaskMaster is more than just a task management
                                            web page, it's your trusted companion for turning chaos into
                                            clarity, deadlines into accomplishments, and goals into reality</span>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-outline-light col-12" style="border-radius: 18px;">Sign In</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-outline-info col-12" style="border-radius: 18px;">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Home -->

                            <!-- About us -->

                            <div class="col-lg-6 col-12 d-none d-flex justify-content-center align-items-center" id="aboutUs">
                                <div class="col-12">
                                    <div class="row text-center">
                                        <span class="fs-1 fw-bold text-white mt-3">About Us</span>
                                    </div><br>
                                    <div class="row">
                                        <span class="fs-6 text-white">We're undergraduates willing to be software engineers &
                                            try to give something new to our society. We made this web to make &
                                            controle, projects & Tasks easier. </span>
                                    </div><br>
                                    <div class="row text-center text-white">
                                        <span class="fw-bold fs-4">Our Team Members</span>
                                    </div>
                                    <div class="row text-white">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-4 d-flex justify-content-center align-items-center">
                                                    <img src="IMG/1682519057355.jpeg" class="col-10 rounded-circle">
                                                </div>
                                                <div class="col-8 d-flex justify-content-start align-items-center">
                                                    <span>Pasindu Dilshan</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">

                                                <div class="col-4 d-flex justify-content-center align-items-center">
                                                    <img src="IMG/WhatsApp Image 2023-10-06 at 00.00.45.jpeg" class="col-10 rounded-circle">
                                                </div>
                                                <div class="col-8 d-flex justify-content-start align-items-center">
                                                    <span>Ravindu Withana</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">

                                                <div class="col-4 d-flex justify-content-center align-items-center">
                                                    <img src="IMG/WhatsApp Image 2023-10-06 at 00.00.06.jpeg" class="col-10 rounded-circle">
                                                </div>
                                                <div class="col-8 d-flex justify-content-start align-items-center">
                                                    <span>Harshitha Ysiru</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">

                                                <div class="col-4 d-flex justify-content-center align-items-center">
                                                    <img src="IMG/WhatsApp Image 2023-10-06 at 00.04.11.jpeg" class="col-10 rounded-circle">
                                                </div>
                                                <div class="col-8 d-flex justify-content-start align-items-center">
                                                    <span>Deneth Hasun</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">

                                                <div class="col-4 d-flex justify-content-center align-items-center">
                                                    <img src="IMG/379744423_1757400274714807_482364233283494094_n.jpg" class="col-10 rounded-circle">
                                                </div>
                                                <div class="col-8 d-flex justify-content-start align-items-center">
                                                    <span>Varshan</span>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- About us -->

                            <!-- contact -->
                            <div class="col-lg-6 col-12  d-none d-flex justify-content-center align-items-center" id="contactUs">
                                <div class="col-12">
                                    <div class="row text-center">
                                        <span class="fs-1 fw-bold text-white mt-3">Contact Us</span>
                                    </div><br>
                                    <div class="row">
                                        <span class="fs-6 text-white">If you want a website for your bussines, we are here to help you,
                                            you can contact us via these methods.
                                        </span>
                                    </div><br>
                                    <div class="row text-white">
                                        <span><i class="bi bi-envelope"></i> dilshanPasindu@gmail.com</span>
                                    </div>
                                    <div class="row text-white">
                                        <span><i class="bi bi-envelope"></i> raviduyashith123@gmail.com</span>
                                    </div>
                                    <div class="row text-white">
                                        <span><i class="bi bi-telephone"></i> +94 70 294 4475</span>
                                    </div>
                                    <div class="row text-white">
                                        <span><i class="bi bi-telephone"></i> +94 76 373 8202</span>
                                    </div>
                                </div>
                            </div>
                            <!-- contact -->

                        </div>
                    </div>
                </div>
                <div class="row fixed-bottom text-center">
                    <div class="fs-6 text-white-50 ">&copy; 2023 ButeHunters || All Rights Reserved</div>
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>