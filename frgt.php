<?php

 session_start();
// $con = mysqli_connect('localhost','root','','tblproject');

if(isset($_POST['reset'])){
        $eml = $_POST['email'];
        $psw = $_POST['newpassword'];
        $_SESSION['femail']=$eml;
        
        $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $query = new MongoDB\Driver\Query(['Email' => $eml]);
        $res = $mng->executeQuery("project.users",$query);
        $stk = current($res->toArray());
        if(!empty($stk)){
            $token = '012340120123456789345678010123456789234567890123456789956789';
            $token = str_shuffle($token);
            $token = substr($token, 0, 8);
            $bulk = new MongoDB\Driver\BulkWrite;
            $bulk->update(
                ['Email'=> $eml],
                ['$set' => ['NewPassword' => $psw,'token'=>$token]],
                ['multi' => false, 'upsert' => false]
            );
        
            $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
            $result = $manager->executeBulkWrite('project.users', $bulk);
        

    

    
            
            $to = $eml;
            $subject = "Forget Password";
       
            $message = "<h1>Your OTP is :</h1>";
            $message .= "<h3>".$token."</h3>";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
                
            $header = "From:a923492.ak@gmail.com \r\n";
           
                    
            $retval = mail ($to,$subject,$message,$header);
       
            if( $retval == true ) {
                echo "Message sent successfully...";
                
                header('location:confirmation.php');
            } 
            else {
                echo "Mail not sent";
            }  
        }


}


?>


<html>

<head>
<style>

.login-page{
	text-align:center;
}  
.login-body {
    padding: 3em;
    background-color: #fff;
    -webkit-box-shadow:0px 0px 4px 1px rgb(189, 189, 189);
    -moz-box-shadow:0px 0px 4px 1px rgb(189, 189, 189);
    -o-box-shadow:0px 0px 4px 1px rgb(189, 189, 189);
    -ms-box-shadow:0px 0px 4px 1px rgb(189, 189, 189);
    box-shadow:0px 0px 4px 1px rgb(189, 189, 189);
    width: 40%;
    margin: 0 auto;
}

.login-page input[type="text"], .login-page input[type="password"] {
    font-size: 1em;
    padding: 0.9em 1em;
    width: 100%;
    color: #999;
    outline: none;
    border: 1px solid #E2DCDC;
    background: #FFFFFF;
    margin: 0 0 1em 0;
	-webkit-transition:.5s all;
	-moz-transition:.5s all;
	-o-transition:.5s all;
	-ms-transition:.5s all;
	transition:.5s all;
	-webkit-appearance:none;
}
.login-page input[type="text"]:focus, .login-page input[type="password"]:focus{
	border-color:#0280e1;	
}
.login-page input[type="submit"] {
    border: none;
    outline: none;
    cursor: pointer;
    color: #fff;
    background: #0280e1;
    width: 100%;
    padding: .8em 1em;
    font-size: 1em;
    margin: 0.5em 0 0;
    -webkit-transition:.5s all;
	-moz-transition:.5s all;
	-o-transition:.5s all;
	-ms-transition:.5s all;
	transition:.5s all;
    text-transform: uppercase;
	-webkit-appearance:none;
}
.login-page input[type="submit"]:hover {
    background: #137288;
    letter-spacing: 5px;
}

</style>
</head>

<script>

    function valid()
    {
        if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
        {
        alert("New Password and Confirm Password Field do not match  !!");
        document.chngpwd.confirmpassword.focus();
        return false;
        }
        return true;
    }

</script>
<body>
 
    <div class="login-page">
        <div class="container">
            <h3 style="font-size: 2em;" class="w3ls-title w3ls-title1">FORGOT PASSWORD ?</h3>

            <div class="login-body">
                <i class="fa fa-lock fa-5x" aria-hidden="true"></i>
                <h2 style="font-size: 2em;">Reset My Password</h2>
                <br>
                <form  name="chngpwd" method="post" onSubmit="return valid();">
                <input type="text" class="user" name="email" placeholder="Enter your Registered Email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter valid Email Id">
                <input type="password" name="newpassword" class="lock" placeholder="New Password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                <input type="password" name="confirmpassword" class="lock" placeholder="Confirm Password" required="" >
                    <input type="submit" name="reset" value="Reset My Password">
                </form><br>
            </div>

        </div>
    </div>
</body>

</html>



