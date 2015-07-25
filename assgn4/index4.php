<html>
    <head>
        <title>
            home page
        </title>
        <link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    </head>
    <body>
        <div class="height-20 clearfix"></div>
        <div class="height-20 clearfix"></div>
        <div class="height-20 clearfix"></div>
        <div class="container">
            <div id="return_d"></div>
            <form class="html-form" method="post" name="signup_form" id="signup_form">
                <div >
                    <span class="heading">
                        Account

                    </span>
                    <span class="small float-right">
                        <span class="blue">*</span>
                        Required
                    </span>
                </div>
                <div class="height-20 clearfix"></div>

                <div class="margin-top-10 clearfix">

                    <label class="label-t light-black-font" for="email">
                        <span class="blue">*</span>
                        EMAIL
                    </label>
                </div>
                <div>
                    <input type="text" name="email" id="email" class="input-n input-t" placeholder="name@example.com"/>
                </div>

                <div class="clearfix">
                </div>

                <div class="height-20 clearfix"></div>

                <div class="margin-top-10 clearfix">

                    <label class="label-t light-black-font"for="pass">
                        <span class="blue">*</span>
                        PASSWORD
                    </label>
                </div>
                <div>
                    <input type="text" name="pass" id="pass" class="input-n input-t" placeholder="At least 5 characters"/>
                </div>

                <div class="clearfix">
                </div>


                <div class="height-20 clearfix"></div>
                <div class="height-20 clearfix"></div>
                <div class="height-20 clearfix"></div>

                <div >
                    <span class="heading">
                        PROFILE

                    </span>

                </div>
                <div class="height-20 clearfix"></div>

                <div style="width: 49%;float: left;">
                    <label class="label-t light-black-font" for="fname">
                        <span class="blue">*</span>
                        Name
                    </label>
                    <br>
                    <input type="text" name="fname" id="fname" class="input-n input-small-t" style="width: 100%" placeholder="First Name"/>
                </div>
                <div style="width: 49%;float: left;">
                    <label class="label-t light-black-font" for="lname">
                        <span class="blue">*</span>
                        Last Name
                    </label>
                    <br>
                    <input type="text" name="lname" id="lname" class="input-n input-small-t" style="width: 100%" placeholder="Last Name"/>
                </div>



                <div class="clearfix">
                </div>

                <div class="height-20 clearfix"></div>

                <div class="margin-top-10 clearfix">

                    <label class="label-t light-black-font" for="mnumber">
                        <span class="blue">*</span>
                        MOBILE NUMBER
                    </label>
                </div>
                <div>
                    <select name="mobileNumbers" class="input-n">
                        <option value="USA">+1</option>
                        <option value="INDIA">+91</option>
                        <option value="UAE">+23</option>
                        <option value="UK">+11</option>
                    </select>
                    <input type="tel" name="mnumber" id="mnumber" class="input-n input-small-t" placeholder="(201) 555-5555" style="width: 85%"> 

                </div>
                <div class="height-20 clearfix"></div>
                <div class="margin-top-10 clearfix">

                    <label class="label-t light-black-font">
                        <span class="blue">*</span>
                        LANGUAGE
                    </label>
                </div>
                <div>
                    <select name="lang" class="input-n" style="width: 100%;background-color: white">
                        <option value="USA">English (US)</option>
                        <option value="INDIA">Hindi</option>
                        <option value="UAE">Arabic</option>
                        <option value="UK">English (UK)</option>
                    </select>


                </div>

                <div class="clearfix">
                </div>
                <div class="height-20 clearfix"></div>
                <div class="height-20 clearfix"></div>
                <div class="height-20 clearfix"></div>

                <div >
                    <span class="heading">
                        Payment

                    </span>
                </div>
                <div class="height-20 clearfix"></div>

                <div class="margin-top-10 clearfix">


                </div>
                <div style="width: 65%;float: left;">
                    <label class="label-t light-black-font" for="cnumber">
                        <span class="blue">*</span>
                        CREDIT CARD NUMBER
                    </label>
                    <br>
                    <input type="text" name="cnumber" id="cnumber" class="input-n" style="width: 100%" placeholder="1234 5678 9012 3456" />
                </div>
                <div style="width: 32%;float: left;margin-left: 5px;">
                    <label class="label-t light-black-font" for="cvv">
                        <span class="blue">*</span>
                        CVV
                    </label>
                    <br>
                    <input type="text" name="cvv" id="cvv" class="input-n" style="width: 100%" placeholder="123" />
                </div>

                <div class="clearfix">
                </div>

                <div class="height-20 clearfix"></div>

                <div class="margin-top-10 clearfix">

                    <label class="label-t light-black-font">
                        <span class="blue">*</span>
                        EXPIRATION DATE
                    </label>
                </div>
                <div>
                    <select name="months" class="input-n input-mini-t" style="background-color: white">
                        <option value="">month</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">6</option>
                        <option value="">7</option>
                        <option value="">8</option>
                        <option value="">9</option>
                        <option value="">10</option>
                        <option value="">11</option>
                        <option value="">12</option>
                    </select>

                    <select name="year" class="input-n input-mini-t" style="background-color: white">
                        <option value="">year</option>
                        <option value="">2001</option>
                        <option value="">2002</option>
                        <option value="">2003</option>
                        <option value="">2004</option>
                        <option value="">2005</option>
                        <option value="">2006</option>
                        <option value="">2007</option>
                        <option value="">2008</option>
                        <option value="">2009</option>
                        <option value="">2010</option>
                        <option value="">2011</option>
                        <option value="">2012</option>
                    </select>
                    <input type="text" name="pin" id="pin" class="input-n input-mini-t" placeholder="453111"/>
                </div>

                <div class="clearfix">
                </div>

                <div class="height-20 clearfix"></div>
                <button type="submit" class="input-n" style="width: 100%;background-color: #c1ecf4;border:none">Create Account</button>

            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/additional-methods.js"></script>


        <script>
            jQuery.validator.addMethod("password_str", function (value, element) {
                return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()<>?/~`])[0-9a-zA-Z!@#$%^&*()<>?/~`]{6,50}$/.test(value);
            }, "Password should contain atleast one lower case, one upper case and one special character, range between 6 to 50 characters");

            $.validator.setDefaults({
                submitHandler: function (e) {
                    e.preventDefault();
                    $.ajax({
                        url: "form_post.php",
                        data: $("#signup_form").serialize(),
                        method: "post",
                        dataType: "json",
                        success: function (data) {
                            $("#return_d").html(data.fname);
                            alert("login");
                        }
                    });
                }
            });
            
            $().ready(function () {
                $("#signup_form").validate({
                    /*errorPlacement: function (error, element) {
                     // Append error within linked label
                     $(element)
                     .closest("form")
                     .find("label[for='" + element.attr("id") + "']")
                     .append(error);
                     },
                     errorElement: "span",*/
                    rules: {
                        email: {
                            required: true,
                            email: true
                        },
                        pass: {
                            required: true,
                            password_str: true
                        },
                        fname: {
                            required: true,
                            minlength: 3,
                            maxlength: 15
                        },
                        lname: {
                            required: true,
                            minlength: 3,
                            maxlength: 15
                        },
                        mnumber: {
                            required: true,
                            number: true,
                            minlength: 10,
                            maxlength: 10
                        },
                        cnumber: {
                            required: true,
                            number: true,
                            minlength: 16,
                            maxlength: 16
                        },
                        cvv: {
                            required: true,
                            number: true,
                            minlength: 3,
                            maxlength: 3
                        }
                    },
                    messages: {
                        email: {
                            required: "email field cannot be empty",
                            email: "please enter valid email"
                        },
                        pass: {
                            required: "password field cannot be empty",
                            minlength: "please enter atleast 6 characters"
                        },
                        fname: {
                            required: "name field cannot be empty",
                            minlength: "name should have minimum 3 characters",
                            maxlength: "name should have minimum 15 characters"
                        },
                        lname: {
                            required: "lastname field cannot be empty",
                            minlength: "lastname should have minimum 3 characters",
                            maxlength: "lastname should have minimum 15 characters"
                        },
                        mnumber: {
                            required: "mnumber field cannot be empty",
                            number: "please enter only digits",
                            minlength: "please enter exactly 10 characters",
                            maxlength: "please enter exactly 10 characters"
                        },
                        cnumber: {
                            required: "number field cannot be empty",
                            number: "please enter only digits",
                            minlength: "please enter exactly 16 characters",
                            maxlength: "please enter exactly 16 characters"
                        },
                        cvv: {
                            required: "number field cannot be empty",
                            number: "please enter only digits",
                            minlength: "please enter exactly 3 characters",
                            maxlength: "please enter exactly 3 characters"
                        }

                    }

                });
            });
<?php
$arr = array(
    "rules" => array(
        "email" => "required",
        "pass" => "required",
        "fname" => "required",
        "lname" => array(
            "required" => true,
            "minlength" => 3
        ),
    )
);
?>
        </script>
    </body>
</html>
