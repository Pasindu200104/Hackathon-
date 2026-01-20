<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row vh-100 vw-100">
            <div class="col-12 d-flex justify-content-center align-items-center" style="background-color: #121316;">

                <div class="col-lg-5 col-10 border border-1 border-white rounded p-4 text-white" style="background-color: #2C2D31;">
                    <span class="fw-bold fs-3 d-flex justify-content-center align-items-center mb-3">Verification Process</span>

                    <div class="row " style="color: #6f7071;">
                        <span class=" text-white mb-3">We have sent you a verification code to your email,
                            check your email.
                        </span>
                        <div class="row">
                            <div class="row">
                                <div class="d-none" id="verifydiv" role="alert">
                                    <div class="row">
                                        <i class="bi bi-check-circle-fill col-1" style="color: #7ef86e;"></i>
                                        <span class="col-11 alert alert-success p-1 ps-4" id="verifySucc">

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" d-none " id="verifydivDanger" role="alert">
                                    <div class="row">
                                        <i class="bi bi-x-circle-fill col-1" style="color: #f86e6e;"></i>
                                        <span class="col-11 alert alert-danger  p-1 ps-4" id="verifyDan">

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <span class="fw-bold">Enter Verification Code</span>
                            <input type="text" class="col-12 p-2 input-background" id="verify" style="color: #ffffff;">
                        </div>
                        <div class="col-6">
                            <span class="fw-bold">Password</span>
                            <input type="password" class="col-12 p-2 input-background" id="pass3" style="color: #ffffff;">
                        </div>
                        <div class="col-6">
                            <span class="fw-bold">Re type Password</span>
                            <input type="password" class="col-12 p-2 input-background" id="pass4" style="color: #ffffff;">
                        </div>
                        <div class="col-12 mt-4 d-flex justify-content-center">
                            <button class="btn btn-outline-light col-12" style="border-radius: 18px;" onclick="resetPassword();">Reset Password</button>
                        </div>

                    </div>
                </div>


            </div>


        </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>