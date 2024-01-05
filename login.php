<?php include 'header.php' ;
if(isset($_SESSION['logged_in'])){
    header("location: index.php");
    ob_end_flush();
}

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $check = $conn->prepare("SELECT * FROM users WHERE u_email = ?");
    $check->execute([$email]);

    foreach($check as $value){
        if($value['u_email'] == $email && password_verify($pass, $value['u_pass'])){
            
            $_SESSION['logged_in'] = true;
            $_SESSION['u_id'] = $value['u_id'];

            header("location: index.php");
        }else{
            $msg = "Email or Password incorrect!";
            header("Location: login.php?msg=$msg");
        }
    }
}
?>


<?php
include 'f-page.php'
?>




</body>

</html>