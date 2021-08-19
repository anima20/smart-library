<?php
 

session_start();


if(isset($_POST['login_button'])) {
  $un = $_POST['log_email'];
  $ps = $_POST['log_password'];

  $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
  $query = new MongoDB\Driver\Query(['Email' => $un,'Password' => $ps ]);
  $res = $mng->executeQuery("project.users",$query);
  $stk = current($res->toArray());
  if(!empty($stk)){
      
        foreach($stk as $row){
            $usr =  $row->Email;
            
        } 
        $_SESSION['usr'] = $un;
        header('location: slide.php');
  }
  else{
      header('location: login.php');
  }

}

?>


<html>

<head>

<link href="font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/875301f134.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function() {
    $("#frm2").submit(function(event) {
        event.preventDefault();
        var fn= $("#fn").val();
        var ln = $("#ln").val();
        var eml = $("#eml").val();
        var eml2 = $("#eml2").val();
        var pwd = $("#pwd").val();
        var pwd2 = $("#pwd2").val();
        var subm = $("#subm").val();

        $(".form-message").load("log.php", {
            fn:fn,
            ln:ln,
            eml:eml,
            eml2:eml2,
            pwd:pwd,
            pwd2:pwd2,
            subm:subm
        });
    });
});

</script>
<style>


form {
	text-align: center;
}

.input-error {
    box-shadow: 0 0 5px red;
}

.form-success {
    color:green;
}
.form-error {
    color:red;
}
.form-message {
    font-family:arial;
    font-size:16px;
    font-weight:600;
    text-align:center;
}
.login_box {
	font-family: 'Bellota-LightItalic', sans-serif;
	position: relative;
	margin-right: auto;
	margin-left: auto;
	top: 7%;
	width: 35%;
	background-color: #ffffff;
	border: 1px solid #EDEDED;
	border-radius: 7px;
	padding: 5px;
	opacity: 0.98;
}

.login_header {
	font-family: 'Bellota-LightItalic', sans-serif;
	width: 100%;
	height: 90px;
	background-color: #3498db;
	color: #fff;
	text-align: center;
	border-top-left-radius: 7px;
	border-top-right-radius: 7px;
}

.login_header h1 {
	font-family: 'Bellota-BoldItalic', sans-serif;
	margin-top: 0;
	margin-bottom: 0;
	color: #2C6C96;
	text-shadow: #73B6E2 0.5px 0.5px 0px;
	font-size: 250%;
}

input[type="submit"] {
	background-color: #3498db;
	border: 1px solid #3498db;
	border-radius: 3px;
	margin: 5px 0 10px 0;
	padding: 5px 10px 5px 10px;
	color: #2C6C96;
	text-shadow: #73B6E2 0.5px 0.5px 0px;
	font-family: 'Bellota-BoldItalic', sans-serif;
	font-size: 100%;
}

input[type="text"], input[type="email"], input[type="password"] {
	border: 1px solid #e5e5e5;
	margin-top: 5px;
	width: 70%;
	height: 35px;
	margin-bottom: 10px;
	padding-left: 5px;
}

input[type="text"]:hover, input[type="email"]:hover, input[type="password"]:hover {
	border-color: #3498db;
}

#second{
    display:none;
}

body {
    background-image:url('desktop.jpg');
    background-size: 100%;
	width: 100%;
	height: 100%;
	min-width: 950px;
}
</style>


</head>
<body>
    <div class="login_box">

        <div class="login_header">
            <h1>Anima</h1>
            Login or sign up below!
        </div>
        <br>
            <div id="first">

                <form action="" method="POST">
                    <input type="email" name="log_email" placeholder="Email Address"  required>
                    <br>
                    <input type="password" name="log_password" placeholder="Password">
                    <br>
                    
                    <input type="submit" name="login_button" value="Login">
                    <br>
                    <a href="#" id="signup" class="signup">Need an account? Register here!</a><br>
                    <a href="frgt.php" id="signup" class="signup">forget password</a>

                </form>
            </div>    
    





                <div id="second">

                    <form id="frm2" action="" method="POST">
                        <input id="fn"  type="text" name="reg_fname" placeholder="First Name">
                        <br>
                       
                        <input id="ln"  type="text" name="reg_lname" placeholder="Last Name">
                        <br>

                        <input id="eml" type="email" name="reg_email" placeholder="Email">
                        <br>

                        <input id="eml2" type="email" name="reg_email2" placeholder="Confirm Email">
                        <br>
                       
                        <input id="pwd" type="password" name="reg_password" placeholder="Password">
                        <br>
                        <input id="pwd2" type="password" name="reg_password2" placeholder="Confirm Password">
                        <br>

                        

                        <input id="subm" type="submit" name="register_button" value="Register">
                        <br>
                        
                        <h1 style="color:black;" class="form-message"></h1> <br>
                        <a href="#" id="signin" class="signin">Already have an account? Sign in here!</a>
                    </form>
                </div>

    </div>            


<script>
$(document).ready(function() {

$("#signup").click(function() {
    $("#first").slideUp("slow", function(){
        $("#second").slideDown("slow");
    });
});

$("#signin").click(function() {
    $("#second").slideUp("slow", function(){
        $("#first").slideDown("slow");
    });
});


});


</script>
</body>


</html>