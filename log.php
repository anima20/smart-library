<?php

if(isset($_POST['subm'])) {
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $em = $_POST['eml'];
    $em2 = $_POST['eml2'];
    $pas = $_POST['pwd'];
    $pas2 = $_POST['pwd2'];
    

    
    $errorEmpty = false;
    $errorEmail = false;

    if(empty($fn) || empty($ln) || empty($em) || empty($em2) || empty($pas) || empty($pas2)) {
        echo "<span class='form-error'>Please fill all fields!!</span>";
        $errorEmpty = true;
    } 
    elseif(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
        echo "<span class='form-error'>Please enter valid email id!</span>";
        $errorEmail = true;
    }
    else {
        $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
 
        $bulk = new MongoDB\Driver\BulkWrite;
        $doc1 = ['FirstName' => $fn, 'LastName'=> $ln, 'Email' => $em, 'Password' => $pas2];
        $bulk->insert($doc1);
        $mng->executeBulkWrite('project.users', $bulk);

        echo "<span class='form-success'>Signup Successfull</span>";
    }
}
else {
    echo "there was an error";
}
?>

<script>

 $("#fn , #ln , #eml, #eml2 , #pwd,#pwd2 ").removeClass("input-error");
    var errorEmpty = "<?php echo $errorEmpty; ?>";;
    var errorEmail = "<?php echo $errorEmail; ?>";

    if(errorEmpty == true){
        $("#fn , #ln , #eml , #pwd").addClass("input-error");
    }

    if(errorEmail == true){
        $("#eml").addClass("input-error");
    }

    if(errorEmpty == false && errorEmail == false){
        $("#fn , #ln , #eml , #pwd").val("");
    }

</script>

