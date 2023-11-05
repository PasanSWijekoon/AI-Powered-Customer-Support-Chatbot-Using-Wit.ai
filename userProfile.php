<?php session_start();
if (isset($_SESSION["u"])) {

    $user = $_SESSION["u"];

    require_once('includes/connection.php');


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>

        <link rel="stylesheet" href="./css/bootstrap.css">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/home.css">
        <link rel="stylesheet" href="./css/chat.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    </head>

    <body>



        <div class="col-12 container-fluid ">
            <div class="row ">




                <div class="col  ">
                    <div class="row">

                        <div class="col-12 p-0 bgcolor2 p-3 ps-lg-0 ps-3 pt-1 vh-100  mobilmsgview  overflow-hidden">

                            <div class="col-12 ">
                                <div class="row justify-content-center align-items-center scr">

                                    <div class="col-12 d-lg-none" style="height: 5vh;">
                                        huij
                                    </div>

                                    <div class="col-12  mobilhedre ">
                                        <div class="row justify-content-center scr">

                                            <div class="col-12  d-flex justify-content-center">
                                                <span class="fs-4 p-2 fw-bold text-white">Thimira Sathsara </span></span>

                                            </div>

                                        </div>
                                    </div>




                                    <div class="col-lg-5 col-12  d-flex justify-content-center align-items-center vh-100  ">

                                        <div class="col-12 bgcolor3 p-2 " style=" border-radius: 25px;">

                                            <div class="row p-2 mb-5 justify-content-center">

                                                <?php

                                                $user_rs = Database::search("SELECT * FROM `user` WHERE `user_id`='" . $user["user_id"] . "'");
                                                $user_data=$user_rs->fetch_assoc();

                                                ?>


                                                <div class="col-12 d-flex justify-content-center mt-5">
                                                    <input type="file" class="form-control d-none " aria-label="file example" accept="image/*" style="border-style:solid ; border-color: green; border-width: 2px;" id="employeeimg" onclick="ChangeprofiImg()();">

                                                    <label for="employeeimg" class="" id="addfoodErr">


                                                        <div class=" " id="imgeView" style="background-image: url('<?php echo($user_data["img_path"]) ?>'); height: 13rem; width: 13rem; background-position: center; background-repeat: no-repeat; background-size: cover; border-radius: 10px; outline: none; border: none; border-style: solid; border-width: 1px; border-color: #979797c7">

                                                        </div>

                                                    </label>

                                                </div>


                                                <div class=" col-11 mt-4">
                                                    <span class=" fs-6 pt-1 mb-2 text-white"> User Name</span>
                                                    <input type="text" class="form-control mt-2 bg-dark text-white" value="<?php echo ($user_data["userName"]) ?>" style="  outline: none; border: none; border-style: solid; border-width: 1px; border-color: #979797c7;" id="uname">
                                                    <span class="text-danger fw-bold" style="font-size: 11px;" id="addfoodErr3"></span>

                                                </div>

                                                <div class=" col-11 mt-4">
                                                    <span class=" fs-6 pt-1 mb-2 text-white"> Email</span>
                                                    <input type="text" class="form-control mt-2 bg-dark text-white" value="<?php echo ($user_data["email"]) ?>" style="  outline: none; border: none; border-style: solid; border-width: 1px; border-color: #979797c7;" id="email">
                                                    <span class="text-danger fw-bold" style="font-size: 11px;" id="addfoodErr3"></span>

                                                </div>

                                                <div class=" col-11 mt-4">
                                                    <span class=" fs-6 pt-1 mb-2 text-white"> Password</span>
                                                    <input type="text" class="form-control mt-2 bg-dark text-white" value="<?php echo ($user_data["password"]) ?>" style="  outline: none; border: none; border-style: solid; border-width: 1px; border-color: #979797c7;" id="pw">
                                                    <span class="text-danger fw-bold" style="font-size: 11px;" id="addfoodErr3"></span>

                                                </div>

                                                <div class="col-12 d-flex justify-content-center mt-3">
                                                    <button class="btn text-white w-25" style="height: 4vh; border-radius: 5%; background-color: #95c08d; margin-top: 5vh;" onclick="userupdate()"> Update</button>
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
        </div>





        <script src=" ./js/./chat.js"></script>
        <script src="js/userprofile.js"></script>
        <script src="js/script.js"></script>

    </body>

    </html>
<?php
} else {
    header("Location: index.php");
}

?>