<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row vh-100 vw-100">
            <div class="col-12 d-flex justify-content-center align-items-center" style="background-color: #121316;">
                <!-- <div class="row "> -->
                <div class="col-lg-5 col-10 border border-1 border-white rounded p-4 text-white" style="background-color: #2C2D31;">
                    <span class="fw-bold fs-3 d-flex justify-content-center align-items-center mb-3">Sign Up</span>
                    <div class="row">
                        <div class="d-none" id="alertdiv" role="alert">
                            <div class="row">
                                <i class="bi bi-check-circle-fill col-1" style="color: #7ef86e;"></i>
                                <span class="col-11 alert alert-success p-1 ps-4" id="alertSucc">

                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" d-none " id="alertdivDanger" role="alert">
                            <div class="row">
                                <i class="bi bi-x-circle-fill col-1" style="color: #f86e6e;"></i>
                                <span class="col-11 alert alert-danger  p-1 ps-4" id="alertDan">

                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row " style="color: #6f7071;">
                        <div class="col-lg-6 col-12">
                            <span>First Name</span>
                            <input type="text" class="col-12 p-2 input-background" placeholder="Ex:- Ravindu" id="fname" style="color: #ffffff;">
                        </div>
                        <div class="col-lg-6 col-12">
                            <span>Last Name</span>
                            <input type="text" class="col-12 p-2 input-background" placeholder="Ex:- Bandara" id="lname" style="color: #ffffff;">
                        </div>


                        <div class="col-12 p-2">
                            <span>Email</span>
                            <input type="email" class="col-12 p-2 input-background" placeholder="Ex:- Example@gmail.com" id="email1" style="color: #ffffff;">
                        </div>
                        <div class="col-lg-6 col-12">
                            <span>Password</span>
                            <input type="Password" class="col-12 p-2 input-background" placeholder="Ex:- ********" id="pass1" style="color: #ffffff;">
                        </div>
                        <div class="col-lg-6 col-12">
                            <span>Confirm Password</span>
                            <input type="Password" class="col-12 p-2 input-background" placeholder="Ex:- ********" id="pass2" style="color: #ffffff;">
                        </div>

                        <div class="col-12 mt-4 d-flex justify-content-center">
                            <button class="btn btn-outline-light col-12" onclick="signUp();" style="border-radius: 18px;">Register</button>
                        </div>

                        <span class="mt-3">Alredy have an Account?</span>

                        <div class="col-12 mt-4 d-flex justify-content-center">
                            <button class="btn btn-outline-info col-12" style="border-radius: 18px;">Sign In</button>
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>
            <!-- Model -->

            <!-- Model -->
        </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>