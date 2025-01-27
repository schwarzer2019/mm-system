<?php
include_once __DIR__ . "/addFagment/header.php";

?>
<title>Register - SB Admin</title>
</head>
<style>
    .boder-defualt {

        /* border: 2px light; */
    }

    .password {


        display: inline-block;
        position: relative;
        border: 1px;
    }

    .password input {

        /* padding: 10px 5px;
        outline: none;
        border: 0; */

    }

    .pass-icon {

        position: absolute;
        top: 20px;
        right: 10px;
        width: 30px;
        cursor: pointer;
    }
</style>
<script>
    $(document).ready(function() {
        // set initially button state hidden
        //$("#btn").hide();
        // use keyup event on email field
        $("#inputUserName").keyup(function() {
            validateUserName();
        });
        $("#inputFirstName").keyup(function() {
            validateFirstName();
        });
        $("#inputLastName").keyup(function() {
            validateLastName();
        });

        $("#inputEmail").keyup(function() {
            validateEmail();
        });
        // use keyup event on password
        $("#inputPassword").keyup(function() {
            // check
            validatePassword();
            validateConfirmPass();
        });
        $("#inputPasswordConfirm").keyup(function() {
            validateConfirmPass();
        });

        $("#btnRegister").on("click", function(e) {
            e.preventDefault();
            checkAllValidated();
        });
        const passwordInput = document.querySelector(".pass-field input");
        $("#see_pass").on("click", function(e) {


            //passwordInput.type = passwordInput.type === "password" ? "text" : "password";
            e.preventDefault();
            if ($('#inputPassword').attr('type') === 'password') {

                $('#inputPassword').attr('type', 'text');
                $("#p-see_pass").css("color", "red");
                // $('#inputPassword').focus();




            } else {
                $('#inputPassword').attr('type', 'password');
                $("#p-see_pass").css('color', 'gray');
                //$('#inputPassword').focus();

            }





        });

    });

    function validateUserName(e) {


        return false;
        var username = $("#inputUserName").val();
        // use reular expression
        if (username.indexOf(' ') > -1) {
            // will not be triggered because str has _..
            $("#inputUserName").css("border", "1px solid red");
            $("#userMsg").html("<p class='text-danger'>User Name Not Validated</p>");
            return false;
        }
        if (username.length > 7) {
            if (/^[a-zA-Z0-9- ]*$/.test(username) == false) {

                $("#inputUserName").css("border", "1px solid red");
                $("#userMsg").html("<p class='text-danger'>User Name Not Validated</p>");
                return false;
            } else {

                $("#inputUserName").css("border", "2px solid green");
                $("#userMsg").html("<p class='text-success'>User Name Validated</p>");
                return true;
            }


        } else {

            $("#inputUserName").css("border", "2px solid red");
            $("#userMsg").html("<p class='text-danger'>User Name Not Validated</p>");
            return false;

        }
    }

    //^[a-zA-Z0-9;,.!@#$%:{}[]?"^&*()/\']*|[^&;<>\`]*

    function validateFirstName() {
        var fname = $("#inputFirstName").val();
        if (fname.indexOf(' ') > -1) {
            // will not be triggered because str has _..
            $("#inputFirstName").css("border", "2px solid red");
            $("#fnameMsg").html("<p class='text-danger'> First Name Not Validated</p>");
            return false;
        }
        if (fname.trim().length > 0) {

            if (/^[a-zA-Z-ก-๐-\s]*$/.test(fname) == false) {

                $("#inputFirstName").css("border", "2px solid red");
                $("#fnameMsg").html("<p class='text-danger'> First Name Not Validated</p>");
                return false;
            } else {

                $("#inputFirstName").css("border", "2px solid green");
                $("#fnameMsg").html("<p class='text-success'> First Name Validated</p>");
                return true;
            }


        } else {
            $("#inputFirstName").css("border", "2px solid red");
            $("#fnameMsg").html("<p class='text-danger'> First Name Not Validated</p>");
            return false;

        }

    }

    function validateLastName() {
        var lname = $("#inputLastName").val();
        if (lname.indexOf(' ') > -1) {
            // will not be triggered because str has _..

            $("#inputLastName").css("border", "2px solid red");
            $("#lnameMsg").html("<p class='text-danger'> Last Name Not Validated</p>");
            return false;
        }
        if (lname.trim().length > 0) {



            if (/^[a-zA-Z-ก-๐-\s]*$/.test(lname) == false) {

                $("#inputLastName").css("border", "2px solid red");
                $("#lnameMsg").html("<p class='text-danger'> Last Name Not Validated</p>");
                return false;
            } else {

                $("#inputLastName").css("border", "2px solid green");
                $("#lnameMsg").html("<p class='text-success'> Last Name Validated</p>");
                return true;
            }


        } else {
            $("#inputLastName").css("border", "2px solid red");
            $("#lnameMsg").html("<p class='text-danger'> Last Name Not Validated</p>");
            return false;
        }

    }

    function validateEmail() {
        // get value of input email
        var email = $("#inputEmail").val();
        // use reular expression
        var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
        if (reg.test(email)) {
            $("#inputEmail").css("border", "2px solid green");
            // and set label 
            $("#emailMsg").html("<p class='text-success'>Email Validated</p>");
            return true;
        } else {
            $("#inputEmail").css("border", "2px solid red");
            $("#emailMsg").html("<p class='text-danger'>Email Not Validated</p>");
            return false;
        }

    }


    function validatePassword() {
        var pass = $("#inputPassword").val();
        if (pass.indexOf(' ') > -1) {
            // will not be triggered because str has _..
            $("#inputPassword").css("border", "2px solid red");
            $("#passMsg").html("<p class='text-danger'>Password not valid</p>")
            return false;
        }

        if ((pass.length >= 10)) {


            $("#pa-1").css("color", "green");

        } else {

            $("#pa-1").css("color", "gray");
        }
        $("#pa-2").css("color", "gray");
        $("#pa-3").css("color", "gray");
        $("#pa-4").css("color", "gray");
        $("#pa-5").css("color", "gray");

        for (var i = 0; i < pass.length; i++) {

            if (/^[a-z]*$/.test(pass[i]) == true) {

                $("#pa-2").css("color", "green");

            }
            if (/^[A-Z]*$/.test(pass[i]) == true) {

                $("#pa-3").css("color", "green");
            }

            if (/^[0-9]*$/.test(pass[i]) == true) {

                $("#pa-4").css("color", "green");
            }



        }



        // check it s length
        // if ((pass.length > 0)) {
        //     if (/^[a-zA-Z-\s]*$/.test(pass) == false) {
        //         $("#inputPassword").css("border", "2px solid red");
        //         //$("#passMsg").html("<p class='text-danger'>Password not valid</p>");
        //         //set passMsg 

        //         return false;

        //     } else {


        //         $("#inputPassword").css("border", "2px solid green");
        //         $("#pa-1").css("color", "green");
        //         // $("#passMsg").html("<p class='text-success'>Password validated</p>");

        //         return true;
        //     }


        //     // set input password border green


        // } else {
        //     $("#inputPassword").css("border", "2px solid red");
        //     // $("#passMsg").html("<p class='text-danger'>Password not valid</p>");

        //     //set passMsg 

        //     return false;
        // }

    }

    function validateConfirmPass() {
        //get input password value

        var pass1 = $("#inputPassword").val();
        var pass2 = $("#inputPasswordConfirm").val();
        // check it s length
        if (pass1 === pass2) {
            $("#inputPasswordConfirm").css("border", "2px solid green");
            //set passMsg 
            $("#cpassMsg").html("<p class='text-success'>Confirm Password Is Math</p>");
            return true;
        } else {
            // set input password border red
            $("#inputPasswordConfirm").css("border", "2px solid red");
            //set passMsg 
            $("#cpassMsg").html("<p class='text-danger'>Confirm Password Not Math</p>");
            return false;
        }

    }

    function checkAllValidated() {

        if ((validateUserName() == false) || (validateFirstName() == false) || (validateLastName() == false) || (validateEmail() == false) || (validatePassword() == false) || (validateConfirmPass() == false)) {




        } else {



        }

    }
</script>

<body class="bg-dark">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form id="form">
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="form-floating ">
                                                    <input class="form-control boder-defualt" id="" type="text" placeholder="username" />
                                                    <label for="username">User name</label>
                                                    <span id="userMsg"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control boder-defualt" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                    <label for="inputFirstName">First name</label>
                                                    <span id="fnameMsg"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control boder-defualt" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                    <label for="inputLastName">Last name</label>
                                                    <span id="lnameMsg"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input id="inputEmail" class="form-control boder-defualt" type="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                            <span id="emailMsg"></span>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="form-floating pass-field">
                                                    <input class="form-control boder-defualt" id="inputPassword" type="password" placeholder="Create a password" />
                                                    <label for="inputPassword">Password</label>
                                                    <p id="p-see_pass"><i id="see_pass" class="fa fa-eye pass-icon " style="color:redgray;"></i></p>
                                                    <div class="mt-2">
                                                        <!-- <span id="passMsg"></span> -->
                                                        <p class="mb-1" style="font-size: medium;">Passwords must contain:</p>
                                                        <p id="pa-1" class="mb-1" style="color:gray;font-size: medium;"><i class="fa fa-check-circle"></i>Passwords must be at least 10 characters.</p>
                                                        <p id="pa-2" class="mb-1" style="color:gray;font-size: medium;"><i class="fa fa-check-circle"></i>a minimum of 1 lower case letter [a-z]. </p>
                                                        <p id="pa-3" class="mb-1" style="color:gray;font-size: medium;"><i class="fa fa-check-circle"></i>a minimum of 1 upper case letter [A-Z]. </p>
                                                        <p id="pa-4" class="mb-1" style="color:gray;font-size: medium;"><i class="fa fa-check-circle"></i>a minimum of 1 numeric character [0-9].</p>
                                                        <p id="pa-5" style="color:gray;font-size: medium;"><i class="fa fa-check-circle"></i>a minimum of 1 special character: ~`!@#$%^&*()-_+={}[]|\;:"<>,./?</p>
                                                        <hr class="mb-1">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="row mb-3">

                                            <div class="col-md-12">
                                                <div class="form-floating">
                                                    <input class="form-control boder-defualt" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                    <span id="cpassMsg"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"> <button id="btnRegister" type="submit" class="btn btn-primary">Register</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="l_login.php">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <?php include_once __DIR__ . "/addFagment/l_msgFooter.php" ?>
                </div>
            </footer>
        </div>
    </div>
    <?php
    include __DIR__ . "/addFagment/l_footer.php";
    ?>
</body>

</html>