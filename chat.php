<?php
session_start();
if (isset($_SESSION["u"])) {

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

        <?php require_once('includes/connection.php'); ?>

        <div class="col-12 container-fluid ">
            <div class="row ">


                <div class="col-2 bgtext1 chatanimation bgcolor2   " id="navbar" style="z-index: 9999;">
                    <div class="col-12  pe-0">


                        <div class="col-12 d-grid d-lg-none d-block d-flex justify-content-end pt-2">
                            <button class="btn p-1" onclick="navbarhide2();">
                                <i class="fa-solid fa-xmark fs-4 text-white "></i>

                            </button>
                        </div>

                        <div class="row d-lg-none p-3 pe-1 pt-0 pt-lg-3" id="navbarbody1">
                            <div class="col-10   p-1 pt-2 d-flex justify-content-center " style="border-style: solid; border-color:#979797c7; border-width: 1px;">
                                <i class="fa-solid fa-plus fs-4 text-white-50 pt-1"></i>
                                &nbsp;
                                &nbsp;
                                <span class="text-white fs-5">Frequently-Asked Questions,</span>
                            </div>

                            <div class="col-2  d-none d-lg-block d-flex justify-content-end ">
                                <div class="col-12 p-2  d-flex align-items-center justify-content-center " onclick="navbarhide();">
                                    <button class="btn">
                                        <i class="fa-solid fa-bars-staggered text-white fs-3"></i>
                                    </button>
                                    <!-- <i class="fa-solid fa-caret-left text-white fs-5 p-1"></i> -->

                                </div>

                            </div>
                            <div class="col-lg-10 col-11  p-2  mt-3  navbarmainmsgdiv">


                                <?php
                                $rs = Database::search("SELECT * FROM `faq_table`");

                                for ($x = 0; $x < $rs->num_rows; $x++) {

                                    $data = $rs->fetch_assoc();

                                ?>

                                    <div class="col-12 mt-3 mb-3 bg-dark p-3" style="border-radius: 25px 25px 25px 25px;">
                                        <div class="row">
                                            <div class="col-11">
                                                <label for="" class="fs-6 textcolor2" style="cursor: pointer;" onclick='fAQLoadToInput(<?php echo json_encode($data["question"]); ?>);'><?php echo $data["question"]; ?></label>
                                            </div>
                                            <div class="col-1 d-flex justify-content-center align-items-center p-2 ">
                                                <i class="fa-solid fa-plus text-white-50 fs-3"></i>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                }
                                ?>

                            </div>
                        </div>

                        <div class="col-12   p-1 pt-3 d-none d-lg-block" id="navbar2">
                            <div class="col-12  p-2  mt-2  " onclick="navbarviwe();">
                                <button class="btn">
                                    <i class="fa-solid fa-bars text-white fs-2"></i>

                                </button>
                                <!-- <i class="fa-solid fa-caret-right "></i> -->

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col  ">
                    <div class="row">

                        <div class="col-12 p-0 bgcolor2 p-3 ps-lg-0 ps-3 pt-1 vh-100  mobilmsgview ">

                            <div class="col-12 ">
                                <div class="row justify-content-center scr">

                                    <div class="col-12 d-lg-none" style="height: 5vh;">
                                        huij
                                    </div>

                                    <div class="col-12  mobilhedre ">
                                        <div class="row justify-content-center scr">
                                            <div class="col-3   d-flex justify-content-start align-items-center pb-3 pt-1">


                                                <button class="btn d-block d-lg-none  text-center" onclick="navbarviwe2()">
                                                    <i class="fa-solid fa-bars fs-5 text-white"></i>

                                                </button>


                                            </div>
                                            <div class="col-6  d-flex justify-content-center">
                                                <span class="fs-4 p-2 fw-bold text-white">diatel <span class="fs-4  fw-bold textcolor4">Assistan</span></span>

                                            </div>
                                            <div class="col-3 d-block  d-flex justify-content-end align-items-center pb-3 pt-1">

                                                <button class="btn  text-center" onclick="window.location='userProfile.php'">
                                                    <i class="fa-solid fa-user fs-5 text-white" id="user_profile"></i>
                                                    <label for="user_profile" class="text-white" > <?php echo($_SESSION["u"]["userName"])  ?></label>

                                                </button>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="col-lg-11 col-12 chatbody1 d-flex justify-content-center  bgcolor3 ">

                                        <div class="col-10 " id="chat-messages">


                                        </div>


                                    </div>

                                    <div class="col-12 col-lg-11  p-3  d-flex justify-content-center pt-4 pb-4  serchinput">
                                        <div class="col-10 col-lg-8 d-grid">



                                            <input type="text" class="bg-dark p-3 textcolor2 fs-5 ps-4 border-end-0 " placeholder="Send a massage" style=" border-radius: 25px 00px 0px 25px; outline: none; border: none; border-style: solid; border-width: 1px; border-color: #979797c7;" id="user-input">
                                            <input type="text" value="<?php echo $_SESSION["u"]["user_id"] ?>" class="d-none" id="userID">

                                        </div>
                                        <div class="text-white bg-dark border-start-0 d-flex justify-content-center align-items-center sendicon" style=" border-radius: 0px 25px 25px 0px; outline: none; border: none; border-style: solid; border-width: 1px; border-color: #979797c7 ;">
                                            <i class="fa-solid fa-paper-plane fs-4 text-white-50" style="cursor: pointer;" id="send-button"></i>
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
        <script src="js/script.js"></script>

    </body>

    </html>

<?php

} else {
    header("Location: index.php");
}
?>