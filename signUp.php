<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class=" w-screen h-screen flex flex-col items-center ">
        <div class=" px-48">
            <img class=" h-20 w-20" src="https://seeklogo.com/images/O/open-ai-logo-8B9BFEDC26-seeklogo.com.png" />
        </div>
        <div class=" h-screen  pt-12 flex flex-col">
            <div class=" text-center">
                <label class=" text-4xl font-semibold">Welcome Back</label>
                <p class=" my-2">Note that email verification may be required for signup.<br /> Your email will only be used to verify your identity for security purposes. </p>

            </div>
            <form id="myForm" action="SignUpProcess.php" method="post">
                <div id="error">

                </div>
                <label class=" mt-2 my-1 text-xl">User Name</label>
                <input name="username" class=" form-control my-1 h-14 text-xl" />
                <label class=" mt-2 my-1 text-xl">Email</label>
                <input name="email" class=" form-control my-1 h-14 text-xl" />
                <label class=" mt-2 my-1 text-xl">Password</label>
                <input type="password" name="password" class=" form-control my-1 h-14 text-xl" />
                <!-- <div id="otpDIV" class=" ">
                    <label class=" form-label">Enter OTP</label>
                    <input required name="otp" class=" form-control my-1 h-14 text-xl" />
                    <button id="userRegBtn"  class=" px-4 rounded-md     text-xl text-white  hover:bg-teal-700 bg-orange-400 h-16 ">Verify OTP</button>
                </div> -->

                <div class=" grid grid-flow-row my-2">
                    <button id="userSignUpBtn" type="submit" class="  text-xl text-white rounded-sm hover:bg-teal-700 bg-teal-600 h-16 ">Continue</button>

                </div>
            </form>
            <div class=" flex flex-row">
                <label>Do you have an account?&nbsp;</label>
                <a href="login.php" class=" text-teal-500">Sign In</a>
            </div>
            <div class="flex items-center mt-2">
                <hr class="flex-1 border-t border-slate-600" />
                <!-- <label class="mx-4">OR</label> -->
                <hr class="flex-1 border-t border-slate-600" />
            </div>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <script src="signUp.js"></script> -->
</body>

</html>