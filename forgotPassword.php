<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
                    <span class=" text-white mb-3">Enter Your Email address that associated with your Account and we will send you 
                        verification code to reset your password
                    </span>
                        <div class="col-12">
                            <span class="fw-bold">Email</span>
                            <input type="email" class="col-12 p-2 input-background" id="email2" style="color: #ffffff;">
                        </div>

                        <div class="col-12 mt-4 d-flex justify-content-center">
                            <button class="btn btn-outline-light col-12" onclick="forgotPassword();" style="border-radius: 18px;">Send Code</button>
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