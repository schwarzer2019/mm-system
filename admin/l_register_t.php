<?php
include_once __DIR__ . "/addFagment/header.php";

?>
<title>Register - SB Admin</title>
<script src="../admin/js/l_register_scripts.js"></script>
</head>
<style>
    .boder-defualt {

        /* border: 2px light; */
    }

    .pass-icon {

        position: absolute;
        top: 16px;
        right: 10px;
        width: 50px;
        /* cursor: pointer; */
    }
</style>

<body class="bg-light">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header bg-primary">
                                    <h3 class="text-center font-weight-light my-4 text-light">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form id="form">
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="form-floating ">
                                                    <input class="form-control boder-defualt" id="inputUserName" type="text" placeholder="username" />
                                                    <label for="InputUserName">User name</label>
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
                                                    <p id="p-see_pass">
                                                        <!-- <i id="see_pass" class="fa fa-eye pass-icon " style="color:redgray;"></i> -->
                                                        <a id="see_pass" style="font-size: 8px;" class="btn btn-secondary pass-icon ">Hide</a>
                                                    </p>
                                                    <div class="mt-2">
                                                        <!-- <span id="passMsg"></span> -->
                                                        <p class="mb-1" style="font-size: medium;">Passwords must contain:</p>
                                                        <p id="pa-0" class="mb-1 line-text" style="color:gray;font-size: medium;"><i class="fa fa-check-circle"></i>Passwords must be not spec bar.</p>
                                                        <p id="pa-1" class="mb-1 line-text" style="color:gray;font-size: medium;"><i class="fa fa-check-circle"></i>Passwords must be at least 10 characters.</p>
                                                        <p id="pa-2" class="mb-1 line-text" style="color:gray;font-size: medium;"><i class="fa fa-check-circle"></i>a minimum of 1 lower case letter [a-z]. </p>
                                                        <p id="pa-3" class="mb-1 line-text" style="color:gray;font-size: medium;"><i class="fa fa-check-circle"></i>a minimum of 1 upper case letter [A-Z]. </p>
                                                        <p id="pa-4" class="mb-1 line-text" style="color:gray;font-size: medium;"><i class="fa fa-check-circle"></i>a minimum of 1 numeric character [0-9].</p>
                                                        <p id="pa-5" class="line-text" style="color:gray;font-size: medium;"><i class="fa fa-check-circle"></i>a minimum of 1 special character: <a style="border:1px solid;">~`!@#$%^&*()-_+={}[]|\;:"<>,./?</a></p>

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