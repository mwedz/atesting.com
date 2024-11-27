





<!DOCTYPE HTML>
<html>
<head>
<title>ARU Investments Admin | Sign In</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script> new WOW().init(); </script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
<!-- Meters graphs -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        justify-content: flex-start; /* Align items from the top */
        align-items: center; /* Center horizontally */
        padding-top: 50px; /* Space at the top */
        background-color: #f4f4f4; /* Optional: background color */
    }
    .sign-in-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%; /* Full width */
    }
    .sign-in-form {
        width: 300px; /* Set a width for the sign-in form */
        text-align: center; /* Center the text inside the form */
        background-color: white; /* Optional: form background color */
        padding: 40px; /* Padding around the form */
        border-radius: 8px; /* Rounded corners for the form */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Optional: shadow for depth */
    }
    .sign-in-form-top {
        background-color: #007bff; /* Background color */
        color: white; /* Text color */
        padding: 15px; /* Increased padding for more space */
        border-radius: 5px; /* Rounded corners */
        margin-bottom: 20px; /* Space between header and first textbox */
    }
    .log-input {
        margin-bottom: 20px; /* Space between textboxes */
        display: flex;
        align-items: center; /* Center checkbox vertically */
    }
    .log-input-left {
        flex: 1; /* Allow input to take remaining space */
    }
    input[type="text"],
    input[type="password"] {
        width: 100%; /* Full-width input */
        padding: 10px; /* Increased padding for larger input */
        border: 1px solid #ccc; /* Border styling */
        border-radius: 5px; /* Rounded corners */
        font-size: 16px; /* Increased font size */
    }
    .checkbox2 {
        margin-left: 10px; /* Space between input and checkbox */
        align-self: flex-start; /* Align checkbox at the start */
    }
    input[type="submit"] {
        background-color: #28a745; /* Button color */
        color: white; /* Button text color */
        border: none;
        padding: 10px 20px;
        border-radius: 5px; /* Rounded corners for the button */
        cursor: pointer;
        width: 100%; /* Full-width button */
    }
    input[type="submit"]:hover {
        background-color: #218838; /* Darker shade on hover */
    }
    footer {
        background-color: #f8f9fa; /* Footer color */
        text-align: center;
        padding: 20px 0;
        width: 100%;
        position: absolute; /* Stay at the bottom */
        bottom: 0;
    }
</style>

</head> 
   
<body class="sign-in-up">
    <section>
        <div id="page-wrapper" class="sign-in-wrapper">
            <div class="graphs">
                <div class="sign-in-form">
                    <div class="sign-in-form-top">
                        <p><span>Sign In to Admin</span> </a></p>
                    </div>
                    <div class="signin">
                        <form action="process_login.php" method="post">
                            <div class="log-input">
                                <div class="log-input-left">
                                    <input type="text" class="user" name="username" value="Yourname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
                                </div>
                                <span class="checkbox2">
                                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
                                </span>
                            </div>
                            <div class="log-input">
                                <div class="log-input-left">
                                    <input type="password" class="lock" value="password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
                                </div>
                                <span class="checkbox2">
                                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
                                </span>
                            </div>
                            <input type="submit" value="Login to admin Area">
                        </form>	 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "footer.php"; ?> <!-- Include footer outside of section -->
</body>
</html>