
$(document).ready(function () {
    // set initially button state hidden
    //$("#btn").hide();
    // use keyup event on email field


    $("#see_pass").on("click", function (e) {

        //passwordInput.type = passwordInput.type === "password" ? "text" : "password";
        e.preventDefault();
        seePass();
    });
    $("#inputUserName").keyup(function (e) {
        e.preventDefault();
        validateUserName();
    });
    $("#inputFirstName").keyup(function (e) {
        e.preventDefault();
        validateFirstName();
    });
    $("#inputLastName").keyup(function (e) {
        e.preventDefault();
        validateLastName();
    });

    $("#inputEmail").keyup(function (e) {
        e.preventDefault();
        validateEmail();
    });
    // use keyup event on password
    $("#inputPassword").keyup(function (e) {
        // check
        e.preventDefault();
        validatePassword();
        validateConfirmPass();
    });
    $("#inputPasswordConfirm").keyup(function (e) {
        e.preventDefault();
        validateConfirmPass();
    });

    $("#btnRegister").on("click", function (e) {

        e.preventDefault();
        checkAllValidated();
    });
    //const passwordInput = document.querySelector(".pass-field input");


});

function seePass() {

    if ($('#inputPassword').attr('type') === 'password') {

        $('#inputPassword').attr('type', 'text');
        // $("#p-see_pass").css("color", "red");
        $("#see_pass").text('Show');
        $('#inputPassword').focus();


    } else {
        $('#inputPassword').attr('type', 'password');
        // $("#p-see_pass").css('color', 'gray');
        $("#see_pass").text('Hide');
        $('#inputPassword').focus();

    }

}

function validateUserName() {

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
            $("#userMsg").html("<p class='text-danger'>User Name only have Aa-Zz ,0-9 and Lenght>7</p>");
            return false;
        } else {

            $("#inputUserName").css("border", "2px solid green");
            $("#userMsg").html("<p class='text-success'>User Name Validated</p>");
            return true;
        }


    } else {

        $("#inputUserName").css("border", "2px solid red");
        $("#userMsg").html("<p class='text-danger'>User Name only have Aa-Zz ,0-9 and Lenght>7</p>");

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
    var checker = {};

    checker[0] = false;
    checker[1] = false;
    checker[2] = false;
    checker[3] = false;
    checker[4] = false;
    checker[5] = false;

    $(".line-text").css("color", "gray");
    var pass = $("#inputPassword").val();

    if (((pass.indexOf(' ') > -1) || (!pass.length > 0)) === false) {

        $("#pa-0").css("color", "green");
        checker[0] = true;
    }
    if ((pass.length >= 10)) {
        $("#pa-1").css("color", "green");
        checker[1] = true;
    }

    for (var i = 0; i < pass.length; i++) {

        if (/^[a-z]*$/.test(pass[i]) == true) {

            $("#pa-2").css("color", "green");
            checker[2] = true;

        }
        if (/^[A-Z]*$/.test(pass[i]) == true) {

            $("#pa-3").css("color", "green");
            checker[3] = true;
        }

        if (/^[0-9]*$/.test(pass[i]) == true) {

            $("#pa-4").css("color", "green");
            checker[4] = true;
        }
        if (/^[a-zA-Z0-9-ก-๐- ]*$/.test(pass[i]) == false) {

            $("#pa-5").css("color", "green");
            checker[5] = true;
        }

    }
    var boolean = true;
    $.each(checker, function (i, val) {
        if (val == false) {
            boolean = false;
            return boolean;

        }
    });

    if (boolean) {

        $("#inputPassword").css("border", "2px solid green");

    } else {

        $("#inputPassword").css("border", "2px solid red");

    }

    return boolean;


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

        alert("something have not valid");


    } else {

        alert("All validate pass");

    }

}