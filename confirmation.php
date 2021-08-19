<?php

session_start();
$eml = $_SESSION['femail'];
if(isset($_POST['validate'])){
        echo $eml;
        
        $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $query = new MongoDB\Driver\Query(['Email' => $eml]);
        $res = $mng->executeQuery("project.users",$query);
        $stk = current($res->toArray());
        if(!empty($stk)){
            $ttl = $stk->token;
        }
       
        $tp = $_POST['otp'];

        if($ttl == $tp){
        
        $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $query = new MongoDB\Driver\Query(['Email' => $eml]);
        $res = $mng->executeQuery("project.users",$query);
        $stk = current($res->toArray());
        if(!empty($stk)){
            $ttl2 = $stk->NewPassword;
        }
        
        $bulk = new MongoDB\Driver\BulkWrite;
            $bulk->update(
                ['Email'=> $eml],
                ['$set' => ['Password' => $ttl2]],
                ['multi' => false, 'upsert' => false]
            );
        
            $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
            $result = $manager->executeBulkWrite('project.users', $bulk);
            
            if($result){
                        echo "<script>
                         alert('Password changed successfully'); 
                         window.location.href='login.php';
                         </script>";
                        
                    }
                    

    
    }
        //     $qr2 = "update users set password = '$ttl2' where email = '$eml' ";
        //     $query2 = mysqli_query($con,$qr2);

        //     if($query2){
        //         echo "<script>
        //          alert('Password changed successfully'); 
        //          window.location.href='login.php';
        //          </script>";
                
        //     }
           
        // } else{
        //     echo '<script> alert("Otp not Matched"); </script>';
        // }
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
<body>

    <div class="login-page">
		<div class="container"> 
			<h3 style="font-size: 2em;" class="w3ls-title w3ls-title1">CONFIRMATION</h3> 
            
			<div class="login-body">
                <h2 style="font-size: 2em;">Validate OTP</h4>
                <p>A One Time Passcode has been sent to <b><?php echo $eml; ?></b></p><br>
                <p>Please enter the OTP below to verify your Email Address. If you cannot see the email from DMS in your inbox, make sure to check your SPAM folder.</p><br>
				<form action=""  method="post">
					<input type="text" class="user" name="otp" placeholder="8 digits number" required="">
					<input type="submit" name="validate" value="Validate OTP">
				</form><br>
                
			</div>  
			
		</div>
	</div>
  
</body>


</html>
