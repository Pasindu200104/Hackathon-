<?php

require "connection.php";

$email = $_POST["e"];

$rs1 = Database::search("SELECT * FROM `admin` WHERE `email`='" . $email . "'");

if ($rs1->num_rows > 0) {

    $data = $rs1->fetch_assoc();
?>


    <div class="row">
        <div class="col-md-6 row">
            <div class="pb-4">
                <img src="https://marketplace.canva.com/EAFWfovpW84/1/0/1600w/canva-grey-minimalist-simple-instagram-profile-picture-17omMofDN8E.jpg" alt="Your Profile Picture" class="rounded-circle" style="height: 5rem; width: 5rem;">
                <div class="row">
                    <span class="fs-3 ps-3" style="color: #c9cbcd;"><?php echo $data["fname"] . ' ' . $data["lname"]; ?></span>
                    <span class="fs-6 ps-3" style="color: #c9cbcd;"><?php echo $data["email"]; ?></span>
                </div>

            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-md-6 mb-4">

            <div class="form-outline">
                <input type="text" class="form-control text-white" style="background-color: #191a1d; border-color: #191a1d; height: 2.5rem;" id="fname" value="<?php echo $data["fname"]; ?>">

                <label class="form-label fs-6" style=color:#a8a9ab; for="fname">First
                    Name</label>
            </div>

        </div>
        <div class="col-md-6 mb-4">

            <div class="form-outline">
                <input type="text" class="form-control text-white" style="background-color: #191a1d; border-color: #191a1d; border-width: 3px; height: 2.5rem;" id="lname" value="<?php echo $data["lname"]; ?>">

                <label class="form-label fs-6" style=color:#a8a9ab; for="lname">Last
                    Name</label>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4 d-flex align-items-center">

            <div class="form-outline datepicker w-100">
                <input type="email" class="form-control text-white" disabled style="background-color: #191a1d; border-color: #191a1d; border-width: 3px; height: 2.5rem;" id="email" value="<?php echo $email; ?>">

                <label class="form-label fs-6" style=color:#a8a9ab; for="email">Email</label>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-lg-10"> <span class="fs-4 pt-6" style="color: #ffffffbb;">Change
                Password</span></div>
    </div>

    <div class="row pt-3">
        <div class="col-md-6 mb-4 pb-2">



        </div>
        <div class="col-md-6 mb-4 pb-2">

        </div>

        <div class="col-md-6 mb-4 pb-2">

            <div class="form-outline">
                <input type="password" class="form-control text-white" style="background-color: #191a1d; border-color: #191a1d; border-width: 3px; height: 2.5rem;" id="password" value="<?php echo $data["password"]; ?>">
                <label class="form-label fs-6" style=color:#a8a9ab; for="password">
                    Password</label>
            </div>

        </div>
        <div class="col-md-6 mb-4 pb-2">


        </div>
    </div>

    <div class="mt-2 col-3 pt-2">
        <button class="btn pt-2 pt text-white btn-sm rounded-3 fs-6" style="width: 12rem;background-color: #191a1d;" onclick="updateAdminDetail();">Update<i class="bi-pencil-fill ps-2" style="font-size: 0.9rem; color: #ffffffbb;"></i></button>
    </div>



<?php


} else {
    echo ("Somehting went wrong!");
}

?>